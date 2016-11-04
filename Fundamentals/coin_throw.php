<?php

function coin_throw() 
{
	$heads = 0;
	$tails = 0;
	for ($i = 1; $i <= 5000; $i++)
	{
		$random_number = rand(0, 1);
	echo "Attempt #" . $i . ": ";	
		if ($random_number == 0) 
		{
			$heads++;
			// $heads_message = "It's a head!"
			echo "Throwing a coin... It's a head! ... ";

		} else {

			$tails++;
			// $tails_message = "It's a tail!"
			echo "Throwing a coin... It's a tails! ... ";
		}
	echo "Got " . $heads .  " head(s) so far and " . $tails . " tail(s) so far <br/><br/>";
	}
}

coin_throw();
?>

