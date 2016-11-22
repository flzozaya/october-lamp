<!DOCTYPE html>
<html lang="en">
<head>
	<title>Great Number Game</title>
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

	width: 600px;
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
	
.red {
	color: white;
	padding: 40px;
	width: 200px;
	text-align: center;
	background-color: red;
}
.green {
	color: white;
	padding: 40px;
	width: 200px;
	text-align: center;
	background-color: green;
}
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
		<?= $this->session->userdata['number']; ?>
		
		<h1>Great Number Game</h1>
			<p>I am thinking of a number between 1 and 100</p>
			<p>Take a guess!</p>

		<?php
			if($this->session->flashdata('result')) 
				{
					echo "<p class='red'>" . $this->session->flashdata('result') . "</p>";
				} 
				?>
		<?php	if($this->session->flashdata('correct')) 
				{ 
				?>
					<p class='green'> <?=$this->session->flashdata('correct') ?></p>
					

					<form action="reset" method="post">
						<input type="submit" value="Play Again">
					</form>

		<?php  			
					 
			} 
		?>

			<form action="check" method="post">
				<input type="text" name="guess">
				<input type="submit" value="Submit">
			</form>

	</div>
</body>
</html>