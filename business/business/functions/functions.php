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

function getReviews(){
  $query = query(" SELECT * FROM reviews order by RAND()");
  confirm($query);
  while($row = fetch_array($query)) {
    $review = $row['customer_review'];
    $review_image = $row['review_image'];

$the_review = <<<DELIMETER

<div style="margin-top:10px;">
  <div class="w3-card-2 w3-padding-top w3-padding-bottom w3-round w3-padding-left w3-padding-right" style="min-height:50px">
  <img src="images/review_images/{$review_image}" width="80px;">
    <br>
  <p>$review</p>
  </div>
</div>

DELIMETER;

echo $the_review;
  }
}

function IndexReviews(){
  $query = query(" SELECT * FROM reviews order by RAND() LIMIT 0,5 ");
  confirm($query);
  while($row = fetch_array($query)) {
    $review = $row['customer_review'];
    $review_image = $row['review_image'];

$the_review = <<<DELIMETER

<div style="margin-top:10px;">
  <div class="w3-card-2 w3-padding-top w3-padding-bottom w3-round w3-white w3-padding-left w3-padding-right" style="min-height:50px; opacity:0.9;">
  <img src="images/review_images/{$review_image}" width="80px;">
    <br>
  <p>$review</p>
  </div>
</div>

DELIMETER;

echo $the_review;
  }
}

function add_to_cart() {
  $query = query(" SELECT * FROM products ");
  confirm($query);
  while($row = fetch_array($query)) {

$product = <<<DELIMETER

<a href="functions/cart.php?add={$row['product_id']}" class="w3-green
w3-margin-bottom w3-large w3-btn w3-theme w3-round">Buy Now</a>

DELIMETER;

echo $product;
  }
}

function add_to_cart_folder() {
  $query = query(" SELECT * FROM products ");
  confirm($query);
  while($row = fetch_array($query)) {

$product = <<<DELIMETER

<a href="../functions/cart.php?add={$row['product_id']}" onclick="w3_close()" class="w3-green" style="padding:16px;"><i class="fa fa-shopping-cart w3-text-theme" style="font-size:20px; color:white;"></i> Buy Now</a>

DELIMETER;

echo $product;
  }
}

function add_to_cart_navbar() {
  $query = query(" SELECT * FROM products ");
  confirm($query);
  while($row = fetch_array($query)) {

$product = <<<DELIMETER

<a href="functions/cart.php?add={$row['product_id']}" onclick="w3_close()" class="w3-green" style="padding:16px;"><i class="fa fa-shopping-cart w3-text-theme" style="font-size:20px; color:white;"></i> Buy Now</a>

DELIMETER;

echo $product;
  }
}

?>
