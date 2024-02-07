<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking - Starport</title>
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
        <div class="col-12 col-lg-9"><img src="durationflightmap.png" class="w-100"></div>
        <div class="col-12 col-lg-3"><img src="flight-prices.png"></div>
    </div>
    
    

    <form method="GET" action="booking_handler.php" class="mt-5 was-validated">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="form-group mt-3">
                    <label for="fname"></label><br>
                    <input type="text" class="form-control custom" id="fname" placeholder="First Name" name="fname"
                        required>
                    <div class="invalid-feedback">Fill in a valid first name.</div>
                </div>

            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group mt-3">
                    <label for="lname"></label><br>
                    <input type="text" class="form-control custom" id="lname" placeholder="Last Name" name="lname"
                        required>
                    <div class="invalid-feedback">Fill in a valid last name.</div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="form-group mt-3">
                    <label for="email"></label><br>
                    <input type="email" class="form-control custom" id="email" aria-describedby="emailHelp"
                        placeholder="Email" name="email" required>
                    <div class="invalid-feedback">Fill in a valid email.</div>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with the third
                        party.</small>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group mt-3" required>
                    <label for="date"></label><br>
                    <input type="date" class="form-control custom" id="date" name="date" required>
                    <div class="invalid-feedback">Select a valid date.</div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="form-group mt-3">
                    <select class="form-control custom-select" name="start" required>
                        <option value="">Select Startpoint</option>
                        <option value="Amsterdam">Amsterdam</option>
                        <option value="Tokyo">Tokyo</option>
                        <option value="New York">New York</option>
                        <option value="Cape Town">Cape Town</option>
                        <option value="Rio De Janeiro">Rio De Janeiro</option>
                    </select>
                    <div class="invalid-feedback">Select a valid startpoint.</div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group mt-3">
                    <select class="form-control custom-select" name="end" required>
                        <option value="">Select Destination</option>
                        <option value="Amsterdam">Amsterdam</option>
                        <option value="Tokyo">Tokyo</option>
                        <option value="New York">New York</option>
                        <option value="Cape Town">Cape Town</option>
                        <option value="Rio De Janeiro">Rio De Janeiro</option>
                    </select>
                    <div class="invalid-feedback">Select a valid destination.</div>
                </div>
            </div>
        </div>

        <br>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-light btn-outline-dark">Submit</button>
        </div>
    </form>

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