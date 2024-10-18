<?php
    include("connect.php");
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        try {
            $sql = "INSERT INTO crud(name, email, mobile, password) 
                        VALUES ('$username', '$email', $phone, '$password')";
            mysqli_query($conn, $sql);
            header("Location: display.php");
        }
        catch (mysqli_sql_exception) {
            echo "Tao tai khoan khong thanh cong";
        }
        mysqli_close($conn);
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
    <form method="post" action="user.php">
        <label for="">Username:</label>
        <input type="text" name="username"> <br>
        <label for="">Emai:</label>
        <input type="text" name="email"> <br>
        <label for="">Phone:</label>
        <input type="text" name="phone"> <br>
        <label for="">Password:</label>
        <input type="text" name="password"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>