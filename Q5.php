<!DOCTYPE html>
<html>
<head>
    <title>Count "aa" in String</title>
</head>
<body>

    <h2>Count "aa" in a String</h2>

    <form method="post">
        <label>Enter a string:</label>
        <input type="text" name="text" required>
        <br><br>

        <button type="submit">Count</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $text = $_POST["text"];

        // Count "aa" including overlapping occurrences
        $count = 0;

        for ($i = 0; $i < strlen($text) - 1; $i++) {
            if ($text[$i] == 'a' && $text[$i + 1] == 'a') {
                $count++;
            }
        }

        echo "<h3>Number of 'aa': $count</h3>";
    }
    ?>

</body>
</html>