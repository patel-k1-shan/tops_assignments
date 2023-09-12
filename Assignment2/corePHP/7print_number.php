<!-- Write a program to print the below format :
5 9
2610
3711
4812 -->

<?php

$firstNumber = 5;
$secondNumber = 9;

echo $firstNumber . ' ' . $secondNumber . "<br>";

for ($i = 2; $i <= 4; $i++) {
    $firstNumber += 1;
    $secondNumber += 1;
    echo $firstNumber . $secondNumber . "<br>";
}

?>