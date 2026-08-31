<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="marks.php";>
        <label>Enter Marks:</label>
        <input type="number" name="marks">
        <input type="submit" value="Submit">
</form>


<?php

$marks=$_POST["marks"];

if ($marks>800) {
    echo "Grade A";
}
elseif ($marks >= 600 && $marks<=800){
    echo "Grade B";
}
elseif ($marks >= 400 && $marks<=600){
    echo "Grade C";
}
else {
    echo "Fail";
}
?>

</body>
</html>