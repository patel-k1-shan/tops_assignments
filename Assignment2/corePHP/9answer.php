<!-- What will be the values of $a and $b after the below code is executed? Explain your answer.
$a = '1';
$b = &$a;
$b = "2$b"; -->


<?php
$a = '1'; // $a is a variable type of string with the value '1'
$b = &$a; // $b is the reference of the $a variable
$b = "2$b"; // $b have the string of value '2' and then $b is reference of the $a so $a has type string with the value '1'

//So, both variable $a and $b will have the value '21'

echo '$a='. $a ."<br>". '$b='. $b;
?>