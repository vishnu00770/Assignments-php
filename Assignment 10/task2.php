<?php
    if(isset($_POST["Theme"])){
        $theme=$_POST["Theme"];
        setcookie("Theme",$theme,time()+3600,"/");
        header("Location: " . $_SERVER["PHP_SELF"]); 
        }
?>

<!DOCTYPE html>
<html>
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
    </head>
  <body <?php
            if(isset($_COOKIE["Theme"]) && $_COOKIE["Theme"]=="Dark"){
                $color="White";
                $background="Black";
            }else{
                $color="Black";
                $background="White";
            }?>
           style="color:<?php echo $color;?>;    background:<?php echo $background; ?>;">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label>Select your theme</label><br>
            <input type="radio" name="Theme" value="Light">Light 
            <input type="radio" name="Theme" value ="Dark">Dark<br>
            <input type="submit" value="Submit"><br>
        </form>

        <label>Selected Theme: <?php echo $_COOKIE["Theme"]?? "Light"?></label>



  </body>
</html>
