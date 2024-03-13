USE `Spacex`;

INSERT INTO `admins` (`firstName`, `lastName`, `email`) 
VALUES
    ('Felix', 'Huel', 'felix.huel@gmail.com');

INSERT INTO `airports` (`airportName`)
VALUES
    ('Amsterdam'),
    ('New York'),
    ('Rio de Janeiro'),
    ('Tokyo'),
    ('Cape Town');

INSERT INTO `flights` (`flightName`, `flightNumber`, `departure`, `arrival`, `date`, `time`, `departureAirportID`, `arrivalAirportID`)
VALUES
    ('Amsterdam - New York', 1, 'Amsterdam', 'New York', '2024-09-03', '08:00:00', 1, 1),
    ('Amsterdam - Rio de Janeiro', 2, 'Amsterdam', 'Rio de Janeiro', '2024-09-03', '08:00:00', 1, 2),
    ('Amsterdam - Tokyo', 3, 'Amsterdam', 'Tokyo', '2024-09-03', '08:00:00', 1, 3),
    ('Amsterdam - Cape Town', 4, 'Amsterdam', 'Cape Town', '2024-09-03', '08:00:00', 1, 4);


INSERT INTO `ships` (`shipName`, `shipNumber`, `shipSeats`, `flightID`)
VALUES
    ('Falcon 9 Deluxe', 1, 100, 1),
    ('Falcon 9', 2, 150, 2),
    ('Falcon 9 Deluxe', 3, 100, 3),
    ('Falcon 9', 4, 150, 4);

INSERT INTO `bookings` (`firstName`, `lastName`, `email`, `flightID`, `departureAirport`, `arrivalAirport`, `departureAirportID`, `arrivalAirportID`)
VALUES
    ('John', 'Doe', 'john@doe.com', 1, 'Amsterdam', 'New York', 1, 2),
    ('Jane', 'Doe', 'jane@doe.com', 2, 'Amsterdam', 'Rio de Janeiro', 1, 3);

INSERT INTO `users` (`firstName`, `lastName`, `email`, `password`, `adminID`, `bookingID`)
VALUES
    ('Felix', 'Huel', 'felix.huel@gmail.com', 'admin', 1, NULL),
    ('John', 'Doe', 'john@doe.com', 'user', NULL, 1),
    ('Jane', 'Doe', 'jane@doe.com', 'user', NULL, 2);