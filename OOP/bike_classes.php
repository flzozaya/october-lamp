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
		public function drive($times) {
			for($i=0; $i < $times; $i++){
				echo "Driving <br/>";
			}
			echo $this->miles+=(10*$times);
			echo "<br/>";
		}

		public function reverse($times) {
			for($i=0; $i < $times; $i++){
				echo "Reversing <br/>";
			}
			$totalMilesReversed = $this->miles-=(5*$times);
			
			
			if($totalMilesReversed < 0){
				$totalMilesReversed = 0;	
				echo $totalMilesReversed;

			}else {
				echo $totalMilesReversed;

			}
			echo "<br/>";
	}
	//echo "______";
}

$bike1 = new bike(100, 15);
$bike1->drive(3);
$bike1->reverse(1);
$bike1->displayInfo();
echo "<br/><br/>";

$bike2 = new bike(100, 15);
$bike2->drive(2);
$bike2->reverse(2);
$bike2->displayInfo();
echo "<br/><br/>";

$bike3 = new bike(100, 15);
$bike3->reverse(3);
$bike3->displayInfo();

?>
