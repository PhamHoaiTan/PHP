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
        <h2>PRODUCT FORM CREATE</h2>
        <form>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>