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
    
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:700|Patrick+Hand+SC|Waiting+for+the+Sunrise" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">

   <!---images logos-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome-all.css" />
   <script src="https://kit.fontawesome.com/23731c5cea.js" crossorigin="anonymous"></script>
   
  </head>
  <div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>
  <body>  
    <script>
     alert("Welcome to Pizza $tudio :)\nClick OK to continue");
    </script>

    

<a href="logout.php" style="padding: 10px; background-color: skyblue; font-family:Arial, Helvetica, sans-serif; font-size:25px; text-decoration: none; float:right">Logout</a>
    <!-- Begin Header -->
      <h1><strong>Pizza $TUDIO<strong></h1>
      <p class="lineup">Start Building Your Pizza's Nowww!</p><br><br>
    <!-- End Header -->

    <!-- Controls -->
    <div class="panel controls">
      <ul>
        <li>
          <button class="btn btn-pineapple active">Pineapple🍍</button><br><br><br><br>
        </li>
        <li>
          <button class="btn btn-pepperoni active">Pepperoni🌶️</button><br><br><br><br>
        </li>
        <li>
          <button class="btn btn-mushrooms active">Mushrooms🍄</button><br><br><br><br>
        </li>
        <li>
          <button class="btn btn-green-peppers active">Green-Peppers🥒</button><br><br><br><br>
        </li>
        <li>
          <button class="btn btn-sausage active">Sausage 🌭</button><br><br><br><br>
        </li>
        <li>
          <button class="btn btn-olives active">Olives ⚫</button><br><br><br><br>
        </li>
        <li>
          <button class="btn btn-sauce active">White sauce⚪</button><br><br><br><br>
        </li>
        <button class="btn btn-cheese active">Cheese 🧀</button><br><br><br><br>
        </li>
        <p>🔴 -> Selected   ⚫ -> Not Selected</p>
       <br><br>
       
       </ul>
       
    </div>
    <!-- End Controls -->

    <!-- Price -->
    
    <div class="panel price">
      <h3>MENU </h3>
      
      <!--<b>$3 Gluten-Free-Crust</b><br>-->
      <strong>$2 Crust (MIN Cost for Crust)</strong><br>
      <ul>
        <li>$1 Pine apple</li>
        <li>$1 Pepperoni</li>
        <li>$1 Mushrooms</li>
        <li>$1 Green Peppers</li>
        <li>$2 Sausage</li>
        <li>$2 Olives</li>
        <li>$2 White sauce</li>
        <li>$2 Cheese</li>
        Ketchup: YES <input type="radio" name="ketchup" value="Yes" id="ketchup" class="active">
                 NO <input type="radio" name="ketchup" value="No" id="ketchup" class="active"> <!--Giving same name gives us to make customer choose either yes/no or with diff names 2 two radio buttons get selected-->
      </ul>
      <strong>TOTAL=$<span id="totalPrice" name = "totalPrice">14<span></strong>
      <h6>*Actual pizza may vary due to product enhancement.*</h6>
      
      <!-- <input href="#fill" type="button" class="btn btn-ordernow" onclick="order()" value="Order Now" > -->
      <button style="padding: 10px; background-color: black; font-family:Arial, Helvetica, sans-serif; font-size:25px; text-decoration: none;"><a style="text-align: center; color: white " href="#order-fill">Order now</a> </button>

    </div>
    <!-- End Price -->

    

    <!-- Begin Pizza -->
    <div id="pizza">
      <div id="pineapple-holder">
         <div class="pineapple pa1"></div>
         <div class="pineapple pa2"></div>
         <div class="pineapple pa3"></div>
         <div class="pineapple pa4"></div>
         <div class="pineapple pa5"></div>
         <div class="pineapple pa6"></div>
         <div class="pineapple pa7"></div>
         <div class="pineapple pa8"></div>
         <div class="pineapple pa9"></div>
         <div class="pineapple pa10"></div>
         <div class="pineapple pa11"></div>
         <div class="pineapple pa12"></div>
         <div class="pineapple pa13"></div>
         <div class="pineapple pa14"></div>
         <div class="pineapple pa15"></div>
      </div>
      
      <section class="pep p1"></section>
      <section class="pep p2"></section>
      <section class="pep p3"></section>
      <section class="pep p4"></section>
      <section class="pep p5"></section>
      <section class="pep p6"></section>
      <section class="pep p7"></section>
      <section class="pep p8"></section>
      <section class="pep p9"></section>
      <section class="pep p10"></section>
      <section class="pep p11"></section>
      <section class="pep p12"></section>
      <section class="pep p13"></section>
      <section class="pep p14"></section>
      <section class="pep p15"></section>
      <section class="pep p16"></section>
      <section class="pep p17"></section>
      <section class="pep p18"></section>
      <section class="pep p19"></section>
      <section class="pep p20"></section>
      <section class="pep p21"></section>
      <section class="pep p22"></section>
      <section class="pep p23"></section>
      <section class="pep p24"></section>
      <section class="pep p25"></section>
      <section class="pep p26"></section>
      <section class="pep p27"></section>
      <section class="pep p28"></section>
      <section class="pep p29"></section>
      <section class="pep p30"></section>
      <section class="pep p31"></section>
      <section class="pep p32"></section>
      
      <section class="mushroom m1">
        <div class="cap"></div>
        <div class="stem"></div>
      </section>

      <section class="mushroom m2">
        <div class="cap"></div>
        <div class="stem"></div>
      </section>

      <section class="mushroom m3">
        <div class="cap"></div>
        <div class="stem"></div>
      </section>

      <section class="mushroom m4">
        <div class="cap"></div>
        <div class="stem"></div>
      </section>

      <section class="mushroom m5">
        <div class="cap"></div>
        <div class="stem"></div>
      </section>
      
      <section class="mushroom m6">
        <div class="cap"></div>
        <div class="stem"></div>
      </section>

      <section class="mushroom m7">
        <div class="cap"></div>
        <div class="stem"></div>
      </section>

      <section class="mushroom m8">
        <div class="cap"></div>
        <div class="stem"></div>
      </section>
    
      <section class="mushroom m9">
        <div class="cap"></div>
        <div class="stem"></div>
      </section>

      <section class="mushroom m10">
        <div class="cap"></div>
        <div class="stem"></div>
      </section>

      <section class="mushroom m11">
        <div class="cap"></div>
        <div class="stem"></div>
      </section>
      
      <section class="mushroom m12">
        <div class="cap"></div>
        <div class="stem"></div>
      </section>
      
      <section class="greenpepper g1"></section>
      <section class="greenpepper g2"></section>
      <section class="greenpepper g3"></section>
      <section class="greenpepper g4"></section>
      <section class="greenpepper g5"></section>
      <section class="greenpepper g6"></section>
      <section class="greenpepper g7"></section>
      <section class="greenpepper g8"></section>
      <section class="greenpepper g9"></section>
      <section class="greenpepper g10"></section>
      <section class="greenpepper g11"></section>
      <section class="greenpepper g12"></section>
      <section class="greenpepper g13"></section>
      <section class="greenpepper g14"></section>
      <section class="greenpepper g15"></section>
      <section class="greenpepper g16"></section>
      <section class="greenpepper g17"></section>
      <section class="greenpepper g18"></section>
      <section class="greenpepper g19"></section>
      <section class="greenpepper g20"></section>
      <section class="greenpepper g21"></section>

      <div id="sausage-holder">
         <div class="sausage s1"></div>
         <div class="sausage s2"></div>
         <div class="sausage s3"></div>
         <div class="sausage s4"></div>
         <div class="sausage s5"></div>
         <div class="sausage s6"></div>
         <div class="sausage s7"></div>
         <div class="sausage s8"></div>
         <div class="sausage s9"></div>
         <div class="sausage s10"></div>
      </div>

      <div id="olive-holder">
        <div class="olive o1"></div>
        <div class="olive o2"></div>
        <div class="olive o3"></div>
        <div class="olive o4"></div>
        <div class="olive o5"></div>
        <div class="olive o6"></div>
        <div class="olive o7"></div>
        <div class="olive o8"></div>
        <div class="olive o9"></div>
        <div class="olive o10"></div>
        <div class="olive o11"></div>
        <div class="olive o12"></div>
        <div class="olive o13"></div>
        <div class="olive o14"></div>
        <div class="olive o15"></div>
        <div class="olive o16"></div>
        <div class="olive o17"></div>
        <div class="olive o18"></div>
        <div class="olive o19"></div>
      </div>
      
      <section class="crust crust-gluten-free">
         <section class="cheese"></section>
         <section class="sauce sauce-white"></section>
      </section>
    </div>
    <!-- End Pizza -->

    <br><br><br><br><br><br><br><br><br>

        
    <section id="about">
     <h2 style="text-align: center;">About..</h2>
      <ul style="list-style-type:disc;">
       <li>The user will be able to create a new order, customize a pizza from a list of available toppings.</li>
        <li>The user will be able to add/remove an ingredient to a custom pizza.</li>
        <li>Then the user gets a graphical representation of the selected ingredients, containing the newly selected ingredients.</li>
        <li>The user is able to see the total price of an order which  varies with the selection of different toppings.</li>
        <li>The user must fill their name and address.</li>
      </ul>
    </section><br>


    <button  class="past-orders"><a style="text-align: center; color: white " href="past.php">Past Orders</a> </button>
    <section id="fill" class="fill" >
      <div id="inputs">
        <form name="input" action="order.php" method="POST">
          <h2 id="order-fill">Fill your delivery details</h2><br>
          Name: <input required type="text" name="firstname" placeholder="What's your First Name?"><br>
          Phone Number: <input type="text" name="phonenumber" placeholder="xxxxxxxxxx"><br>
          Address: <input type="text" name="add" placeholder="Type your address here"><br>
          House Number: <input type="text" name="housenum" placeholder="House Number"><br>
          City: <input type="text" name="city" placeholder="Which city do you live in?"><br>
        
          Local<input type="radio" name="checks" value="local">
          Non-Local<input type="radio" name="checks" value="nonlocal"><br>
	       
          How's your experience?<br>
          Good<input type="radio" value="good" name="experience" id="good">
          Bad<input type="radio" value="bad" name="experience" id="bad"><br>

          <input type="text" id="pineapple" value="True" name="pineapple" hidden>
          <input type="text" id="pepperoni" value="True" name="pepperoni" hidden>
          <input type="text" id="mushroom" value="True" name="mushroom" hidden>
          <input type="text" id="pepper" value="True" name="pepper" hidden>
          <input type="text" id="sausage" value="True" name="sausage" hidden>
          <input type="text" id="olive" value="True" name="olive" hidden>
          <input type="text" id="sauce" value="True" name="sauce" hidden>
          <input type="text" id="cheese" value="True" name="cheese" hidden>
          <input type="text" id="ketchup" value="True" name="ketchup" hidden>
          <input type="text" id="total-price" value="14" name="totalPrice" hidden>

          <button type="submit" class="fill-button" name="order" id="order" >Deliver Now 😉</button>
         </form>
         

      </div>
    </section><br>
    
    
    <!-- ======= Team Section ======= -->
    <p id="Team">
     <div class="socialbox">
       <h3> Developed by:</h3><br>
         <div class="column">
           <img class="circle" src="likhitha.jpg" alt="student">
           <h4>Likhitha Tadikonda</h4>
           <a target="_blank" href="https://www.instagram.com/_likhithaaa_/"><i class="fab fa-instagram fa-2x" aria-hidden="true"></i></a>
           <a target="_blank" href="https://www.facebook.com/likitha.parvathi/"><i class="fab fa-facebook-f fa-2x" aria-hidden="true"></i></a>
           <a target="_blank" href="https://twitter.com/LikhithaTadiko1"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
           <a target="_blank" href="https://www.linkedin.com/in/likhitha-tadikonda-4351511a4/"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
         </div>
      </div>
    </p>
         
         
    <footer>
      <marquee width="100%" direction="left" height="20px" color:red >
       Thank You For Visiting.
      </marquee>
    </footer>
    

    <script src="jquery-2.1.4.js"></script>
    <script src="script.js"></script>
    
 </body>
</html>
