<?php 

require_once('email_users.php');
//var_dump($connection);


if(isset($_POST['email']))
{
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
	{

		header('Location: index.php?error=invalid');

	}else {

		$email = $_POST['email'];
		run_mysql_query("INSERT INTO user_emails (email, created_at, updated_at) VALUES ('$email', NOW(), NOW())");
		header('Location: index.php');
	}
}

?>