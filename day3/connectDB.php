<?php
$hostName = "localhost";
$user = "root";
$password = "";
$database = "day3";


//insert, update, delete
function execute($sql)
{
    //khai bao su dung bien global
    global $hostName, $user, $password, $database;
    //open connection
    $con = mysqli_connect($hostName, $user, $password, $database);
    mysqli_query($con, $sql);
    //close connection
    mysqli_close($con);
}

function executeResult($sql)
{
    //khai bao su dung bien global
    global $mysql_hostName, $mysql_user, $mysql_password, $mysql_database;
    //open connection
    $con = mysqli_connect($mysql_hostName, $mysql_user, $mysql_password, $mysql_database);
    // run query
    $result = mysqli_query($con, $sql);
    $data = [];
    if ($result != null)
    {
        while($row = mysqli_fetch_array($result, 1))
        {
            $data[] = $row;
        }
    }
    // close connection
    mysqli_close($sql);
    return $data;
}
