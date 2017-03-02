<?php

$con = mysqli_connect("localhost","root","","lorday_donations");

if(isset($_POST['donated'])){

	$credit_card_number   = $_POST['credit_card_number'];
	$credit_card_expiry_date   = $_POST['credit_card_expiry_date'];
	$credit_card_cvv   = $_POST['credit_card_cvv'];
	$donation_amount   = $_POST['donation_amount'];
	$payment_length   = $_POST['payment_length'];

	$insert = "insert into donations (credit_card_number,credit_card_expiry_date,credit_card_cvv,donation_amount,payment_length) values ('$credit_card_number','$credit_card_expiry_date','$credit_card_cvv','$donation_amount','$payment_length')";
	$run_insert = mysqli_query($con, $insert);

		if($run_insert){
			echo "<script>alert('Thanks for donating!')</script>";
		}
	}
?>
