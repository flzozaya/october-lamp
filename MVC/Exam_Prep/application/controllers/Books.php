<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends MY_Controller {
	public function index()
	{
     	if(!$this->user_authentication())
      {
        redirect('/');
      } 
        $this->load->view('books', array('session_user' => $this->session->userdata('user')));    
		//$this->load->view('books', );
	}

	public function show_book()
	{
		//book title linked to the book's individual page
		// 	public function show($id)
	// {
	// 	$data['product'] = $this->Product->find_by($id);
	// 	$this->load->view("product_page", $data);
	// }
	}
	public function add_book()
	{
		$this->load->view('add');
	}

	public function add_new_book_and_review()
	{
		if($this->input->post()) {

			$new_book_data = $this->input->post();
			$userID = $this->session->userdata('user_id');
			$book_id = $this->Book->insert_new_book($new_book_data, $userID);
			$this->Review->insert_book_review($new_book_data, $book_id, $userID);
		}
		$this->load->view('book');
		//redirect('book');
	}
	/*public function list()
	{
		//$this->Book->get_all_book();
	}*/
}