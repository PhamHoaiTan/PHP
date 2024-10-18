<?php
    include("database.php");
    
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);
        echo $row["username"] . "<br>";
        echo $row["password"] . "<br>";
    }
    mysqli_close($conn);
?>