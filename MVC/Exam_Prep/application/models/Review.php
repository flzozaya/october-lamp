<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Review extends CI_Model {
   function insert_book_review($new_review, $book_id, $userID)
   { 

    $query = "INSERT INTO reviews (review, rating, books_id, users_id, created_at, updated_at)

            VALUES (?,?,?,?, NOW(), NOW())";

            $values = array(
                    $new_review['review'],
                    $new_review['rating'],
                    $book_id,
                    $userID
              );

       return $this->db->query($query, $values);
   }

   
    // RETURN YOUR INSERT ID. ALSO LOOK IT UP.
}
