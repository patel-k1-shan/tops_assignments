<!-- write a PHP program for find „Thursday‟ in week using switch Function.  -->
<?php
$day = 4;
switch ($day) {
    case "1":
        echo "It is Monday!";
        break;
    case "2":
        echo "It is Tuesday";
        break;
    case "3":
        echo "It is Wednesday";
        break;
    case "4":
        echo "It is Thursday";
        break;
    case "5":
        echo "It is Friday";
        break;
    case "6":
        echo "It is Saturday";
        break;
    case "7":
        echo "It is Sunday";
        break;
    default:
        echo "Invalid Input";
}

?>