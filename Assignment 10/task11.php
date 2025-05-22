<?php 
session_start();
if(isset($_POST["product"])){
    $_SESSION["prodArr"][]=["product"=>$_POST["product"],"quantity"=>$_POST["quantity"]];
    if(!(empty($_SESSION["prodArr"]))){
        echo "Product added to session<br>";
        foreach($_SESSION["prodArr"] as $key=>$value){
            echo "Product: ".$value["product"]."<br>";
            echo "Quantity: ".$value["quantity"]."<br>";
        }
    }
}
if(isset($_POST["clear"])){
    unset($_SESSION["prodArr"]);
    echo "Session cleared";
}
?>

<!DOCTYPE html>
<html>
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 11</title>
    </head>
  <body>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label>Enter product name</label>
            <select id="product" name="product">
                <option value="laptop">laptop</option>
                <option value="Mobile">Mobile</option>
                <option value="Bottle">Bottle</option>
                <option value="Bag">Bag</option>
            </select><br>
            <br>
            <input  type="number" name="quantity" placeholder="Enter quantity"><br><br>
            <input type="submit" value="Submit"><br>
            <br>
        </form>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <input type="submit" name="clear" value="Clear"><br>
        </form>