<?php
function clearInput(){
    $input=readline("Enter a String: ");
    if(empty($input)){
        throw new Exception("Invalid Input");
    }
    else{
        echo trim($input);
    }
}
try{
    clearInput();
}
catch(exception $e){
    echo "Error: ".$e->getMessage();
}
?>