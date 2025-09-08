<?php
include "../../dbConnection.php";

$realnameErr=$usernameErr=$emailErr=$phoneErr=$passwordErr=$repasswordErr="";
function test_input($data){
    $data= trim($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $realname=test_input($_POST["realname"]);
    $username=test_input ($_POST["username"]);
    $email=test_input ($_POST["email"]);
    $phone=test_input ($_POST["phone"]);
    $password=test_input ($_POST["password"]);
    $repassword=test_input ($_POST["repassword"]);
    
    if(empty($_POST["realname"])){
        $realnameErr="please fill this section";
    }
    
    if(empty($_POST["username"])){
        $usernameErr="please fill this section";
    }
    else{
        if(!preg_match("/^[a-zA-Z-' ]*$/", $username)){
             $usernameErr="only letters and space allowed";
        }
    }

    if(empty($_POST["email"])){
        $emailErr="please fill this section";
    }
    else{
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailErr="Invalid email format";
        }
    }

    if(empty($_POST["phone"])){
        $phoneErr="please fill this section";
    }
    else{
        if(!preg_match("/^[0-9]*$/",$phone)){
            $phoneErr="please input only numbers";
        }
    }

    if(empty($_POST["password"])){
        $passwordErr="please fill this section";
    }
    if(empty($_POST["repassword"])){
        $repasswordErr="please fill this section";
    }
    else{
        if($_POST["password"]!=$_POST["repassword"]){
            $repasswordErr="doesn't match with the given password";
        }
    }

    if(empty($realnameErr)&& empty($usernameErr)&&empty($emailErr)&&empty($phoneErr)&&empty($passwordErr)&&empty($repasswordErr))
    {
        $sql ="INSERT INTO customer (realname, username, email, phone, password) VALUES('$realname','$username','$email','$phone','$password')";
        if($conn->query($sql)===TRUE){
            echo "<script>alert('Registration successfull.');</script>";
        }
        


    }

}



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="../CSS/registration.css">
    </head>
    <body>
        <div class="container">

        <h1>Customer Registration</h1>

        <form method="post">
            <input type="text" id="fullname" name="realname" placeholder="Enter your name"><br>
            <span style="color:red; font-size:20px"><?php echo $realnameErr;?></span>
            <br><br>
            <input type="text" id="username" name="username" placeholder="Enter an username"><br>
            <span style="color:red; font-size:20px"><?php echo $usernameErr;?></span>
            <br><br>
            <input type="text" id="email" name="email" placeholder="Email"><br>
            <span style="color:red; font-size:20px"><?php echo $emailErr;?></span>
            <br><br>
            <input type="text" id="phone" name="phone" placeholder="Phone Number"><br>
            <span style="color:red; font-size:20px"><?php echo $phoneErr;?></span>
            <br><br>
            <input type="password" id="password" name="password" placeholder="Enter a password"><br>
            <span style="color:red; font-size:20px"><?php echo $passwordErr;?></span>
            <br><br>
            <input type="password" id="reEnterPassword" name="repassword" placeholder="Re-enter the password"><br>
            <span style="color:red; font-size:20px"><?php echo $repasswordErr;?></span>
            <br>
            <label class="font">
            <input type="checkbox" id="showPassword" name="showPassword">Show password
            </label>
            <br><br>
            <button type="submit">Register</button><br><br>
            <a href="loginPage.php">Back</a>
        </form>
        
        </div>

    </body>
</html>