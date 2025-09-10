<?php
include "../../dbConnection.php";

if($_SERVER["REQUEST_METHOD"]=="POST"&& isset($_POST['product_id'])){
    $product_id=intval($_POST['product_id']);
    $sql="SELECT productName, Price, Quantity FROM product WHERE pid=$product_id";
    $result =$conn->query($sql);
    if($result->num_rows>0){
        $product=$result->fetch_assoc();
        $productName=$product['productName'];
        $productPrice=$product['Price'];
        $mainQuantity=$product['Quantity'];

        $check_sql="SELECT * FROM cart WHERE pId=$product_id";
        $check_result=$conn->query($check_sql);

        if($check_result->num_rows>0){
            if($mainQuantity>=1){
                $update_sql="UPDATE cart SET pQuantity=pQuantity+1,pTotalPrice=pQuantity*pPrice WHERE pId=$product_id";
                $conn->query($update_sql);
                $conn->query("UPDATE product SET Quantity=Quantity-1 WHERE pid =$product_id");
                echo "<script>alert('item updated successfully');</script>";
            }
            else{
                echo"<script>alert('Not enough products');</script>";
            }
        }
        else{
            if($mainQuantity>=1){
                $pQuantity=1;
                $pTotalPrice=$pQuantity*$productPrice;
                $insert_sql="INSERT INTO cart (pName,pQuantity,pPrice,pTotalPrice,pId) VALUES ('$productName','$pQuantity','$productPrice','$pTotalPrice','$product_id')";
                $conn->query($insert_sql);
                $conn->query("UPDATE product SET Quantity=Quantity-1 WHERE pid =$product_id");
                echo "<script>alert('item added successfully');</script>";
            }
            else{
                echo"<script>alert('Not enough products');</script>";
            }
            
        }
    }

}

$searchQuery='';
if(isset($_GET['search'])&& !empty(trim(trim($_GET['search'])))){
    $searchQuery=$conn->real_escape_string($_GET['search']);
    $sql ="SELECT * FROM product WHERE productName LIKE '%$searchQuery%'";
}
else{
    $sql = "SELECT * FROM product";
}
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
        <form method="GET" class="searchContainer" >
            <input type="text" name="search" class="searchbar" placeholder="Search by name" value="<?php echo htmlspecialchars($searchQuery); ?>">
            <input type="submit" class="button" value="Search">
        </form>
        <ul>
            <li class="font"><a href="cart.php">Cart</a></li>
            <li class="font"><a href="../../Home/VIEW/loginPage.php">Logout</a></li>
        </ul>
    </div>
    <div class="mainContainer" style="display: flex;">
    <div class="dashboardListContainer">
        <ul>
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
