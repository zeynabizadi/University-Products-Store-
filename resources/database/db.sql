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

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users
(
    `row`           INT(11) AUTO_INCREMENT,
    `book-id`            TEXT,
    `image-link`          TEXT,
    `book-pwd` TEXT,
    `book-name` TEXT,
    `price` TEXT,
    `category` TEXT,
    PRIMARY KEY (`row`)
);