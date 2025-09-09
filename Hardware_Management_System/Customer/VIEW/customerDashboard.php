<?php
include "../../dbConnection.php";
$sql = "SELECT * FROM product";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer dashboard</title>
    <link rel="stylesheet" href="../CSS/customerDashboard.css">
</head>
<body>
    <div class="controlBar">
        <h1 class="font">Welcome</h1>
        <ul>
            <li class="font">Cart</li>
            <li class="font"><a href="../../Home/VIEW/loginPage.php">Logout</a></li>
        </ul>
    </div>
    <div class="mainContainer" style="display: flex;">
    <div class="dashboardListContainer">
        <ul>
            <li>Products</li>
            <li>Profile</li>
            <li>History</li>
            <li>Repair</li>
            <li>Feedback</li>
            <li>Rate us</li>
        </ul>
    </div>
    <div class="productsContainer">
        <?php 
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                <div class='productCard'>
                    <img src='../../images/".$row['Image']."' alt='".$row['productName']."'>
                    <h3>".$row['productName']."</h3>
                    <p><b>$".$row['Price']."</b></p>
                    <form method='post' action='cart.php'>
                        <input type='hidden' name='product_id' value='".$row['pid']."'>
                        <button type='submit'>Add to Cart</button>
                    </form>
                </div>
                ";
            }
        } else {
            echo "<p>No product available.</p>";
        }
        ?>
    </div>
    </div>
</body>
</html>
