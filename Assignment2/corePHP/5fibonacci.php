<!-- Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21, 34  -->

<?php

$num = 0;
$a = 0;
$b = 1;

echo "<h3> Fibonacci series for first 10 numbers:  </h3>";
echo $a . " " . $b . " ";

while ($num < 8) {
    $c = $a + $b;
    echo $c . " ";
    $a = $b;
    $b = $c;
    $num = $num + 1;
}
?>