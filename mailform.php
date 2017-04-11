<?php 
	if(isset($_POST['flname'])) { $flname=$_POST['flname']; } else { $flname = ''; }
	if(isset($_POST['email'])) { $email=$_POST['email']; } else { $email = '';}
	if(isset($_POST['phone'])) {
		$phone=$_POST['phone'];
	} else {
		$phone = '';
	}
	if(isset($_POST['inquiry_type'])){
		$inquiry_type = $_POST['inquiry_type'];
	} else {
		$inquiry_type = '';
	}
	if(isset($_POST['message'])) { $message=$_POST['message']; } else { $message = '';}
	
		// email fields: to, from, subject, and so on
		$subject ="Enquiry from : $flname"; 
		$message = "You have received a new message.\n\n".
					"Message: $message.\n\n".
					"From: $flname.\n".
					"Email: $email.\n";
		mail($inquiry_type, $subject, $message, "From: $email");
 ?>