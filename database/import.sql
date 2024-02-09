DROP DATABASE IF EXISTS `Spacex`;

CREATE DATABASE `Spacex`;

USE `Spacex`;

CREATE TABLE `Admins` (
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Adminuser VARCHAR(150) NOT NULL,
    Adminpass VARCHAR(150) NOT NULL
);

CREATE TABLE `Users` (
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Fname VARCHAR(250) NOT NULL,
    Lname VARCHAR(250) NOT NULL,
    Email VARCHAR(250) NOT NULL,
    Password VARCHAR(150) NOT NULL
);

CREATE TABLE `Booking` (
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Fname VARCHAR(250) NOT NULL,
    Lname VARCHAR(250) NOT NULL,
    Email VARCHAR(250) NOT NULL,
    Startport ENUM('Amsterdam', 'Tokyo', 'New York', 'Cape Town', 'Rio de Janeiro') NOT NULL,
    Endport ENUM('Amsterdam', 'Tokyo', 'New York', 'Cape Town', 'Rio de Janeiro') NOT NULL,
    User_id INT NOT NULL,
    FOREIGN KEY (`User_id`) REFERENCES `Users` (`Id`)
);

CREATE TABLE `Flights` (
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Departplace VARCHAR(250) NOT NULL,
    Arrivalplace VARCHAR(250) NOT NULL,
    Departtime TIME NOT NULL,
    Arrivaltime TIME NOT NULL
);