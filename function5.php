<?php
	require('header5.php');
	function displayMessage() {
		echo "This function does not accept parameters! <br/><br/>";
	}
	function passStrings($string1, $string2) {
		echo "This function accepts parameters: ";
		echo $string1;
		echo $string2;
	}
	displayMessage();
	passStrings("Help is ", "on the way");
	require('footer5.php');
	
?>
