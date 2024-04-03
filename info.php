<?php
include 'database/connection.php';
session_start();

$isLoggedIn = isset($_SESSION['user_id']);
$isAdmin = isset($_SESSION['admin']) && $_SESSION['admin'] == true;

try {
    if (isset($_GET['logout'])) {
        header("Location: logout.php");
        exit();
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Function to scrape SpaceX news
function scrapeSpaceXNews() 
{
    include_once('simple_html_dom.php');
    $html = file_get_html('https://www.spacex.com/updates/');
    $articles = array();

    if ($html) {
        $items = $html->find('.item');
        $count = 0;

        foreach ($items as $item) {
            $date = $item->find('.date', 0)->plaintext;
            $title = $item->find('.label', 0)->plaintext;
            $description = $item->find('.contents', 0)->plaintext;

            // Remove any HTML tags from the description
            $description = strip_tags($description);

            // Only add articles with a description
            if (!empty($description)) {
                // Add the article to the array
                $articles[] = array(
                    'date' => $date,
                    'title' => $title,
                    'description' => $description
                );
                
                // Break the loop after fetching 8 articles
                if (++$count >= 8) {
                    break;
                }
            }
        }
    }

    return $articles;
}

// Fetch SpaceX news
$articles = scrapeSpaceXNews();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Félix Huel">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Info</title>
</head>
<body>

    <ul class="sidenav">
        <a href="index.php">
           <img src="images/logo.png" alt="logo" class="logo"> 
        </a>
        <li><a href="booking.php">BOOKING</a></li>
        <li><a href="info.php">INFO</a></li>
        <nav class="inpage-nav">
            <a href="#NEWS">Latest News</a>
            <a href="#STARSHIP">Starship</a>
            <a href="#STARPORT">Starports</a>
        </nav>
        <li><a href="contact.php">CONTACT</a></li>
        <?php if ($isLoggedIn) : ?>
            <?php if ($isAdmin) : ?>
                <li><a href="userdash.php">DASHBOARD</a></li>
            <?php else : ?>
                <li><a href="admindash.php">DASHBOARD</a></li>
            <?php endif; ?>
            <li><a href="?logout=true">LOGOUT</a></li>
        <?php else : ?>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="signup.php">SIGN UP</a></li>
        <?php endif; ?>
    </ul>

    <div class="content">
        <section class="reveal" id="NEWS">
            <h1>Latest News</h1>
            <?php 
            // Split articles into rows with two articles per row
            $articleChunks = array_chunk($articles, 2);
            foreach ($articleChunks as $row) : ?>
                <div class="row">
                    <?php foreach ($row as $article) : ?>
                        <article>
                            <p><?php echo $article['date']; ?></p>
                            <h3><?php echo $article['title']; ?></h3>
                            <p><?php echo $article['description']; ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </section>

        <section id="STARSHIP" class="reveal">
            <h1>Starship</h1>
            <div class="row">
                <article>
                    <img src="images/starship.png" alt="Starship">
                </article>
                
                <article>
                    <h3>Starship</h3>
                    <br/>
                    <p>
                        SpaceX’s Starship spacecraft and Super Heavy rocket – collectively referred to as
                        Starship – represent a
                        fully reusable transportation system designed to carry both crew and cargo to Earth
                        orbit, the Moon,
                        Mars and beyond.
                        Starship will be the world’s most powerful launch vehicle ever developed, capable of
                        carrying up to 150
                        metric tonnes fully reusable and 250 metric tonnes expendable.
                    </p>
                    <br/>
                    <table class="">
                                <tbody>
                                    <tr>
                                        <td colspan="2">HEIGHT</td>
                                        <td>120 M / 394 ft</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">DIAMETER</td>
                                        <td>9 m / 29.5 ft</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">PAYLOAD CAPACITY</td>
                                        <td>100 - 150 t (fully reusable)</td>
                                    </tr>
                                </tbody>
                            </table>
                </article>
            </div>

            <div class="row">
                <article>
                   <img src="images/raptor-engine.png" alt="Raptor Engine"> 
                </article>
                
                <article>
                    <h3>Raptor Engine</h3>
                    <p>Explantaion</p>
                </article>
            </div>   
        </section>


        <section id="STARPORT" class="reveal">
            <h1>Starports</h1>
        </section>
    </div>

    <script src="javascript/main.js"></script>

</body>
</html>
