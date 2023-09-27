<?php
@session_start();
if (!empty($_SESSION['admin_id'])) {
    $host = '127.0.0.1';
    $db = 'spacex';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);

        // Retrieve the bookings from the database
        $stmt = $pdo->query('SELECT * FROM booking');
        $bookings = $stmt->fetchAll();
        function formatDate($date)
        {
            // Convert the date format from YYYY-MM-DD to DD/MM/YYYY
            return date('d/m/Y', strtotime($date));
        }

        ?>
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
            </style>
        </head>

        <body>

            <?php include_once "navbar.php" ?>
            <div class="mt-5">
            </div>

            <form method="GET" action="creation_handler.php" class="mt-5 was-validated">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group mt-3">
                            <label for="fname"></label><br>
                            <input type="text" class="form-control custom" id="name" placeholder="name" name="name" required>
                            <div class="invalid-feedback">Fill in a valid name.</div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group mt-3">
                            <label for="lname"></label><br>
                            <input type="password" class="form-control custom" id="password" placeholder="password" name="password"
                                required>
                            <div class="invalid-feedback">Fill in a valid Password.</div>
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
        <?php
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int) $e->getCode());
    }
} else {
    header("Location: login.php"); // Redirect to login page
    exit;
}
?>