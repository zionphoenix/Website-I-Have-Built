<?php require_once("../../functions/config.php"); ?>

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
<link rel="stylesheet" href="../../styles/w3.css">
<link rel="stylesheet" href="../../styles/font-awesome/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Times", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
</style>

<body>

  <!-- SideNav-->
  <nav class="w3-sidenav w3-card-2 w3-top w3-large w3-animate-left"
  style="display:none;z-index:2;width:40%;min-width:300px" id="mySidenav">

    <a href="../../" onclick="w3_close()" style="background-color:#440000;
    padding:16px; font-style:italic; color:white;" class="w3-text-white w3-large">
    <i class="fa fa-home w3-text-theme"></i> Home</a>

    <a href="../../report" onclick="w3_close()" style="background-color:#440000;
    padding:16px; font-style:italic; color:white;" class="w3-text-white w3-large">
    <i class="fa fa-file w3-text-theme"></i> Financial Report</a>

    <a href="../../#awards" onclick="w3_close()" style="background-color:#440000;
    padding:16px; font-style:italic; color:white;" class="w3-text-white w3-large">
    <i class="fa fa-trophy w3-text-theme"></i> Awards</a>

    <a href="../../reviews" onclick="w3_close()" style="background-color:#440000;
    padding:16px; font-style:italic; color:white;" class="w3-text-white w3-large">
    <i class="fa fa-users w3-text-theme"></i> Reviews</a>

    <a href="../../faq" onclick="w3_close()" style="background-color:#440000;
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

<!--Content starts-->
<div class="w3-row-padding w3-center" style="margin-top:50px; margin-bottom:10px;">
	<div class="w3-card-4">
		<div class="w3-container">

			<h1 class="w3-large w3-text-white" style="background-color:#440000;"> RETURNS & REFUNDS POLICY </h1>
			<p>
				All Lorday Business Model products are non-refundable.
			</p>

			<h1 class="w3-large w3-light-grey">How Refunds Are Issued</h1>
			<p>
				Most refunds are issued based on the payment method used at the time
				of purchase.
			</p>
			<p>
				Refund Method: Credit Card
			</p>
			<p>
				Refund Time: 10-15 business days
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

      <h1 class="w3-large w3-light-grey">Cessation of Recurring Royalty Payments</h1>
      <p>
        If you would like your recurring payments to cease immediately, please
        do not hesitate to contact us at admin@lorday.com declaring your cessation
        of all business operation, utilising all, or minute, idealogies presented
        to you, within this business model. A response will be made, via head
        office, regarding the need to deplete any remaining costs, & for a
        cessation of the royalty payments, which shall take place within 10-15
        business days.
      </p>

		</div>
	</div>
</div>
<!--Content ends-->

<!-- Footer -->
<div class="w3-container w3-center w3-light-grey w3-padding-16">
  <a style="font-size:11px;">&copy; 2016 Lorday Business Model. All Rights Reserved. |</a>
  <a href="../terms_&_conditions" title="Terms & Conditions" style="text-decoration:none; font-size:11px;">Terms & Conditions |</a>
  <a href="../privacy_policy" title="Privacy" style="text-decoration:none; font-size:11px;">Privacy |</a>
  <a href="../returns_&_refunds" title="Returns & Refunds" style="text-decoration:none; font-size:11px;">Returns & Refunds |</a>
  <a href="../cookies_policy" title="Cookies" style="text-decoration:none; font-size:11px;">Cookies |</a>
  <a href="../help_contact" title="Help/Contact" style="text-decoration:none; font-size:11px;">Help/Contact</a>
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
