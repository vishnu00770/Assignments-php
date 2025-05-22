<?php


    $host="localhost";
    $username="root";
    $pass="";
    $db_name="registration_form";

    $conn=new mysqli($host,$username,$pass,$db_name);


if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
}





?>