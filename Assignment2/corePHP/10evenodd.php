<!-- How can you tell if a number is even or odd without using any Condition or loop? -->

<!-- Using modulo (%) operator -->

<h1>Check if a Number is Odd or Even</h1>
<form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" id="number" required value='<?php if(isset($_POST['number'])){ echo $_POST['number'];} ?>'>
    <button type="submit" name="check">Check</button>
</form>
<?php 

if(isset($_POST['check'])) {
    // print_r($_POST);
    $input = $_POST['number'];
    $result = ($input % 2 === 0) ? "Even" : "Odd";
    echo "The $input is $result number";
}

?>