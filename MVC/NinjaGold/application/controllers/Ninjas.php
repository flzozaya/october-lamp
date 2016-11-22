<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ninjas extends CI_Controller {

	
	public function index()
	{	
		if(!$this->session->userdata('counter'))
		{	
			$this->session->set_userdata('counter', 0);
		} 

		if(!$this->session->userdata('activities'))
		{
			$this->session->set_userdata('activities', array());
		}

			$this->load->view('index', array('goldAmount' => $this->session->userdata('counter'),
											 'activities' => $this->session->userdata('activities')
							
											));
	}


	public function farm()
	{	
		$goldAmount = $this->session->userdata('counter');
		$value = rand(10,20);
		$this->session->set_userdata('counter', ($goldAmount + $value));
		
		$message = "You earned " . $value . " golds from the farm" . date('F jS, Y g:i a');	
		
		$activities = $this->session->userdata('activities');
		
		array_push($activities, $message);

		$this->session->set_userdata('activities', $activities);
		
		redirect('/');
	}


	public function cave()
	{

		$goldAmount = $this->session->userdata('counter');
		$value = rand(5,10);
		$this->session->set_userdata('counter', ($goldAmount + $value));
		
		$message = "You earned " . $value . " golds from the cave" . date('F jS, Y g:i a');	
		
		$activities = $this->session->userdata('activities');
		
		array_push($activities, $message);

		$this->session->set_userdata('activities', $activities);
		
		redirect('/');	}


	public function house()
	{

		$goldAmount = $this->session->userdata('counter');
		$value = rand(2,5);
		$this->session->set_userdata('counter', ($goldAmount + $value));
		
		$message = "You earned " . $value . " golds from the house" . date('F jS, Y g:i a');	
		
		$activities = $this->session->userdata('activities');
		
		array_push($activities, $message);

		$this->session->set_userdata('activities', $activities);
		
		redirect('/');
			}


	public function casino()
	{

		$goldAmount = $this->session->userdata('counter');
		$value = rand(-50,50);
		$this->session->set_userdata('counter', ($goldAmount + $value));
		
		$message = "You earned " . $value . " golds from the casino" . date('F jS, Y g:i a');	
		
		$activities = $this->session->userdata('activities');
		
		array_push($activities, $message);

		$this->session->set_userdata('activities', $activities);
		
		redirect('/');

	}

	public function reset() 
	{
		//$this->session->unset_userdata('counter', 'activities');
		session_destroy();
		redirect('/');

	}
}
