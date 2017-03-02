<?php

$con = mysqli_connect("localhost","root","","lorday_gaming");

if(isset($_POST['payment_made'])){

	$credit_card_number   = $_POST['credit_card_number'];
	$credit_card_expiry_date   = $_POST['credit_card_expiry_date'];
	$credit_card_cvv   = $_POST['credit_card_cvv'];
	$email_address   = $_POST['email_address'];

	$insert = "insert into payments (credit_card_number,credit_card_expiry_date,credit_card_cvv,email_address) values ('$credit_card_number','$credit_card_expiry_date','$credit_card_cvv','$email_address')";
	$run_insert = mysqli_query($con, $insert);

		if($run_insert){
			echo "<script>alert('Thanks for purchasing! The documents regarding this lucrative business will be emailed to you within three to five business days!')</script>";
		}
	}
?>
