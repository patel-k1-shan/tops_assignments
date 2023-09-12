<!-- Write a PHP program to find the largest of three numbers using ternary Operator.  -->

<?php

function largestNumber($num1, $num2, $num3)
{
    $largestNum = ($num1 >= $num2 && $num1 >= $num3) ? $num1 : (($num2 >= $num3 && $num2 >= $num1) ? $num2 : $num3);
    return $largestNum;
}

$num1 = 45;
$num2 = 4;
$num3 = 55;

$largestValue = largestNumber($num1, $num2, $num3);
echo $largestValue;

?>