<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - Starport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin: 0 0 100px;
            /* bottom = footer height */
            padding: 25px;
        }

        footer {
            background-color: orange;
            position: absolute;
            left: 0;
            bottom: 0;
            height: 110px;
            width: 100%;
            overflow: hidden;
        }
        * {
            font-family: monospace;
        }
    </style>
</head>

<body class="font">

    <?php include_once "navbar.php" ?>
    <div class="mt-5">
    </div>

    <div class="container-fluid bg-image position-relative z-index-1 vh-100"
        style="background-image: url('starport.png'); background-size: cover;">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <h1 class="text-center text-light fw-semibold">Meet The Programming Team</h1>
            </div>
        </div>
    </div>

    <div class="row p-5 justify-content-center align-items-start">
        <div class="col-12 col-lg-6">
            <h2 class="fw-semibold">Who Are We?</h2>
            <p>
                <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#collapse" role="button"
                    aria-expanded="false" aria-controls="collapse">
                    Read More ↓
                </a>
            </p>
            <div class="collapse" id="collapse">
                <div class="card card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h2 class="fw-bold">Team Info</h2>
                            <div>
                                <div class="fw-semibold">
                                    We Are team Bit Tigers, we are a group of 5 members.
                                    We are a hardworking team, we all have our own talents and combine those in one
                                    project.
                                    We are great as individual, but the best as a team.
                                    We are hard programmers and our work never dissapoints.
                                    We always reach our deadline and make sure everything is how the clients wants it.
                                    The project Starport form SpaceX is our first big project, but also our first
                                    project together as team.
                                    We had a lot of fun of working on this project.
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <h2 class="fw-bold">Team Members</h2>
                            <div>
                                <div class="fw-semibold">
                                    Joram Swarts, Bo Rondaij, Fabian Nierop, Xander Kaptein and Felix Huel.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <h2 class="fw-semibold">What Do We Do?</h2>
            <p>
                <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#collapseE" role="button"
                    aria-expanded="false" aria-controls="collapse">
                    Read More ↓
                </a>
            </p>
            <div class="collapse" id="collapseE">
                <div class="card card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h2 class="fw-bold">Starport</h2>
                            <p class="fw-semibold">SpaceX is working on their Starport project.
                                Starports are airport like, but it's meant for rocketships.
                                This project started with the idea to fly faster around the world, from one day in a
                                plane to a few hours in a rocket.
                            </p>
                            <p class="fw-semibold">
                                We were asked to to help with the project, this project was divided into eight different
                                projects and we chose the best fitting project for our team.
                                We have a website where you can book your flight from Starport A to Starport B.
                                Your data you fill in to book your flight, will be saved in our database. Since it's
                                possible a flight will be cancelled.
                                The admins will try to show it on the website as soon as they can, otherwise an email
                                will be send to you. After that you can wait for the next flight departure.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-light">
            <div class="col-md-4 d-flex align-items-center">
                <a class="navbar-brand" href="#"><img src="spacex.png" alt="nav"></a>
                <span class="mb-3 mb-md-0 text-muted">© 2023 Bit Tigers, SpaceX</span>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
            </script>
</body>

</html>