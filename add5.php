<?php
	//pass by reference
	function addFive(&$num) {
		$num +=5;
	}
	$orignum = 10;
	addFive($orignum);
	echo $orignum;

?>
