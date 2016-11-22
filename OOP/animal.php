<?php
	class Animal
	{
		public $name;
		public $health;
		public function __construct() {
			$this->health = 100;
			echo "My health is: ";
		}
		public function walk(){
			$this->health -= 1;
			return $this;
		}
		public function run(){
			$this->health -= 5;
			return $this;
		}
		public function displayHealth(){
			echo $this->name;
			echo $this->health;
			return $this;
		}
	}



	class Dog extends Animal
	{
		public function __construct()
		{
			$this->health = 150;
			echo "My health is: ";

		}

		public function pet(){

			$this->health += 5;
			return $this;
		}
	}

	class Dragon extends Animal
	{
		public function __construct()
		{
			$this->health = 170;
		}

		public function fly(){

			$this->health += 10;
			return $this;
		}

		function displayHealth(){
			echo "This is a Dragon: ";
			parent::displayHealth();
		}
	}


$animal = new Animal();
$animal->walk()->walk()->walk()->run()->run()->displayHealth();

echo "<br/><br/>";

$dog = new Dog();
$dog->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

echo "<br/><br/>";

$dragon = new Dragon();
$dragon->walk()->walk()->walk()->run()->run()->fly()->displayHealth();

echo "<br/><br/>";



?>