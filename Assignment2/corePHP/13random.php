<!-- Get random values from array  -->
<?php

$myArray = array('apple', 'banana', 'Strawberry', 'date', 'elderberry');
echo "<pre>";
print_r($myArray);

// Get a single random key from an array
$randomKey = array_rand($myArray);
echo $randomKey . "<br>";
echo $myArray[$randomKey];

?>