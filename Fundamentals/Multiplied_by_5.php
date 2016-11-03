<?php
function multiply($some_array, $factor) {
	$newArr = array();
	$mult_val = 0;
	foreach ($some_array as $value) 
	{
		$mult_val = $value * $factor;
		array_push($newArr, $mult_val);
	}
	return $newArr;
}


$A = array(2,4,10,16);

$B = multiply($A, 2);

var_dump($B);

?>
