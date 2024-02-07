<?php
session_start();
// router.php

// Set the document root path
$documentRoot = 'C:/Users/niero/Desktop/bit-academy/Deep Dives/bit_tigers/';

// Get the requested file path
$requestedFile = $_SERVER['DOCUMENT_ROOT'] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Check if the requested file exists
if (file_exists($requestedFile)) {
    // Determine the file extension
    $extension = strtolower(pathinfo($requestedFile, PATHINFO_EXTENSION));

    if (in_array($extension, ['png', 'jpg', 'jpeg', 'gif'])) {
        // Serve the requested image resource as-is
        return false;
    } elseif ($extension === 'php') {
        // Include and execute the PHP file
        include($requestedFile);
        exit;
    } else {
        // Serve other file types (e.g., HTML, CSS, JavaScript) with appropriate headers
        $mimeTypes = [
            'html' => 'text/html',
            'htm' => 'text/html',
            'txt' => 'text/plain',
            'css' => 'text/css',
            'js' => 'application/javascript',
            // Add more MIME types as needed for your specific file types
        ];

        $contentType = isset($mimeTypes[$extension]) ? $mimeTypes[$extension] : 'application/octet-stream';

        header('Content-Type: ' . $contentType);
        readfile($requestedFile);
        exit;
    }
} else {
    // File not found, handle the error or redirect to an appropriate page
    echo 'File not found.';
    echo $requestedFile;
}
?>
