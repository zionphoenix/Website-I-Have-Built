<?php require_once("config.php"); ?>

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

<link href="../styles/bootstrap.css" rel="stylesheet">
<link href="../styles/shop-homepage.css" rel="stylesheet">
<link href="../styles/styles.css" rel="stylesheet">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
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

<!-- Pricing Section -->
<div class="w3-display-container w3-center" style="margin-top:-10px; margin-bottom:-50px;">
  <div>
    <div>
      <ul class="w3-ul w3-white">

        <li class="w3-green w3-xlarge w3-padding-32">Cart</li>

          <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" style="margin-top:25px;">
          <input type="hidden" name="cmd" value="_cart">
          <input type="hidden" name="business" value="admin-buyer@lorday.com">
          <input type="hidden" name="currency_code" value="AUD">
              <table class="table">
                  <thead>
                    <tr>
                     <th class="w3-center" style="border-bottom:none;">Product</th>
                     <th class="w3-center" style="border-bottom:none;">Price</th>
                     <th class="w3-center" style="border-bottom:none;">Quantity</th>
                     <th class="w3-center" style="border-bottom:none;">SubTotal</th>
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

        <li class="w3-padding-16 w3-blue"> Order Total:
          <span class="amount">&#36;<?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";?></span>
        </li>

        <li class="w3-padding-16">You will receive an email very shortly
          requesting your resume. Shortly after your website resume will immediately
          commence construction & will be online within six weeks.
        </li>

      </ul>
    </div>
  </div>
</div>

<!-- Payment -->
<div class="w3-row-padding w3-center w3-padding-left w3-padding-right">
  <div>
    <div class="w3-padding-top w3-round" style="margin-top:15px;">
      <div class="w3-center">
          <br>
        <a href="../template.php" class="w3-margin-bottom w3-large w3-btn w3-hover-text-white
        w3-theme w3-round" style="background-color:#770000;">Website Resume Demo</a>
          <br>
        <a href="../index.php" class="w3-margin-bottom w3-large w3-btn w3-theme w3-hover-text-white
        w3-round" style="background-color:#770000;">Home</a>
      </div>
    </div>
  </div>
</div>
<!-- Payment -->

<!-- Footer -->
<div class="w3-container w3-center w3-light-grey w3-padding-16" style="margin-top:5px;">
  <a style="font-size:11px; text-decoration:none;" class="w3-text-dark-grey">&copy; 2016 Lorday Resume. All Rights Reserved. |</a>
  <a href="../policies/terms_and_conditions.php" title="Terms & Conditions" style="text-decoration:none; font-size:11px;" class="w3-text-dark-grey">Terms & Conditions |</a>
  <a href="../policies/privacy_policy.php" title="Privacy" style="text-decoration:none; font-size:11px;" class="w3-text-dark-grey">Privacy |</a>
  <a href="../policies/returns_and_refunds_policy.php" title="Returns & Refunds" style="text-decoration:none; font-size:11px;" class="w3-text-dark-grey">Returns & Refunds |</a>
  <a href="../policies/cookies_policy.php" title="Cookies" style="text-decoration:none; font-size:11px;" class="w3-text-dark-grey">Cookies |</a>
  <a href="../policies/help.php" title="Help/Contact" style="text-decoration:none; font-size:11px;" class="w3-text-dark-grey">Help/Contact</a>
</div>
<!-- Footer -->

</body>
</html>
