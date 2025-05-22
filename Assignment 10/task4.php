<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php $_GET["page"]=2;?>
    <input type ="submit" value="click me">
</form>
<?php
    if(isset($_GET['submit'])){
        echo "You are in page $_GET[page]";
    }

?>