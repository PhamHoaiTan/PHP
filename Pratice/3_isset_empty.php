<?php
// isset() = Returns TRUE if a variable is declared and not null
// empty() = Returns TRUE if a variable is not declared, false, null, "".

if (empty($username)) {
    echo "connect success";
} else {
    echo "username is not found";
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
    <form action="3_isset_empty.php" method="post">
        <label for=""> username:</label>
        <input type="text" name="username" id=""> <br>
        <label for=""> password:</label>
        <input type="text" name="password"><br>
        <input type="submit" placeholder="submit" name="login">
    </form>
</body>

</html>

<?php
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(empty($username))
    {
        echo "Username is missing";
    }
    elseif (empty($password)) {
        echo "Password is missing";
    }
    else {
        echo "Hello {$username}";
    }
}
?>