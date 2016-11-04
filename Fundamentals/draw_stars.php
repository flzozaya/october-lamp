<?php
function draw_stars($arr)
{	
	$stars = "*";
	foreach ($arr as $value) 
	{
		if(is_numeric($value)) 
		{
			for ($i = 0; $i < $value; $i++)
			{
				echo $stars;
			} 
		}
		else {
			$word_string = strtolower($value);
			$string_to_array = str_split($word_string);

			for($j = 0; $j < count($string_to_array); $j++) 
			{
				echo $string_to_array[0];
			}
		}
	echo "<br/>";
	} 
}

$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

draw_stars($x);

?>

