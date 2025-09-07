<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="../CSS/loginpage.css">
    </head>
    <body>
        <?php
        $username=$password="";
        $usernameError=$passwordError="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if($_POST["username"]=="Admin"&& $POST["password"]=="1234"){
                echo"Welcome to Admin";
            }
            if(empty($_POST["username"])){
                $usernameError="*";

            }

            if(empty($_POST["password"])){
                $passwordError="*";
            }
        }
        ?>
        <div class ="container" >
            <h1>Login</h1><br>
            <form  method="post"> 
                <input type="text" id="username" name="username" placeholder="username">
                <span style="color:red; font-size:25px"><?php echo $usernameError ?></span>
                <br><br><br>
                <input type="password" id="password" name="password" placeholder="password">
                <span style="color:red; font-size:25px"><?php echo $passwordError ?></span>
                <br><br><br>
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