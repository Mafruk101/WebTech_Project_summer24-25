<?php
include "../../dbConnection.php";
$sql="SELECT * FROM repair";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Repair history</title>
    <link rel="stylesheet" href="../CSS/repair.css">
</head>
<body>
    <div class="controlBar">
        <h1 class="font">View repair history</h1>
        <form method="GET" class="searchContainer" >
        </form>
        <ul>
            <li class="font"><a href="customerDashboard.php">Dashboard</a></li>
        </ul>
    </div>
    <h1 style="text-align:center; font-family:Lucida Handwriting">Repair History</h1>
    <form style="font-size: 25px">
        <table>
            <tr>
                <th>Product Id </th>
                <th>Product Name</th>
                <th>Issue</th>
                <th>Repair Status</th>
            </tr>
            <?php
            
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>".$row['ProductId']."</td>
                    <td>".$row['ProductName']."</td>
                    <td>".$row['Issue']."</td>
                    <td>".$row['Status']."</td>
                    </tr>";
                }
            }
            else{
                echo"<tr><td colspan='5'>no repair history</td></tr>";

            }
            ?>
        </table>
    </form>

    
</body>
</html>