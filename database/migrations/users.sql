USE projetinho;

CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    email varchar(50) NOT NULL,
    password char(60) NOT NULL,
    PRIMARY KEY (id)

);

ALTER TABLE users ADD UNIQUE (email);
