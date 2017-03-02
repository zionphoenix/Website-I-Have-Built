<?php require_once("../functions/config.php"); ?>

<!DOCTYPE html>

<html>
<html lang="en">
<title>Lorday | Gaming</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="Make money playing games.">
<meta name="keywords" content="Lorday,Gaming,Make Money,Games">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../styles/w3.css">
<link rel="stylesheet" href="../styles/raleway/raleway.css">
<link rel="stylesheet" href="../styles/font-awesome/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
</style>

<body>

  <!-- SideNav-->
  <nav class="w3-sidenav w3-card-2 w3-top w3-large w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidenav">
    <a href="../index.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-home w3-text-theme" style="font-size:20px; color:white;"></i> Home</a>
    <a href="../reviews.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-users w3-text-theme" style="font-size:20px; color:white;"></i> Reviews</a>
    <a href="../faq.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-question-circle w3-text-theme" style="font-size:20px; color:white;"></i> Frequently Asked Questions</a>
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

<!--Content starts-->
<div class="w3-row-padding w3-center" style="margin-top:70px; margin-bottom:10px;">
	<div class="w3-card-4">
		<div class="w3-container">

			<h1 class="w3-large w3-text-white" style="background-color:#770000;"> RETURNS & REFUNDS POLICY </h1>
			<p>
				When you return an item, your refund and how your refund is issued
				may differ based on how long you've had the item.
			</p>

			<h1 class="w3-large w3-light-grey">How Refunds Are Issued</h1>
			<p>
				Most refunds are issued based on the payment method used at the time
				of purchase.
			</p>
			<p>
				Payment Method: Credit Card or Paypal Credit
			</p>
			<p>
				Refund Method: Credit Card or Paypal Credit
			</p>
			<p>
				Refund Time: 10-14 business days
			</p>
			<p>
				Note: Your refund request will be processed instantly. However, it may
				take 2-3 business days for it to display on your credit card statement.
			</p>

			<h1 class="w3-large w3-light-grey">Late Refunds</h1>
			<p>
				If you would like any assistance regarding your refund, please do not
        hesitate to contact us at admin@lorday.com
			</p>

      <h1 class="w3-large w3-light-grey">Cessation of Recurring Payments</h1>
      <p>
        If you would like your recurring payments to cease immediately, please
        do not hesitate to contact us at admin@lorday.com explaining the need to
        deplete any remaining costs & to cease the instalment payments.
      </p>

		</div>
	</div>
</div>
<!--Content ends-->

<!-- Footer -->
<div class="w3-container w3-center w3-light-grey w3-padding-16">
  <a style="font-size:11px;">&copy; 2016 Lorday Gaming. All Rights Reserved. |</a>
  <a href="terms_and_conditions.php" title="Terms & Conditions" style="text-decoration:none; font-size:11px;">Terms & Conditions |</a>
  <a href="privacy_policy.php" title="Privacy" style="text-decoration:none; font-size:11px;">Privacy |</a>
  <a href="returns_and_refunds_policy.php" title="Returns & Refunds" style="text-decoration:none; font-size:11px;">Returns & Refunds |</a>
  <a href="cookies_policy.php" title="Cookies" style="text-decoration:none; font-size:11px;">Cookies |</a>
  <a href="help.php" title="Help/Contact" style="text-decoration:none; font-size:11px;">Help/Contact</a>
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
