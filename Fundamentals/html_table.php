<?php
	$users = array( 
/*index of 0*/ array('first_name' => 'Michael', 'last_name' => 'Choi'),
/*index of 1*/ array('first_name' => 'John', 'last_name' => 'Supsupin'),
/*index of 2*/ array('first_name' => 'Mark', 'last_name' => 'Guillen'),
/*index of 3*/ array('first_name' => 'KB', 'last_name' => 'Tonel') 
);




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HTML Table</title>
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

	width: 960px;
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

.mytable {
	font-family: Arial, Helvetica, sans-serif;
	color: #777;
	border: 1px solid #ccc;
}
.mytable td, .mytable th {
	width: 28px;
	height: 25px;
	vertical-align: middle;
	text-align: center;
	border: 1px solid #ddd;
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
		<h1>HTML Table</h1>
		
		<table border="0" cellspacing="0" cellpadding="0" class="mytable" width="100%">
			<tr>
				<th>User#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Full Name</th>
				<th>Full Name in Uppercase</th>
				<th>Length of full name (without spaces)</th>
			</tr>

			<?php

				foreach ($users as $key => $value) {
					
					$id = $key+1;
					$full_name = "{$users[$key]['first_name']} {$users[$key]['last_name']}";
					$uppered = strtoupper($full_name);
					$no_spaces = strlen($uppered) - 1;
					
					echo "<tr>";
					echo "<th>" . $id . "</th>";
					echo "<td>" . $users[$key]['first_name'] . "</td>";
					echo "<td>" . $users[$key]['last_name'] . "</td>";
					echo "<td>" . $full_name . "</td>";
					echo "<td>" . $uppered . "</td>"; 
					echo "<td>" . $no_spaces . "</td>"; 
					echo "<tr>";
				}

				echo "<tr><td colspan='6'></td></tr>";

				for ($i=0; $i < count($users);$i++) {
					
					$id = $i+1;
					$full_name = "{$users[$i]['first_name']} {$users[$i]['last_name']}";
					$uppered = strtoupper($full_name);
					$no_spaces = strlen($uppered) - 1;

					echo "<tr>";
					echo "<th>" . $id . "</th>";
					echo "<td>" . $users[$i]['first_name'] . "</td>";
					echo "<td>" . $users[$i]['last_name'] . "</td>";
					echo "<td>" . $full_name . "</td>";
					echo "<td>" . $uppered . "</td>"; 
					echo "<td>" . $no_spaces . "</td>"; 
					echo "<tr>";
				}

			?>	

		</table>	

	</div>
</body>
</html>