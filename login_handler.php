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

// User inlog controleren
if (!empty($_POST['username']) && !empty($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $stmt = $pdo->prepare('SELECT id, password FROM admin WHERE username = :username');

  $stmt->execute(['username' => $username]);
  $result = $stmt->fetch();

  if (password_verify($password, $result['password'])) {
    $_SESSION['admin_id'] = $result['id'];
  }
}

header('Location:index.php');



?>