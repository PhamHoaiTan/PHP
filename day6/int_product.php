<?php
include("./connectdb.php");
$sql = "SELECT * from productdb";
$products = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <h2>PRODUCT LIST</h2>
        <a href="./create_product.php">Create product</a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Decscription</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($products->num_rows > 0) {
                    foreach ($products as $item) { ?>
                        <tr>
                            <td><?php echo $item['name'] ?></td>
                            <td><?php echo $item['price'] ?></td>
                            <td><?php echo $item['description'] ?></td>
                            <td><?php echo $item['image'] ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
                <tr>
            </tbody>
        </table>
    </div>

</body>

</html>