<?php
$names = ["Aarav", "Diya", "Kabir", "Anaya", "Ishaan", "Meera", "Rohan", "Tara", "Arjun", "Saanvi"];
function findStudent(){
    global $names;
    $name=readline("Enter the Student Name: ");
    if (in_array($name,$names)){
        echo "At ".array_search($name,$names)."th Index $name is Present";
    }
    else{
        throw new Exception("Name Not Found");
    }
}
try{
    findStudent();
}
catch(exception $e){
    echo "Error:".$e->getMessage();
    
}

?>