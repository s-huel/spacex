<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Starport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin: 0 0 100px;
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
    <div class="mt-5"></div>
    <br>


    <h1 class="text-center fw-bold">The Future Is Here</h1>

    <br>

    <div class="embed-responsive embed-responsive-16by9 mt-3 text-center">
        <iframe width="1050" height="550" class="embed-responsive-item" src="https://www.youtube.com/embed/zqE-ultsWt0"
            allowfullscreen></iframe>
    </div>

    <div class="mt-5"></div>

    <br>
    <p>
        SpaceX has long been a pioneer in the field of space exploration and commercialization.
        With our reusable Falcon 9 and Falcon Heavy rockets, we have successfully demonstrated the potential of reusable
        rocket technology for cost-effective space missions.
        Now, SpaceX aims to use this technology to transport passengers between continents, providing a fast, efficient,
        and unforgettable travel experience.
    </p>

    <br>

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="mt-5"></div>
            <h2>Starship Overview</h2>
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
                            <p class="fw-semibold">
                                SpaceX’s Starship spacecraft and Super Heavy rocket – collectively referred to as
                                Starship – represent a
                                fully reusable transportation system designed to carry both crew and cargo to Earth
                                orbit, the Moon,
                                Mars and beyond.
                                Starship will be the world’s most powerful launch vehicle ever developed, capable of
                                carrying up to 150
                                metric tonnes fully reusable and 250 metric tonnes expendable.
                            </p>
                            <br>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="fw-semibold">HEIGHT</td>
                                        <td class="fw-semibold">120 M / 394 ft</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="fw-semibold bg-light">DIAMETER</td>
                                        <td class="fw-semibold bg-light">9 m / 29.5 ft</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="fw-semibold">PAYLOAD CAPACITY</td>
                                        <td class="fw-semibold">100 - 150 t (fully reusable)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-12 col-lg-4">
            <img src="images/starship.png" class="w-50 text-center">
        </div>
    </div>

    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-light">
        <div class="col-md-4 d-flex align-items-center">
            <a class="navbar-brand" href="#"><img src="images/spacex.png" alt="nav"></a>
            <span class="mb-3 mb-md-0 text-muted">© 2023 Bit Tigers, SpaceX</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>