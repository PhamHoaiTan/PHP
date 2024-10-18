<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the home page
    <br>
    <a href="index.php">Login</a>
    <br>
    <form action="home.php" method="post">
        <input type="submit" value="Logout" name="Logout">
    </form>
</body>
</html>

<?php
   if (isset($_POST["Logout"])) {
    session_destroy();
    header("Location: index.php");
   }
?>