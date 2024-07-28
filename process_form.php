<?php

// I wanted to be able to see any errors if there are any in this process
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection setup file
include 'setup.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);
    
    // SQL query to insert form data into the contacts table
    $sql = "INSERT INTO contacts (first_name, last_name, email, message, created_at)
        VALUES ('$first_name', '$last_name', '$email', '$message', NOW())";

    // Execute the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";

    } else {
        echo "Error: " . $sql . " " . $conn->error;
    }

    // Close the database connection
    $conn->close();
//The program should now help me to know if the form was submitted or not    
} else {
    echo "Form was not submitted.";
}

?> 

