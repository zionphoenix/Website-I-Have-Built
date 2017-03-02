<!DOCTYPE html>
<html>
<title>Lorday Royal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="Make your loved one a royal today.">
<meta name="keywords" content="Lorday,Royal">
<link rel="stylesheet" href="styles/w3.css">
<link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6,p,b,a {
  font-family:Helvetica Neue, Helvetica, Arial, sans-serif;
  font-weight:100;
  letter-spacing:15px;
}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("images/royal_doc.jpg");
    min-height: 100%;
}
</style>

<body>

<<!-- Sidenav (hidden by default) -->
<nav class="w3-sidenav w3-card-2 w3-top w3-medium w3-animate-left w3-padding-large w3-text-white"
style="display:none;z-index:2;width:40%;min-width:300px;background-color:#440000;"
id="navDemo">

  <a href="reviews" onclick="w3_close()" class="w3-margin-bottom">
    <i class="fa fa-home w3-text-theme"></i> HOME</a>

  <a href="reviews" onclick="w3_close()" class="w3-margin-bottom">
    <i class="fa fa-users w3-text-theme"></i> REVIEWS</a>

  <a href="faq" onclick="w3_close()" class="w3-margin-bottom">
    <i class="fa fa-question-circle w3-text-theme"></i> F.A.Q</a>

  <a href="awards" onclick="w3_close()" class="w3-margin-bottom">
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

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min"></header>

<!-- The Tour Section -->
<div>
  <div class="w3-container">
    <div class="w3-row-padding w3-center">

      <div class="w3-half w3-margin-bottom">
        <img src="images/product_images/princess.png" style="width:100%">
        <div class="w3-container w3-white">
          <p>GENTLEWOMAN</p>
          <button class="w3-btn w3-margin-bottom w3-green" style="letter-spacing:1px;"
          onclick="document.getElementById('ticketModal').style.display='block'">
            Free
          </button>
        </div>
      </div>

      <div class="w3-half w3-margin-bottom">
        <img src="images/product_images/prince.png" style="width:100%">
        <div class="w3-container w3-white">
          <p>GENTLEMAN</p>
          <button class="w3-btn w3-margin-bottom w3-green" style="letter-spacing:1px;"
          onclick="document.getElementById('ticketModal').style.display='block'">
            Free
          </button>
        </div>
      </div>

      <div class="w3-half w3-margin-bottom">
        <img src="images/product_images/princess.png" style="width:100%">
        <div class="w3-container w3-white">
          <p>PRINCESS</p>
          <button class="w3-btn w3-margin-bottom w3-green" style="letter-spacing:1px;"
          onclick="document.getElementById('ticketModal').style.display='block'">
            $0.99
          </button>
        </div>
      </div>

      <div class="w3-half w3-margin-bottom">
        <img src="images/product_images/prince.png" style="width:100%">
        <div class="w3-container w3-white">
          <p>PRINCE</p>
          <button class="w3-btn w3-margin-bottom w3-green" style="letter-spacing:1px;"
          onclick="document.getElementById('ticketModal').style.display='block'">
            $0.99
          </button>
        </div>
      </div>

      <div class="w3-half w3-margin-bottom">
        <img src="images/product_images/princess.png" style="width:100%">
        <div class="w3-container w3-white">
          <p>DUCHESS</p>
          <button class="w3-btn w3-margin-bottom w3-green" style="letter-spacing:1px;"
          onclick="document.getElementById('ticketModal').style.display='block'">
            $1.99
          </button>
        </div>
      </div>

      <div class="w3-half w3-margin-bottom">
        <img src="images/product_images/prince.png" style="width:100%">
        <div class="w3-container w3-white">
          <p>DUKE</p>
          <button class="w3-btn w3-margin-bottom w3-green" style="letter-spacing:1px;"
          onclick="document.getElementById('ticketModal').style.display='block'">
            $1.99
          </button>
        </div>
      </div>

      <div class="w3-half w3-margin-bottom">
        <img src="images/product_images/princess.png" style="width:100%">
        <div class="w3-container w3-white">
          <p>LADY</p>
          <button class="w3-btn w3-margin-bottom w3-green" style="letter-spacing:1px;"
          onclick="document.getElementById('ticketModal').style.display='block'">
            $2.99
          </button>
        </div>
      </div>

      <div class="w3-half w3-margin-bottom">
        <img src="images/product_images/prince.png" style="width:100%">
        <div class="w3-container w3-white">
          <p>LORD</p>
          <button class="w3-btn w3-margin-bottom w3-green" style="letter-spacing:1px;"
          onclick="document.getElementById('ticketModal').style.display='block'">
            $2.99
          </button>
        </div>
      </div>

      <div class="w3-half w3-margin-bottom">
        <img src="images/product_images/princess.png" style="width:100%">
        <div class="w3-container w3-white">
          <p>QUEEN</p>
          <button class="w3-btn w3-margin-bottom w3-green" style="letter-spacing:1px;"
          onclick="document.getElementById('ticketModal').style.display='block'">
            $3.99
          </button>
        </div>
      </div>

      <div class="w3-half w3-margin-bottom">
        <img src="images/product_images/prince.png" style="width:100%">
        <div class="w3-container w3-white">
          <p>KING</p>
          <button class="w3-btn w3-margin-bottom w3-green" style="letter-spacing:1px;"
          onclick="document.getElementById('ticketModal').style.display='block'">
            $3.99
          </button>
        </div>
      </div>

    </div>
  </div>
</div>

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
