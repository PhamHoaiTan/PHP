<?php
$error = array();
if(isset($_POST['username']) &&  isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!$username){
        $error['username'] = 'username is required';
    }else if(strlen($username) < 3){
        $error['username'] = 'username > 3';
    }

    if(!$password){
        $error['password'] = 'password is required';
    }else if(strlen($password) < 3){
        $error['password'] = 'password > 3';
    }

    if($username == "fpt" && $password == "123"){
        echo("Login success");
    }else{
        echo("Login failed");
    }
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
    <h1>Login</h1>
    <form action="" method="post">
        <div>
            Username <input type="text" name="username">
            <p style="color: red;">
                <?= isset($error['username'])? $error['username']:''?>
            </p>
        </div>
        <div>
            Password <input type="password" name="password">
            <p style="color: red;">
                <?= isset($error['password'])? $error['password']:''?>
            </p>
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</body>
</html>