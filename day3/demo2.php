<?php
    require_once("connectDB.php");
    if(isset($_POST["username"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];     
        $password = $_POST["isActive"]; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h1>Create new username</h1>
        <div class="">
            username <input type="text" name="username">
        </div>
        <div class="">
            password <input type="text" name="password">
        </div>
        <div>
            isActive
            <select name="isActive" id="">
                <option value="1">yes</option>
                <option value="0">no</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</body>
</html>