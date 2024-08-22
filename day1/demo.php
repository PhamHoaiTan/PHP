<?php
//include function
function myFuncion()
{
    $var1 = 'Nguyen Van A';
    echo 'Bien var trong my function';
}


function getSum($num1, $num2)
{
    $sum = $num1 + $num2;
    echo 'sum is' . $sum;
}
echo '<br>';
getSum(2,3);
echo '<br>';
getSum('abc',3);
?>