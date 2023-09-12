<?php
//  How can you declare the array (all type) in PHP? Explain with example 
// [1] Numeric Array
// A numeric array is an array where the keys are numeric indicates, starting from 0.
//  Using array() construct 
$numericArray1 = array(1, 2, 3, 4);

// Using [] shorthand syntax (PHP 5.4+)
$numericArray2 = [5, 6, 7, 8];


echo "<pre><div>----------------------------</div><h2>Numeric Array</h2><div>----------------------------</div>";
print_r($numericArray1);
echo "<br>";
print_r($numericArray2);


// [2]Associative Array
// An associative array is an array where you can assign keys to each element
// Using array() construct

$associativeArray1 = array(
    "name" => "John",
    "age" => 45,
    "city" => "New York"
);


// Using shorthand syntax
$associativeArray2 = [
    "name" => "Jane",
    "age" => 44,
    "city" => "London"
];

echo "<pre><div>----------------------------</div><h2>Associative Array</h2><div>----------------------------</div>";
print_r($associativeArray1);
echo "<br>";
print_r($associativeArray2);


// [3]Multidimensional Array

// A multidimensional array is an array that contains other array as elements.
// Using array construct

$multiArray1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Using shorthand syntax
$multiArray2 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "<pre><div>----------------------------</div><h2>Multidimensional Array</h2><div>----------------------------</div>";
print_r($multiArray1);
echo "<br>";
print_r($multiArray2);

// Mixed-type array
$mixedArray1 = array("John", 30, true);

// Using [] shorthand syntax
$mixedArray2 = ["Jane", 25, false];
echo "<pre><div>----------------------------</div><h2>Mixed-type Array</h2><div>----------------------------</div>";
print_r($mixedArray1);
echo "<br>";
print_r($mixedArray2);

?>