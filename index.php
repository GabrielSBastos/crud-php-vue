<?php

include 'connection.php';
include 'users.php';

$body = file_get_contents('php://input');

$body = json_decode($body, true);

$response = new Response;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $email = $body['email'];
        $password = PASSWORD_HASH($body['password'], PASSWORD_DEFAULT);
        $statement = $conn->prepare("INSERT INTO users(email, password)
            VALUES ('$email', '$password')");
        $statement->execute([]);
        $response->sucess("Registrado com sucesso", [], 201);
    } catch (Throwable $e) {
        echo $response->error($e->getMessage(), [], 401);
    };
};
