<?php
	session_start();

	if(isset($_POST['building'])) {

		
		$_SESSION ['plural'] = "";

		if($_POST['building'] == 'farm') 
		{
			$_SESSION['farm_rand'] = rand(10,20);
			$_SESSION['building'] = $_POST['building'];
			$_SESSION['current_gold'] += $_SESSION['farm_rand'];
			$_SESSION ['plural'] = "s";

			array_push($_SESSION['messages'], "<p class='{$_SESSION['building']}'>You entered a {$_POST['building']} and earned {$_SESSION['current_gold']} gold{$_SESSION['plural']}</p>");	
			header('Location: index.php');
		}

		if($_POST['building'] == 'cave')
		{
			$_SESSION['cave_rand'] = rand(5,10);
			$_SESSION['building'] = $_POST['building'];
			$_SESSION['current_gold'] += $_SESSION['cave_rand'];
			$_SESSION ['plural'] = "s";

			array_push($_SESSION['messages'], "<p class='{$_SESSION['building']}'>You entered a {$_SESSION['building']} and earned {$_SESSION['current_gold']} gold{$_SESSION['plural']}</p>");	
			header('Location: index.php');
		}

		if($_POST['building'] == 'house')
		{
			$_SESSION['house_rand'] = rand(2,5);
			$_SESSION['building'] = $_POST['building'];
			$_SESSION['current_gold'] += $_SESSION['house_rand'];
			$_SESSION ['plural'] = "s";

			array_push($_SESSION['messages'], "<p class='{$_SESSION['building']}'>You entered a {$_SESSION['building']} and earned {$_SESSION['current_gold']} gold{$_SESSION['plural']}</p>");	
			header('Location: index.php');
		}

		if($_POST['building'] == 'casino')
		{
			$_SESSION['casino_rand'] = rand(-50,50);
			$_SESSION['building'] = $_POST['building'];
			$_SESSION['current_gold'] += $_SESSION['casino_rand'];
			$_SESSION ['plural'] = "s";

				

			array_push($_SESSION['messages'], "<p class='{$_SESSION['building']}'>You entered a {$_SESSION['building']} and earned {$_SESSION['current_gold']} gold{$_SESSION['plural']}</p>");	
			header('Location: index.php');
		}

		if($_SESSION['casino_rand'] >= 0 && $_SESSION['casino_rand'] < 2) 
			{
				$_SESSION ['plural'] = "";
			}
	}

	if(isset($_POST['myaction']) && $_POST['myaction'] == 'reset') 
			{
					$_SESSION['current_gold'] = 0;
					unset($_SESSION['messages']);
					header('Location: index.php');
			}

?>