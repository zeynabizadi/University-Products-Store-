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