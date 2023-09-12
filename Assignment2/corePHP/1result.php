<!-- Write a PHP program to enter marks of five subjects Physics, Chemistry,Biology, Mathematics and Computer, calculate percentage and grade by if else -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label>Physics</label>
        <input type="text" name="physics"><br><br>
        <label>Biology</label>
        <input type="text" name="biology"><br><br>
        <label>Chemistry</label>
        <input type="text" name="chemistry"><br><br>
        <label>Mathematics</label>
        <input type="text" name="mathematics"><br><br>
        <label>Computer</label>
        <input type="text" name="computer"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php

echo "<pre>";
print_r($_POST);

$physics = $_POST['physics'];
$biology = $_POST['biology'];
$chemistry = $_POST['chemistry'];
$mathematics = $_POST['mathematics'];
$computer = $_POST['computer'];

$total = $physics + $biology + $chemistry + $mathematics + $computer;
$percentage = ($total / 500) * 100;

if ($percentage >= 90 && $percentage <= 100) {
    $grade = "A+";
} elseif ($percentage >= 80) {
    $grade = "A";
} elseif ($percentage >= 70) {
    $grade = "B";
} elseif ($percentage >= 60) {
    $grade = "C";
} elseif ($percentage >= 50) {
    $grade = "D";
} else {
    $grade = "FAILED";
}

echo "Total Marks = $total / 100 <br>";
echo "Percentage = $percentage <br>";
echo "Grade = $grade";


?>