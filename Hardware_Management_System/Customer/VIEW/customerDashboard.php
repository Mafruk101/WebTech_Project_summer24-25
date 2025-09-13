<?php
include "../../dbConnection.php";
session_start();
if(!isset($_SESSION['customer_id'])){
    header("Location:../../Home/VIEW/loginPage.php");
    exit;
}

$customerId=$_SESSION['customer_id'];
$customerName=$_SESSION['customer_name'];

if($_SERVER["REQUEST_METHOD"]=="POST"&& isset($_POST['product_id'])){
    $product_id=intval($_POST['product_id']);
    $sql="SELECT productName, Price, Quantity FROM product WHERE pid=$product_id";
    $result =$conn->query($sql);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        $productName=$row['productName'];
        $productPrice=$row['Price'];
        $mainQuantity=$row['Quantity'];

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


if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['FName'], $_POST['FEmail'], $_POST['FMessage'])){
    $FName= trim($_POST['FName']);
    $FEmail= trim($_POST['FEmail']);
    $FMessage=trim($_POST['FMessage']);

    if(empty($FName)|| empty($FEmail)||empty($FMessage)){
        echo "<script>alert('please fill all the sections for feedback')</script>";
    }
    else{
        $sql="INSERT INTO feedback (FName, FEmail, FMessage) VALUES ('$FName','$FEmail','$FMessage')";
        if($conn->query($sql)===TRUE){
            echo "<script>alert('Feedback sent successfully')</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Customer dashboard</title>
    <link rel="stylesheet" href="../CSS/customerDashboard.css">
</head>
<body>
    <div class="controlBar">
        <h1 class="font">Welcome <?php echo $customerName ?></h1>
        <form method="GET" class="searchContainer" >
            <input type="text" name="search" class="searchbar" placeholder="Search by name" value="<?php echo htmlspecialchars($searchQuery); ?>">
            <input type="submit" class="button" value="Search">
        </form>
        <ul style="font-size: 25px">
            <li class="font"><a href="cart.php">Cart</a></li>
            <li class="font"><a href="../../Home/VIEW/loginPage.php">Logout</a></li>
        </ul>
    </div>
    <div class="mainContainer" style="display: flex;">
    <div class="dashboardListContainer">
        <ul>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="repairReq.php">Repair</a></li>
            <li><a href="#feedBack">Feedback</a></li>
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
    <div class="footer" id="feedBack">
        <h1 style="font-size: 50px;">Always<br>
            choose<br>
            the <br>
            best <br>
            product</h1>
            
        <h2 style="padding:35px;"><b>Monitors</b><br>
        <p style="font-size: 13px;">CRT (Cathode Ray Tube)<br>
        LCD (Liquid Crystal Display)<br>
        LED (Light-Emitting Diode)<br>
        OLED (Organic Light-Emitting Diode)<br>
        MiniLED<br>
        QD-OLED<br>
    </p>
        Brands
        <p style="font-size: 13px;">ASUS<br>
        Dell<br>
        Samsung<br>
        Acer<br>
        ViewSonic<br>
        HP<br>
    </p>
        </h2>

        <h2 style="padding:35px;"><b>keyboards</b><br>
        <p style="font-size: 13px;">Logitech G PRO X TKL RAPID<br>
        T-wolf K220 Wired Keyboard<br>
        Keychron Q5 HE<br>
        Fantech GO K211 <br>
        Razer BlackWidow V4 Pro<br>
        QD-Wooting 80HE<br>
        Keychron B1 Pro Wireless<br>
        Keychron V6 Max<br>
        Havit Kb271 Usb Exquisite<br>
        SteelSeries Apex Pro Mini<br>
        Aula F75 Wireless<br>
        Keychron K2HE<br>
        NuPhy Air60 HE<br>
        Keychron K8<br>
        Aula F75 Wireless<br>
        NuPhy Air60 HE<br>
    </p>
        </h2>

        <h2 style="padding:35px;"><b>keyboards</b><br>
         <p style="font-size: 13px;">
        Wired Mouse<br>
        Wireless Mouse<br>
        Gaming Mouse<br>
        Ergonomic Mouse<br>
        Trackball Mouse<br>
        Vertical Mouse<br>
        Portable Travel Mouse<br>
    </p>
    Brands
    <p style="font-size: 13px;">
        Logitech<br>
        Razer<br>
        Corsair<br>
        SteelSeries<br>
        Glorious<br>
        HyperX<br>
        ASUS ROG<br>
    </p>
        </h2>

        </h2>

        <h2 style="padding:35px;"><b>keyboards</b><br>
        <p style="font-size: 13px;">
        Ultrabooks<br>
        Gaming Laptops<br>
        Business Laptops<br>
        2-in-1 Convertible Laptops<br>
        Student Laptops<br>
        Workstation Laptops<br>
        Budget Laptops<br>
    </p>
    Brands
    <p style="font-size: 13px;">
        Apple (MacBook)<br>
        Dell (XPS, Inspiron, Alienware)<br>
        HP (Spectre, Pavilion, Omen)<br>
        ASUS (ZenBook, ROG, TUF)<br>
        Acer (Aspire, Predator, Swift)<br>
        Lenovo (ThinkPad, Legion, IdeaPad)<br>
        MSI (Stealth, Titan, GF Series)<br>
    </p>
        </h2>
        <div style="padding:35px;">
            <h1>Send us your Feedback</h1>
        <form method="post">
            <input type="text" id="FName" name="FName" placeholder="Name"><br><br>
            <input type="text" id="FEmail" name="FEmail"placeholder="Email"><br><br>
            <textarea id="FMessage" Name ="FMessage" placeholder="Messaege"></textarea><br><br>
            <button type="submit" class="Send">Send</button>
        </form>

        </div>
    
    </div>
    <div style="text-align:center;" class="copyright">© COPYRIGHT 2025 ELECTRO WIZARD ®, INC. ALL RIGHTS RESERVED.</div>
    
</body>
</html>
