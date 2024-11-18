<?php

include 'setup.php';

if ($_SERVER["REQUEST_METHOD"] =="POST") {

    // Get form data
    $where = $_POST['where'];
    $rarity = $_POST['rarity'];
    $bug = $_POST['bug'];


    // Insert report data into the database
    $sql = "INSERT INTO reports (where, rarity, bug)
            VALUES ('$where', '$rarity', '$bug')";

    if ($conn->query($sql) === TRUE) {
      echo "New report submitted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  ?>