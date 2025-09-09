<?php
include "../../dbConnection.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['clear_cart'])){
        $conn->query("DELETE FROM cart");
        echo"<script>alert('Cart cleared successfully');</script>";
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
    <h1 style="text-align:center;">My Cart</h1>
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