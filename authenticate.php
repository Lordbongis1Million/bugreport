
<?php
session_start();

// Database connection details
include 'setup.php';

 // Check if data from the login form was submitted
 if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please fill both the username and password fields!');
}

// Code to use eventually
//if ($_POST['username'] == 'admin') { header('Location: admin.php');}
//else { header('Location: index.php');}