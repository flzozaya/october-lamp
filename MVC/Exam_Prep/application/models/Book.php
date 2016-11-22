<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Book extends CI_Model {
   
   public function get_all_books()
   {
   		return $this->db->query("SELECT * FROM books")->result_array();

   }

   public function insert_new_book($new_book_data, $userID) 
   {
   		$query = "INSERT INTO books (title, author, users_id, created_at, updated_at)
   		VALUES (?,?,?, NOW(), NOW())";

   		$values = array(
   			$new_book_data['book_title'],
            $new_book_data['book_author'],
            $userID
   		);

      $this->db->query($query, $values);
      return $this->db->insert_id();
      
      

   }
    // RETURN YOUR INSERT ID. ALSO LOOK IT UP.
}
