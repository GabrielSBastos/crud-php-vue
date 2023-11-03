<?php
class Response
{

    public function __construct()
    {
        header('Content-Type: application/json; charset=utf-8');
    }

    function sucess(string $message, array $data = [], int $code = 200)
    {
        http_response_code($code);
        echo json_encode([
            'message' => $message,
            'status' => true,
            'data' => $data,
        ]);
    }

    function error(string $message, array $data = [], int $code = 400)
    {
        http_response_code($code);
        echo json_encode([
            'message' => $message,
            'status' => false,
            'data' => $data,
        ]);
    }
};
