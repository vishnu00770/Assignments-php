
<form action="Task6.php" method="get">
    <input type="text" name="user" placeholder="Enter your name">
    <input type="submit" value="Submit">
</form>

<?php
$username=$_GET['user']?? 'Guest';
echo "Hello,$username";
?>