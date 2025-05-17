<?php

function CheckNameLength(){

    $name=readline("Enter the Name: ");
    if (empty($name)){
        throw new Exception("Name Cannot be Empty!");
    }
    else{
        echo "Length of the Name is ". strlen($name);
    }
}
try{
    CheckNameLength();
}
catch(exception $e){
    echo "Error:".$e->getMessage();
    
}

?>