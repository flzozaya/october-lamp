<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Times extends CI_Controller {

		public function main()
	{
		
		$date = $this->load->helper('date');
		
		$this->load->view('index');

	}
}
