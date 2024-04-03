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
                
                // Break the loop after fetching 4 articles
                if (++$count >= 4) {
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
    <title>Home</title>
</head>
<body>

    <ul class="sidenav">
        <a href="index.php">
           <img src="images/logo.png" alt="logo" class="logo"> 
        </a>
        <li><a href="booking.php">BOOKING</a></li>
        <li><a href="info.php">INFO</a></li>
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
        <section class="reveal">
            <div class="main">
                <h1>Traveling 
                    <div class="roller">
                        <span id="rolltext">
                            Faster <br/>
                            Smoother <br/>
                            Luxurious <br/>
                        <span id="spare-time">With Space X</span><br/>
                    </div>
                </h1>
            </div>
        </section> 

        <section class="row reveal">
            <article>
                <h3>Starship</h3>
                <p>The Starship has 2 models, Falcon 9 and Falcon 9 Deluxe. These are the transport to the locations.</p>
                <a href="info.php#STARSHIP">Read more &#8227;</a>
            </article>
            <article>
                <h3>Starport</h3>
                <p>Our Starports are the locations where you can travel to. There's a total of 5 Starports located in every continent.</p>
                <a href="info.php#STARPORT">Read more &#8227;</a>
            </article>
        </section>

        <section class="reveal">
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
    </div>

    <script src="javascript/main.js"></script>

</body>
</html>
