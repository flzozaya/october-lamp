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

		}
		.mytable td, .mytable th {
			width: 25px;
			height: 25px;
			vertical-align: middle;
			text-align: center;

		}
	</style>
</head>
<body>


<table class="mytable" border="1" bordercolor="#bbb" cellpadding="0" cellspacing="0">

<tr>
	<th></th>
	<?php 
		for($i=1; $i<=9; $i++) {
			echo "<th>$i</th>";
		}
	?>  
</tr>

<?php for($j=1,$m = 1; $j<=9, $m<=9; $j++, $m++) {

	echo "<tr>";
	echo "<th>$j</th>";
	echo "<td>" . $m . "</td>";
	echo "</tr>";
}
?>



<!-- 


<?php //for($i=1; $i<=9; $i++)
      { ?>
      <tr>
         <th><?= $i ?></th>
      </tr>
<?php } ?>



<?php //for($j=1; $j<=9; $j++)
      { ?>
         <th><?= $j ?></th>
<?php    } ?>
      </tr>



 -->




</table>








</body>
</html>