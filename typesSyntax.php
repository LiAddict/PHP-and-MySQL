<?php
	$integerx = 5;
	$floatx = 4.0;
	$stringx = 'Hello ';
	$stringy = 'Elle';
	$boolx = True;
	echo gettype($integerx);
	echo '<br />';
	echo gettype($floatx);
	echo '<br />';
	echo gettype($stringx);
	echo '<br />';
	echo gettype($stringy);
	echo '<br />';
	echo gettype($boolx);
	echo '<br />';
	$integerx = $integerx + 2;
	echo $integerx;
	echo '<br />';
	$floatx = $floatx - .5;
	echo $floatx;
	echo '<br />';
	echo $stringx.$stringy;
	// dot concatenates strings
	echo '<br />';
	$integerx += 1;
	echo $integerx;
	echo '<br />';
	$floatx = (integer)$floatx;
	echo $floatx;
?>
