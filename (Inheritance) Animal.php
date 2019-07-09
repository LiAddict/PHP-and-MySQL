<?php
	class Animal {
		public $name = "Bob";
		public function greet () {
			return "Hello, I'm some sort of animal and my name
			is ".$this -> name."<br />";
		}
	}
	class Dog extends Animal {
		public function greet() {
			return "Hello, I'm a dog and my name
			is ".$this -> name."<br />";
		}
	}
	class Cat extends Animal {
		public function greet() {
			return "Hello, I'm a cat and my name
			is ".$this -> name."<br />";
		}
	}
		$animal1 = new Animal();
		echo $animal1 -> greet();
		
		$animal2 = new Dog();
		$animal2 -> name = "Rex";
		echo $animal2 -> greet();
		
		$animal3 = new Cat();
		$animal3 -> name = "Basil";
		echo $animal3 -> greet();

?>
