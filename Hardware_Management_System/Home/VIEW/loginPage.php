<?php
session_start();
include "../../dbConnection.php";


$usernameError=$passwordError="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=trim($_POST["username"]);
    $password=trim($_POST["password"]);
    
    if(empty($_POST["username"])){
        $usernameError="fill this section";

    }
    if(empty($_POST["password"])){
        $passwordError="fill this section";
    }
    if(empty($usernameError)&& empty($passwordError)){
        $sql="SELECT * FROM customer WHERE username ='$username'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $row = $result->fetch_assoc();
    
            $_SESSION['customer_id']=$row['id'];
            $_SESSION['customer_name']=$row['realname'];
            if($password==$row["password"]){
                header("Location: ../../Customer/VIEW/customerDashboard.php");
                $conn->query("DELETE FROM cart");
                
                exit;
            }
            else{
                $passwordError="invalid password";
            }
            
        }
        else{
            $usernameError="no account found";
        }
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="../CSS/loginpage.css">
    </head>
    <body>
        <div class ="container" >
            <h1 style="font-family:Lucida Handwriting">Login</h1><br>
            <form  method="post"> 
                <input type="text" id="username" name="username" placeholder="username"><br>
                <span style="color:red; font-size:20px"><?php echo $usernameError; ?></span>
                <br><br>
                <input type="password" id="password" name="password" placeholder="password"><br>
                <span style="color:red; font-size:20px"><?php echo $passwordError; ?></span>
                <br><br>
                <label class="font">
                <input type="checkbox" id="showPassword" onclick="togglePassword()"name="showPassword">Show password
                </label>
                <br><br>
                <button type="submit">Sign in</button>
            </form>
            <script>
                function togglePassword(){
                    const inputPassword = document.getElementById("password");
                    if(inputPassword.type ==="password"){
                        inputPassword.type="text";
                    }
                    else{
                        inputPassword.type="password";
                    }
                }
            </script>
            <br>
            <a href="forgotPassword.php">Forgot password?</a> <br>
            <a href="registration.php">Don't have any account?</a>
            <br><br>
            <a href="homePage.php">Home</a>
        </div>

        

    </body>
</html>