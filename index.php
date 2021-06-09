<?php
session_start();
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

  <!--Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:700|Patrick+Hand+SC|Waiting+for+the+Sunrise" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">

  <!---images logos-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome-all.css" />
  <script src="https://kit.fontawesome.com/23731c5cea.js" crossorigin="anonymous"></script>
  <style>
    input.cs,
    textarea.cs {
      width: 50%;
      padding: 12px 20px;
      text-align: center;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid dimgray;
      border-radius: 4px;
      box-sizing: border-box;
      resize: none;
    }

    input[type="submit"] {
      background-color: red;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      text-align: center;
      display: inline-block;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: dimgray;
    }
  </style>
</head>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

<body>
  <p style="font-size: 50px; text-align: center;">Sign-up form</p>
  <div>
    <form style="text-align: center;" method="POST" action = "signup.php">
      <label for="sname">Your Name :-</label><br>
      <input class="cs" type="text" name="sname" id="sname" placeholder="Your Name"><br>
      <label for="pass">Your Password :-</label><br>
      <input class="cs" type="password" name="pass" id="pass" placeholder="Your password"><br>
      <label for="pass">Confirm Password :-</label><br>
      <input class="cs" type="password" name="pass_confirm" id="pass" placeholder="Confirm password"><br>
      
      <label for="phnum">Mobile Number :-</label><br>
      <input class="cs" type="text" name="phnum" id="phnum" placeholder="Mobile Number"><br>
      <label for="mail">Email :-</label><br>
      <input class="cs" type="text" name="mail" id="mail" placeholder="Enter Email"><br>
      <label for="add"> Address :-</label><br>
      <textarea class="cs" placeholder="Enter Address" name="add" id="add" style="height: 100px;"></textarea><br>
      <label for="city">City :-</label><br>
      <input class="cs" type="text" id="city" name="city" placeholder="Enter City"><br>
      <label>Remember me</label>
      <input type="checkbox" name="remember">
      <button type="submit" value="Submit" name="btnsubmit" style=" background-color: red; border: none; color: white; padding: 15px 32px; align-self: center; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top:10px; cursor: pointer;">Sign up</button>
    </form>
    <p style="font-size: 30px; text-align: center;">Already a user? <a href="login.php">Login</a></p>
  </div>
  


</body>

</html>