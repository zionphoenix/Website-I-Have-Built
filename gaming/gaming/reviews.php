<?php require_once("functions/config.php"); ?>

<!DOCTYPE html>

<html>
<html lang="en">
<title>Lorday | Gaming</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="Make money playing games.">
<meta name="keywords" content="Lorday,Gaming,Make Money,Games">
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
</style>

<!-- SideNav-->
<nav class="w3-sidenav w3-card-2 w3-top w3-large w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidenav">
  <a href="index.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-home w3-text-theme" style="font-size:20px; color:white;"></i> Home</a>
  <a href="faq.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-question-circle w3-text-theme" style="font-size:20px; color:white;"></i> Frequently Asked Questions</a>
  <a onclick="w3_close()" class="w3-closenav" style="padding:16px;"><i class="fa fa-times-circle w3-text-theme" style="font-size:20px; color:#770000;"></i> Close Menu</a>
</nav>
<!-- SideNav-->

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-text-white w3-large w3-padding-xlarge" style="background-color:#770000;">
    <div class="w3-opennav w3-right" onclick="w3_open()">☰</div>
    <div class="w3-center">Lorday | Gaming</div>
  </div>
</div>
<!-- Navbar -->

<!-- Reviews -->
<div class="w3-row-padding w3-center" style="margin-top:85px;">
  <i class="fa fa-users fa-15 w3-margin-bottom" style="font-size:120px"></i>
  <p class="w3-xlarge">Reviews</p>

<?php getReviews(); ?>

</div>
<!-- Reviews -->

<p class="w3-center" style="font-size:12px;">If you would like to submit a review, please do so by sending your review to admin@lorday.com</p>

<!-- Footer -->
<div class="w3-container w3-center w3-light-grey w3-padding-16">
  <a style="font-size:11px;">&copy; 2016 Lorday Gaming. All Rights Reserved. |</a>
  <a href="policies/terms_and_conditions.php" title="Terms & Conditions" style="text-decoration:none; font-size:11px;">Terms & Conditions |</a>
  <a href="policies/privacy_policy.php" title="Privacy" style="text-decoration:none; font-size:11px;">Privacy |</a>
  <a href="policies/returns_and_refunds_policy.php" title="Returns & Refunds" style="text-decoration:none; font-size:11px;">Returns & Refunds |</a>
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
</script>

</body>
</html>
