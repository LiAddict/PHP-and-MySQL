<?php
	interface Car {
		public function setmodel($name);
		public function getModel();
	}
	class miniCar implements Car {
		private $model;
		public function setModel($name) {
			$this -> model = $name;
		}
		public function getModel() {
			return $this -> model;
		}
	}
	$object = new miniCar();
	$object -> setModel("Fiat");
	echo $object -> getModel();
?>
