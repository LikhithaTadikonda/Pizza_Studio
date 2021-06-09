<?php
session_start();
if (!$_SESSION['logged_in']) {
    echo '<script>window.location.href="index.php";</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PIZZA $TUDIO</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery-2.1.4.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:700|Patrick+Hand+SC|Waiting+for+the+Sunrise" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">

    <!---images logos-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome-all.css" />
    <script src="https://kit.fontawesome.com/23731c5cea.js" crossorigin="anonymous"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-top: 50px;
            margin-left: -225px;
            float: left;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

<body>
<a href="home.php" style="padding: 10px; background-color: skyblue; font-family:Arial, Helvetica, sans-serif; font-size:25px; text-decoration: none; float:left">Another Pizza</a>

<a href="logout.php" style="padding: 10px; background-color: skyblue; font-family:Arial, Helvetica, sans-serif; font-size:25px; text-decoration: none; float:right">Logout</a>

    <table id="res_table" class="res_table" name="res_table">
        <caption style="padding: 30px; font-size: 40px; font-weight:bold">Past Orders</caption>
        <tr>
            <th id="head">Name</th>
            <th id="head">Phone Number</th>
            <th id="head">Address</th>
            <th id="head">House number</th>
            <th id="head">City</th>
            <th id="head">Locality</th>
            <th id="head">Experience</th>
            <th id="head">🍍</th>
            <th id="head">🌶️</th>
            <th id="head">🍄</th>
            <th id="head">🥒</th>
            <th id="head">🌭</th>
            <th id="head">⚫</th>
            <th id="head">⚪</th>
            <th id="head">🧀</th>
            <th id="head">Ketchup</th>
            <th id="head">Bill</th>
            <th id="head">Status</th>
        </tr>
        <?php
        $mysqli = new mysqli('localhost', 'root', '', 'pizzastudio') or die($mysqli->error);
        $username = $_SESSION['name'];

        $sql = "SELECT * FROM `orders` WHERE username = '$username'";
        $results = $mysqli->query($sql) or die($mysqli->error);

        echo '<script>alert(' . $username . ')</script>';
        if (mysqli_num_rows($results) > 0) {

            while ($row = mysqli_fetch_array($results)) {
                echo "<tr> <td>" . $row['namee'] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["house_address"] . "</td>";
                echo "<td>" . $row["house"] . "</td>";
                echo "<td>" . $row["city"] . "</td>";
                echo "<td>" . $row["locality"] . "</td>";
                echo "<td>" . $row["experience"] . "</td>";
                if ($row["pineapple"] == "True") {
                    echo "<td><i class='fas fa-check'></i></td>";
                } else {
                    echo "<td><i class='fas fa-times'></i></td>";
                }
                if ($row["pepperoni"] == "True") {
                    echo "<td><i class='fas fa-check'></i></td>";
                } else {
                    echo "<td><i class='fas fa-times'></i></td>";
                }
                if ($row["mushroom"] == "True") {
                    echo "<td><i class='fas fa-check'></i></td>";
                } else {
                    echo "<td><i class='fas fa-times'></i></td>";
                }
                if ($row["pepper"] == "True") {
                    echo "<td><i class='fas fa-check'></i></td>";
                } else {
                    echo "<td><i class='fas fa-times'></i></td>";
                }
                if ($row["sausage"] == "True") {
                    echo "<td><i class='fas fa-check'></i></td>";
                } else {
                    echo "<td><i class='fas fa-times'></i></td>";
                }
                if ($row["olive"] == "True") {
                    echo "<td><i class='fas fa-check'></i></td>";
                } else {
                    echo "<td><i class='fas fa-times'></i></td>";
                }
                if ($row["sauce"] == "True") {
                    echo "<td><i class='fas fa-check'></i></td>";
                } else {
                    echo "<td><i class='fas fa-times'></i></td>";
                }
                if ($row["cheese"] == "True") {
                    echo "<td><i class='fas fa-check'></i></td>";
                } else {
                    echo "<td><i class='fas fa-times'></i></td>";
                }
                if ($row["ketchup"] == "True") {
                    echo "<td><i class='fas fa-check'></i></td>";
                } else {
                    echo "<td><i class='fas fa-times'></i></td>";
                }
                echo "<td>$" . $row["bill"] . "</td>";
                echo "<td>Delivered</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $mysqli->close();
        ?>
    </table>


</body>

</html>