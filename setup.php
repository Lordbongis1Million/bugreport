<?php
// Database connection details
$servername = "localhost";
$username = "secuser";
$password = "greenChair153";
$dbname = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
