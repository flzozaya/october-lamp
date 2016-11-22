<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	
	public function data_register($userinfo)
	{
		$query = "INSERT INTO users (
			first_name, 
			last_name,
			username,
			password,
			created_at,
			updated_at)
			VALUES (?,?,?,?, NOW(), NOW())";

		$values = array(
			$userinfo['first_name'], 
			$userinfo['last_name'], 
			$userinfo['username'], 
			$userinfo['password']
			); 
         return $this->db->query($query, $values);
	}

	public function data_check_login($user_loging_in)
	{
    	return $this->db->query("SELECT * FROM users WHERE username = ?", $user_loging_in['login_username'])->row_array();

    	// return $this->db->query("SELECT * FROM users")->result_array();

		/*
		$query = "SELECT * FROM users
		WHERE username = ?";

		$values = array(
			$user_loging_in

			);*/

	}
}
?>
