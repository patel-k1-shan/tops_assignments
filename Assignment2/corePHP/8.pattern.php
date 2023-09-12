<!-- Write a program for this Pattern:
*****
*
*
*
***** -->

<?php

for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {
        if ($row == 1 || $row == 5 || $col == 1) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "<br>";
}
?>