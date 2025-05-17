<?php

function printEven($a,$b){
   for ($i=$a;$i<=$b;$i++){
       if($i%2==0){
           echo "$i\n";
       }
   }
}
$num1=(int)readline ("Enter Number 1: ");
$num2=(int) readline("Enter Number 2: ");
printEven($num1,$num2);

?>