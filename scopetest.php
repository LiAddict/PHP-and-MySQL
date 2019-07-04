<?php
	$life = 42;
	function meaningOfLife() {
		global $life;
		echo "the meaning of life is ".$life;
	}
	meaningOfLife();


?>
