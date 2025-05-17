<?php
function countWords(){
    $string=readline("Enter the string: ");
    echo str_word_count($string)."\n";
    $arr=explode(" ",$string);
    $new=array();
    foreach ($arr as $a){
        if(in_array($a,$new)){
            continue;
        }
        echo $a."\n";
        $new=[$a];
    }

}
countWords();
?>