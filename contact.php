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
    <title>Contact</title>
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
                <h1>Contact</h1>
            </div>
        </section> 

        <section class="reveal">
            <h1>Get In Touch</h1>
            <div class="row">
                <article>
                    <h3>Email</h3>
                    <p>info@spacex.com</p>
                </article>
                <article>
                    <h3>Phone</h3>
                    <p>+1-310-363-6000</p>
                </article>
            </div>
        </section>

        <section class="reveal">
            <h1>Location</h1>
           <div class="row"> 
                <article>
                    <iframe src=
                        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6780516.420455391!2d-127.29404520159186!3d33.920571528675076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b5dee46db32d%3A0x5589bf4232c10232!2sSpacex!5e0!3m2!1sen!2snl!4v1711531511475!5m2!1sen!2snl" width="300" height="300" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </article>
                <article>
                    <h3>Visit Us Instead?</h3>
                    <br/>
                    <br/>
                    <h4>SpaceX</h4>
                    <p>Hawthorne, <br/> CA 90250, <br/> United States</p>
                </article>
            </div> 
        </section>

    </div>

    <script src="javascript/main.js"></script>

</body>
</html>
