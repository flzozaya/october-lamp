<?php

function get_max_and_min($arr)
{	
	$min = $arr[0];
	$max = $arr[0];

	foreach ($arr as $value) {

		if($min > $value)
		{
			$min = $value;
		}
		
		if ($max < $value) 
		{	
			$max = $value;
		}
	$new_arr = array("max" => $max, "min" => $min);
	}

	return $new_arr;
}

$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
$output = get_max_and_min($sample); 
var_dump($output); 
?>

