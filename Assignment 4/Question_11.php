<?php
function formatMoney(){
    $num=readline("Enter Amount: ");
    if(is_numeric($num)){
        echo "₹".number_format($num);
    }
    else{
        throw new exception("Non Integer Value Entered");
    }
}
try{
    formatMoney();
}
catch(exception $e){
    echo "Error:".$e->getMessage();
    
}
?>
