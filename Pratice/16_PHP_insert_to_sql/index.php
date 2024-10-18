<?php
        include("database.php");        
        $username = "hoaitan";
        $password = "123";
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (id,username, password) VALUES (4,'$username', '$hash')";
        try {
            mysqli_query($conn, $sql);
            echo "Resisted success";
        } 
        catch (mysqli_sql_exception) {
            echo "Resister failt";
        }
        mysqli_close($conn);
?>