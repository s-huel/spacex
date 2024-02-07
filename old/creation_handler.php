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

$name = $_GET['name'];
$password = $_GET['password'];



try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Prepare the SQL statement
    $sql = "INSERT INTO admin (username, password)
            VALUES (:name, :password)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $hashedPassword);

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Execute the statement
    $stmt->execute();

    // Redirect the user to a success page
    header("Location: index.php");
    exit();

} catch (\PDOException $e) {
    // Handle any database errors
    echo "Database Error: " . $e->getMessage();
}
