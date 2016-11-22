<?php
session_start();
$_SESSION['errors'] = [];


require_once('connection_wall.php');
$query = "SELECT * FROM users";

var_dump(fetch_all($query));
die();
if (isset($_POST['action'])){

	if($_POST['action'] == "login"){
	$query = "SLECT * FROM users 
	WHERE email = '{$_POST['email']}'' 
	AND password = '{$_POST['email']}'";
	$user = fetch_record($query);

	if ($user === 0){

			array_push($_SESSION['errors'], "Invalid Login");
			header("Location: index.php");
	}
	header('Location: index.php');

	}
	else if($_POST['action'] === "register") {
		if($_POST['password'] !== $_POST['password_confirm']){
			array_push($_SESSION['errors'], "Passwords don't match");
				header('Location: index.php');		

		}

		$query = "INSERT INTO users ('first_name', 'last_name', 'email', 'password')
		VALUES ('{$_POST['first_name']}, {$_POST['last_name']}, {$_POST['email']}, {$_POST['password']}')"
	}


}
?>