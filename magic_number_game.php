<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Magic Number Game</title>
</head>
<body>
<h1>Magic Number Game</h1>
<form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" id="number" required>
    <button type="submit">Check Magic Number</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = (int)$_POST["number"];
    if ($number % 3 == 0 && $number % 5 == 0) {
        $magic = "FizzBuzz";
    } elseif ($number % 3 == 0) {
        $magic = "Fizz";
    } elseif ($number % 5 == 0) {
        $magic = "Buzz";
    } else {
        $magic = $number;
    }
    echo "<p>The magic number is: <strong>$magic</strong></p>";
}
?>
</body>
</html>
