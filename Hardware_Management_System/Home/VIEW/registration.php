<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="../CSS/registration.css">
    </head>
    <body>
        <div class="container">

        <h1>Customer Registration</h1>
<?php
// -------------------- PHP VALIDATION LOGIC --------------------

// Step 1: Define variables (start empty)
$name = $email = "";
$nameErr = $emailErr = "";

// Step 2: Run validation only when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- Validate Name ---
    if (empty($_POST["fullname"])) {
        $nameErr = "Name is required"; // error if empty
    } else {
        $name = test_input($_POST["fullname"]); // clean input (fixed key)
        // check if only letters and spaces
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }

    // --- Validate Email ---
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]); // clean input
        // check if valid email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}

// Step 3: Function to clean input (security + neatness)
function test_input($data) {
    $data = trim($data);             // remove extra space
    return $data;
}
?>
        
        <form method="post" action="">
            <input type="text" id="fullname" name="fullname" placeholder="Enter your name"><br><br><br>
            <input type="text" id="username" name="username" placeholder="Enter an username"><br><br><br>
            <input type="text" id="email" name="email" placeholder="Email"><br><br><br>
            <input type="text" id="phone" name="phone" placeholder="Phone Number"><br><br><br>
            <input type="password" id="password" name="password" placeholder="Enter a password"><br><br><br>
            <input type="password" id="reEnterPassword" name="reEnterPassword" placeholder="Re-enter the password"><br><br>
            <label class="font">
            <input type="checkbox" id="showPassword" name="showPassword">Show password
            </label>
            <br><br>
            <button type="submit">Register</button><br><br>
            <a href="loginPage.php">Back</a>
        </form>
        
</div>

<?php
// -------------------- SHOW DATA IF VALID --------------------
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr)) {
    echo "<h3>Your Input:</h3>";
    echo "Name: " . htmlspecialchars($name) . " <br>";
    echo "Email: " . htmlspecialchars($email) . " <br>";
}
?>
    </body>
</html>