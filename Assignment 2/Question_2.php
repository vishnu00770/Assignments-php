<?php

$char=readline("Enter a Character : ");
$ch=strtolower($char);
$vowels =array("a","e","i","o","u");
if (in_array($ch,$vowels)){
    echo "The Character is Vowel";
}
else{
    echo "The Character is Consonant";  
}


?>