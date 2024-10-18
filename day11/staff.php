<?php
include('connectDB.php');
$sql = "SELECT * FROM tbBook";
$list = executeResult($sql);
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
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th> Price</th>
                    <th> AUthor</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php

                    foreach ($list as $item) { ?>
                        <tr>
                            <td><?php echo $item['code']?></td>
                            <td><?php echo $item['name']?></td>
                            <td><?php echo $item['price']?></td>
                            <td><?php echo $item['author']?></td>
                        </tr>
                <?php }
                
                ?>
    5. 
    6.             </tbody>
    7.         </table>
    8.     </div>
    9. 
    10. </body>
    11. 
    12. </html>
 