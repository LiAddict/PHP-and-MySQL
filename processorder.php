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
			
			echo "<p>Order processed at "; //Start processing the order
			echo date('H:i, jS F Y');
			echo "</p>";
			
			//Create a variable to hold total quantity
			//Add the quantities ordered
			$totalqty = 0;
			$totalqty = $tireqty + $oilqty + $sparkqty;
			
			//Display the order in the web browser
			echo '<p>Your order is as follows: </p>';
			echo htmlspecialchars($tireqty).' tires<br/>';
			echo htmlspecialchars($oilqty).' bottles of oil<br />';
			echo htmlspecialchars($sparkqty).' spark plugs<br />';
			
			echo "<p>Items Ordered: ".$totalqty."<br />";
			
			//Create a variable to hold the total amount of the order
			$totalamount = 0;
			
			//Define constant for prices of each item
			define('TIREPRICE', 100);
			define('OILPRICE', 10);
			define('SPARKPRICE', 4);
			
			//Determine total amount for order and display subtotal
			$totalamount = $tireqty * TIREPRICE
						+ $oilqty * OILPRICE
						+ $sparkqty * SPARKPRICE;
							
			echo "Subtotal: $".number_format($totalamount, 2)."<br />";
			
			//Determine tax for order and add to subtotal
			//Display total amount for order
			$taxrate = 0.10;
			$totalamount = $totalamount * (1 + $taxrate);
			echo "Total including tax: $".number_format($totalamount, 2)."</p>";
			
		?>
	</body>
</html>
