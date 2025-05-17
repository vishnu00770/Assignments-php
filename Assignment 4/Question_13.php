<?php
function validateUsername(){
    $userName=readline("Enter UserName : ");
    if(strlen($userName)<5 || strlen($userName)>20){
        throw new Exception("Username should be in between 5 to 20 letters ");
    }
    if(str_contains($userName," ")){
        throw new Exception("Username Contains Spaces");
    }
    else{
        echo "Valid Username";
    }

}
try{
    validateUsername();
}
catch(exception $e){
    echo "Error:".$e->getMessage();
    
}
?>
