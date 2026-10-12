<!DOCTYPE html>
<html>
<head>
    <title>Check Number Range</title>
</head>
<body>

    <h2>Check Two Numbers</h2>

    <form method="post">
        <label>Enter first number:</label>
        <input type="number" name="num1" required>
        <br><br>

        <label>Enter second number:</label>
        <input type="number" name="num2" required>
        <br><br>

        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        if (
            (($num1 >= 40 && $num1 <= 50) &&
             ($num2 >= 40 && $num2 <= 50))
            ||
            (($num1 >= 50 && $num1 <= 60) &&
             ($num2 >= 50 && $num2 <= 60))
        ) {
            echo "<h3>Result: true</h3>";
        } else {
            echo "<h3>Result: false</h3>";
        }
    }
    ?>

</body>
</html>
