<!DOCTYPE html>
<html>

<style>
.timer {
  text-align: center;
  font-size: 50px;
  margin-top: 25%;
}
</style>

<body>

<div class="timer">
  <p id="demo_2">$0.00</p>
</div>

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
