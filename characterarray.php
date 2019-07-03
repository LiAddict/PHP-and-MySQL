<?php
	//Define array of prices using names of products as index
	$prices = array('Tires' => 100);
	$prices['Oil'] = 10;
	$prices['Spark Plugs'] = 4;
	
	//Sort by value (price)
	ksort($prices);
	
	//Display each element
	while (list($product, $price) = each($prices)){
		echo $product." - ".$price."<br />";
	}
?>