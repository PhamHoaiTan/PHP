<?php
 $severname = "localhost";
 $username = "root";
 $password = "";
 $dbname = "day6"; 
//  create connecttion 
$conn = new mysqli($severname, $username, $password, $dbname);
// check connection
if ($conn->connect_error) 
{
    die("connect failed". $conn->connect_error);
}
echo"Connected successfully";

