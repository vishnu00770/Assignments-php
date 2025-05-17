<?php
// Get the current request URI
$uri = $_SERVER['REQUEST_URI'] ?? '/';

// Extract the filename from the URI path
$page = basename(parse_url($uri, PHP_URL_PATH)); // e.g., about.php

// Remove the file extension and sanitize
$pageName = pathinfo($page, PATHINFO_FILENAME); // e.g., 'about'

// Convert to title case
$pageTitle = ucwords(str_replace("-", " ", strtolower($pageName)));

// Fallback if empty or homepage
if (empty($pageName) || $pageName == "index") {
    $pageTitle = "Welcome";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($pageTitle); ?> - My Portfolio</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
    <p>This is the <?php echo htmlspecialchars($pageTitle); ?> page of the portfolio.</p>
</body>
</html>
