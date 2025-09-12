<?php
include "../../dbConnection.php";
$searchQuery='';
if(isset($_GET['search'])&& !empty(trim($_GET['search']))){
    $searchQuery=$conn->real_escape_string($_GET['search']);
    $sql ="SELECT * FROM orders WHERE CustomerId LIKE '%$searchQuery%' OR CustomerName LIKE '%$searchQuery%'";

}
else{
    $sql ="SELECT * FROM orders";
}
$result=$conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/history.css">
</head>
<body>
    <div class="controlBar">
        <h1 class="font">View order history</h1>
        <form method="GET" class="searchContainer" >
            <input type="text" name="search" class="searchbar" placeholder="Search by id or name" value="<?php echo htmlspecialchars($searchQuery); ?>">
            <input type="submit" class="button" value="Search">
        </form>
        <ul style="font-size: 25px">
            <li class="font"><a href="customerDashboard.php">Back</a></li>
        </ul>
    </div>
    <h1 style="text-align:center;font-family:Lucida Handwriting;">Purchase History</h1>
    <form>
        <table>
            <tr>
                <th>Customer Id</th>
                <th>Customer Name</th>
                <th>Grand Total</th>
            </tr>
            <?php
            
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>".$row['CustomerId']."</td>
                    <td>".$row['CustomerName']."</td>
                    <td>".$row['GrandTotal']."</td>
                    </tr>";
                }
            }
            else{
                echo"<tr><td colspan='3'>History is empty</td></tr>";

            }
            ?>
        </table>
    </form>
</body>
</html>