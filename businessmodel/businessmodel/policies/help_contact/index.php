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

			<!-- Container (Contact Section) -->
			<form action="" name="sentMessage" id="contactForm" method="post" class="w3-content w3-container w3-padding-64" >
			    <div class="w3-row w3-padding-32 w3-section">
			        <div class="w3-container w3-section">

								<h1 class="w3-large w3-text-white" style="background-color:#440000;"> Contact Lorday Business Model </h1>

			          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">

			            <div class="form-group w3-half">
			                <input type="text" name="full_name" class="form-control w3-input w3-border w3-hover-light-grey" placeholder="Your Name" id="full_name" required data-validation-required-message="Please enter your name.">
			                <p class="help-block text-danger"></p>
			            </div>

			            <div class="form-group w3-half">
			                <input type="email" name="email" class="form-control w3-input w3-border w3-hover-light-grey" placeholder="Your Email Address" id="email" required data-validation-required-message="Please enter your email address.">
			                <p class="help-block text-danger"></p>
			            </div>

			          </div>

			        <div class="form-group">
			          <textarea name="message" class="form-control w3-input w3-border w3-hover-light-grey" placeholder="Your Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
			          <p class="help-block text-danger"></p>
			        </div>

			        <button class="w3-btn w3-section w3-right w3-blue" name="submit">SEND</button>

			      </div>

			    </div>
			</form>
			<?php
			  include("../../functions/insert.php");
			?>

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
