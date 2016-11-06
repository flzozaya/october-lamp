<?php
	session_start();

		if(!isset($_SESSION['current_gold'])) 
	{
		$_SESSION['current_gold'] = 0;
	}


	if(!isset($_SESSION['messages'])) 
	{
		$_SESSION['messages'] = array();
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
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
			width: 955px;
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
		h1 {
			text-align: center;
			margin-bottom: 50px !important;
			margin-top: 0px !important;
		}
			
		h3 {
			margin-bottom: 25px !important;
			margin-top: 30px !important;
		}
		h4 {
			margin-bottom: 15px !important;
			margin-top: 30px !important;
		}
		.current-gold {
			background-color: #fff;
			border: 1px solid black;
			border-radius: 3px;
			display: inline-block;
			width: 100px;
			padding: 6px
		}
		.boxes {
			min-height: 200px;
			width: 200px;
			display: inline-block; 
			margin-right: 20px;
			background-color: #fff;
			border: 1px solid black;
			border-radius: 3px;
			text-align: center;
		}	
		.activities {
			width: 100%;
			border: 1px solid black;
			border-radius: 3px;
			height: 200px;
			background-color: #fff;
			overflow: scroll;
		}
		.activities p {
			margin-bottom: 10px;
		}
		.submit-button {
			margin: 10px auto 0 auto;
			width: 85px;
			display: block;
		}

		#reset {
			width: 150px;
			margin: 30px auto;
		}

		#reset .submit-button {
			width: auto;
		}
		.farm {
			color: green;
		}
		.clr {
			clear: both;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<h1>Ninja Gold Game</h1>
		<p>Your Gold: <span class="current-gold"><?= $_SESSION['current_gold'] ?></span></p>
		<div class="boxes">
			<form class="form-group" action="process.php" method="post">
				<h3>Farm</h3>
				<p>(earns 10 - 20 golds)</p>

				<input type="hidden" name="building" value="farm" />
				<input class="btn btn-default submit-button" type="submit" value="Find Gold!"/>
			</form>
		</div>
		<div class="boxes">
			<form class="form-group" action="process.php" method="post">
				<h3>Cave</h3>
				<p>(earns 5 - 10 golds)</p>

				<input type="hidden" name="building" value="cave" />
				<input class="btn btn-default submit-button" type="submit" value="Find Gold!"/>
			</form>
		</div>
		<div class="boxes">
			<form class="form-group" action="process.php" method="post">
				<h3>House</h3>
				<p>(earns 2 - 5 golds)</p>

				<input type="hidden" name="building" value="house" />
				<input class="btn btn-default submit-button" type="submit" value="Find Gold!"/>
			</form>
		</div>
		<div class="boxes">
			<form class="form-group" action="process.php" method="post">
				<h3>Casino!</h3>
				<p>(earns/takes 0 - 50 golds)</p>

				<input type="hidden" name="building" value="casino" />

				<input class="btn btn-default submit-button" type="submit" value="Find Gold!"/>
			</form>
		</div>

		<h4>Activities:</h4>
		<div class="activities">
			<?php
				//var_dump($_SESSION['messages']);

			foreach ($_SESSION['messages'] as $message) { ?>
				
				<?= $message; ?>
			

			<?php } ?>
				
		</div>

		<div id="reset">
			<form class="form-group" action="process.php" method="post">
				
				<input type="hidden" name="myaction" value="reset">

				<input type="submit" class="btn btn-default submit-button" value="Reset Game">

			</form>

		</div>
</body>
</html>