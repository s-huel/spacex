<?php

include 'database/connection.php';

if (isset($_POST['signup'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query_signup = "INSERT INTO `users` (`firstName`, `lastName`, `email`, `password`) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($query_signup);
    $stmt->execute([$firstName, $lastName, $email, $hashedPassword]);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="css/form.css">
    <title>Sign Up</title>
</head>
<body>

    <div class="login-box">
        <img src="images/logo.png" alt="logo">
        <h2>Sign Up</h2>

        <form method="post">
            <div class="user-box">
                <input type="text" name="firstName" required>
                <label>First Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="lastName" required>
                <label>Last Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="email" required>
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            
            <button type="submit" name="signup" class="button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                SIGN UP
            </button>
        </form>
    </div>
    
</body>
</html>