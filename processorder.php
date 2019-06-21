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
			$find = $_POST['find'];
			
			echo "<p>Order processed at "; //Start processing the order
			echo date('H:i, jS F Y');
			echo "</p>";
			
			//Test variable status; if empty set quantity ordered to zero
			if ((empty($_POST['tireqty']))){
				$tireqty = 0;
			}
			if ((empty($_POST['oilqty']))){
				$oilqty = 0;
			}
			if ((empty($_POST['tireqty']))){
				$sparkqty = 0;
			}
			
			//Create a variable to hold total quantity
			//Add the quantities ordered
			$totalqty = 0;
			$totalqty = $tireqty + $oilqty + $sparkqty;
			
			//Test if anything was ordered
			//Display message if nothing was ordered and exit
			if ($totalqty == 0) {
				echo '<p style="color:red">';
				echo 'You did not order anything';
				echo '</p>';
			}
			else {
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
			
			//Calculating the discount
			//Less than $25 = no discount
			//$25 - $49 = 5% discount
			//$50 - $99 = 10% discount
			//$100 or more = 15% discount
			if ($totalamount < 25) {
				$discount = .00;
			} elseif (($totalamount >=25) && ($totalamount <= 49)) {
				$discount = .05;
			} elseif (($totalamount >=50) && ($totalamount <= 99)) {
				$discount = .10;
			} elseif ($totalamount >=100) {
				$discount = .15;
			}
			
			//Change decimal percent into integer for display
			$displaypercent = $discount * 100;
			
			//Calculate dollar value of discount; display discount total and total before tax
			$discounttotal = $totalamount * $discount;
			echo "Discount Received: $".number_format($discounttotal, 2)." calculated ".$displaypercent."%"."<br />";
			$totalamount = $totalamount - $discounttotal;
			echo "Total before tax: $".number_format($totalamount, 2)."<br />";
			
			//Determine tax for order and add to subtotal
			//Display total amount for order
			$taxrate = 0.10;
			$totalamount = $totalamount * (1 + $taxrate);
			echo "Total including tax: $".number_format($totalamount, 2)."</p>";
			
			//Add the switch/case statements to process advertising informations
			switch($find){
				case "a" :
					echo "<p>Regular customer</p>";
					break;
				case "b" :
					echo "<p>Customer referred by TV advertising</p>";
					break;
				case "c" :
					echo "<p>Customer referred by phone directory</p>";
					break;
				case "d" :
					echo "<p>Customer referred by word of mouth</p>";
					break;
				default :
					echo "<p>We do not know how this customer found us</p>";
					break;
			}
			}
		?>
	</body>
</html>
