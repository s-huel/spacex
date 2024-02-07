<?php
@session_start();
?>
<nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
    <div class="container-fluid">
        <div class="float-left">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="navbar-brand text-light" href="index.php">
                        <img src="images/spacex.png" alt="home">
                    </a>
                </li>
            </ul>

        </div>
        <div class="float-right">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="booking.php">Booking</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Info
                        </a>
                        <ul class="dropdown-menu bg-light">
                            <li><a class="dropdown-item" href="locations.php">Starports</a></li>
                            <li><a class="dropdown-item" href="cotwo.php">CO2
                                    Emmission</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="about-us.php">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <?php
        if (!empty($_SESSION['admin_id'])) {
            ?>
            <nav class="navbar navbar-expand-lg">
                <div class="navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link ml-3" href="view_bookings.php">View Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-3" href="admin_creation.php">Admin Account Creation</a>
                        </li>
                        <li class="nav-item">
                            <a type="button" class="btn btn-outline-dark ml-3" href="logout_handler.php">Log Out</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <?php
        } else {
            ?>
            <a href="login.php">
                <button type="button" class="btn btn-outline-dark">Log In</button>
            </a>
            <?php
        }
        ?>

    </div>
</nav>