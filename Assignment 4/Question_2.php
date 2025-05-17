<?php
$allValues=[];

function display(){
    echo "1.Add New Task\n";
    echo "2.Show Task\n";
    echo "3.Mark as Done\n";
    echo "4.Delete Task\n";
    echo "5.Remove Last Task\n";
    echo "6.Exit\n";
}

function add(){
    global $allValues;
    $task=readline("Enter Task Name: ");
    if (empty($task) || !(is_string($task))){
        new Exception("Invalid Input");
        return;
    }
    $arr=["Task"=>$task,"Done"=>false];
    $allValues[]=$arr;
}
function showTask(){
    global $allValues;
    $i=0;
    foreach ($allValues as $items){
        if ($items["Done"]){
            echo ($i." ".$items["Task"]."-> "."Complted \n");
            $i+=1;
        }
            
        else{
            echo ($i." ".$items["Task"]."-> "."Not Complted\n");
        }
        $i+=1;
    }
}

function MarkAsDone(){
        global $allValues;
    $i=0;
    foreach ($allValues as &$items){
        if ($items["Done"]){
            echo ($i." ".$items["Task"]."-> "."Completed \n");
            $i+=1;
        }
            
        else{
            echo ($i." ".$items["Task"]."-> "."Not Completed\n");
        }
        $i+=1;
    }
    
    $num=(int)readline( "Select The Task You Want to Mark as Done: ");
    
        $j=0;
    foreach ($allValues as &$items){
        if ($j==$num){
            $items["Done"]=true;
            echo "Marked as Done\n";
        }
        $j+=1;
    }
    
}

function delete(){
    global $allValues;
    $i=0;
    foreach ($allValues as $items){
        if ($items["Done"]){
            echo ($i." ".$items["Task"]."-> "."Completed \n");
            $i+=1;
        }
            
        else{
            echo ($i." ".$items["Task"]."-> "."Not Completed\n");
        }
        $i+=1;
    }
    
    
    $num=(int)readline ("Enter the Number of the task You want to Delete: ");
        unset($allValues[$num]);
    echo "Deleted Successfully\n";
    
    
}
function removeLastTask(){
    global $allValues;
    array_pop($allValues);
    echo "Deleted Last Task Successfully\n";
}

while(true){
    display();
     $inp=readline("Enter Your Choice: ");
     
     if($inp==6){
         echo "Exiting";
         break;
     }
     try{
        switch($inp){
            case 1:
                add(); break;
                
            case 2:
                showTask(); break;
            case 3:
                MarkAsDone(); break;
            case 4:
                delete();break;
            case 5:
                removeLastTask();break;
            default:
                echo "Invalid Input\n";
            }
     }
     catch(Exception $e){
        echo "Error: ".$e->getMessage()."\n";
     }

}












?>