<?php
$GLOBALS['counter'] = $GLOBALS['counter'] ?? 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "<h2>Counter incremented!</h2>". $GLOBALS['counter'];
    $GLOBALS['counter']++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 9 - Global Counter</title>
</head>
<body>
    <h2>Counter: <?php echo $GLOBALS['counter']; ?></h2>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="submit" value="Increment Counter">
    </form>
</body>
</html>
