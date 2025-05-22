<?php

session_start();
$_SESSION["count"]=$_SESSION["count"] ?? 0;
$_SESSION["count"]++;
if($_SESSION["count"]>5){
    echo "<h2>Your are a frequent visitor</h2>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 8</title>
</head>
<body>
    <p>Visit Count: <?php echo $_SESSION["count"]?></p>
</body>
</html>
