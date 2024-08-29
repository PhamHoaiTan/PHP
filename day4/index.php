<?php
    require_once("./connectDB.php");
    $sql = "select * from product";
    $products = executeResult($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body
        {
            background-color: beige;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($products as $pro) {?>
            <div class="col-4 mt-3" style="background-color:aqua; height:300px ">
                <h1>Ten san pham: <?= $pro["name"]?></h1>
                <p>Price: <?= $pro["price"]?></p>
                <p>Quantity: <?= $pro["quantity"]?></p>
                <button>BUY NOW</button>    
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>