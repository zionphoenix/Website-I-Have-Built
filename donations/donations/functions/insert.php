<?php
// After uploading to online server, change this connection accordingly
$con = mysqli_connect("localhost","root","","lorday_donations");

	if(isset($_POST['submit'])){

    global $con;

	  //getting the text data from the fields
		$full_name   = $_POST['full_name'];
		$email       = $_POST['email'];
		$message     = $_POST['message'];

		  $insert_message = "insert into messages (full_name,email,message) values ('$full_name','$email','$message')";
		  $insert = mysqli_query($con, $insert_message);

		  if($insert){
				echo "<script>alert('Message sent successfully! We will be in contact with you very soon.')</script>";
				echo "<script>window.open('../index.php','_self')</script>";
		  } else {
       echo "<script>alert('Unable to send message.')</script>";
     }
	}

?>
