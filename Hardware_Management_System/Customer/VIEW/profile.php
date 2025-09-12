<?php
include "../../dbConnection.php";
session_start();
if(!isset($_SESSION['customer_id'])){
    header("Location: ../../Home/VIEW/loginPage.php");
    exit();
}
$CustomerId=intval($_SESSION['customer_id']);
if($_SERVER["REQUEST_METHOD"]==="POST"&& isset($_POST['update'])){
    $realname=$conn->real_escape_string($_POST['realname']);
    $username=$conn->real_escape_string($_POST['username']);
    $email=$conn->real_escape_string($_POST['email']);
    $phone=$conn->real_escape_string($_POST['phone']);
    $password=$conn->real_escape_string($_POST['password']);

    $sql ="UPDATE customer SET realname = '$realname',username='$username',email='$email', phone='$phone',password='$password' WHERE id=$CustomerId";
    if($conn->query($sql)){
        echo "<script>alert('profile updated successfully')</script>";
    }
    else{
        $conn->error;
    }
}
if($_SERVER ["REQUEST_METHOD"]==="POST"&& isset($_POST['delete'])){
    $sql = "DELETE FROM customer WHERE id= $CustomerId";
    if($conn->query($sql)){
        session_destroy();
        header("Location: ../../Home/VIEW/loginPage.php");
        exit();
    }
    else{
        $conn->error;
    }

}
$sql = "SELECT * FROM customer WHERE id=$CustomerId LIMIT 1";
$result=$conn->query($sql);
if($result->num_rows>0){
    $customer = $result->fetch_assoc();
}
else{
    die("user not found");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>profile</title>
    <link rel="stylesheet" href="../CSS/profile.css">
</head>
<body>
     <div class="controlBar">
        <h1 class="font" style="font-family:Lucida Handwriting">My Profile</h1>
        <ul>
            <li class="font"><a href="customerDashboard.php">Dashboard</a></li>
            <li class="font"><a href="../../Home/VIEW/loginPage.php">Logout</a></li>
        </ul>
    </div>

    <div class="container" style="padding:20px;">
        <?php if (!empty($message)) echo "<p style='color:green;'>$message</p>"; ?>

        <form method="POST">
            <h1>Manage Profile</h1>
            <label>Full name:</label>
            <input type="text" id="realname" name="realname" placeholder="Full name" value="<?php echo htmlspecialchars($customer['realname']); ?>"><br><br>
            <label>Username :</label>
            <input type="text" id="username"name="username" placeholder="Username" value="<?php echo htmlspecialchars($customer['username']); ?>"><br><br>
            <label>Email Id_ :</label>
            <input type="email" id="email"name="email" placeholder="Email" value="<?php echo htmlspecialchars($customer['email']); ?>"><br><br>
            <label>Phone Num:</label>
            <input type="text" id="phone"name="phone" placeholder="Phone" value="<?php echo htmlspecialchars($customer['phone']); ?>"><br><br>
            <label>Password_ :</label>
            <input type="text"id="password"name="password" placeholder="Old password" value="<?php echo htmlspecialchars($customer['password']); ?>"><br><br>

            <button type="submit" class="update" name="update">Update Profile</button><br><br>
            <button type="submit" class="delete" name="delete" onclick="return confirm('Are you sure? This cannot be undone.');">Delete Account</button>
        </form>
    </div>
    
</body>
</html>