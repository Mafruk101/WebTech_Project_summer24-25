<?php
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
            if($password==$row["password"]){
                header("Location: ../../Customer/VIEW/customerDashboard.php");
                exit;
            }
            else{
                $passwordError="Invalid password";
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
            <h1>Login</h1><br>
            <form  method="post"> 
                <input type="text" id="username" name="username" placeholder="username"><br>
                <span style="color:red; font-size:20px"><?php echo $usernameError; ?></span>
                <br><br>
                <input type="password" id="password" name="password" placeholder="password"><br>
                <span style="color:red; font-size:20px"><?php echo $passwordError; ?></span>
                <br><br>
                <button type="submit">Submit</button>
            </form>
            <br>
            <a href="">Forgot password?</a> <br>
            <a href="registration.php">Don't have any account?</a>
            <br><br>
            <a href="homePage.php">Home</a>
        </div>

        

    </body>
</html>