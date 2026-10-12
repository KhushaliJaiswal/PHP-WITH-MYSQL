<!DOCTYPE html>
<html>
<head>
    <title>Convert Last 3 Characters</title>
</head>
<body>

    <h2>Convert Last 3 Characters to Uppercase</h2>

    <form method="post">
        <label>Enter a string:</label>
        <input type="text" name="text" required>
        <br><br>

        <button type="submit">Convert</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $text = $_POST["text"];

        if (strlen($text) < 3) {
            $result = strtoupper($text);
        } else {
            $result = substr($text, 0, -3) . strtoupper(substr($text, -3));
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>

</body>
</html>