<?php
    // Lấy thông tin từ form với method get
    if(isset($_GET["username"]))
    {
        $username = $_GET["username"];
        $password = $_GET["password"];
        if($username == "aptech" && $password == "123")
        {
            echo "Login thành công";
        }
        else
        {
            echo "Login false";
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
    <!-- Phải có biến name cho input -->
    <!-- Method: get sẽ đưa lên thanh địa chỉ (default)-->
     <!-- Method:post sẽ kh đưa lên  -->
    <form Method="get">
        <h1>Form</h1>
        username : <input type="text" name="username"><br>
        password <input type="password" name="password">
        <input type="submit" value="login">
    </form>
</body>
</html>