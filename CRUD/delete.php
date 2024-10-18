<?php
    include("connect.php");
    if(isset($_GET["deleteId"])) {
        $id = $_GET["deleteId"];
        $sql = "DELETE FROM crud WHERE id = $id";
        mysqli_query($conn, $sql);
        header("location:display.php");
    }
    mysqli_close($conn);
?>