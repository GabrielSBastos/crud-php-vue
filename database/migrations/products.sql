USE projetinho;

CREATE TABLE products (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(50) NOT NULL,
    url text NOT NULL,
    price float NOT NULL,
    id_user int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_user) REFERENCES users(id)
);
