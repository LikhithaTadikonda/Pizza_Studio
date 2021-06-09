

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Log in </title>
  <link rel="stylesheet" href="style.css">
  <style>
    #login {
      background-color: red;
      border: none;
      color: white;
      padding: 15px 32px;
      align-self: center;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

<body>

  <p style="font-size: 50px; color: black;text-align: center; ">Pizza $tudio Portal</p>
  <form method="POST" action="log.php" style="color: black; font-size: 30px;text-align: center; width: 100%;">
    <label for="uname">Name:</label>
    <input id="uname" name="uname" placeholder="Name" type="text"><br>
    <label for="password">Password:</label>
    <input id="password" name="password" placeholder="password" type="password"><br><br>
    <label>Remember me</label>
    <input type="checkbox" checked="checked" name="remember"><br>
    <button type="submit" name="login" id="login" style="margin-top:30px;">Login</button>

  </form>
  <p style="font-size: 30px; text-align: center;">New here? <a href="index.php">Signup</a></p>
</body>

</html>