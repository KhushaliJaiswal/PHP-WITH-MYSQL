<!DOCTYPE html>
<html>
<head>
    <title>Nearest to 100</title>
</head>
<body>

<h2>Find Number Nearest to 100</h2>

<form method="post">
    Enter first number:
    <input type="number" name="num1" required>
    <br><br>

    Enter second number:
    <input type="number" name="num2" required>
    <br><br>

    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST["num1"];
    $b = $_POST["num2"];

    if ($a == $b) {
        echo "<h3>Result: 0</h3>";
    } elseif (abs(100 - $a) < abs(100 - $b)) {
        echo "<h3>Result: $a</h3>";
    } else {
        echo "<h3>Result: $b</h3>";
    }
}
?>

</body>
</html>

