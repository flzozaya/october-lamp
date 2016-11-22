<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counts extends CI_Controller {

	
	public function index()
	{

		if (!$this->session->userdata('counter')) {
			
			$this->session->set_userdata('counter', 1);
			
			
		} else {
			$counter = $this->session->userdata('counter');
			$counter++;
			$this->session->set_userdata('counter', $counter);

		}
		$view_data = array(
				'counter' => $this->session->userdata('counter')
			);

		$this->load->view('main', $view_data);
	}

	public function reset() {

		$this->session->unset_userdata('counter');
		redirect('/');

	}
}
