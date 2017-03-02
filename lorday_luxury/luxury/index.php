<?php require_once("functions/config.php"); ?>

<!DOCTYPE html>

<html>
<html lang="en">
<title>Lorday | Luxury</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="Start your very own lucrative business.">
<meta name="keywords" content="Lorday,Luxury,Lucrative,Business">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/w3.css">
<link rel="stylesheet" href="styles/raleway/raleway.css">
<link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-position: center;
    background-size: cover;
    min-height: 100%;
}
.bgimg-1 {
    background-image: url("images/1_6.jpg");
}
.bgimg-2 {
    background-image: url("images/2_2.jpg");
}
.bgimg-3 {
    background-image: url("images/3_3.jpg");
}
</style>

<body>

<!-- SideNav-->
<nav class="w3-sidenav w3-card-2 w3-top w3-large w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidenav">
  <a href="#purchase" onclick="w3_close()" style="padding:16px;" class="w3-text-white w3-green"><i class="fa fa-shopping-cart w3-text-theme" style="font-size:20px; color:white;"></i> Buy Now</a>
  <a href="reviews.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-users w3-text-theme" style="font-size:20px; color:white;"></i> Reviews</a>
  <a href="faq.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-question-circle w3-text-theme" style="font-size:20px; color:white;"></i> Frequently Asked Questions</a>
  <a onclick="w3_close()" class="w3-closenav" style="padding:16px;"><i class="fa fa-times-circle w3-text-theme" style="font-size:20px; color:#770000;"></i> Close Menu</a>
</nav>
<!-- SideNav-->

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-text-white w3-large w3-padding-xlarge" style="background-color:#770000;">
    <div class="w3-opennav w3-right" onclick="w3_open()">☰</div>
    <div class="w3-center">Lorday | Luxury</div>
  </div>
</div>
<!-- Navbar -->

<!-- Header -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <span class="w3-xlarge w3-display-middle w3-black w3-round w3-padding-16
  w3-padding-left w3-padding-right w3-center" style="opacity:0.9;">
    Live Luxuriously
  </span>
</header>
<!-- Header -->

<!-- Purchase Reason One -->
<div class="bgimg-2 w3-display-container w3-grayscale-min" id="home">
  <span class="w3-xlarge w3-display-middle w3-black w3-round w3-padding-16
  w3-padding-left w3-padding-right w3-center" style="opacity:0.9;">
    Live Lucratively
    <p id="demo" class="w3-xxlarge">$0.00</p>
    <p class="w3-large w3-blue w3-round w3-padding-4 w3-padding-left w3-padding-right">
      Live Clientele Revenue
    </p>
  </span>
</div>
<!-- Purchase Reason One -->

<!-- Purchase Reason Two -->
<div class="bgimg-3 w3-display-container w3-grayscale-min" id="home">
  <span class="w3-xlarge w3-display-middle w3-black w3-round w3-padding-16
  w3-padding-left w3-padding-right w3-center" style="opacity:0.9;">
    Live Lavishly
  </span>
</div>
<!-- Purchase Reason Two -->

<!-- Purchase Section -->
<div class="w3-container w3-padding-32 w3-center" id="purchase">
  <div class="w3-container">

    <p class="w3-xlarge">Learn How For Just $0.99<a style="font-size:1px;">/day</a></p>

    <div class="w3-accordion">
      <button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-hover-green w3-xlarge
      w3-btn-block w3-center w3-green">Buy Now <i class="fa fa-chevron-circle-down w3-text-theme" style="font-size:20px; color:white;"></i></button>
      <div id="Demo1" class="w3-accordion-content w3-center">
      <form action="" method="post">
        <div class="w3-container w3-card-2">
          <div class="w3-row-padding w3-padding-32" method="post">

            <div class="w3-third" style="margin-top:10px;">
              <input class="w3-input w3-center w3-round w3-card-2" type="text"
              placeholder="Credit Card Number" name="credit_card_number"
              required="required">
            </div>

            <div class="w3-third" style="margin-top:10px;">
              <input class="w3-input w3-center w3-round w3-card-2" type="text"
              placeholder="Expiry Date" name="credit_card_expiry_date"
              required="required">
            </div>

            <div class="w3-third" style="margin-top:10px;">
              <input class="w3-input w3-center w3-round w3-card-2" type="text"
              placeholder="CVV" name="credit_card_cvv"
              required="required">
            </div>

            <div class="w3-col s12" style="margin-top:10px;">
              <input class="w3-input w3-center w3-round w3-card-2" type="email"
              placeholder="Email Address" name="email_address"
              required="required">
            </div>

            <button name="payment_made" class="w3-btn w3-green w3-xlarge w3-round"
            style="margin-top:30px;">Checkout</button>

          </div>
        </div>
      </form>

        <?php
        include("functions/payments.php");
        ?>

      </div>
    </div>
  </div>
</div>
<!-- Purchase Section -->

<!-- Footer -->
<div class="w3-container w3-center w3-light-grey w3-padding-16" style="margin-bottom:90px;">
  <a style="font-size:11px;">&copy; 2016 Lorday Luxury. All Rights Reserved. |</a>
  <a href="policies/terms_and_conditions.php" title="Terms & Conditions" style="text-decoration:none; font-size:11px;">Terms & Conditions |</a>
  <a href="policies/privacy_policy.php" title="Privacy" style="text-decoration:none; font-size:11px;">Privacy |</a>
  <a href="policies/returns_and_refunds_policy.php" title="Returns & Refunds" style="text-decoration:none; font-size:11px;"> Refunds |</a>
  <a href="policies/cookies_policy.php" title="Cookies" style="text-decoration:none; font-size:11px;">Cookies |</a>
  <a href="policies/help.php" title="Help/Contact" style="text-decoration:none; font-size:11px;">Help/Contact</a>
</div>
<!-- Footer -->

<!-- Clincher -->
<div class="w3-bottom">
  <div class="w3-text-white w3-center"
  style="background-color:#770000; margin-bottom:-15px; padding:1px;">
    <p class="w3-medium">Amount You Could Have Made Already</p>
    <p id="demo_2" style="margin-top:-20px;" class="w3-xlarge"> $0.00</p>
  </div>
</div>
<!-- Clincher -->

<script>
// Script to Open SideNav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
// Script to Close SideNav
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
// Accordions
function myAccFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-dark-grey";
    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
        x.previousElementSibling.className.replace(" w3-dark-grey", "");
    }
}
var count = 0;
setInterval(function() {
  var myVar = setInterval(myTimer, 500);
  function myTimer() {
    document.getElementById("demo").innerHTML = "$" + count++ + ".00";
  }
}, 500);

var count_2 = 0;
setInterval(function() {
  var myVar = setInterval(myTimer, 2000);
  function myTimer() {
    document.getElementById("demo_2").innerHTML = "$" + count_2++ + ".00";
  }
}, 2000);
</script>

</body>
</html>
