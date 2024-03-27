<?php
session_start();

include 'database/connection.php';

$isLoggedIn = isset($_SESSION['user_id']);

if (isset($_GET['logout'])) {
    header("Location: logout.php");
    exit();
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
    <title>Dashboard</title>
</head>

<body>

    <ul class="sidenav">
        <a href="index.php"><img src="images/logo.png" alt="logo" class="logo"></a>
        <li><a href="booking.php">BOOKING</a></li>
        <li><a href="info.php">INFO</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <?php if ($isLoggedIn) : ?>
            <li><a href="?logout=true">LOGOUT</a></li>
        <?php else : ?>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="signup.php">SIGN UP</a></li>
        <?php endif; ?>
    </ul>

    <div class="content">
        <section class="reveal">
            <div class="main">
                <h1>Admin Dashboard</h1>
            </div>
        </section> 

        <section class="row reveal">
            <article>
                <h3>Starships</h3>
                <p>The Starship has 2 models, Falcon 9 and Falcon 9 Deluxe. These are the transport to the locations.</p>
                <a href="info.php#STARSHIPS">Read more &#8227;</a>
            </article>
            <article>
                <h3>Starports</h3>
                <p>Our Starports are the locations where you can travel to. There's a total of 5 Starports located in every continent.</p>
                <a href="info.php#STARPORTS">Read more &#8227;</a>
            </article>
        </section>

        <section class="reveal">
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
    </div>

    <script src="javascript/main.js"></script>

</body>
</html>