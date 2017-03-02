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
</style>

<!-- SideNav-->
<nav class="w3-sidenav w3-card-2 w3-top w3-large w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidenav">
  <a href="index.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-home w3-text-theme" style="font-size:20px; color:white;"></i> Home</a>
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
          What happens to my donation?
        </p>
        <p class="w3-medium w3-padding-left w3-padding-right">
          Your valuable donation is used to finance the establishment of animal
          shelters all around the world, significantly lowering the mistreatment
          levels of canines in its surrounding areas.
        </p>
      </div>
    </div>

    <div class="w3-card-2 w3-padding-top w3-padding-bottom w3-round w3-light-grey" style="margin-top:15px;">
      <div class="w3-center w3-margin-bottom">
        <p class="w3-large w3-padding-left w3-padding-right">
          What do I do if I feel distressed?
        </p>
        <p class="w3-medium w3-padding-left w3-padding-right">
          We most sincrerely apologise for any distress you have been caused.
          Please make use of your free to use local, state, or national counselling
          hotlines.
        </p>
      </div>
    </div>

    <div class="w3-card-2 w3-padding-top w3-padding-bottom w3-round w3-light-grey" style="margin-top:15px;">
      <div class="w3-center w3-margin-bottom">
        <p class="w3-large w3-padding-left w3-padding-right">
          What more can I do?
        </p>
        <p class="w3-medium w3-padding-left w3-padding-right">
          There are many animal services in your local area who would love to be
          aided in any way via volunteering. Given Lorday Donations is a global
          service, we finance such institutions & greatly urge you to continue
          aiding our pledge to rid the world of canine mistreatment.
        </p>
      </div>
    </div>

    <div class="w3-card-2 w3-padding-top w3-padding-bottom w3-round w3-light-grey" style="margin-top:15px;">
      <div class="w3-center w3-margin-bottom">
        <p class="w3-large w3-padding-left w3-padding-right">
          How do we stop people hurting dogs?
        </p>
        <p class="w3-medium w3-padding-left w3-padding-right">
          By helping those who are wholeheartedly committed to serving & rescuing
          mistreated dogs. Your donation means the absolute world to us & helps
          us save many dogs.
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
