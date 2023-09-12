<!--  Write program to remove duplicate values from array  -->

<?php

// Simple array with an duplicate values
$originalArray = [1, 2, 3, 4, 2, 3, 5];

// Remove duplicate values
$uniqueArray = array_unique($originalArray);

// Print the unique array
foreach ($uniqueArray as $value) {
    echo $value . " ";
}
?>