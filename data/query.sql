CREATE DATABASE casp;
USE casp;

CREATE TABLE pictures(
    id int auto_increment PRIMARY KEY,
    name varchar(255) 
);

CREATE TABLE admin(
    pass varchar(255)
);

INSERT INTO admin VALUES('$2y$10$Rgq3nMQ6AhzVqeZaih6ESO7nQFC7L7faJJzcXyirMjRnbtiLbI0H2');