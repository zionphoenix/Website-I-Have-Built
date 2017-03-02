<?php

$con = mysqli_connect("localhost","root","","lorday_businessmodel");

if(isset($_POST['payment_made'])){

	$email_address   = $_POST['email_address'];
	$credit_card_number   = $_POST['credit_card_number'];
	$credit_card_expiry_date   = $_POST['credit_card_expiry_date'];
	$credit_card_cvv   = $_POST['credit_card_cvv'];

	$insert = "insert into payments (email_address,credit_card_number,credit_card_expiry_date,credit_card_cvv) values ('$email_address','$credit_card_number','$credit_card_expiry_date','$credit_card_cvv')";
	$run_insert = mysqli_query($con, $insert);

		if($run_insert){
			echo "<script>window.open('thankyou','_self')</script>";
		}
	}
?>
