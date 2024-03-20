<?php

include 'database/connection.php';

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query_login = "SELECT `userID`, `password`, `adminID` FROM `users` WHERE `email` = ?";
    $stmt_login = $pdo->prepare($query_login);
    $stmt_login->execute([$email]);
    $user = $stmt_login->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        if ($user['adminID'] !== null) {
            // Admin login
            $_SESSION['user_id'] = $user['adminID'];
            $_SESSION['is_admin'] = true;
            header("Location: index.php"); // Redirect to admin dashboard
            exit();
        } else {
            // Regular user login
            $_SESSION['user_id'] = $user['userID'];
            $_SESSION['is_admin'] = false;
            header("Location: index.php"); // Redirect to user dashboard
            exit();
        }
    } else {
        $loginError = "Invalid email or password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="css/form.css">
    <title>Login</title>
</head>
<body>

    <form method="post" class="form">
        <h1>Login</h1>
        <?php
        
        if (isset($loginError)) {
            echo '<p style="color: red;">' . $loginError . '</p>';
        }

        ?>
        <label for="email" class="label">Email:</label>
        <input type="email" name="email" placeholder="Email" class="input" required>
        <label for="password" class="label">Password:</label>
        <input type="password" name="password" placeholder="Password" class="input" required>
        <input type="submit" value="LOGIN" name="login" class="button">
    </form>
    
</body>
</html>
