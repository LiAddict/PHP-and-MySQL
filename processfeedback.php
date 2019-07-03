<?php
	//Create variables
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$feedback = trim($_POST['feedback']);
	
	//Based on keywords in the feedback, determine which department will recieve the email
	if(strstr($feedback, 'shop')) {
		$toaddress = 'retail@example.com';
	} else if(strstr($feedback, 'delivery')) {
		$toaddress = 'fulfillment@example.com';
	} else if (strstr($feedback, 'bill')) {
		$toaddress = 'account@example.com';
	} else {
		$toaddress = 'feedback@example.com';
	}
	
	//Set up some static information	
	$subject = "Feedback from website";
	
	$mailcontext = "Customer name: ".str_replace("\r\n", "", $name)."\n".
					"Customer email: ".str_replace("\r\n", "", $email)."\n".
					"Customer comments:\n".str_replace("\r\n", "", $feedback)."\n";
	
	$fromaddress = "From webserver@example.com";
	
	//invoke mail() function to send mail
	@mail($toaddress, $subject, $mailcontext, $fromaddress); //supress warning message from mail
	
	//create an array of off-color words
	$offcolor = array('cute', 'kind', 'nice');
	$feedback = str_replace($offcolor, '%!@*',$feedback);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Krista's Auto Parts - Feedback submitted</title>
</head>
<body>
	<h1>Krista's Auto Parts</h1>
	<h3>Feedback Submitted</h2>
	<p>Your feedback (shown below) has been sent to <?php echo $toaddress; ?>.</p>
	<p><?php echo nl2br(htmlspecialchars($feedback)); ?> </p>
</body>
</html>