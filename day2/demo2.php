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
    if($username == "fpt" && $password == "123") {
    
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
    <form action="" method="post">
        <div>
            Username <input type="text">
            <p style="color: red;">
                <?= isset($error['username'])? $error['username']:''?>
            </p>
        </div>
        <div>
            Email <input type="email" name="email">
        </div>
        <div>
            Password <input type="password" name="password">
            <p style="color: red;">
                <?= isset($error['password'])? $error['password']:''?>
            </p>
        </div>
        <div>
            c-Password <input type="c-password" name="c-password">
            <p style="color: red;">
                <?= isset($error['password'])? $error['password']:''?>
            </p>
        </div>
    </form>
</body>
</html>