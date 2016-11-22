<?php

class Car {
	public $price;
	public $speed;
	public $fuel;
	public $mileage;
	public $tax = 12 / 100;
	
	function __construct($prc, $speed, $gas, $miles)
	{
		$this->price = $prc;
		$this->speed = $speed;
		$this->fuel = $gas;
		$this->mileage = $miles;

		if($prc > 10000){
			$this->tax = 15 / 100;
		}	
	 
	 $this->Display_all();

	}


	function Display_all() {
		echo "<div class='car-info'>";
		echo "Price: " . $this->price . "<br/>";
		echo "Speed: " . $this->speed . "mph<br/>";
		echo "Fuel: " . $this->fuel . "<br/>";
		echo "Mileage: " . $this->mileage . "mpg<br/>";
		echo "Tax: " . $this->tax . "<br/>";
		echo "</div>";
		}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Info</title>
	<meta charset="UTF-8">
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src=""></script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	

	<style type="text/css">
		* {
	padding:0;
	margin: 0:;
}

#wrapper {

	width: 900px;
	margin: 20px auto;
	border: 1px solid #ddd;
	padding: 30px;
	border-radius: 6px;
	min-height: 200px;
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#fefcfe+26,f1eff1+100 */
	background: rgb(254,252,254); /* Old browsers */
	background: -moz-linear-gradient(top, rgba(254,252,254,1) 26%, rgba(241,239,241,1) 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top, rgba(254,252,254,1) 26%,rgba(241,239,241,1) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom, rgba(254,252,254,1) 26%,rgba(241,239,241,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefcfe', endColorstr='#f1eff1',GradientType=0 ); /* IE6-9 */

}

h1{
	text-align: center;
	margin-bottom: 50px !important;
	margin-top: 0px !important;
}
	
.car-info {

	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	padding: 12px;
	margin-bottom: 15px;
	border: 1px dashed black;
	background-color: #fff;
}


	
	
#submit-button {
	float: right;
	margin-top: 10px;
	width: 85px;
}
.clr {
	clear: both;
}


	</style>
</head>
<body>
	<div id="wrapper">
		<h1>Car Info</h1>
			<?php

				$car1 = new Car(2000, 35, "Full", 15);

				$car2 = new Car(2000, 5, "Not Full", 105);

				$car3 = new Car(2000, 15, "Kind of Full", 95);

				$car4 = new Car(2000, 25, "Full", 25);

				$car5 = new Car(2000, 45, "Empty", 25);

				$car6 = new Car(20000000, 35, "Empty", 15);

			?>	
	</div>
</body>
</html>
