<?php
    if(isset($_POST["username"])){
        session_start();
        $_SESSION["username"]=$_POST["username"];
    }
?>



<!DOCTYPE html>
<html>
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 12</title>
    </head>
  <body>
      <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label>Enter username</label>
        <input type="text" name="username" placeholder="Enter username"><br><br>
        <input type="submit" value="Submit"><br>
      </form>
</body>
<button  >Login</button>