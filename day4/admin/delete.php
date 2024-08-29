<?php
require_once("../connectDB.php");
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    $sql = "delete from product where id = $id";
    execute($sql);
    header("location: index.php");
}
?>