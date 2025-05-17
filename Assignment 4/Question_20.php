<?php
function getEmailDomain(){
    $string=readline("Enter Your Mail: ");
    if(str_contains($string,"@")){
        $arr=explode("@",$string);
        print_r($arr[1]);
    }
    else{
        echo "Invalid Input";
    }
}
getEmailDomain();
?>