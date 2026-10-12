<!DOCTYPE html>
<html>
<head>
    <title>Left Rotation of Array</title>
</head>
<body>

    <h2>Left Rotation of Array</h2>

    <form method="post">
        Enter 4 integers separated by commas:
        <input type="text" name="numbers" placeholder="1,2,3,4" required>
        <br><br>

        <input type="submit" value="Rotate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $input = $_POST["numbers"];

        // Convert input string into an array
        $array = array_map('intval', explode(',', $input));

        if (count($array) == 4) {

            // Rotate array to the left
            $newArray = array_merge(
                array_slice($array, 1),
                array_slice($array, 0, 1)
            );

            echo "<h3>Original Array:</h3>";
            echo implode(", ", $array);

            echo "<h3>New Array after Left Rotation:</h3>";
            echo implode(", ", $newArray);

        } else {
            echo "<p>Please enter exactly 4 integers.</p>";
        }
    }
    ?>

</body>
</html>

