<?php

$allValues=array();
function addExpense(){
    global $allValues;
    $amount=readline("Amount: ");
    $category=readline("Category: ");
    if($amount<0 || !is_numeric($amount)){
        throw new exception("Amount must be a positive integer");
    }
    if(empty($category)){
        throw new exception("Category cannot be empty");
    }
    else{
        $narr=["amount"=>$amount,"Category"=>$category];
        $allValues=[$narr];
        print_r($allValues);
    }
}




try{
    addExpense();
    
}
catch(exception $e){
    echo "Oops" .$e->getMessage();
}
    
?>