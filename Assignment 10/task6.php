<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){
    echo "<h1>Server Name: $_SERVER[SERVER_NAME]</h1>";
} 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task 6</title>
    </head>
    <body>
        <form method="POST" action=" <?php echo $_SERVER["PHP_SELF"];?>">
            <input type ="submit" value="Show Server Name">
    </form>
</body>
</html>
