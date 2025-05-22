<?php
    if(isset($_COOKIE["visit_count"])){
        $visit=$_COOKIE["visit_count"]+1;
    }
    else{
        $visit=1;
        
    }
setcookie("visit_count",$visit,time()+3600,"/");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 9</title>
  </head>
  <body>
    <p>Visit Count: <?php echo $_COOKIE["visit_count"]?? " "?></p>
  </body>
</html>