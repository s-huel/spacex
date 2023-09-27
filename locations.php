<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projects - Starport</title>
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

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 75%;
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

    <iframe src="globe_map.php" width="100%" height="500px"></iframe>
    <div class="mt-5"></div>

    <h2 class="fw-bold text-center">About The Locations</h2>

    <br>

    <p class="fw-semibold text-center">
        We were presented with a list of 20 potential starport locations for SpaceX's intercontinental rocket flights.
        Our task is to analyze the given data and determine the best cities to establish the first five SpaceX
        starports.
        <br>
        To make an informed decision, we need to consider various factors such as location, connectivity, estimated
        starport cost, and available transit options. The exercise emphasizes the importance of selecting starport
        locations in different continents to ensure comprehensive global coverage.
        These 5 chosen starport locations should facilitate efficient intercontinental travel, support trade and
        tourism, and provide connectivity to major cities around the world.
    </p>

    <div class="row p-5 justify-content-center align-items-start">
        <div class="col-12 col-lg-4">
            <h2 class="fw-semibold">Amsterdam</h2>
            <p>
                <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#adam" role="button"
                    aria-expanded="false" aria-controls="collapse">
                    Read More ↓
                </a>
            </p>
            <div class="collapse" id="adam">
                <div class="card card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div>
                                <div class="fw-semibold">
                                    Amsterdam is strategically located in Europe and serves as a key transportation hub.
                                    With its central position and excellent connectivity, it provides easy access to
                                    major European cities and beyond.
                                    The estimated starport cost is reasonable at $1,500,000,000, and there are multiple
                                    transit options available, including the Tesla Model B boat and VIP helicopter.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <h2 class="fw-semibold">Cape Town</h2>
            <p>
                <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#cape" role="button"
                    aria-expanded="false" aria-controls="collapse">
                    Read More ↓
                </a>
            </p>
            <div class="collapse" id="cape">
                <div class="card card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="fw-semibold">
                                Situated in Africa, Cape Town offers a gateway to the African continent and its diverse
                                landscapes.
                                By establishing a starport here, we open up possibilities for trade, tourism, and
                                connections to other major cities in Africa.
                                With an estimated starport cost of $1,500,000,000, and the availability of the Tesla
                                Model B boat and VIP helicopter, Cape Town becomes an attractive choice for our starport
                                network.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <h2 class="fw-semibold">New York</h2>
            <p>
                <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#nyc" role="button"
                    aria-expanded="false" aria-controls="collapse">
                    Read More ↓
                </a>
            </p>
            <div class="collapse" id="nyc">
                <div class="card card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="fw-semibold">
                                Situated on the East Coast of the United States, New York is a major global city with
                                significant economic and cultural influence.
                                By establishing a starport here, we gain access to one of the busiest and most
                                interconnected regions in the world.
                                The estimated starport cost is slightly higher at $1,800,000,000, but the available
                                transit options, such as the Tesla Model B boat and VIP helicopter, make it a viable
                                choice.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row p-5 justify-content-center align-items-start">
        <div class="col-12 col-lg-6">
            <h2 class="fw-semibold">Rio De Janeiro</h2>
            <p>
                <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#rio" role="button"
                    aria-expanded="false" aria-controls="collapse">
                    Read More ↓
                </a>
            </p>
            <div class="collapse" id="rio">
                <div class="card card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div>
                                <div class="fw-semibold">
                                    Located in South America, Rio de Janeiro is a vibrant city known for its natural
                                    beauty and lively atmosphere.
                                    By establishing a starport here, we tap into the growing South American market and
                                    provide a convenient travel option for both business and leisure purposes.
                                    The estimated starport cost is $1,600,000,000, and the Tesla Model B boat and VIP
                                    helicopter serve as suitable transit options for this region.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <h2 class="fw-semibold">Tokyo</h2>
            <p>
                <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#kyo" role="button"
                    aria-expanded="false" aria-controls="collapse">
                    Read More ↓
                </a>
            </p>
            <div class="collapse" id="kyo">
                <div class="card card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="fw-semibold">
                                Tokyo, the capital of Japan, is a bustling metropolis with advanced infrastructure and a
                                robust economy.
                                Its location in East Asia offers access to numerous major cities in the region, making
                                it an ideal gateway for intercontinental travel.
                                The estimated starport cost is $1,700,000,000, and the availability of various transit
                                options, including the Tesla Model B boat, VIP helicopter, and Model X, further enhances
                                its appeal.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <img src="locationss.png" class="center">

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