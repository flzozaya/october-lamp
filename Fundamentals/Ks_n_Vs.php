<?php

function keys_n_values($array) 
{
	echo "There are " . count($array) . " keys in this array <br/>";
	foreach ($array as $key => $value) {
		echo $key . "<br/>";
	}

	foreach ($array as $key => $value) {
		echo "The value in the key '" . $key . "' is '" . $value . "'.<br/>";
	}

}

$users = array("first_name" => "Michael", "last_name" => "Choi");

keys_n_values($users);

?>
