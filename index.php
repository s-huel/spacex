<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Starport</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">HOME</a>
  <a href="booking.php">BOOKING</a>
  <a href="#">INFO</a>
  <a href="#">ABOUT US</a>
</div>

<span onclick="openNav()"><img src="images/logo.png" alt="logo"></span>

<div id="main">

<section>
  <h1 class="txt-main">The Future Is Here &#8595;</h1>
</section>

<section>
  <div class="container reveal">
    <div class="">
        <iframe width="1000" height="500" class="embed-responsive-item" src="https://www.youtube.com/embed/zqE-ultsWt0"
            allowfullscreen></iframe>
    </div>
  </div>
</section>

<section>
  <div class="container reveal">
    <h2>Info</h2>
    <div class="text-container">
      <div class="text-box">
        <div class="card">
            <div class="container">
                <h3>Falcon 9</h3>
                <p>
                    With our reusable Falcon 9 and Falcon Heavy rockets, we have successfully demonstrated the potential of reusable rocket technology for cost-effective space missions.
                    <br>
                    <br>
                    <a href="#" class="cardlink">READ MORE >></a>
                </p>
            </div>
        </div>
      </div>
      <div class="text-box">
        <div class="card">
            <div class="container">
                <h3>Starbase</h3>
                <p>
                  Starbase is a Starport where all our rockets are located. We repair, refill the fuel and check the rockets to make sure everyone has a safe trip to their destination.
                  <br>
                  <br>
                  <a href="#" class="cardlink">READ MORE >></a> 
                </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div> 

<script src="javascript/main.js"></script>

</body>
</html>
