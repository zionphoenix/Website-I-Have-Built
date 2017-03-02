<!DOCTYPE html>

<html>
<html lang="en">
<title>Lorday | Website Resume Design</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="Join the 21st Century Movement of Job Applications
By Turning Your Resume into a Website.">
<meta name="keywords" content="Lorday,Resume,Website,Website Design">
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
.w3-navbar li a {
    padding: 16px;
    float: left;
}
</style>

<body>

  <!-- Navbar starts-->
  <div class="w3-top">
    <div class="w3-row w3-padding" style="background-color:#770000;">
      <div>
        <a href="../index.php" class="w3-btn-block w3-hover-white w3-large"
        style="background-color:#770000;" title="Lorday Resume | Home">Lorday | Website Resume Design</a>
      </div>
    </div>
  </div>
  <!-- Navbar ends-->

<!--Content starts-->
<div class="w3-row-padding w3-margin-bottom w3-center" style="margin-top:70px;">
	<div class="w3-card-4">
		<div class="w3-container">

			<!-- Container (Contact Section) -->
			<form action="" name="sentMessage" id="contactForm" method="post" class="w3-content w3-container w3-padding-64" >
			    <div class="w3-row w3-padding-32 w3-section">
			        <div class="w3-container w3-section">

								<h1 class="w3-large w3-text-white" style="background-color:#770000;"> Contact Lorday Website Resume Design </h1>

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
			  include("../functions/insert.php");
			?>

		</div>
	</div>
</div>
<!--Content ends-->

<!-- Footer -->
<div class="w3-container w3-center w3-light-grey w3-padding-16">
  <a style="font-size:11px;">&copy; 2016 Lorday Resume. All Rights Reserved. |</a>
  <a href="terms_and_conditions.php" title="Terms & Conditions" style="text-decoration:none; font-size:11px;">Terms & Conditions |</a>
  <a href="privacy_policy.php" title="Privacy" style="text-decoration:none; font-size:11px;">Privacy |</a>
  <a href="returns_and_refunds_policy.php" title="Returns & Refunds" style="text-decoration:none; font-size:11px;">Returns & Refunds |</a>
  <a href="cookies_policy.php" title="Cookies" style="text-decoration:none; font-size:11px;">Cookies |</a>
  <a href="help.php" title="Help/Contact" style="text-decoration:none; font-size:11px;">Help/Contact</a>
</div>
<!-- Footer -->

</body>
</html>
