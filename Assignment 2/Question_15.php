<?php

function reverse($text){
    $rev=strrev($text);
    echo "$rev";
}

$text=readline ("Enter Your Text: ");
reverse($text);
?>