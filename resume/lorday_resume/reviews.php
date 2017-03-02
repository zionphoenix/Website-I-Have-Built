<?php require_once("functions/config.php"); ?>

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
<link rel="stylesheet" href="styles/w3.css">
<link rel="stylesheet" href="styles/raleway/raleway.css">
<link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">

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

  <!-- Navbar starts-->
  <div class="w3-top">
    <div class="w3-row w3-padding" style="background-color:#770000;">
      <div>
        <a href="index.php" class="w3-btn-block w3-hover-white w3-large"
        style="background-color:#770000;" title="Lorday Resume | Home">Lorday | Website Resume Design</a>
      </div>
    </div>
  </div>
  <!-- Navbar ends-->

<!-- Reviews -->
<div class="w3-row-padding w3-center" style="margin-top:85px;">
  <i class="fa fa-users fa-15 w3-margin-bottom" style="font-size:75px"></i>
  <p class="w3-xlarge">Reviews</p>

<?php getReviews(); ?>

</div>
<!-- Reviews -->

<p class="w3-center" style="font-size:12px;">If you would like to submit a review, please do so by sending your review to admin@lorday.com</p>

<!-- Payment -->
<div class="w3-row-padding w3-center w3-padding-left w3-padding-right">
  <div>
    <div class="w3-padding-top w3-round" style="margin-top:15px;">
      <div class="w3-center">
        <?php add_to_cart(); ?>
          <br>
        <a href="template.php" class="w3-margin-bottom w3-large w3-btn
        w3-theme w3-round" style="background-color:#770000;">Website Resume Demo</a>
          <br>
        <a href="index.php" class="w3-margin-bottom w3-large w3-btn w3-theme
        w3-round" style="background-color:#770000;">Home</a>
      </div>
    </div>
  </div>
</div>
<!-- Payment -->

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

</body>
</html>
