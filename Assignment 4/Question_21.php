<?php
function formatName() {
    $input = readline("Enter your name: ");
    

    $formattedName = ucwords(strtolower($input));
    
    echo "Formatted Name: $formattedName\n";

    echo match ($formattedName) {
        "Ravi Kumar" => "Welcome, Ravi Kumar!",
        "John Doe"   => "Hello, John!",
        default      => "Greetings, $formattedName!"
    };
}

formatName();
?>
