<?php
function getFirstLetters(){
    $name=readline("Enter a String: ");
    if(strlen($name)>3){
        echo substr($name,0,3);
    }
    else{
        throw new Exception("Less than Three Letters ");
    }
}
try{
    getFirstLetters();
}
catch(exception $e){
    echo "Error: ".$e->getMessage();
}
?>