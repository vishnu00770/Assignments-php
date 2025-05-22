<?php



        $servername="localhost";
        $username="root";
        $pass="";
        $dbname="form_dm";

        $conn=mysqli_connect($servername,$username,$pass,$dbname);


        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
    


?>