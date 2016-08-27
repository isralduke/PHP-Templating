<?php

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$category = implode(', ', $_POST['category']);
	$comments = $_POST['comments'];
	


	$formcontent = "Name: $name \n\nPhone: $phone \n\nEmail: $email \n\nCategories: $category \n\nComments: $comments";


	$recipient = "isral@stundesign.com";
	// $recipient = "l.gavel@ficllc.net";

	
	$subject = "Contact Form Message";


	$mailheader = "From: $email \r\n";


	mail( $recipient, $subject, $formcontent, $mailheader) or die("Error!");


	echo "Thanks.";


?>