<?php
	
	
	class bike {
		public $price;
		public $max_speed;
		public $miles;
		
		public function __construct($prc, $speed) {
			$this->miles = 0; 
			$this->price = $prc;
			$this->max_speed = $speed;
		}
		
		public function displayInfo(){
			echo "<br/><strong>Info</strong><br/>";
			echo "Price: ";
			echo $this->price . "<br/>";
			echo "Max. Speed: ";
			echo $this->max_speed  . "<br/>";
			echo "Miles: ";
			echo $this->miles . "<br/>";

		}
		public function drive() {
			echo "Driving <br/>";
			echo $this->miles+=10;
			echo "<br/>";
			return $this;
		}

		public function reverse() {
			echo "Reversing <br/>";
			$totalMilesReversed = $this->miles-=5;
			
			
			if($totalMilesReversed < 0){
				$totalMilesReversed = 0;	
				echo $totalMilesReversed;

			}else {
				echo $totalMilesReversed;

			}
			echo "<br/>";
			return $this;
	}
	//echo "______";
}

$bike1 = new bike(100, 15);
$bike1->drive()->drive()->drive()->reverse()->displayInfo();
echo "<br/><br/>";

$bike2 = new bike(100, 15);
$bike1->drive()->drive()->reverse()->reverse()->displayInfo();
echo "<br/><br/>";

$bike3 = new bike(100, 15);
$bike3->reverse()->reverse()->reverse();
$bike3->displayInfo();

?>
