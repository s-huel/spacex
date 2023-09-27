<?php
@session_start();

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

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$date = $_GET['date'];
$start = $_GET['start'];
$end = $_GET['end'];


try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Prepare the SQL statement
    $sql = "INSERT INTO booking (Firstname, Lastname, Email, Date, Start_destination, End_destination)
            VALUES (:fname, :lname, :email, :date, :start, :end)";
    $stmt = $pdo->prepare($sql);

    // Bind the parameter values
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':date', date('Y/m/d', strtotime($date))); // Convert date format to 'Y/m/d'
    $stmt->bindParam(':start', $start);
    $stmt->bindParam(':end', $end);

    // Execute the statement
    $stmt->execute();

    // Redirect the user to a success page
    header("Location: index.php");
    exit();

} catch (\PDOException $e) {
    // Handle any database errors
    echo "Database Error: " . $e->getMessage();
}