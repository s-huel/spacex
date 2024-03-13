DROP DATABASE IF EXISTS `Spacex`;

CREATE DATABASE `Spacex`;

USE `Spacex`;

CREATE TABLE `admins` (
    `adminID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `firstName` VARCHAR(50) NOT NULL,
    `lastName` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL
);

CREATE TABLE `airports` (
    `airportID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `airportName` VARCHAR(100) NOT NULL
);

CREATE TABLE `flights` (
    `flightID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `flightName` VARCHAR(50) NOT NULL,
    `flightNumber` INT NOT NULL,
    `departure` VARCHAR(100) NOT NULL,
    `arrival` VARCHAR(100) NOT NULL,
    `date` DATE NOT NULL,
    `time` TIME NOT NULL,
    `departureAirport` ENUM('Amsterdam', 'New York', 'Rio de Janeiro', 'Tokyo', 'Cape Town') NOT NULL,
    `arrivalAirport` ENUM('Amsterdam', 'New York', 'Rio de Janeiro', 'Tokyo', 'Cape Town') NOT NULL,
    `departureAirportID` INT NOT NULL,
    `arrivalAirportID` INT NOT NULL,
    FOREIGN KEY (`departureAirportID`) REFERENCES `airports` (`airportID`),
    FOREIGN KEY (`arrivalAirportID`) REFERENCES `airports` (`airportID`)
);

CREATE TABLE `ships` (
    `shipID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `shipName` VARCHAR(50) NOT NULL,
    `shipNumber` INT NOT NULL,
    `shipSeats` INT NOT NULL,
    `flightID` INT NOT NULL,
    FOREIGN KEY (`flightID`) REFERENCES `flights` (`flightID`)
);

CREATE TABLE `bookings` (
    `bookID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `firstName` VARCHAR(50) NOT NULL,
    `lastName` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `flightID` INT NOT NULL,
    `departureAirport` ENUM('Amsterdam', 'New York', 'Rio de Janeiro', 'Tokyo', 'Cape Town') NOT NULL,
    `arrivalAirport` ENUM('Amsterdam', 'New York', 'Rio de Janeiro', 'Tokyo', 'Cape Town') NOT NULL,
    `departureAirportID` INT NOT NULL,
    `arrivalAirportID` INT NOT NULL,
    FOREIGN KEY (`flightID`) REFERENCES `flights` (`flightID`),
    FOREIGN KEY (`departureAirportID`) REFERENCES `airports` (`airportID`),
    FOREIGN KEY (`arrivalAirportID`) REFERENCES `airports` (`airportID`)
);

CREATE TABLE `users` (
    `userID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `firstName` VARCHAR(50) NOT NULL,
    `lastName` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `adminID` INT NULL,
    `bookingID` INT NULL,
    FOREIGN KEY (`adminID`) REFERENCES `admins` (`adminID`),
    FOREIGN KEY (`bookingID`) REFERENCES `bookings` (`bookID`)
);