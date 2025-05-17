<?php
$allProducts=array();
function add_to_cart(){
    global $allProducts;
    $val=readline("Enter the product name: ");
    if(empty($val)){
        throw new exception("Product name Cannot be Empty");
        return;
    }
    array_push($allProducts,$val);
}
try{
add_to_cart();}
catch(exception $e){
    echo "Error:". $e-> getMessage();
}
?>