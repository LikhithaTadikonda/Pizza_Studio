<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'pizzastudio') or die($mysqli->error);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['order'])) {
        $username = $_SESSION['name'];
        $mysqli->query("SELECT name from signup where name = '$username'");
        $name = $mysqli->real_escape_string($_POST['firstname']);
        $phone = $mysqli->real_escape_string($_POST['phonenumber']);
        $address = $mysqli->real_escape_string($_POST['add']);
        $house = $mysqli->real_escape_string($_POST['housenum']);
        $city = $mysqli->real_escape_string($_POST['city']);
        $local = $mysqli->real_escape_string($_POST['checks']);
        $exp = $mysqli->real_escape_string($_POST['experience']);
        $pineapple = $mysqli->real_escape_string($_POST['pineapple']);
        $pepperoni = $mysqli->real_escape_string($_POST['pepperoni']);
        $mushroom = $mysqli->real_escape_string($_POST['mushroom']);
        $pepper = $mysqli->real_escape_string($_POST['pepper']);
        $sausage = $mysqli->real_escape_string($_POST['sausage']);
        $olive = $mysqli->real_escape_string($_POST['olive']);
        $sauce = $mysqli->real_escape_string($_POST['sauce']);
        $cheese = $mysqli->real_escape_string($_POST['cheese']);
        $ketchup = $mysqli->real_escape_string($_POST['ketchup']);
        $bill = $mysqli->real_escape_string($_POST['totalPrice']);

        $mysqli->query(
            "CREATE TABLE IF NOT EXISTS `orders`
            (
                `sno` int(11) NOT NULL AUTO_INCREMENT,
                `username` varchar(40) NOT NULL,
                `namee` varchar(40) NOT NULL,
                `phone`  varchar(10) NOT NULL,
                `house_address` varchar(255) NOT NULL,
                `house` varchar(255) NOT NULL,
                `city` varchar(40) NOT NULL,
                `locality` varchar(10) NOT NULL,
                `experience` varchar(10) NOT NULL,
                `pineapple` varchar(15) NOT NULL,
                `pepperoni` varchar(15) NOT NULL,
                `mushroom` varchar(15) NOT NULL,
                `pepper` varchar(15) NOT NULL,
                `sausage` varchar(15) NOT NULL,
                `olive` varchar(15) NOT NULL,
                `sauce` varchar(15) NOT NULL,
                `cheese` varchar(15) NOT NULL,
                `ketchup` varchar(15) NOT NULL,
                `bill` varchar(10) NOT NULL,
                PRIMARY KEY (`sno`)
            )DEFAULT CHARSET = utf8;"
        ) or die('MySQL Error: 1' . mysqli_error($mysqli) . ' (' . mysqli_errno($mysqli) . ')');
        $sql = "INSERT INTO orders(username,namee,phone,house_address,house,city,locality,experience,pineapple,pepperoni,mushroom,pepper,sausage,olive,sauce,cheese,ketchup, bill) VALUES ('$username', '$name','$phone','$address','$house','$city','$local','$exp', '$pineapple', '$pepperoni', '$mushroom', '$pepper', '$sausage', '$olive', '$sauce', '$cheese', '$ketchup', '$bill')";
       
        if ($mysqli->query($sql) or die('MySQL Error: 2' . mysqli_error($mysqli) . ' (' . mysqli_errno($mysqli) . ')')) {
            echo '<script>alert("Order placed successfully ");
            window.location.href="past.php";</script>';
        } else {
            echo '<script>alert("Order failed!");
            window.location.href="home.php";</script>';
        }              
        
    } 

}

?>