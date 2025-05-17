<?php

function shoutCity(){

    $name=readline("Enter the City Name: ");
    if (empty($name)){
        throw new Exception("Name Cannot be Empty!");
    }
    else{
        echo strtoupper($name);
    }
}
try{
    shoutCity();
}
catch(exception $e){
    echo "Error:".$e->getMessage();
    
}

?>