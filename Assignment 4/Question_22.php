<?php
function findEmailSeparator() {
    $email = readline("Enter your email: ");
    
    try {

        if (empty($email)) {
            throw new Exception("Input cannot be empty.");
        }


        $position = strpos($email, "@");


        if ($position === false) {
            throw new Exception("Invalid email: '@' symbol not found.");
        } else {
            echo "The '@' symbol is at position: $position\n";
        }

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

findEmailSeparator();
?>
