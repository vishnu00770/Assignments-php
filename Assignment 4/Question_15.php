<?php

function processTags(){
    $string=readline("Enter the tags: ");
    $string=explode(",",$string);
    $string=implode(" #",$string);
    echo "#".$string;
}
processTags();


