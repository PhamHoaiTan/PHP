<?php
    // hashing = transforming sentitive data (password)
    //          into letters, numbers, and/or symbols
    //          via a mathematical process. (similar to en)
    //          hides the original data from 3rd parties

    $password = "pizza123";

    $hash = password_hash($password, PASSWORD_DEFAULT);
    if (password_verify("pizza12", $hash)) {
        echo "Login success";
    }
    else {
        echo "Login fail";
    }
?>