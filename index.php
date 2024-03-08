<?php

require_once 'database/connection.php';

$username = '';

$password = '';

$hash = password_hash($password, PASSWORD_DEFAULT);

$query = 'INSERT INTO accounts (account_name, account_passwd) VALUES (:name, :passwd)';

$values = [':name' => $username, ':passwd' => $hash];

try {
    $res = $pdo->prepare($query);
    $res->execute($values);
} catch (PDOException $e) {
    echo 'Query error.';
    die();
}