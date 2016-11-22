<?php
session_start();
$_SESSION['errors'] = [];

require_once('connection.php');
$query = "SELECT * FROM users";


if (isset($_POST['action'])){

	if($_POST['action'] == "login"){
	$query = "SELECT * FROM users 
	WHERE username = '{$_POST['username']}' 
	AND password = '{$_POST['password']}'";

	$user = fetch_record($query);
		if (empty($user)){
			array_push($_SESSION['errors'], "Invalid Login");

			header('Location: index.php');
		}else {


	header('Location: logged_in.php');
		}

		//header('Location: index.php');
	}











	else if($_POST['action'] === "register") {
		if($_POST['password'] !== $_POST['password_confirm']){
			
			array_push($_SESSION['errors'], "Passwords don't match");
				
			header('Location: index.php');		

		}
		else {
			$query = "INSERT INTO users (first_name, last_name, email, username, password, created_at, updated_at)
			VALUES ('{$_POST['first_name']}, {$_POST['last_name']}, {$_POST['email']}, {$_POST['username']}, {$_POST['password']}', NOW(), NOW())";
		}

	}


}
?>