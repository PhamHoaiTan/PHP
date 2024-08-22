<?php
    // Lay thong tin cua form
    // Tạo biến chứa lỗi
     $error = array();
     $error ["name"] = "";
    // Lấy thông tin của form
    if(isset($_POST["name"]))
    {   
        $name = $_POST["name"];
        if(!$name)
        {
             $error['name'] = "name is required";
        }
        $email = $_POST["email"];
        $city = $_POST["city"];
        $yob = $_POST["yob"];
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
    <h1>Register Form</h1>
    <form action="post">
        <h1>Name <input type="text" name="name">
        <!-- <.?php echo "$error['name']"?> -->
        <!-- Toán tử ba ngôi -->
        <span style="color: red;"><?=$error['name']?></span></h1>
        <span style="color: red;"><?=isset($error['name'])?$error['name']:''?></span></h1>

        <h1>Email: <input type="email" name="email"></h1>
        <h1>City: <input name="city"></h1>
        <h1>Yob: <input name="yob"></h1>
        <h1><input type="submit" value="submit"></h1>
    </form>
</body>
</html>