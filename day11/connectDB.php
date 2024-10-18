<?php   

$mysql_hostName = "localhost";   
$mysql_user = "root";   
$mysql_password = "";   
$mysql_database = "phpdb2";   

// Insert, update, delete   
function execute($sql){   
    global $mysql_hostName, $mysql_user, $mysql_password, $mysql_database;   

    // Open connection   
    $con = mysqli_connect($mysql_hostName, $mysql_user, $mysql_password, $mysql_database);   

    // Check connection  
    if (!$con) {  
        die("Connection failed: " . mysqli_connect_error());  
    }  

    // Run query  
    if (mysqli_query($con, $sql) === FALSE) {  
        echo "Error: " . mysqli_error($con);  
    }  

    // Close connection   
    mysqli_close($con);   
}   

// Select: list   
function executeResult($sql){   
    global $mysql_hostName, $mysql_user, $mysql_password, $mysql_database;   

    // Open connection   
    $con = mysqli_connect($mysql_hostName, $mysql_user, $mysql_password, $mysql_database);   

    // Check connection  
    if (!$con) {  
        die("Connection failed: " . mysqli_connect_error());  
    }  

    // Run query   
    $result = mysqli_query($con, $sql);   
    $data = []; // Create array to hold returned data   

    if($result != null){   
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){   
            $data[] = $row;   
        }   
    }   

    // Close connection   
    mysqli_close($con);   

    return $data;   
}