<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

		public function index()
	{
		$this->load->model('Course');
		$data_courses = $this->Course->get_all_courses();

		/*var_dump($data_courses);
		die();*/
		
		$this->load->view('index', array('allcourses' => $data_courses));
	}

	public function add() {

		
		$this->load->library("form_validation");

		$this->form_validation->set_rules("course_name", "Course Name", "trim|required");
		
		if($this->form_validation->run() === FALSE)
		{
		     //$this->view_data["errors"] = validation_errors();
		}
		else
		{
			$this->load->model('Course');
			$course_array = array('course_name' => $this->input->post('course_name'),
								'description' => $this->input->post('description')
								);

			$this->Course->add_course($course_array);

			/*if(!$this->session->userdata('addedCourse'))
			{
				
				$data_course_name = $this->Course->get_course_by_name($course_array['course_name']);
				$this->session->set_userdata('addedCourse', $data_course_name); 
			
				
				// $data_course_name = $this->Course->get_course_by_name($course_array['course_name']);
				// $this->session->set_userdata('addedCourse', $course_array['course_name']);

				// $this->Course->get_course_by_name($course_array['course_name']);
			}*/

		}


		redirect('/');
	
		
	}
}

?>
