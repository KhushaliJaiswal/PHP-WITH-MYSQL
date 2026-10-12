<!DOCTYPE html>
<html>
<head>
    <title>Long and Short String</title>
</head>
<body>

    <h2>Long String + Short String + Long String</h2>

    <form method="post">
        Enter first string:
        <input type="text" name="str1" required>
        <br><br>

        Enter second string:
        <input type="text" name="str2" required>
        <br><br>

        <input type="submit" value="Create String">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $str1 = $_POST["str1"];
        $str2 = $_POST["str2"];

        if (strlen($str1) > strlen($str2)) {
            $long = $str1;
            $short = $str2;
        } else {
            $long = $str2;
            $short = $str1;
        }

        $result = $long . $short . $long;

        echo "<h3>Result: $result</h3>";
    }
    ?>

</body>
</html>

