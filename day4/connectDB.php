<?php
$mysql_hostName = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "day4";

//insert, update, delete
function execute($sql){
    //khai bao su dung bien global
    global $mysql_hostName, $mysql_user, $mysql_password, $mysql_database;
    //open connection
    $con = mysqli_connect($mysql_hostName, $mysql_user, $mysql_password, $mysql_database);   
    mysqli_query($con, $sql);
    //close connection
    mysqli_close($con);
}

//select
function executeResult($sql){
    //khai bao su dung bien global
    global $mysql_hostName, $mysql_user, $mysql_password, $mysql_database;
    //open connection
    $con = mysqli_connect($mysql_hostName, $mysql_user, $mysql_password, $mysql_database);
    //run query
    $result = mysqli_query($con, $sql);
    $data = []; //tạo mảng chứa dữ liệu trả về
    if($result != null){
        while($row = mysqli_fetch_array($result,1)){
            $data[] = $row;
        }
    }
    //close connection
    mysqli_close($con);
    return $data;
}