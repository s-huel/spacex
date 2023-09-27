<?php
// Retrieve the selected Start_destination value from the form
$startDestinations = $_GET['start_destination'];
$endDestinations = $_GET['end_destination'];
$date = $_GET['Date'];

// Database connection and query execution
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
    // Retrieve the selected Start_destination value from the form
    $startDestinations = $_GET['start_destination'];
    $endDestinations = $_GET['end_destination'];

    // Ensure $startDestinations is always an array
    if (!is_array($startDestinations)) {
        $startDestinations = array($startDestinations);
    }
    if (!is_array($endDestinations)) {
        $endDestinations = array($endDestinations);
    }
    if (!is_array($date)) {
        $date = array($date);
    }

    $pdo = new PDO($dsn, $user, $pass, $options);

    // Prepare the SQL query with placeholders for multiple Start_destination values
    $placeholders = rtrim(str_repeat('?,', count($startDestinations)), ',');
    $placeholders2 = rtrim(str_repeat('?,', count($endDestinations)), ',');
    $placeholders3 = rtrim(str_repeat('?,', count($date)), ',');
    $stmt = $pdo->prepare("DELETE FROM booking WHERE Start_destination IN ($placeholders) AND End_destination IN ($placeholders2) AND `Date` IN ($placeholders3)");

    // Execute the query with the Start_destination values
    $stmt->execute(array_merge($startDestinations, $endDestinations, $date));

    // Check the affected rows
    $affectedRows = $stmt->rowCount();

    if ($affectedRows > 0) {
        // Redirect to a different page and pass the affected rows count as a parameter
        header("Location: view_bookings.php?deleted_rows=$affectedRows");
        exit();
    } else {
        echo 'No bookings found for deletion.';
    }

} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}

?>