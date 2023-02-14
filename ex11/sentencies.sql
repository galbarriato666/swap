create database mydb;
use mydb;


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(10) NOT NULL,
    cognom VARCHAR(10) NOT NULL,
    password VARCHAR(20) NOT NULL,
    direccio VARCHAR(50) NOT NULL,
    edad INT NOT NULL,
    tarjeta_credit BIGINT(20) NOT NULL,
    UNIQUE KEY (nom, password)
);

INSERT INTO users (nom, cognom, password, direccio, edad, tarjeta_credit)
VALUES
    ('admin', 'garcia', 'rafa', 'Cerdanyola', 70, 123456789012345678),
    ('emanzan0', 'manu', '12345', 'Albuquerque', 30, 123456789012345679),
    ('intruso', 'garcia', '12345', 'Nou Barris', 11, 123456789012345680);

