<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="wordFind.php";>
        <label>Enter Paragraph:</label><br>
        <textarea name="paragraph" rows="6" cols="50"></textarea><br>
        <label>Enter Search Word:</label><br>
        <input type="text" name="word"><br>
        <input type="Submit" value="Submit">
</form>

<?php
     
        $word=$_POST["word"];
        $para=$_POST["paragraph"];
        
        $count=substr_count($para, $word);
        echo "The word appears $count times"

?>

</body>
</html>

