CREATE DATABASE `university`;

USE `university`;

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users
(
    `row`           INT(11) AUTO_INCREMENT,
    `id`            TEXT,
    `name`          TEXT,
    `lastname` TEXT,
    `phone` TEXT,
    `email` TEXT,
    `password` TEXT,
    PRIMARY KEY (`row`)
);

DROP TABLE IF EXISTS books;
CREATE TABLE IF NOT EXISTS books
(
    `row`           INT(11) AUTO_INCREMENT,
    `book-id`            TEXT,
    `book-name` TEXT,
    `price` TEXT,
    `category` TEXT,
    `owner` TEXT,
    PRIMARY KEY (`row`)
);