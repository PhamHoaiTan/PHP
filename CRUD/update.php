<?php
include("connect.php");
if (isset($_GET["updateId"])) {
    $id = $_GET["updateId"];
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
    <form action="">

    
        <ul>
            <li>
                Username:
                <input type="text">
            </li>
            <li>
                Email:
                <input type="text">
            </li>
            <li>
                Phone:
                <input type="text">
            </li>
            <li>
                Password:
                <input type="text">
            </li>
        </ul>
    </form>
</body>

</html>