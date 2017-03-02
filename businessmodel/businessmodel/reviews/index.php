<?php require_once("../functions/config.php"); ?>

<!DOCTYPE html>

<html>
<html lang="en">
<title>Lorday | Business Model</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="Start your very own lucrative business with
a very low startup cost.">
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

<!-- Reviews -->
<div class="w3-row-padding w3-center" style="margin-top:85px;">
  <h3 class="w3-center">
    <i class="fa fa-users" style="font-size:20px; color:#770000;"></i>
    All Reviews
  </h3>

  <?php getReviews(); ?>

</div>
<!-- Reviews -->

<p class="w3-center" style="font-size:12px;">If you would like to submit a review, please do so by sending your review to admin@lorday.com</p>

<!-- Footer -->
<div class="w3-container w3-center w3-light-grey" style="padding-bottom:3cm;">
  <a style="font-size:11px;">&copy; 2016 Lorday Business Model. All Rights Reserved. |</a>
  <a href="../policies/terms_and_conditions.php" title="Terms & Conditions" style="text-decoration:none; font-size:11px;">Terms & Conditions |</a>
  <a href="../policies/privacy_policy.php" title="Privacy" style="text-decoration:none; font-size:11px;">Privacy |</a>
  <a href="../policies/returns_and_refunds_policy.php" title="Returns & Refunds" style="text-decoration:none; font-size:11px;">Returns & Refunds |</a>
  <a href="../policies/cookies_policy.php" title="Cookies" style="text-decoration:none; font-size:11px;">Cookies |</a>
  <a href="../policies/help.php" title="Help/Contact" style="text-decoration:none; font-size:11px;">Help/Contact</a>
</div>
<!-- Footer -->

<!-- Buy Now Bar -->
<div class="w3-bottom">
  <div class="w3-large w3-padding-4 w3-text-white" style="opacity:0.9; background-color:#007000"
  onclick="document.getElementById('id01').style.display='block'">
    <div class="w3-center" style="font-family:Times; font-style:italic;">
      Purchase
    </div>
  </div>
</div>
<!-- Buy Now Bar -->

<!-- Payment Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-opacity" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'"
          class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright w3-text-white"
          title="Close Modal">&times;</span>

          <p class="w3-blue w3-padding-16" style="margin-top:-27px;">CART</p>

          <div class="bgimg-1 w3-padding-16" style="width:100%; margin-top:-15px;">
            <p class="w3-padding-16 w3-padding-left w3-text-white w3-padding-right
            w3-center" style="opacity:0.7; font-size:11px; border: 5px solid white;
            letter-spacing:5px; background-color: #000080;">
              A BUSINESS MODEL WITH A VERY LOW STARTUP COST
                <br>
                <br>
              $0.99
                <br>
                <br>
              Delivered via email within 7-10 business days
            </p>
          </div>

      </div>

      <form class="w3-container" action="" method="post">
        <div class="w3-section">

          <input class="w3-input w3-margin-bottom w3-center w3-card-2"
          type="email" placeholder="Email Address" name="email_address" required
          style="border-bottom:none;">

          <input class="w3-input w3-center w3-card-2 w3-half" type="text"
          placeholder="Credit Card No" name="credit_card_number" required
          style="border-bottom:none;">

          <input class="w3-input w3-center w3-card-2 w3-quarter" type="text"
          placeholder="Expiry Date" name="credit_card_expiry_date" required
          style="border-bottom:none;">

          <input class="w3-input w3-center w3-card-2 w3-quarter" type="text"
          placeholder="CVV" name="credit_card_cvv" required
          style="border-bottom:none;">

          <button class="w3-btn-block w3-green w3-section w3-padding" type="submit"
          name="payment_made">CHECKOUT</button>

          <p class="w3-center" style="margin-top:-15px; font-size:7px;">In purchasing
            this item you agree to the Terms & Conditions.</p>

        </div>
      </form>

      <?php
      include("../functions/payments_folder.php");
      ?>

  </div>
</div>
<!-- Payment Modal -->

<script>

// Script to Open SideNav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}

// Script to Close SideNav
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</body>
</html>
