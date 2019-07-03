<?php
	function compare($x, $y) {
		if($x[1] == $y[1]) {
			return 0;
		} else if ($x[1] < $y[1]) {
			return -1;
		} else {
			return 1;
		}
	}
	
	function reverse_compare($x, $y) {
		if ($x[2] == $y[2]) {
			return 0;
		} else if ($x[2] < $y[2]) {
			return 1;
		} else {
			return -1;
		}
	}
	
	//Create array
	$products = array( array('TIR', 'Tires', 100),
					   array('OIL', 'Oil', 10),
					   array('SPK', 'Spark Plugs', 4));
					   
	//Sort the array in ascending sequence
	usort($products, 'compare');
	
	echo "<p>Ascending</p>";
	
	for ($row = 0; $row < 3; $row++) {
		for($column = 0; $column < 3; $column++) {
		echo '|'.$products[$row][$column];
	}
	echo '|<br />';
	}
	
	usort($products, 'reverse_compare');
	
	echo "<p>Descending</p>";
	
	for ($row = 0; $row < 3; $row++) {
		for($column = 0; $column < 3; $column++) {
		echo '|'.$products[$row][$column];
	}
	echo '|<br />';
	}
?>