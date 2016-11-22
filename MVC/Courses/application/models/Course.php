<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Model {

		function get_all_courses()
     {
         return $this->db->query("SELECT * FROM courses_table")->result_array();
     }
     function get_course_by_name($course_name)
     {
         return $this->db->query("SELECT * FROM courses_table WHERE course_name = ?", $course_name)->row_array();
     }
     function add_course($course)
     {
         $query = "INSERT INTO courses_table 
         (course_name, 
          description, 
          created_at, 
          updated_at) 
            VALUES (?,?, NOW(), NOW())";
         
         $values = array($course['course_name'], $course['description']); 
         return $this->db->query($query, $values);
     }

	
}

// date('M jS, Y g:i A'), date('M jS, Y g:i A')
?>