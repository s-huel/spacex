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
        * {
            font-family: monospace;
        }
    </style>
</head>

<body class="font">

    <?php include_once "navbar.php" ?>
    <div class="mt-5">

    </div>

    <div class="row">
        <div class="col-12 col-lg-6">
            <img src="cotwopc.png" class="w-100">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="text-center fw-bold">About the CO2 Emissions</h1>
            <br>
            <p>
                The Starship + Super Heavy combination is an excellent option for space travel due to several key
                reasons.
                It boasts a remarkable payload capacity of 2683 passengers, enabling efficient transportation of large
                groups.
                The configuration's fuel efficiency, reflected by its low carbon emissions per person (26.83), ensures
                minimal environmental impact.
                Its versatility allows for intercontinental travel between major cities.
                The scalability of the Starship + Super Heavy makes it suitable for large-scale missions, while the
                reliability of SpaceX's technology ensures passenger safety.
                Overall, it represents a significant leap forward in space exploration and holds great potential for
                future interplanetary endeavors.
            </p>
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