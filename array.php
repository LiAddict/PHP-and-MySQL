<?php
	//Define the numerical array
	$products[0] = 'Tires';
	$products[1] = 'Oil';
	$products[2] = 'Spark Plugs';
	
	//Shuffle sequence
	shuffle($products);
	
	echo "<u>Display Array in Current Order</u>"."<br />";
	
	//Display the contents
	for ($i = 0; $i < 3; $i++) {
		echo $products[$i]."<br />";
	}
	
	echo "<br />";
	
	//Reverse the order of array
	$products = array_reverse($products);
	
	echo "<u>Display Array in Reverse Order</u>"."<br />";
	
	//Display the contents
	for ($i = 0; $i < 3; $i++) {
		echo $products[$i]."<br />";
	}
?>