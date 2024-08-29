<?php
//gan thu vien connectDB
require_once('connectDB.php');

$sql = "insert into userTb (username, password, isActive) 
            values ('user1', '123', 1)";
//chay cau truy van
execute($sql);