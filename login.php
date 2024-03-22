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
            $_SESSION['user_id'] = $user['adminID'];
            $_SESSION['is_admin'] = true;
            header("Location: admindash.php");
            exit();
        } else {
            $_SESSION['user_id'] = $user['userID'];
            $_SESSION['is_admin'] = false;
            header("Location: userdash.php");
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
    <meta name="author" content="Félix Huel">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="css/form.css">
    <title>Login</title>
</head>
<body>

    <div class="login-box">
        <img src="images/logo.png" alt="logo">
        <h2>Login</h2>

        <form method="post">
            <div class="user-box">
                <input type="text" name="email" required>
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <?php
        
            if (isset($loginError)) {
                echo '<p style="color: red;">' . $loginError . '</p>';
            }

            ?>
            
            <button type="submit" name="login" class="button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                LOGIN
            </button>

            <a href="signup.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                SIGN UP
            </a>

        </form>
    </div>
    
</body>
</html>
