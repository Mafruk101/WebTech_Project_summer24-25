<?php
session_start();
include "../../dbConnection.php";
if(!isset($_SESSION['customer_id'])){
    header("Location:../../Home/VIEW/loginPage.php");
    exit;
}

$customerId=$_SESSION['customer_id'];
$customerName=$_SESSION['customer_name'];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['clear_cart'])){
        $conn->query("DELETE FROM cart");
        echo"<script>alert('Cart cleared successfully');</script>";
    }
    if(isset($_POST['confirm_order'])){
        $grandTotalSql="SELECT SUM(pTotalPrice) AS grand_total FROM cart";
        $grandTotal_result=$conn->query($grandTotalSql);
        $grand_total=0;
        if($grandTotal_result&& $row=$grandTotal_result->fetch_assoc()){
            $grand_total=$row ['grand_total'];
        }
        if($grand_total>0){
            $conn->query("INSERT INTO orders (CustomerId, CustomerName, GrandTotal) VALUES ('$customerId','$customerName',$grand_total)");
            $conn->query("DELETE FROM cart");
            echo"<script>alert('order confirmed successfully')</script>";
        }

        
    }
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/cart.css">
    <script>
        function confirmClear(){
            return confirm("Do you wanna clear the cart?");
        }
        function confirmOrder(){
            return confirm("do you wanna confirm the order");
        }
    </script>
</head>
<body>
    <h1 style="text-align:center; font-family:Lucida Handwriting;">My Cart</h1>
    <form method="post">
    <table>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        <?php
        $sql="SELECT * FROM cart";
        $result=$conn->query($sql);
        $grand_total=0;
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $total = $row['pTotalPrice'];
                $grand_total+=$total;
                echo"
                <tr>
                <td>".$row['pName']."</td>
                <td>".$row['pPrice']."</td>
                <td>".$row['pQuantity']."</td>
                <td>".$total."</td>
                </tr>";
            }
            echo"
            <tr>
            <td colspan='3'><b>Grand Total</b></td>
            <td><b>$grand_total</b></td>
            </tr>";
        }
        else{
            echo"<tr><td colspan='4'>Cart is empty</td></tr>";
        }
        ?>
    </table>
    <div style ="text-align:center;">
       <button type="click"><a href='customerDashboard.php'>Continue Shopping</a></button> 
       <button type="submit" name="confirm_order" onclick="return confirmOrder()">Confirm your order</button>
       <button type="submit" name="clear_cart" onclick="return confirmClear()">Clear</button>
    </div>
    </form>

</body>
</html>