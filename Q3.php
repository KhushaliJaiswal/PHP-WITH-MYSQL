<?php

// Initialize variables
$username = "";
$email = "";
$gender = "";
$mobile = "";
$country = "";
$password = "";
$confirm_password = "";
$terms = "";

$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form values
    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $gender = $_POST["gender"] ?? "";
    $mobile = trim($_POST["mobile"] ?? "");
    $country = $_POST["country"] ?? "";
    $password = $_POST["password"] ?? "";
    $confirm_password = $_POST["confirm_password"] ?? "";
    $terms = $_POST["terms"] ?? "";

    // Username validation
    if ($username == "") {
        $errors["username"] = "Username is required.";
    } elseif (!preg_match("/^[a-zA-Z0-9 ]+$/", $username)) {
        $errors["username"] = "Username should contain only alphanumeric data and space.";
    }

    // Email validation
    if ($email == "") {
        $errors["email"] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Enter a valid email address.";
    }

    // Gender validation
    if ($gender == "") {
        $errors["gender"] = "Gender must be selected.";
    }

    // Mobile validation
    if ($mobile == "") {
        $errors["mobile"] = "Mobile number is required.";
    } elseif (!preg_match("/^\+?[0-9]+$/", $mobile)) {
        $errors["mobile"] = "Mobile number should contain only numbers and an optional + symbol.";
    }

    // Country validation
    if ($country == "") {
        $errors["country"] = "Country must be selected.";
    }

    // Password validation
    if ($password == "") {
        $errors["password"] = "Password is required.";
    } elseif (strlen($password) < 8) {
        $errors["password"] = "Password must be at least 8 characters long.";
    }

    // Confirm password validation
    if ($confirm_password == "") {
        $errors["confirm_password"] = "Confirm password is required.";
    } elseif ($password != $confirm_password) {
        $errors["confirm_password"] = "Confirm password must be same as Password.";
    }

    // Terms validation
    if ($terms == "") {
        $errors["terms"] = "You must agree to the terms and conditions.";
    }

    // If there are no errors
    if (empty($errors)) {
        echo "<p style='color:green; font-weight:bold;'>Registration successful!</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            width: 500px;
            margin: 30px auto;
        }

        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 15px;
        }

        input, select {
            padding: 6px;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-left: 5px;
        }

        .submit {
            margin-left: 150px;
            padding: 8px 20px;
        }
    </style>
</head>

<body>

<div class="form-container">

    <h2>Registration Form</h2>

    <form method="post" action="Q3.php">

        <!-- Username -->
        <label>Username:</label>
        <input type="text" name="username"
               value="<?php echo htmlspecialchars($username); ?>">

        <?php
        if (isset($errors["username"])) {
            echo "<span class='error'>* " . $errors["username"] . "</span>";
        }
        ?>
        <br><br>


        <!-- Email -->
        <label>Email Address:</label>
        <input type="text" name="email"
               value="<?php echo htmlspecialchars($email); ?>">

        <?php
        if (isset($errors["email"])) {
            echo "<span class='error'>* " . $errors["email"] . "</span>";
        }
        ?>
        <br><br>


        <!-- Gender -->
        <label>Gender:</label>

        <input type="radio" name="gender" value="Male"
            <?php if ($gender == "Male") echo "checked"; ?>>
        Male

        <input type="radio" name="gender" value="Female"
            <?php if ($gender == "Female") echo "checked"; ?>>
        Female

        <?php
        if (isset($errors["gender"])) {
            echo "<span class='error'>* " . $errors["gender"] . "</span>";
        }
        ?>
        <br><br>


        <!-- Mobile -->
        <label>Mobile No:</label>
        <input type="text" name="mobile"
               value="<?php echo htmlspecialchars($mobile); ?>">

        <?php
        if (isset($errors["mobile"])) {
            echo "<span class='error'>* " . $errors["mobile"] . "</span>";
        }
        ?>
        <br><br>


        <!-- Country -->
        <label>Country:</label>

        <select name="country">
            <option value="">-- Select Country --</option>

            <option value="India"
                <?php if ($country == "India") echo "selected"; ?>>
                India
            </option>

            <option value="Nepal"
                <?php if ($country == "Nepal") echo "selected"; ?>>
                Nepal
            </option>

            <option value="USA"
                <?php if ($country == "USA") echo "selected"; ?>>
                USA
            </option>

            <option value="UK"
                <?php if ($country == "UK") echo "selected"; ?>>
                UK
            </option>

            <option value="Canada"
                <?php if ($country == "Canada") echo "selected"; ?>>
                Canada
            </option>
        </select>

        <?php
        if (isset($errors["country"])) {
            echo "<span class='error'>* " . $errors["country"] . "</span>";
        }
        ?>
        <br><br>


        <!-- Password -->
        <label>Password:</label>
        <input type="password" name="password">

        <?php
        if (isset($errors["password"])) {
            echo "<span class='error'>* " . $errors["password"] . "</span>";
        }
        ?>
        <br><br>


        <!-- Confirm Password -->
        <label>Confirm Password:</label>
        <input type="password" name="confirm_password">

        <?php
        if (isset($errors["confirm_password"])) {
            echo "<span class='error'>* " . $errors["confirm_password"] . "</span>";
        }
        ?>
        <br><br>


        <!-- Terms and Conditions -->
        <label>Terms:</label>

        <input type="checkbox" name="terms" value="Yes"
            <?php if ($terms == "Yes") echo "checked"; ?>>

        I agree to the terms and condition.

        <?php
        if (isset($errors["terms"])) {
            echo "<span class='error'>* " . $errors["terms"] . "</span>";
        }
        ?>
        <br><br>


        <!-- Submit -->
        <input type="submit" value="Submit" class="submit">

    </form>

</div>

</body>
</html>
