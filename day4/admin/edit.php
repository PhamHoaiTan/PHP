<?php
    require_once("../connectDB.php");
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $sql = "select * from product where id = $id";
        $product = executeResult($sql)[0];
    }
    if(isset($_POST["name"]))
    {
        $name = $_POST["name"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $sql = "update product set name = '$name', price = $price, quantity = $quantity where id = $id";
        execute($sql);
        header("location: index.php");
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
<h1>Edit</h1>
    <form action="" method="post">
        <div>Name: <input type="text" name="name" value="<?=$product["name"]?>"></div>
        <div>Price: <input type="text" name="price" value="<?=$product["price"]?>"></div>
        <div>Quantity: <input type="text" name="quantity" value="<?=$product["quantity"]?>"></div>
        <div><input type="submit" value="Edit"></div>
    </form>
</body>
</html>