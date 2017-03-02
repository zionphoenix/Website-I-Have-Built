<!DOCTYPE html>
<html>

<style>
.timer {
  text-align: center;
  font-size: 50px;
}
</style>

<body>

<div class="timer">
  <p>How Much Players Are Making All Around The World Using This Method:</p>
  <p id="demo">$0.00</p>
</div>

<div class="timer">
  <p>This Is How Much Money You Could Have Made Already:</p>
  <p id="demo_2">$0.00</p>
</div>

<script>

var count = 0;
setInterval(function() {
  var myVar = setInterval(myTimer, 500);
  function myTimer() {
    document.getElementById("demo").innerHTML = "$" + count++ + ".00";
  }
}, 500);

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
