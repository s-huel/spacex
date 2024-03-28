<?php
include 'database/connection.php';
session_start();

$isLoggedIn = isset($_SESSION['user_id']);
$isAdmin = isset($_SESSION['admin']) && $_SESSION['admin'] == true;

try {
    if (isset($_GET['logout'])) {
        header("Location: logout.php");
        exit();
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Félix Huel">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Info</title>
</head>
<body>

    <ul class="sidenav">
        <img src="images/logo.png" alt="logo" href="index.php" class="logo">
        <li><a href="booking.php">BOOKING</a></li>
        <li><a href="info.php">INFO</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <?php if ($isLoggedIn) : ?>
            <?php if ($isAdmin) : ?>
                <li><a href="userdash.php">DASHBOARD</a></li>
            <?php else : ?>
                <li><a href="admindash.php">DASHBOARD</a></li>
            <?php endif; ?>
            <li><a href="?logout=true">LOGOUT</a></li>
        <?php else : ?>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="signup.php">SIGN UP</a></li>
        <?php endif; ?>
    </ul>

    <div class="content">
        <section class="reveal" id="NEWS">
            <h1>Latest News</h1>
            <div class="row">
                <article>
                    <h3>title</h3>
                    <p>paragraph</p>
                </article>
                <article>
                    <h3>title</h3>
                    <p>paragraph</p>
                </article>
            </div>
        </section>

        <section id="STARSHIP">
            <h1>Starship</h1>
            <div class="row">

            </div>
        </section>

        <section id="STARPORT">
            <h1>Starports</h1>
        </section>
    </div>

    <script src="javascript/main.js"></script>

</body>
</html>