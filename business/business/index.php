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
.bgimg-1 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.bgimg-1 {
    background-image: url('images/1_1.jpg');
    min-height: 100%;
}
</style>

<!-- SideNav-->
<nav class="w3-sidenav w3-card-2 w3-top w3-large w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidenav">
  <?php add_to_cart_navbar(); ?>
  <a href="case_study.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-folder-open w3-text-theme" style="font-size:20px; color:white;"></i> Case Study</a>
  <a href="reviews.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-users w3-text-theme" style="font-size:20px; color:white;"></i> Reviews</a>
  <a href="faq.php" onclick="w3_close()" style="background-color:#770000; padding:16px;" class="w3-text-white"><i class="fa fa-question-circle w3-text-theme" style="font-size:20px; color:white;"></i> Frequently Asked Questions</a>
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
<div class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-middle w3-padding-xxlarge w3-text-dark-grey w3-center">
    <p class="w3-btn w3-padding-large w3-large w3-margin-top w3-round w3-white"
      style="opacity:0.9;">Multi-Million Dollar Business Model</p>
  </div>
</div>
<!-- Title -->

<!-- Description -->
<div class="w3-row-padding w3-center bgimg-1">

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-usd w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey">$50 Startup Capital</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-bar-chart w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">Lucrative Stream of Revenue</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-linode w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">Intangible Products</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-truck w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">No Shipping & Handling Costs</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-industry w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">No Manufacturing Costs</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-cubes w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">No Tangible Inventory</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-grav w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">Significantly Reduced Overhead</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-sitemap w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">Multiple Revenue Streams</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-calendar w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">Stand the Test of Time</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-fort-awesome w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">Simple Setup</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-line-chart w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">Overcome Marketing Costs Overshadowing Profit</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-flag-o w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">Versatile Product Applicable in Almost Every Market</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-address-card w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">Choose However
        Many Employees You Would Like To Have</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-clone w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">Choose the
        Products You Choose To Build a Company Around</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-pie-chart w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">Choose To Grow
        at Whichever Rate You Feel Comfortable With</p>
    </div>
  </div>

  <div class="w3-half" style="margin-top:15px;">
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-user w3-margin-bottom w3-text-theme" style="font-size:75px; color:#770000;"></i>
      <p class="w3-light-grey w3-padding-right w3-padding-left">Be Recognised As
        a Founder of a Business, via this Business Model</p>
    </div>
  </div>

</div>
<!-- Description -->

<!-- What This Business Is Not -->
<div class="bgimg-1 w3-row-padding w3-center w3-padding-left w3-padding-right">
    <br>
  <div>
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-ban w3-margin-bottom w3-text-theme" style="font-size:120px; color:#770000;"></i>
      <p class="w3-padding-right w3-padding-left w3-xlarge">This Business Model:</p>
      <p class="w3-light-grey">is NOT a Pyramid Scheme</p>
      <p class="w3-light-grey">is NOT a Stock Market Spiel</p>
      <p class="w3-light-grey">is NOT a Get-Rich-Quick Scheme</p>
      <p class="w3-light-grey">is NOT a Multi-Level Marketing Setup</p>
      <p class="w3-light-grey">is NOT a Work-From-Home Opportunity</p>
      <p class="w3-light-grey">is NOT an association with Lorday Business, or
        other businesses.</p>
      <p class="w3-light-grey">does NOT require homage to Lorday Business or any
        of its entities.</p>
      <p class="w3-light-grey">does NOT require an inclusion with Lorday Business,
        or any other businesses.</p>
      <p class="w3-light-grey">does NOT have any added or ongoing fees to Lorday
        Business, or any other business entities.</p>
    </div>
  </div>

<!-- Case Study -->
<div class="bgimg-1 w3-center">
    <br>
  <div>
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-area-chart w3-margin-bottom w3-text-theme" style="font-size:120px; color:#770000;"></i>
      <p class="w3-padding-right w3-padding-left w3-xlarge">Average Annual
        Revenue of Five Hundred Business Model Implementers Over Five Years</p>
      <a href="case_study.php" class="w3-margin-bottom w3-large w3-btn w3-theme w3-round"
        style="background-color:#770000; margin-top:25px;">Read</a>
    </div>
  </div>
</div>
<!-- Case Study -->

</div>
<!-- What This Business Is Not -->

<!-- Reviews -->
<div class="bgimg-1 w3-container w3-theme w3-padding">
  <div class="w3-center w3-margin-bottom">
    <br>
  <div>
    <div class="w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
      <i class="fa fa-users w3-margin-bottom w3-text-theme" style="font-size:120px; color:#770000;"></i>
      <p class="w3-padding-right w3-padding-left w3-xlarge">Reviews:</p>
    </div>
  </div>

    <?php IndexReviews(); ?>

    <a href="reviews.php" class="w3-margin-bottom w3-large w3-btn w3-theme w3-round"
    style="background-color:#770000; margin-top:25px;">More Reviews</a>

  </div>
</div>
<!-- Reviews -->

<!-- Legitimacy & Goal -->
<div class="bgimg-1 w3-container w3-theme w3-padding">
  <div class="w3-center w3-margin-bottom w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
    <i class="fa fa-check w3-margin-bottom w3-text-theme" style="font-size:120px; color:#770000;"></i>
    <p class="w3-padding-right w3-padding-left w3-large">This is a legitimate
      business model which when implemented thoroughly, & expertly, can provide
      steady, or exponential, revenue, financial year, after financial year.</p>
  </div>
  <div class="w3-center w3-margin-bottom w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
    <i class="fa fa-crosshairs w3-margin-bottom w3-text-theme" style="font-size:120px; color:#770000;"></i>
    <p class="w3-padding-right w3-padding-left w3-large">The goal of this
      business model, is to allow you to leverage your position as a business
      owner, & enable expansion into other fields, industries, or businesses,
      through having achieved steady revenue flow, with this business model.</p>
  </div>
  <div class="w3-center w3-margin-bottom w3-white w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="opacity:0.9;">
    <i class="fa fa-thumbs-up w3-margin-bottom w3-text-theme" style="font-size:120px; color:#770000;"></i>
    <p class="w3-padding-right w3-padding-left w3-large">After twenty years of
      analysis, & testing, we here at Lorday Business formulated a business plan
      which could be implemented from the ground up from a startup cost of $50.
      This business model has been created to allow individuals, who are low on
      startup capital, or are unable to gain financial aid, to initiate a business,
      & make their financial goals a reality.</p>
  </div>

<!-- Payment -->
<div class="w3-center" style="margin-top:15px; margin-bottom:15px;">
  <div>
    <div class="w3-card-2 w3-padding-top w3-padding-bottom w3-round" style="background-color:#770000;">
      <div class="w3-center w3-margin-bottom">
          <br>
        <a class="w3-margin-bottom w3-xxlarge w3-round w3-transparent w3-text-white"
        >$99.99</a>
          <br>
          <br>
        <?php add_to_cart(); ?>
      </div>
    </div>
  </div>
</div>
<!-- Payment -->

</div>
<!-- Legitimacy & Goal -->

<!-- Footer -->
<div class="w3-container w3-center w3-light-grey w3-padding-16">
  <a style="font-size:11px;">&copy; 2016 Lorday Business. All Rights Reserved. |</a>
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
