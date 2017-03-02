<?php require_once("../functions/config.php"); ?>

<!DOCTYPE html>
<html>
<title>Lorday Royal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="Make your loved one a royal today.">
<meta name="keywords" content="Lorday,Royal">
<link rel="stylesheet" href="../styles/w3.css">
<link rel="stylesheet" href="../styles/font-awesome/css/font-awesome.min.css">

<style>

body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}
</style>

<body>

  <<!-- Sidenav (hidden by default) -->
  <nav class="w3-sidenav w3-card-2 w3-top w3-medium w3-animate-left w3-padding-large w3-text-white"
  style="display:none;z-index:2;width:40%;min-width:300px;background-color:#440000;
  font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-weight:100;letter-spacing:15px;"
  id="navDemo">

    <a href="../" onclick="w3_close()" class="w3-margin-bottom">
      <i class="fa fa-home w3-text-theme"></i> HOME</a>

    <a href="../reviews" onclick="w3_close()" class="w3-margin-bottom">
      <i class="fa fa-users w3-text-theme"></i> REVIEWS</a>

    <a href="../faq" onclick="w3_close()" class="w3-margin-bottom">
      <i class="fa fa-question-circle w3-text-theme"></i> F.A.Q</a>

    <a href="../awards" onclick="w3_close()" class="w3-margin-bottom">
      <i class="fa fa-trophy w3-text-theme"></i> AWARDS</a>

  </nav>

  <!-- Top menu -->
  <div class="w3-top">
    <div class="w3-medium w3-padding-large w3-text-white"
    style="margin:auto;background-color:#440000;">
      <div class="w3-opennav w3-right" onclick="toggleFunction()">☰</div>
      <div class="w3-center" style="font-family:Helvetica Neue, Helvetica, Arial, sans-serif;
      font-weight:100; letter-spacing:15px;">LORDAY ROYAL</div>
    </div>
  </div>

  <!-- Reviews -->
  <div class="w3-row-padding w3-center" style="margin-top:85px;">
    <h3 class="w3-center w3-medium" style="font-family:Helvetica Neue, Helvetica, Arial, sans-serif;
    font-weight:100;letter-spacing:15px;margin-bottom:85px;">
      <i class="fa fa-users" style="font-size:16px; color:#440000;"></i>
      REVIEWS
    </h3>

    <?php getReviews(); ?>

  </div>
  <!-- Reviews -->


</body>

<script>

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

</script>

</html>
