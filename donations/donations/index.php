<?php require_once("functions/config.php"); ?>

<!DOCTYPE html>

<html>
<html lang="en">
<title>Lorday | Donations</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="Save mistreated dogs lives by donating today.">
<meta name="keywords" content="Lorday,Donations,Save Dog">
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
    background-image: url("images/checkout.jpg");
}
.bgimg-2 {
    background-image: url("images/2.jpg");
}
.bgimg-3 {
    background-image: url("images/3.jpg");
}
</style>

<body>

<!-- SideNav-->
<nav class="w3-sidenav w3-card-2 w3-top w3-large w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidenav">
  <a href="#donate" onclick="w3_close()" style="padding:16px;" class="w3-text-white w3-green"><i class="fa fa-shopping-cart w3-text-theme" style="font-size:20px; color:white;"></i> Donate</a>
  <a href="faq.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-question-circle w3-text-theme" style="font-size:20px; color:white;"></i> Frequently Asked Questions</a>
  <a onclick="w3_close()" class="w3-closenav" style="padding:16px;"><i class="fa fa-times-circle w3-text-theme" style="font-size:20px; color:#770000;"></i> Close Menu</a>
</nav>
<!-- SideNav-->

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-text-white w3-large w3-padding-xlarge" style="background-color:#770000;">
    <div class="w3-opennav w3-right" onclick="w3_open()">☰</div>
    <div class="w3-center">Lorday | Donations</div>
  </div>
</div>
<!-- Navbar -->

<!-- Header -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <span class="w3-medium w3-display-bottommiddle w3-white w3-round w3-padding-16
  w3-padding-left w3-padding-right w3-center" style="opacity:0.9;">
    Help save the lives of mistreated dogs today
  </span>
</header>
<!-- Header -->

<!-- Reason One to Donate -->
<div class="bgimg-2 w3-display-container w3-grayscale-min" id="home">
  <span class="w3-medium w3-display-bottommiddle w3-white w3-round w3-padding-16
  w3-padding-left w3-padding-right w3-center" style="opacity:0.9;">
    Help us to build animal shelters to save these mistreated dogs
  </span>
</div>
<!-- Reason One to Donate -->

<!-- Reason Three to Donate -->
<div class="bgimg-3 w3-display-container w3-grayscale-min" id="home" style="margin-top:-5px;">
  <span class="w3-medium w3-display-bottommiddle w3-white w3-round w3-padding-16
  w3-padding-left w3-padding-right w3-center" style="opacity:0.9;">
    All dogs deserve to be loved
  </span>
</div>
<!-- Reason Three to Donate -->

<!-- Donation Section -->
<div class="w3-container w3-padding-32 w3-center" id="donate">
  <div class="w3-container">
    <div class="w3-accordion">
      <button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-hover-green
      w3-btn-block w3-center" style="background-color:#770000;">Donate Today <i class="fa fa-chevron-down w3-text-theme" style="font-size:15px; color:white;"></i></button>
      <div id="Demo1" class="w3-accordion-content w3-center">
      <form action="" method="post">
        <div class="w3-container w3-card-2">
          <div class="w3-row-padding w3-padding-32" method="post">

            <div class="w3-third">
              <input class="w3-input w3-border w3-center w3-round" type="text"
              placeholder="Credit Card Number" name="credit_card_number"
              required="required">
            </div>

            <div class="w3-third w3-round">
              <input class="w3-input w3-border w3-center w3-round" type="text"
              placeholder="Expiry Date" name="credit_card_expiry_date"
              required="required">
            </div>

            <div class="w3-third w3-round">
              <input class="w3-input w3-border w3-center w3-round" type="text"
              placeholder="CVV" name="credit_card_cvv"
              required="required">
            </div>

            <div class="w3-half" style="margin-top:15px;">
              <select name="donation_amount" style="width:100%; height:45px;
              background-color:transparent;" class="w3-border w3-center"
              required="required">
                <option>$1</option>
                <option>$5</option>
                <option>$10</option>
                <option>$25</option>
                <option>$50</option>
                <option>$100</option>
                <option>$250</option>
                <option>$500</option>
                <option>$1000</option>
              </select>
            </div>

            <div class="w3-half" style="margin-top:15px;">
              <select name="payment_length" style="width:100%; height:45px;
              background-color:transparent;" class="w3-border w3-center"
              required="required">
                <option>One-Time Payment</option>
                <option>Weekly</option>
                <option>Fortnightly</option>
                <option>Monthly</option>
                <option>Seasonally</option>
                <option>Semi-Annually</option>
                <option>Annually</option>
              </select>
            </div>

            <button name="donated" class="w3-btn w3-green" style="margin-top:10px;">
              Donate
            </button>

          </div>
        </div>
      </form>

        <?php
        include("functions/donation.php");
        ?>

      </div>
    </div>
  </div>
</div>
<!-- Donation Section -->

<!-- Footer -->
<div class="w3-container w3-center w3-light-grey w3-padding-16">
  <a style="font-size:11px;">&copy; 2016 Lorday Donations. All Rights Reserved. |</a>
  <a href="policies/terms_and_conditions.php" title="Terms & Conditions" style="text-decoration:none; font-size:11px;">Terms & Conditions |</a>
  <a href="policies/privacy_policy.php" title="Privacy" style="text-decoration:none; font-size:11px;">Privacy |</a>
  <a href="policies/returns_and_refunds_policy.php" title="Returns & Refunds" style="text-decoration:none; font-size:11px;"> Refunds |</a>
  <a href="policies/cookies_policy.php" title="Cookies" style="text-decoration:none; font-size:11px;">Cookies |</a>
  <a href="policies/help.php" title="Help/Contact" style="text-decoration:none; font-size:11px;">Help/Contact</a>
</div>
<!-- Footer -->

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
</script>

</body>
</html>
