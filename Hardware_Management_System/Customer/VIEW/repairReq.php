<?php
include "../../dbConnection.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ProductId=trim($_POST["ProductId"]);
    $ProductName=trim($_POST["ProductName"]);
    $Issue=trim($_POST["Issue"]);


    $sql="INSERT INTO repair (ProductId, ProductName, Issue) VALUES ('$ProductId','$ProductName','$Issue')";
    if($conn->query($sql)===TRUE){
        echo "<script>alert('Repari request sent')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Repair request</title>
    <link rel="stylesheet" href="../CSS/repair.css">
</head>
<body>
     <div class="controlBar">
        <h1 class="font">We care about your product</h1>
        <ul>
            <li class="font"><a href="customerDashboard.php">Dashboard</a></li>
            <li class="font"><a href="../../Home/VIEW/loginPage.php">Logout</a></li>
        </ul>
    </div>

    <div class="container" style="padding:20px;">

        <form method="POST">
            <h1 style="font-family:Lucida Handwriting">Repair request</h1>
            <label>Product Id:</label>
            <input type="text" id="ProductId" name="ProductId" placeholder="Product  Id"><br><br>
            <label>Product Name</label>
            <input type="text" id="ProductName"name="ProductName" placeholder="Name of your product"><br><br>
            <label style="text-align:left">Problem:</label><br>
            <textarea id="Issue"name="Issue" placeholder="what is the main issue explain briefly"></textarea><br><br>
            <button type="submit" class="repairReq" name="repairReq">Send request</button><br><br>
            <button type="click" class="repairHistory" name="repairHistory"><a href="repairHistory.php">View Repair hisroy</a></button>
        </form>
    </div>
    
</body>
</html>