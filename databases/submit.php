<?php
        include 'database.php';
    if($_SERVER["REQUEST_METHOD"] == "POST") {


        $username = trim($_POST['username']," ");
        $gmail=trim($_POST['gmail']," ");

        $username=filter_var($username,FILTER_SANITIZE_STRING);
        $gmail=filter_var($gmail,FILTER_SANITIZE_EMAIL);


        if(empty($username) || empty($gmail)){
            echo "Please Fill  All Fields";
        }
        else if(!filter_var($gmail,FILTER_VALIDATE_EMAIL)){
            echo "Please Enter Valid Email";
        }
        else{
            $sql="INSERT INTO user (username,email) VALUES (?,?)";
            $smt=$conn->prepare($sql);
            $smt->bind_param("ss",$username,$gmail);

            if($smt->execute()){
                echo "Data Inserted Successfully";
            }
            else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $smt->close();
        }


        $conn->close();

    }





?>