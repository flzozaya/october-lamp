<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src=""></script>
	<style type="text/css">
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
	</style>
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" class="mytable">
	<tr>
		<th></th>
		<?php 
			for($i=1; $i<=9; $i++) 
			{
				echo "<th>$i</th>";
			}
		?>  
	</tr>

<?php 
	for($j=1; $j<=9; $j++) 
	{
		echo "<tr><th>$j</th>";

		for($m=1; $m<=9; $m++) 
		{
			echo "<td>" . $m * $j . "</td>";
		}

		echo "</tr>";
	}
?>
</table>
</body>
</html>