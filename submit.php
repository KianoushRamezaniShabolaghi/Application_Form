<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']); // Get the name and sanitize input
    $email = htmlspecialchars($_POST['email']); // Get the email and sanitize input

    // Open the CSV file in append mode
    $file = fopen("students.csv", "a");

    // Add the name and email to the file as a new row
    fputcsv($file, [$name, $email]);

    // Close the file
    fclose($file);

    // Display success message
    echo "<h1>Thank you!</h1>";
    echo "<p>Your information has been successfully received.</p>";
}
?>
