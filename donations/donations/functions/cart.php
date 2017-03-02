<?php require_once("config.php"); ?>

<?php

  if(isset($_GET['add'])) {

    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']). " ");
    confirm($query);

    while($row = fetch_array($query)) {

      if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {

        $_SESSION['product_' . $_GET['add']]+=1;
        redirect("checkout.php");

      } else {

        set_message("We only have " . $row['product_quantity'] . " " . "{$row['product_title']}" . " available");
        redirect("checkout.php");

      }

    }

  }

  if(isset($_GET['remove'])) {

    $_SESSION['product_' . $_GET['remove']]--;

    if($_SESSION['product_' . $_GET['remove']] < 1) {

      unset($_SESSION['item_total']);
      unset($_SESSION['item_quantity']);
      redirect("checkout.php");

    } else {

      redirect("checkout.php");

     }

  }

 if(isset($_GET['delete'])) {

  $_SESSION['product_' . $_GET['delete']] = '0';
  unset($_SESSION['item_total']);
  unset($_SESSION['item_quantity']);

  redirect("checkout.php");

 }

function cart() {
$total = 0;
$item_quantity = 0;
$item_name = 1;
$item_number =1;
$amount = 1;
$quantity =1;
foreach ($_SESSION as $name => $value) {

if($value > 0 ) {

if(substr($name, 0, 8 ) == "product_") {


$length = strlen($name - 8);

$id = substr($name, 8 , $length);


$query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");
confirm($query);

while($row = fetch_array($query)) {

$sub = $row['product_price']*$value;
$item_quantity +=$value;

$product = <<<DELIMETER

<tr>
  <td class='w3-center'>{$row['product_title']}<br>

  </td>
  <td class='w3-center'>&#36;{$row['product_price']}</td>
  <td class='w3-center'>{$value}</td>
  <td class='w3-center'>&#36;{$sub}</td>
  <td class='w3-center'>
    <a class='btn btn-success' href="cart.php?add={$row['product_id']}"><span><i class="fa fa-plus-circle" style="font-size:20px"></i></span></a>
    <a class='btn btn-warning' href="cart.php?remove={$row['product_id']}"><span><i class="fa fa-minus-circle" style="font-size:20px"></i></span></a>
    <a class='btn btn-danger' href="cart.php?delete={$row['product_id']}"><span><i class="fa fa-times-circle" style="font-size:20px"></i></span></a>
  </td>
</tr>

<input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
<input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
<input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
<input type="hidden" name="quantity_{$quantity}" value="{$value}">

DELIMETER;

echo $product;

$item_name++;
$item_number++;
$amount++;
$quantity++;

}

$_SESSION['item_total'] = $total += $sub;
$_SESSION['item_quantity'] = $item_quantity;

        }

      }

    }

}

function show_paypal() {

if(isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >= 1) {

$paypal_button = <<<DELIMETER

<input type="image" name="upload" border="0" style="border:red;"
src="https://www.paypalobjects.com/en_AU/i/btn/btn_donate_LG.gif"
alt="PayPal - The safer, easier way to pay online">


DELIMETER;

return $paypal_button;

  }


}

function process_transaction() {

if(isset($_GET['tx'])) {

$amount = $_GET['amt'];
$currency = $_GET['cc'];
$transaction = $_GET['tx'];
$status = $_GET['st'];
$total = 0;
$item_quantity = 0;

foreach ($_SESSION as $name => $value) {

if($value > 0 ) {

if(substr($name, 0, 8 ) == "product_") {

$length = strlen($name - 8);
$id = substr($name, 8 , $length);

$send_order = query("INSERT INTO orders (order_amount, order_transaction, order_currency, order_status ) VALUES('{$amount}', '{$transaction}','{$currency}','{$status}')");
$last_id =last_id();
confirm($send_order);

$query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");
confirm($query);

while($row = fetch_array($query)) {
$product_price = $row['product_price'];
$product_title = $row['product_title'];
$sub = $row['product_price']*$value;
$item_quantity +=$value;

$insert_report = query("INSERT INTO reports (product_id, order_id, product_title, product_price, product_quantity) VALUES('{$id}','{$last_id}','{$product_title}','{$product_price}','{$value}')");
confirm($insert_report);

}

$total += $sub;
$item_quantity;

           }

      }

    }

session_destroy();
  } else {

redirect("index.php");

}

}

?>
