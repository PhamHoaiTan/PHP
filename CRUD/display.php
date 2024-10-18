<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }

        table {
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Button</th>

        </tr>
        <?php
        include("connect.php");

        $sql = "SELECT * FROM crud";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['name'] . '</td>
        <td>' . $row['email'] . '</td>
        <td>' . $row['mobile'] . '</td>
        <td>' . $row['password'] . '</td>
        <td>
            <button><a href="update.php?updateId='.$row["id"].'">Update</a></button>
            <button><a href="delete.php?deleteId='.$row["id"].'">Delete</a></button>
        </td>
        </tr>';
            }
        }
        ?>
    </table>
</body>

</html>