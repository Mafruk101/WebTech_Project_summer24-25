<?php
include "../../dbConnection.php";
$IdError=$newPassError=$ReNewPassError="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $CustomerId=intval($_POST['CustomerId']);
    $NewPass=trim($_POST['NewPassword']);
    $ReNewPass=trim($_POST['Re_NewPassword']);
    if(empty($CustomerId)){
        $IdError="Fill this section";
    }
    if(empty($NewPass)){
        $newPassError="Fill this section";
    }
    if(empty($ReNewPass)){
        $ReNewPassError="Fill this section";
    }
    if($NewPass!=$ReNewPass){
        $ReNewPassError="Not matched with new password";
    }
    if(empty($IdError)&& empty($newPassError)&& empty($ReNewPassError)){
        $sql="UPDATE customer SET password=$NewPass WHERE id=$CustomerId";
        if($conn->query($sql)==TRUE);
        {
            echo"<script>alert('Password changed succesfully.')</script>";
        }
    }



}

?>
<!DOCTYPE html>
<html >
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../CSS/forgotPassword.css">
</head>
<body>
    <div class ="container" >
            <h1 style="font-family:Lucida Handwriting">Change password</h1><br>
            <form  method="post"> 
                <input type="text" id="CustomerId" name="CustomerId" placeholder="Enter your id"><br>
                <span style="color:red; font-size:20px"><?php echo $IdError; ?></span>
                <br><br>
                <input type="text" id="NewPassword" name="NewPassword" placeholder="Enter new password"><br>
                <span style="color:red; font-size:20px"><?php echo $newPassError; ?></span>
                <br><br>
                <input type="text" id="Re_NewPassword" name="Re_NewPassword" placeholder="Re-enter new password"><br>
                <span style="color:red; font-size:20px"><?php echo $ReNewPassError; ?></span>
                <br><br>
                <button type="submit">Change password</button>
            </form>

            <br><br>
            <a href="loginPage.php">Login</a>
        </div>
    
</body>
</html>