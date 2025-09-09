<?php
include "../../dbConnection.php";

if($_SERVER["REQUEST_METHOD"]=="POST"&& isset($_POST['product_id'])){
    $product_id=intval($_POST['product_id']);
    $sql="SELECT productName, Price FROM product WHERE pid=$product_id";
    $result =$conn->query($sql);
    if($result->num_rows>0){
        $product=$result->fetch_assoc();
        $productName=$product['productName'];
        $productPrice=$product['Price'];

        $check_sql="SELECT * FROM cart WHERE pId=$product_id";
        $check_result=$conn->query($check_sql);
        if($check_result->num_rows>0){
            $update_sql="UPDATE cart SET pQuantity=pQuantity+1,pTotalPrice=pQuantity*pPrice WHERE pId=$product_id";
            $conn->query($update_sql);
            echo "<script>alert('item updated successfully');</script>";
        }
        else{
            $pQuantity=1;
            $pTotalPrice=$pQuantity*$productPrice;
            $insert_sql="INSERT INTO cart (pName,pQuantity,pPrice,pTotalPrice,pId) VALUES ('$productName','$pQuantity','$productPrice','$pTotalPrice','$product_id')";
            $conn->query($insert_sql);
            echo "<script>alert('item added successfully');</script>";
            
        }
    }

}


?>
<?php
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
            <li class="font"><a href="cart.php">Cart</a></li>
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
                    <form method='post' action=''>
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
