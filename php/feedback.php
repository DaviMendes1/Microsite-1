<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $feedback = htmlspecialchars($_POST["feedback"]);

    // Save to a file (or database)
    $file = fopen("feedback.txt", "a");
    fwrite($file, "Name: $name\nFeedback: $feedback\n\n");
    fclose($file);

    echo "Thank you for your feedback!";
}
?>
