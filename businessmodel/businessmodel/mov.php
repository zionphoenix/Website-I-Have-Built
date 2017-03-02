<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/w3.css">
<link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Arial", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("images/1_0.jpg");
    min-height: 100%;
}
</style>
<body>


<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-padding-xxlarge w3-text-white">
    <p><a class="w3-btn w3-white w3-padding-large w3-xxlarge w3-margin-top
      w3-round" id="demo_2">$0.00</a></p>

  </div>
</header>

<script>
var count_2 = 0;
setInterval(function() {
  var myVar = setInterval(myTimer, 2000);
  function myTimer() {
    document.getElementById("demo_2").innerHTML = "$" + count_2++ + ".00";
  }
}, 2000);
</script>

</body>
</html>
