<?php
	
		class HTML_Helper
	{
		public function print_table($arr) {
			echo "<table cellspacing='0' cellpadding='0' border='1'><tr><th>First Name</th><th>Last Name</th><th>Nick Name</th></tr>";
			for($i=0; $i < count($arr);$i++) {
				echo "<tr>";
				foreach ($arr[$i] as $key => $value) {
					echo "<td>";
						echo $value;
					echo "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}

		public function print_select($state, $arr) {
			echo "<select name='{$state}'>";

				foreach ($arr as $value) {
					echo "<option value='{$value}'>{$value}</option>";
				}
			
			
		}
		
	}


$array = array(
			array('first_name' => 'Michael', 'last_name' => 'Choi', 'nick_name' => 'Sensei'),
			array('first_name' => 'Lorenzo', 'last_name' => 'Zozaya', 'nick_name' => 'fedelo')
	);

$newarray = ["CA", "WA", "UT", "TX", "AZ", "NY"];

$obj = new HTML_Helper();
$obj->print_table($array);
$obj->print_select("state", $newarray);

?>