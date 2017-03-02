<?php require_once("functions/config.php"); ?>

<!DOCTYPE html>

<html>
<html lang="en">
<title>Lorday | Business</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="A business model to allow individuals, who are
low on startup capital, or are unable to gain financial aid, to initiate a
business, & make their financial goals a reality.">
<meta name="keywords" content="Lorday,Business,Business Model">
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
  <?php add_to_cart_navbar(); ?>
  <a href="index.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-home w3-text-theme" style="font-size:20px; color:white;"></i> Home</a>
  <a href="case_study.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-folder-open w3-text-theme" style="font-size:20px; color:white;"></i> Case Study</a>
  <a href="reviews.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-users w3-text-theme" style="font-size:20px; color:white;"></i> Reviews</a>
  <a onclick="w3_close()" class="w3-closenav" style="padding:16px;"><i class="fa fa-times-circle w3-text-theme" style="font-size:20px; color:#770000;"></i> Close Menu</a>
</nav>
<!-- SideNav-->

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-text-white w3-large w3-padding-xlarge" style="background-color:#770000;">
    <div class="w3-opennav w3-right" onclick="w3_open()">☰</div>
    <div class="w3-center">Lorday | Business</div>
  </div>
</div>
<!-- Navbar -->

<!-- Title -->
<div class="w3-row-padding w3-center w3-padding-left w3-padding-right" style="margin-top:55px;">
  <div>
    <div class="w3-padding-top w3-padding-bottom w3-round">
      <br>
      <i class="fa fa-question-circle fa-15 w3-margin-bottom" style="font-size:120px"></i>
      <br>
      <p class="w3-margin-bottom w3-xlarge">Frequently Asked Questions</p>
    </div>
  </div>
</div>
<!-- Title -->

<!-- F.A.Q -->
<div class="w3-row-padding w3-center w3-padding-left w3-padding-right" style="margin-bottom:15px;">
  <div>

    <div class="w3-card-2 w3-padding-top w3-padding-bottom w3-round w3-light-grey" style="margin-top:15px;">
      <div class="w3-center w3-margin-bottom">
        <p class="w3-large w3-padding-left w3-padding-right">
          Does this business model work?
        </p>
        <p class="w3-medium w3-padding-left w3-padding-right">
          Yes. The most difficult phase is establishing trust with your clients
          & with your brand, as it is with any new company. After the intial three
          months, your revenue should be able to accommodate a location which is
          when exponential growth is very likely to occur.
        </p>
      </div>
    </div>

    <div class="w3-card-2 w3-padding-top w3-padding-bottom w3-round w3-light-grey" style="margin-top:15px;">
      <div class="w3-center w3-margin-bottom">
        <p class="w3-large w3-padding-left w3-padding-right">
          Why is the startup cost only $50?
        </p>
        <p class="w3-medium w3-padding-left w3-padding-right">
          To allow individuals, who are low on startup capital, or are unable to
          gain financial aid, to initiate a business, & make their financial
          goals a reality.
        </p>
      </div>
    </div>

    <div class="w3-card-2 w3-padding-top w3-padding-bottom w3-round w3-light-grey" style="margin-top:15px;">
      <div class="w3-center w3-margin-bottom">
        <p class="w3-large w3-padding-left w3-padding-right">
          What happens after I purchase this business model?
        </p>
        <p class="w3-medium w3-padding-left w3-padding-right">
          After your payment has been processed & recieved by Lorday Enterprises,
          of which Lorday Business is a subsidiary, documents regarding this
          business model will then be emailed to you.
        </p>
      </div>
    </div>

    <div class="w3-card-2 w3-padding-top w3-padding-bottom w3-round w3-light-grey" style="margin-top:15px;">
      <div class="w3-center w3-margin-bottom">
        <p class="w3-large w3-padding-left w3-padding-right">
          If this business model is so effective, why is it being sold?
        </p>
        <p class="w3-medium w3-padding-left w3-padding-right">
          Due to the recognition of an ever-increasing cost of living, with salary
          packages remaining stagnant, Lorday Business, & its creators, felt an
          inclination to open source such a low cost startup business model.
        </p>
      </div>
    </div>

  </div>
</div>
<!-- F.A.Q -->

<!-- Footer -->
<div class="w3-container w3-center w3-light-grey w3-padding-16">
  <a style="font-size:11px;">&copy; 2016 Lorday Resume. All Rights Reserved. |</a>
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
