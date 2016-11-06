<?php

 	session_start();


	if(isset($_POST['number_guess'])) {

		$_SESSION['number_guess'] = $_POST['number_guess'];
		// $random_num = rand(1,3);

		if($_SESSION['number_guess'] > $_SESSION['random_num']) {

			$_SESSION['message'] = "You guessed too high";
			header('Location: great_number_game.php');
			
		} else if ($_SESSION['number_guess'] < $_SESSION['random_num']){

			$_SESSION["message"] = "You guessed to low fool!";
			header('Location: great_number_game.php');
		}

		else if ($_SESSION['number_guess'] = $_SESSION['random_num']){

			$_SESSION["message"] = "YOU GUESSED IT <br/> <button name='reset'>Play Again?</button>";
			header('Location: great_number_game.php');

			if(isset($_SESSION['reset'])) {
				session_destroy();

			}
			
		}


	}


?>