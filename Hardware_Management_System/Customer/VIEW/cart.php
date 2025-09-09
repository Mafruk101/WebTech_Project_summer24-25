
<?php
include "../../dbConnection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/cart.css">
</head>
<body>
    <h1 style="text-align:center;">My Cart</h1>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        <?php
        $sql="SELECT c.cartId, p.productName,p.Price, p.Quantity FROM cart c JOIN product p ON c.pName=p.pid";
        $result=$conn->query($sql);
        $grand_total=0;
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $total=$row['Price']*$row['quantity'];
                $grand_total+=$total;
                echo"
                <tr>
                <td>".$row['Name']."</td>
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
        ?>
    </table>
    <div style ="text-align:center;">
       <button type="click"><a href='customerDashboard.php'>Continue Shopping</a></button> 
    </div>

</body>
</html>