<!DOCTYPE html>
<html>
	<head>
		<title>Ghazaleh's Auto Parts - Order Results</title>
	</head>
	<body>
		<h1>Ghazaleh's Auto Parts</h1>
		<h2>Order Results</h2>
		<?php
			/*	Author: Krista Ghazaleh
				Last Modified: 6/19/2019
				This script will process the customer order
			*/
			//Create short variable names for information received from order form
			$tireqty = $_POST['tireqty'];
			$oilqty = $_POST['oilqty'];
			$sparkqty = $_POST['sparkqty'];
			
			echo '<p>Order processed.</p>'; //Start processing the order
			echo date('H:i, jS F Y');
			echo "</p>";
			
			//Display the order in the web browser
			echo '<p>Your order is as follows: </p>';
			echo htmlspecialchars($tireqty).' tires<br/>';
			echo htmlspecialchars($sparkqty).' spark plugs<br />';
		?>
	</body>
</html>
