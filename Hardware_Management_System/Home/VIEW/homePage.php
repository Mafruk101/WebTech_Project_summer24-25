<?php
include "../../dbConnection.php";
$sql="SELECT * FROM product";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    <link rel="stylesheet" href="../CSS/homePage.css">
</head>
<body>
    <div class="controlBar">
        <h1 class="font" >Electro Wizard</h1>
        <ul>
            <li class="font"><a href="#aboutUs">About us</a></li>
            <li class="font"><a href="#aboutUs">Contact</a></li>
            <li class="font"><a href="loginPage.php">Login/Register</a></li>
        </ul>
    </div>
    <div class="menu"  >
        <ul>
            <li class="font"><a href="#aboutUs">Monitors</a></li>
            <li class="font"><a href="#aboutUs">Keyboards</a></li>
            <li class="font"><a href="#aboutUs">Mouse</a></li>
            <li class="font"><a href="#aboutUs">Laptops</a></li>
        </ul>
    </div>
    <br><br>
   
    <div class="slider">
         <div class="imgContainer" style="background-image: url('../../images/keyboard.jpg');"></div>
         <div class="imgContainer" style="background-image: url('../../images/monitor.jpg');"></div>
         <div class="imgContainer" style="background-image: url('../../images/mouse1.jpg');"></div>
    </div>
        <button type="click"><a href="loginPage.php">Shop now</a></button>
        <br>

    <div class="productsContainer">
        <?php
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo"
                <div class='productCard'>
                <img src='../../images/".$row['Image']."' alt='".$row['productName']."'>
                <h3>".$row['productName']."</h3>
                <p><b>$".$row['Price']."</b></p>
                <a href='loginPage.php' class='buyBtn'>Buy Now</a>
                </div>
                ";
            }
        }
        ?>
    </div>
    <div class="footer" id="aboutUs">
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

        <h2 style="padding:35px;"><b>Mouse</b><br>
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

        <h2 style="padding:35px;"><b>Laptops</b><br>
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

        <h2 style="padding:35px;"><b>About us</b><br>
        <p style="font-size: 13px;">At Electro Wizard, we bring the best of technology<br>
            right to your fingertips. Founded with a passion for quality<br>
            hardware, we specialize in providing top-notch computer <br>
            components, peripherals, and accessories that cater to gamers,<br> 
            professionals, and tech enthusiasts alike. From high-performance<br>
            GPUs, CPUs, and motherboards to precision keyboards, mice,and <br>
            monitors,our carefully curated products ensure reliability, <br>
            innovation, and value. Our team is dedicated to helping<br>
            you find the perfect setup, whether you’re building your dream <br>
            gaming rig, upgrading your workstation, or simply exploring <br>
            the latest in tech. At Electro Wizard, we believe in more than<br>
            just selling hardware — we’re about creating experiences, <br>
            empowering our customers with the knowledge to make informed <br>
            choices, and delivering exceptional service every step <br>
            of the way.<br>
            Choose Electro Wizard, and power your world <br>
            with the best hardware.<br>
    </p>
        </h2>
        <h2 style="padding:35px;"><b>Contact Info</b><br>
        <p style="font-size: 13px;">
        <b>Phone:</b><br>
        +8801234567891<br>
        +8801234567892<br>
        +8801478529633<br>
        <b>Email:</b>
        abcd123@gmail.com<br>
        abcd123@hotmail.com<br>
        abcd123@yahoo.com<br>
    </p>
    Address
    <p style="font-size: 13px;">
        kuratoli Road<br>
        Kuril<br>
        Dhaka<br>
        Bangladesh<br>
    </p>
        </h2>
    </div>
    <div style="text-align:center;" class="copyright">© COPYRIGHT 2025 ELECTRO WIZARD ®, INC. ALL RIGHTS RESERVED.</div>
    


</body>
</html>