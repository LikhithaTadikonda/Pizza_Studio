<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'pizzastudio') or die($mysqli->error);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['btnsubmit'])) {
    $name = $mysqli->real_escape_string($_POST['sname']);
    $password = $mysqli->real_escape_string($_POST['pass']);
    $phone = $mysqli->real_escape_string($_POST['phnum']);
    $email = $mysqli->escape_string($_POST['mail']);
    $address = $mysqli->escape_string($_POST['add']);
    $city = $mysqli->escape_string($_POST['city']);


    if ($_POST['pass'] == $_POST['pass_confirm']) {
      $password = $mysqli->escape_string(md5($_POST['pass']));
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
      $result = $mysqli->query("SELECT * FROM signup WHERE name = '$name'") or die($mysqli->error);
      if ($result->num_rows > 0) {
        echo '<script>alert("User already exists!");
              window.location.href="index.php";</script>';
      } else {
        $sql = "INSERT INTO signup(name, password, phone, email, address, city) VALUES ('$name', '$password', '$phone', '$email', '$address', '$city')";
        if ($mysqli->query($sql) or die('MySQL Error: ' . mysqli_error($mysqli) . ' (' . mysqli_errno($mysqli) . ')')) {
          $_SESSION['logged_in'] = true;
          echo '<script>alert("Successfully Registered! Please login to continue!");
                  window.location.href="login.php";</script>';
        } else {
          echo '<script>alert("Registration failed 1!");
                  window.location.href="index.php";</script>';
        }
      }
    } else {
      echo '<script>alert("Registration failed 2!");
          window.location.href="index.php";</script>';
    }
  }
}
?>