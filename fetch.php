<?php

// Include the Simple HTML DOM Parser library
include_once('simple_html_dom.php');

function scrapeSpaceXNews() 
{
    // URL of the SpaceX updates page
    $url = 'https://www.spacex.com/updates/';

    // Fetch the HTML content from the URL
    $html_content = file_get_contents($url);

    // Create a DOM object
    $html = str_get_html($html_content);

    // Initialize an array to store the news updates
    $newsUpdates = array();

    // Find all elements with class "item" which represent individual news updates
    foreach ($html->find('.item') as $article) {
        // Extract date, title, and description from each news update
        $dateElement = $article->find('.date', 0);
        $titleElement = $article->find('.label', 0);
        $descriptionElement = $article->find('.contents p', 0);

        // Check if elements were found before accessing their properties
        if ($dateElement && $titleElement && $descriptionElement) {
            $date = $dateElement->plaintext;
            $title = $titleElement->plaintext;
            $description = $descriptionElement->plaintext;

            // Add the news update to the array
            $newsUpdates[] = array(
                'date' => $date,
                'title' => $title,
                'description' => $description
            );
        }
    }

    // Clean up memory
    $html->clear();
    unset($html);

    return $newsUpdates;
}

// Scrape news updates
$spaceXNews = scrapeSpaceXNews();

// Print the scraped news updates
foreach ($spaceXNews as $update) {
    echo "Date: " . $update['date'] . "<br>";
    echo "Title: " . $update['title'] . "<br>";
    echo "Description: " . $update['description'] . "<br><br>";
}
?>
