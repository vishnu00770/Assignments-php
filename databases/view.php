<?php
    include "./database.php";
?>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Gmail</th>
        </tr>
        <?php
        $sql = "SELECT * FROM user";
        $result=$conn->query($sql);

        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<tr><td style='color:red'>".$row["id"] ."</td><td>" .$row["username"] ."</td><td>" .$row["email"] ."</td></tr>";
            }

        }
        else{
            echo "No users found";
        }
        $conn->close();
        ?> 
    </table>
    </body>