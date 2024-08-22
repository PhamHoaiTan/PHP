<?php
function myFunction()
{
    static $num = 10;
    echo  "num is $num <br>";
    $num++;
}
myFunction();
myFunction();
myFunction();
?>