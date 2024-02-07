<?php
session_start();

$host = '127.0.0.1';
$db = 'spacex';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}

$stmt = $pdo->prepare("SHOW TABLES LIKE 'admin'");
$stmt->execute();
$adminTableExists = ($stmt->rowCount() > 0);

$stmt = $pdo->prepare("SHOW TABLES LIKE 'booking'");
$stmt->execute();
$usersTableExists = ($stmt->rowCount() > 0);

if (!$adminTableExists) {
    $stmt = $pdo->prepare('CREATE TABLE admin (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    )');

    $stmt->execute();
}


if (!$usersTableExists) {
    $stmt = $pdo->prepare('CREATE TABLE `booking` (
        `Id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `Firstname` varchar(100) NOT NULL,
        `Lastname` varchar(100) NOT NULL,
        `Email` varchar(100) NOT NULL,
        `Date` DATE NOT NULL,
        `Start_destination` varchar(100) NOT NULL,
        `End_destination` varchar(100) NOT NULL
     )'
    );

    $stmt->execute();
}


// admin user creeren
$stmt = $pdo->prepare('INSERT INTO admin(username, password) VALUES(:username, :password)');

$stmt->execute(['username' => 'admin', 'password' => password_hash('root', PASSWORD_DEFAULT)]);


$stmt = $pdo->prepare('INSERT INTO booking (Firstname, Lastname, Email, Date, `Start_destination`, `End_destination`)
VALUES (:Firstname, :Lastname, :Email, :datum, :Start_destination, :End_destination)');



?>