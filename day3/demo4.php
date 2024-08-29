<?php
//gan thu vien connectDB
require_once('connectDB.php');

$sql = "delete from userTb where id = $id";
//chay cau truy van
execute($sql);
header('location: demo3.php')
?>