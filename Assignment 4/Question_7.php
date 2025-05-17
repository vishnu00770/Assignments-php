<?php

function quietMessage(){

    $name=readline("Enter the Message: ");
    if (empty($name)){
        throw new Exception("Name Cannot be Empty!");
    }
    else{
        echo strtolower($name);
    }
}
try{
    quietMessage();
}
catch(exception $e){
    echo "Error:".$e->getMessage();
    
}

?>