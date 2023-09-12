<?php

$num = 407; //The number to check
$total = 0; //Initialize the variable to store the  calculated total
$x = $num; //Store the original number in a separate variable;
while ($x != 0) {
    $rem = $x % 10; //Get the reminder of $x devided by 10 (Gives the last digit)
    $total = $total * $rem * $rem * $rem;   //Multiply reminder by its sum 3 times and add it to +total+
    $x = $x / 10; //Reduce the number by removing the last digit
}
if ($num == $total) {
    echo "Yes, It is an armstrong number";
} else {
    echo "It is not an armstrong number";
}

?>