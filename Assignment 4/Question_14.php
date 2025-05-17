<?php
function formatPhoneNumber(){
    $phno=readline("Enter PhoneNumber:");

   if (empty($phno) || !is_numeric($phno) || strlen($phno) != 10){


        throw new exception("Invalid Input");
    }
    else{
        $first=substr($phno,0,3);
        $middle=substr($phno,3,3);
        $last=substr($phno,6,4);
        echo "($first)".$middle."-".$last;
    }
}
try{
    formatPhoneNumber();
}
catch(exception $e){
    echo "Error:".$e->getMessage();
    
}
?>
