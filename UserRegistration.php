<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> User Registration </h1>
     
    <form method="post" action="userRegistration">
        Full Name: 
        <input type="text" name="name" required><br>
        Date Of Birth:
        <input type="date" name="date" required><br>
        Email Id:
        <input type="email" name="email" required><br>
        Mobile:
        <input type="number" name="mob" required><br><br>

        <input type="checkbox" name="terms">
        I agree to the tearms and conditions <br>

        <input type="Submit" name="Register"><br>

</form>

<?php

        $name=$_POST["name"];
        $dob=$_POST["date"];
        $email=$_POST["email"];
        $phone=$_POST["mob"];

        $count=$explode("",trim($name));

        $birthdate= new DateTime($dob);
        $today = new DateTime();
        $age = $today-> diff($birthdate)->y;

        if (count($count)!=2) {
            echo "Error: Full Name should be of 2 words";
        }
        elseif ($age<=18){
            echo "Error: Age must be above 18.";
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Error: Invalid email ID";
        }
        elseif (!issets($_POST["terms"])) {
            echo "Error: Please agree to the terms and conditions.";
        }
        else {
            echo "<h2> Submission successful!";
        }
?>

</body>
</html>