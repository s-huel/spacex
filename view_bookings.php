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
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>View Bookings</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>

        <body>
            <?php include_once "navbar.php" ?>
            <div class="mt-5"></div>
            <br>

            <h1 class="text-center">Delete Bookings</h1><br>
            <form action="process.php" method="GET" class="text-center">
                <label for="start_destination">Select Start Destination:</label>
                <select name="start_destination" id="start_destination">
                    <option value="Amsterdam">Amsterdam</option>
                    <option value="Tokyo">Tokyo</option>
                    <option value="New York">New York</option>
                    <option value="Cape Town">Cape Town</option>
                    <option value="Rio De Janeiro">Rio De Janeiro</option>
                </select>
                <label for="end_destination">Select End Destination:</label>
                <select name="end_destination" id="end_destination">
                    <option value="Amsterdam">Amsterdam</option>
                    <option value="Tokyo">Tokyo</option>
                    <option value="New York">New York</option>
                    <option value="Cape Town">Cape Town</option>
                    <option value="Rio De Janeiro">Rio De Janeiro</option>
                </select>
                <label for="Date">Select date:</label>
                <input type="date" name="Date" id="Date">
                <button type="submit">Submit</button>
                <br>
                <?php
                if (!empty($_GET['deleted_rows'])) {
                    // Retrieve the deleted rows count from the URL parameter
                    $deletedRows = $_GET['deleted_rows'];
                    echo "Successfully deleted $deletedRows booking(s).";
                }
                ?>
            </form>

            <?php if (!empty($bookings)): ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Start Destination</th>
                            <th>End Destination</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookings as $booking): ?>
                            <tr>
                                <td>
                                    <?php echo $booking['Firstname']; ?>
                                </td>
                                <td>
                                    <?php echo $booking['Lastname']; ?>
                                </td>
                                <td>
                                    <?php echo $booking['Email']; ?>
                                </td>
                                <td>
                                    <?php echo formatDate($booking['Date']); ?>
                                </td>
                                <td>
                                    <?php echo $booking['Start_destination']; ?>
                                </td>
                                <td>
                                    <?php echo $booking['End_destination']; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No bookings found.</p>
            <?php endif; ?>

        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
            </script>

        </html>
        <?php
    } catch (\PDOException $e) {
        // Log the error to a file or display it in the browser for debugging purposes
        
        // You can also use echo to display the error message in the browser
        echo 'PDOException: ' . $e->getMessage();
        // or use die() to terminate the script and display the error message
        // die('PDOException: ' . $e->getMessage());
        throw new \PDOException($e->getMessage(), (int) $e->getCode());
    }
} else {
    header("Location: login.php"); // Redirect to login page
    exit;
}
?>