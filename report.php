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

        <form action="send_report.php" method= "POST">

            <label for="where">Where in the game did this occour?:</label><br>

            <input type="text" id="where" name="where" required><br><br>

            <label for="rarity">Bug Rarity:</label><br>

            <input type="text" id="rarity" name="rarity" required><br><br>

            <label for="bug">Bug Description:</label><br>

            <textarea id="bug" name="bug" rows="4" cols="50" required></textarea><br><br>

            <button type="submit">Submit</button>

        </form>
    </div>
</div>

<div class="footer">
  <a href="index.php">Back</a>
</div>

</body>
</html>

<style>

.grey-body {
    width: 80%;
}

form {
    align-items: center !important;
}

input[type=text], select, textarea {
  width: 80%; 
  padding: 1rem; 
  border: 0.1rem solid #2c2c2c; 
  border-radius: 0.5rem; 
  box-sizing: border-box;
  margin: 1rem;
  font-size: 0.8rem;
}

input[type=email], select, textarea {
  width: 80%; 
  padding: 1rem; 
  border: 0.1rem solid #2c2c2c; 
  border-radius: 0.5rem;
  box-sizing: border-box;
  margin: 1rem;
  font-size: 0.8rem;
}

button {
    background-color: #FFD600; 
    color: black;
    border: none;
    padding: 1.25rem 5rem;
    font-size: 2rem;
    cursor: pointer;
    transition: background-color 0.3s;
    border-radius: 3rem / 1.4rem;
    width: 50%;
}

button:hover {
  background-color: #45a049;
}

</style>