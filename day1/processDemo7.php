<?php
    // Lấy thông tin từ form với method get
    if(isset($_POST["username"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
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