



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
  </head>
  <body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label> Username: </label>
        <input type=text name="username" required><br>
        <br>
        <label>Email: </label>
        <input type="email" name="email" required><br>
        <br>
        <input type="submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $username=$_POST["username"] ?? "Not Defined";
        $email=$_POST["email"] ?? "Not Defined";
        echo "<h2>Username: $username</h2>";
        echo "<h2>Email: $email</h2>";

    }
?>

  </body>
</html>
