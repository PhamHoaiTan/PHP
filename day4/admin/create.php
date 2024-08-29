<?php
require_once("../connectDB.php");

if (isset($_POST["name"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $sql = "insert into product(id, name, price, quantity) values ($id,'$name', '$price', '$quantity')";
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
    <h1>Create new Product</h1>
    <form action="" method="post">
        <div>id: <input type="text" name="id"></div>
        <div>Name: <input type="text" name="name"></div>
        <div>Price: <input type="text" name="price"></div>
        <div>Quantity: <input type="text" name="quantity"></div>
        <div><input type="submit" value="Create"></div>
    </form>
</body>

</html>