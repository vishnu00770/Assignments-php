<?php
    

    try{
        $db_server = "localhost";
        $db_user="root";
        $db_pass="";
        $db_name="user_info";

        $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
        echo "Connected successfully";
    }
    catch(Exception $e){
        echo "Connection failed: " . $e->getMessage();
    }




?>