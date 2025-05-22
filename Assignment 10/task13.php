<?php
setcookie("username","vishnu",time()+10,"/");
echo "timer set <br>";

while(true){
    if(!isset($_COOKIE["username"])){
        echo "cookie not set";
        break;
    }

}



?>