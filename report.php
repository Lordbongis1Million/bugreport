<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BugReport:Reportpage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>

<?php include 'header.php';?>

<div class="header">
  <img id="logo" src="Assets/Zugbug.PNG" alt="Logo" onclick ="location.href='index.php'"/>
  <h1>Cosmara Bug Reporter</h1>
</div>

<div class="grey-body">
    <div class="gradient-background">
        <form action="email.php" method= "POST">
            <label for="where">Where in the game did this occour?:</label><br>
            <input type="text" id="where" name="where" required><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <label for="bug">Bug Description:</label><br>
            <textarea id="bug" name="bug" rows="4" cols="50" required></textarea><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<div class="footer">
  <a href="index.php">Back</a>
</div>

