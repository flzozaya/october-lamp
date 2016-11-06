<?php  
	session_start();
	// $_SESSION['random_num'] = rand(1,3);

	if(!isset($_SESSION['random_num'])) {

		$_SESSION['random_num'] = rand(1,100);

	}

	$_SESSION['message'];


	/*function destroy() {
	 	echo "<button>Play Again?</button>";
	 	session_destroy();
	 	header('Location: great_number_game.php');
	 	die();
	}*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src=""></script>
	<style type="text/css">
		body {

			text-align: center;
			font-family: Helvetica, Arial, sans-serif;
		}
		input {

			padding: 5px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>

	<h1>Welcome to the Great Number Game!</h1>

	<p>I am thinking of a number between 1 and 100</p>
	<p>Take a guess</p>

	<?= 

		 $_SESSION['message']; 
		 // destroy();
	
	?>



	<form action="process.php" method="post">

		<input type="text" name="number_guess"><br/>

		<button type="submit" name="submit">Submit</button>

	</form>
</body>
</html>