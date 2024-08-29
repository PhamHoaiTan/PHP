<?php
session_start();
require_once("../connectDB.php");
// Dat 
if (isset($_POST["username"]) && isset( $_POST["password"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "select * from userTb where username = '$username' and password = '$password'";
    $users = executeResult($sql);
    if(count($users) ==0)
    {
        $error = "Login fail";
    }
    else
    {   
        // dat session
        $_SESSION["username"] = $users[0]["username"];
        header("location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <p style="color: red;"><?= isset($error)?$error:""?></p>
    <form action="" method="post">
        <div class="">Username <input type="text" name="username" id=""></div>
        <div class="">Password <input type="text" name="password" id=""></div>
        <div class=""><input type="submit" value="Login"></div>
    </form>
</body>
</html>