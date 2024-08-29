<?php
    require_once("../connectDB.php");
    $sql = "select * from product";
    $products = executeResult($sql);
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
    <h1>Product List</h1>
    <a href="create.php">Create</a>
    <a href="edit.php">Edit</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>

        </tr>
        <?php foreach($products as $pro) {?>
        <tr>
            <td><?= $pro["id"]?></td>
            <td><?= $pro["name"]?></td>
            <td><?= $pro["price"]?></td>
            <td><?= $pro["quantity"]?></td>
            <td>
                <a href="delete.php?id=<?= $pro["id"]?>">delete</button></a>
            </td>
            <td>
                <a href="edit.php?id=<?= $pro["id"]?>">Edit</button></a>
            </td>
        </tr>
        <?php }?>
</body>
</html>