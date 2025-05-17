<?php

function generatePassword(){
    $pass="";
    for($i=0;$i<5;$i++){
        
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $scharacter=",./';.,;'/[,,.;'abcdefghijklmnopqrstuvwxyz";
        $maxIndex=strlen($scharacter)-1;
        
        $num=rand(1, 10); 
        $num2=rand(1,$maxIndex);
        $num3=rand(1,51);
        
        $pass=$pass.$scharacter[$num2].$characters[$num3].$num;
        
        
    }
    echo "Your Random Password is: ";
    echo "$pass";
}
generatePassword();

?>