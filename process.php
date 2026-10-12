<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
</head>
<body>

<h2>Registration Details</h2>

<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (isset($_POST['terms'])) {
        $terms = $_POST['terms'];
    } else {
        $terms = "No";
    }

    echo "Username: " . htmlspecialchars($username) . "<br>";
    echo "Email Address: " . htmlspecialchars($email) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";
    echo "Mobile No: " . htmlspecialchars($mobile) . "<br>";
    echo "Country: " . htmlspecialchars($country) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";
    echo "Confirm Password: " . htmlspecialchars($confirm_password) . "<br>";
    echo "Terms and Condition: " . htmlspecialchars($terms) . "<br>";
}

?>

</body>
</html>
