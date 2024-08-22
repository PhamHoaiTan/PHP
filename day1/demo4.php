<?php
    $var1 = "abc";
    function myFunction()
    {   global $var1; // Khai báo sẽ xài biến var1 ở global (Sữ dụng nhiều lần)
        echo $var1;
    }
    myFuncion();
?>