<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'pizzastudio') or die($mysqli->error);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        
        $name = $mysqli->escape_string($_POST['uname']);
        $_SESSION['name'] = $name;
        $mysqli->query(
            "CREATE TABLE IF NOT EXISTS `signup`
              (
                  `sno` int(11) NOT NULL AUTO_INCREMENT,
                  `name` varchar(40) NOT NULL,
                  `password` varchar(100) NOT NULL,
                  `phone` varchar(10) NOT NULL,
                  `email` varchar(100) NOT NULL,
                  `address` varchar(255) NOT NULL,
                  `city` varchar(100) NOT NULL,
                  PRIMARY KEY (`sno`)
              )DEFAULT CHARSET = utf8;"
        ) or die('MySQL Error: ' . mysqli_error($mysqli) . ' (' . mysqli_errno($mysqli) . ')');
        $result = $mysqli->query("SELECT * FROM signup WHERE name = '$name'");
        if ($result->num_rows == 0) {
            echo '<script>alert("User does not exists!");
        window.location.href="login.php";</script>';
        } else {
            $user = $result->fetch_assoc();
            if (md5($_POST['password']) == $user['password']) {
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['logged_in'] = true;
                echo '<script>alert("Logged in!");
            window.location.href="home.php";</script>';
            } else {
                echo '<script>alert("You have entered wrong password, try again!");
            window.location.href="login.php";</script>';
            }
        }
    } else {
        echo '<script>alert("Passwords did not match!");
        window.location.href=login.php";</script>';
    }
}

?>