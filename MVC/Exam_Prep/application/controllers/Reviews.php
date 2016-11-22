<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('User');
		$this->load->model('Book');
		$this->load->model('Review');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function add()
	{

	}
	///this function links to a model 
	// public function create()
	// {
	// 	$post = $this->input->post();
	// 	$this->Product->create($post);
	// 	$id = $this->db->insert_id();
	// 	redirect(base_url());
	// }
	public function delete()
	// }
			// public function destroy($id)
			// {
			// $this->Product->delete_item($id);
			// $this->index();
			// }
	public function count()
	{

	}
}