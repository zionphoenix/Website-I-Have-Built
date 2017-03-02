<?php

function last_id(){
  global $connection;
  return mysqli_insert_id($connection);
}

function set_message($msg){
  if(!empty($msg)) {
    $_SESSION['message'] = $msg;
  } else {
    $msg = "";
  }
}

function display_message() {
  if(isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  }
}

function redirect($location){
  return header("Location: $location ");
}

function query($sql) {
  global $connection;
  return mysqli_query($connection, $sql);
}

function confirm($result){
  global $connection;
  if(!$result) {
    die("QUERY FAILED " . mysqli_error($connection));
	}
}

function escape_string($string){
  global $connection;
  return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
  return mysqli_fetch_array($result);
}

/****************************FRONT END FUNCTIONS************************/

function add_to_cart() {
  $query = query(" SELECT * FROM products ");
  confirm($query);
  while($row = fetch_array($query)) {

$product = <<<DELIMETER

<div class="w3-col s4 w3-section">
  <a href="functions/cart.php?add={$row['product_id']}" style="text-decoration:none;">
  <ul class="w3-ul">
    <li class="w3-green w3-large w3-padding-8 w3-round">$ {$row['product_price']}</li>
  </ul>
</div>

DELIMETER;

echo $product;
  }
}

function add_to_cart_folder() {
  $query = query(" SELECT * FROM products ");
  confirm($query);
  while($row = fetch_array($query)) {

$product = <<<DELIMETER

<div class="w3-third w3-section">
  <a href="../functions/cart.php?add={$row['product_id']}" style="text-decoration:none;">
  <ul class="w3-ul w3-white">
    <li class="w3-green w3-xlarge w3-padding-32">$ {$row['product_price']}</li>
  </ul>
</div>
DELIMETER;

echo $product;
  }
}

?>
