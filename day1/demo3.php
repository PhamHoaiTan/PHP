<?php
//khai bao ham
function myFuncion(){
    //khai bao bien
    $var1 = "nguyen van a";
    echo 'bien var1 trong myFuncion: ' .$var1;
}
myFuncion();

function getSum($num1, $num2){
    $sum = $num1 + $num2;
    echo 'sum is:' .$sum;
}

getSum(2,3);
?>