<!DOCTYPE html>
<html>
<head>
    <title>User Input Form</title>
</head>
<body>

<h2>User Information Form</h2>

<form method="post" action="">
    <label>Full Name:</label>
    <input type="text" name="fullname" required>
    <br><br>

    <label>Email Address:</label>
    <input type="email" name="email" required>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    echo "<h3>Submitted Information:</h3>";
    echo "Full Name: " . htmlspecialchars($fullname) . "<br>";
    echo "Email Address: " . htmlspecialchars($email);
}
?>

</body>
</html>
