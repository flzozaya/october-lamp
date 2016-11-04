<?php

function states_arr1($arr) 
{
	echo "<select><option>Select a State</option>";
	foreach ($arr as $value) {
		echo "<option>" . $value . "</option>";
	}
	echo "</select>";
}

function states_arr2($arr) 
{
	echo "<select><option>Select a States 2</option>";

	for ($i = 0; $i < count($arr); $i++) 
	{
		echo "<option>" . $arr[$i] . "</option>";
	}
	echo "</select>";
}

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

states_arr1($states);
states_arr2($states);

?>
