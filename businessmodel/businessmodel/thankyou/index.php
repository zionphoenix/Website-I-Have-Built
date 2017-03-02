<?php require_once("../functions/config.php"); ?>

<!DOCTYPE html>

<html>
<html lang="en">
<title>Lorday | Business Model</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="Start your very own lucrative business with
startup capital under $500.00">
<meta name="keywords" content="Lorday,Business,Low Startup Capital,Business Model">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../styles/w3.css">
<link rel="stylesheet" href="../styles/font-awesome/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Times", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
.bgimg-1 {
    background-position: center;
    background-size: cover;
    min-height: 100%;
}
.bgimg-1 {
  background-image: url("../images/index_images/1_1.jpg");
}
</style>

<body>

  <!-- SideNav-->
  <nav class="w3-sidenav w3-card-2 w3-top w3-large w3-animate-left"
  style="display:none;z-index:2;width:40%;min-width:300px" id="mySidenav">

    <a href="../" onclick="w3_close()" style="background-color:#440000;
    padding:16px; font-style:italic; color:white;" class="w3-text-white w3-large">
    <i class="fa fa-home w3-text-theme"></i> Home</a>

    <a href="../report" onclick="w3_close()" style="background-color:#440000;
    padding:16px; font-style:italic; color:white;" class="w3-text-white w3-large">
    <i class="fa fa-file w3-text-theme"></i> Financial Report</a>

    <a href="../#awards" onclick="w3_close()" style="background-color:#440000;
    padding:16px; font-style:italic; color:white;" class="w3-text-white w3-large">
    <i class="fa fa-trophy w3-text-theme"></i> Awards</a>

    <a href="../reviews" onclick="w3_close()" style="background-color:#440000;
    padding:16px; font-style:italic; color:white;" class="w3-text-white w3-large">
    <i class="fa fa-users w3-text-theme"></i> Reviews</a>

    <a href="../faq" onclick="w3_close()" style="background-color:#440000;
    padding:16px; font-style:italic; color:white;" class="w3-text-white w3-large">
    <i class="fa fa-question-circle w3-text-theme"></i> Frequently Asked Questions</a>

    <a onclick="w3_close()" class="w3-closenav" style="padding:16px; font-style:italic;">
      <i class="fa fa-times-circle w3-text-theme" style="font-size:20px; color:#440000;"></i>
      Close Menu
    </a>

  </nav>
  <!-- SideNav-->

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-text-white w3-large w3-padding-4" style="background-color:#440000;">
      <div class="w3-opennav w3-right" style="padding-right:15px;" onclick="w3_open()">☰</div>
      <div class="w3-center" style="font-style:italic;">Lorday Business Model</div>
    </div>
  </div>
  <!-- Navbar -->

<!-- Title -->
<div class="bgimg-1 w3-display-container w3-grayscale-min">

  <span class="w3-display-middle w3-padding-16 w3-padding-left w3-text-white
  w3-padding-right w3-center" style="opacity:0.7; font-size:20px;
  border: 5px solid white; letter-spacing:5px; background-color: #000080;">
    THANK YOU FOR PURCHASING THIS BUSINESS MODEL!
      <br>
      <br>
    <p style="font-size:11px;">Documentation for this business model will be
      emailed to you within the next 7-10 business days
    </p>
  </span>

</div>
<!-- Title -->

<!-- Footer -->
<div class="w3-container w3-center w3-light-grey w3-padding-16">
  <a style="font-size:11px;">&copy; 2016 Lorday Business Model. All Rights Reserved. |</a>
  <a href="../policies/terms_and_conditions.php" title="Terms & Conditions" style="text-decoration:none; font-size:11px;">Terms & Conditions |</a>
  <a href="../policies/privacy_policy.php" title="Privacy" style="text-decoration:none; font-size:11px;">Privacy |</a>
  <a href="../policies/returns_and_refunds_policy.php" title="Returns & Refunds" style="text-decoration:none; font-size:11px;"> Refunds |</a>
  <a href="../policies/cookies_policy.php" title="Cookies" style="text-decoration:none; font-size:11px;">Cookies |</a>
  <a href="../policies/help.php" title="Help/Contact" style="text-decoration:none; font-size:11px;">Help/Contact</a>
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

</script>

</body>
</html>
