<?php
function reverseEach(){
    $string=readline("Enter your String: ");
    $arr=explode(" ",$string);
    foreach($arr as $a){
        echo strrev($a)." ";
    }
}
reverseEach();
?>