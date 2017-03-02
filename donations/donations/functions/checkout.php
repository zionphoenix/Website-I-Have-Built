<?php require_once("config.php"); ?>

<!DOCTYPE html>

<html>
<html lang="en">
<title>Lorday | Donations</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="Save mistreated dogs lives by donating today.">
<meta name="keywords" content="Lorday,Donations,Save Dog">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../styles/w3.css">
<link rel="stylesheet" href="../styles/raleway/raleway.css">
<link rel="stylesheet" href="../styles/font-awesome/css/font-awesome.min.css">

<link href="../styles/bootstrap.css" rel="stylesheet">
<link href="../styles/shop-homepage.css" rel="stylesheet">
<link href="../styles/styles.css" rel="stylesheet">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("../images/checkout.jpg");
    min-height: 100%;
    min-width: 100%;
}
</style>

<body>

  <!-- SideNav-->
  <nav class="w3-sidenav w3-card-2 w3-top w3-large w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidenav">
    <a href="../index.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-home w3-text-theme" style="font-size:20px; color:white;"></i> Home</a>
    <a href="../faq.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-question-circle w3-text-theme" style="font-size:20px; color:white;"></i> Frequently Asked Questions</a>
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

<!-- Checkout -->
<div class="w3-display-container w3-center" style="margin-top:-10px; margin-bottom:-50px;">
  <div>
    <div>
      <ul class="w3-ul w3-white">

        <li class="w3-green w3-xlarge w3-padding-32">Checkout</li>

          <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" style="margin-top:25px;">
          <input type="hidden" name="cmd" value="_cart">
          <input type="hidden" name="business" value="admin-buyer@lorday.com">
          <input type="hidden" name="currency_code" value="AUD">
              <table class="table">
                  <thead>
                    <tr>
                     <th class="w3-center" style="border-bottom:none;"></th>
                     <th class="w3-center" style="border-bottom:none;">Price</th>
                     <th class="w3-center" style="border-bottom:none;">Quantity</th>
                     <th class="w3-center" style="border-bottom:none;">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php cart(); ?>
                  </tbody>
              </table>
            <?php echo show_paypal(); ?>
          </form>

        <li class="w3-padding-16"> Total Items:
          <span class="amount"><?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";?></span>
        </li>

        <li class="w3-padding-16 w3-blue"> Donation Total:
          <span class="amount">&#36;<?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";?></span>
        </li>

      </ul>
    </div>
  </div>
</div>
<!-- Checkout -->

<!-- Thank You For Donating -->
<div class="bgimg-1 w3-display-container w3-grayscale-min" id="home" style="margin-top:50px; margin-bottom:-50px;">
  <span class="w3-medium w3-display-middle w3-white w3-round w3-padding-16
  w3-padding-left w3-padding-right w3-center" style="opacity:0.9;">
    THANK YOU FOR DONATING!
  </span>
</div>
<!-- Thank You For Donating -->


<!-- Footer -->
<div class="w3-container w3-center w3-light-grey w3-padding-16" style="margin-top:50px;">
  <a style="font-size:11px; text-decoration:none;" class="w3-text-dark-grey">&copy; 2016 Lorday Donations. All Rights Reserved. |</a>
  <a href="../policies/terms_and_conditions.php" title="Terms & Conditions" style="text-decoration:none; font-size:11px;" class="w3-text-dark-grey">Terms & Conditions |</a>
  <a href="../policies/privacy_policy.php" title="Privacy" style="text-decoration:none; font-size:11px;" class="w3-text-dark-grey">Privacy |</a>
  <a href="../policies/returns_and_refunds_policy.php" title="Returns & Refunds" style="text-decoration:none; font-size:11px;" class="w3-text-dark-grey">Returns & Refunds |</a>
  <a href="../policies/cookies_policy.php" title="Cookies" style="text-decoration:none; font-size:11px;" class="w3-text-dark-grey">Cookies |</a>
  <a href="../policies/help.php" title="Help/Contact" style="text-decoration:none; font-size:11px;" class="w3-text-dark-grey">Help/Contact</a>
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
