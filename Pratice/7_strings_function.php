<?php
    $username = array("Pham", "Hoai", "Tan");
    $phone = "123-456-7890";
    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, "haha");
    // $phone = str_replace("-","", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals =  strcmp($username, "Hoai Tan");
    // $count = strlen($username);
    // $index = strpos($username, "o");
    // $firstname = substr($username, 0, 4);
    // $lastname = substr($lastname, 5, 7);
    // $fullname = explode(" ", $username);
    $fullname = implode(" ", $username);
     
    echo $fullname
?>