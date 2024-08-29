<?php 
    require_once('connectDB.php');
    $sql = "select * from userTb";
    $users = executeResult($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>USER NAME</th>
            <th>PASSWORD</th>
            <th>ISACTIVE</th>
            <th>ACTION</th>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?=$user['id']?></td>
                <td><?=$user['username']?></td>
                <td><?=$user['password']?></td>
                <td><?=$user['isActive']?></td>
                <td>
                    <a href="demo4.php">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>