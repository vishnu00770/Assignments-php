<?php

function validateUrl(){
    $string=readline("Enter Url: ");
    if(!(str_starts_with($string,"https://"))){
        throw new Exception("Invalid Url");
    }
    if(!filter_var($string,FILTER_VALIDATE_URL)){
        throw new Exception("Invalid Url");
    }
    else{
        echo "Valid Url";
    }
}
try{
    validateUrl();
}
catch(exception $e){
    echo "Error:".$e->getMessage();
}


?>