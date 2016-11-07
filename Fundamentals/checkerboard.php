<!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkerboards</title>
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
	
.checkerboard {
	width: 202px !important;
	display: inline-block;
	border: 1px solid #333;
}

.checkerboard2 {
	width: 202px !important;
	display: inline-block;
	border: 1px solid #bbb;
	margin-left: 30px;
}
	
.black {
	width: 20px;
	height: 20px;
	background-color: #000;
	float: left;
}
.red {
	width: 20px;
	height: 20px;
	background-color: red;
	float: left;
}

.cream {
	width: 20px;
	height: 20px;
	background-color: #FFF8DB;
	float: left;
}
.green {
	width: 20px;
	height: 20px;
	background-color: #56612E;
	float: left;
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
		<h1>Checkerboards</h1>
		<div class="checkerboard">
			<?php
			for($j=1;$j <=5; $j++)
			{

				for($x=1;$x < 2; $x+=1)
				{
					echo "<div class'row'>";
					for($i=1; $i <=5;$i++)
					{
						echo "<div class='black'></div>";
						echo "<div class='red'></div>";
					}
				echo "</div>";
				}

				for($x=1;$x < 2; $x+=1)
				{
					echo "<div class'row'>";
					for($i=1; $i <=5;$i++)
					{
						echo "<div class='red'></div>";
						echo "<div class='black'></div>";
					}
					echo "</div>";
				}
			}
			?>
		</div>
		<div class="checkerboard2">
			<?php
			for($j=1;$j <=5; $j++)
			{

				for($x=1;$x <= 1; $x+=1)
				{
					echo "<div class'row'>";
					for($i=1; $i <=5;$i++)
					{
						echo "<div class='cream'></div>";
						echo "<div class='green'></div>";
					}
					echo "</div>";
				}

				for($x=1;$x <= 1; $x+=1)
				{
					echo "<div class'row'>";
					for($i=1; $i <=5;$i++)
					{
						echo "<div class='green'></div>";
						echo "<div class='cream'></div>";
					}
					echo "</div>";
				}
			}
			?>
		</div>



	</div>
</body>
</html>