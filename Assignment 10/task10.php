<?php
session_start();
$_SESSION["color"] = $_POST["color"] ?? "Not Defined";
$_SESSION["fontSize"] = $_POST["fontSize"] ?? "Not Defined";
if(isset($_POST["SET"])){
    echo "<h1> Favorite color: $_SESSION[color]</h1>";
    echo "<h1> Font size: $_SESSION[fontSize]</h1>";
}

if(isset($_POST["RESET"])){
    session_unset();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task 10</title>
    </head>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label>Favorite Color:</label>
        <input type="text" name="color"><br>
        <br>
        <label> Font Size: </label>
        <input type="number" name="fontSize"><br>
        <br>
        <input type="submit" name="SET" value="Submit">
        <input type="submit" name="RESET" value="Reset">
    </form>
</body>
</html>