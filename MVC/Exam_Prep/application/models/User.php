<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Model {
   function get_user_by_email($email,$password)
   { 
       return $this->db->query("SELECT id, alias FROM users WHERE email = ? AND password = ?", array($email,$password))->row_array();
   }

   function register_user($data){
   	$sql= "INSERT INTO users (`name`,
   			`alias`,
   			`email`,
   			`password`,
        `created_at`,
        `updated_at`) VALUES (?,?,?,?, NOW(), NOW())";

   	$this->db->query($sql, array(
   		$data['name'],
   		$data['alias'],
   		$data['register_email'],
   		$data['register_password']));

    return $this->db->insert_id();

 }

   //  function (){
   //    $sql = "SELECT id FROM users where name = ? AND alias = ? AND email = ? AND password = ?";
   // return $this->db->query($sql, 
   //    Array($data['name'],$data['alias'],$data['email'], 
   //      $data['password']))->row_array();
   //  }
    // RETURN YOUR INSERT ID. ALSO LOOK IT UP.
}



