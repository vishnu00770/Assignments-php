<?php

function maxNum($a,$b,$c){
    if ($a>$b){
        if($a>$c){
            echo "$a is greater";
        }
        else{
            echo "$c is greater";
        }
    }
    elseif($b>$c && $b>$c){
        echo "$b is greater";
    }
    else{
        echo "$c is greater";
    }
}

$num1=(int) readline ("Enter Number 1: ");
$num2=(int) readline ("Enter Number 2: ");
$num3=(int) readline ("Enter Number 3: ");
maxNum($num1,$num2,$num3);

?>