<?php
function censorComment() {
    $badWords = ["bad", "rude"];  
    $comment = readline("Enter comment: ");


    $censored = str_replace($badWords, "***", $comment);

    echo "Censored comment: $censored\n";


    foreach ($badWords as $word) {
        if (str_contains($comment, $word)) {
            echo "Warning: Bad words were censored.\n";
            break;
        }
    }
}

censorComment();
?>
