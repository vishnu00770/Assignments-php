<?php

function display(){
    
    echo "1.Addition \n";
    echo "2.Substraction \n";
    echo "3.Multiplication \n";
    echo "4.Division \n";
    echo "5.Exit \n";
}
function calculate($choice){
    $a=(int) readline("Enter Number 1: ");
    $b=(int) readline("Enter Number 2: ");
    
    switch ($choice){
        case 1:
            return $a+$b;
        case 2:
            return $a-$b;
            
        case 3:
            return $a*$b;
            
        case 4:
            if ($b==0){
                throw new Exception("Division by zero is not allowed");
            }
            else{
                return $a/$b;
            }
        default:
            echo "Invalid Operator";
    }
            
}           
            
while (true){
    display();
    $choice =(int) readline ("Enter Your Choice: ");
    
    if($choice==5){
        echo "Bye";
        break;
    }
    
    try{
        $res=calculate($choice);
        echo "$res \n";
    }
    catch(Exception $e){
        echo "Error: " . $e->getMessage();
        echo "\n";
    }
}





?>