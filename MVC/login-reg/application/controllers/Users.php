<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	
	public function index()
	{


		$this->load->view('index');
	}

	public function register()
	{
		
		$this->load->library("form_validation");

		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("username", "UserName", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		$this->form_validation->set_rules("confirm_pass", "Confirm Password", "trim|required");

		if($this->form_validation->run() === TRUE)
		{
			
			if($this->input->post('password') == $this->input->post('confirm_pass'))
			{
				$this->load->model('User');
				$userinfo = $this->input->post();
				$this->User->data_register($userinfo);
			} else {

				$this->session->set_flashdata('register_error', "Your Passwords didn't match. Please confirm Password.");
					
				redirect('/');
			}

		} else
		{
			$this->session->set_flashdata('register_error', "You entered the information Wrong");
					
			redirect('/');

		}
		$this->session->set_flashdata('register_success',"<span class='green'>You have now registered successfully. Please now log in.</span>");
		 redirect('/');
	}



	public function login()
	{
		$this->load->library("form_validation");

		$this->form_validation->set_rules("login_username", "Login Username", "trim|required");
		$this->form_validation->set_rules("login_password", "Login Password", "trim|required");

		if($this->form_validation->run() === TRUE)
		{
			$this->load->model('User');
			$user_login = $this->input->post();
			$data_user = $this->User->data_check_login($user_login);

			/*var_dump($data_user);
			die();*/


			if($data_user)
			{	
				if($user_login['login_password'] == $data_user['password'])
				{
					if (!$this->session->userdata('user_loggedin')) 
					{
						$this->session->set_userdata('user_loggedin', $data_user['first_name']);
						//redirect('/');
					
					} else {

						
						if($this->session->userdata('user_loggedin'))
						{
							if($this->session->userdata('user_loggedin') == $data_user['first_name'])
							{
								$this->session->set_flashdata('login_error', "You are already logged in. Go to <a href='Users/user_home' class='blue'>My Account</a>. Or <a href='logout' class='blue'>Log Out</a>");
								redirect('/');

								//redirect('Users/user_home');
							} else {
								$this->session->unset_userdata('user_loggedin');
							}
						}


						/*$this->session->set_flashdata('login_error', "You are already logged in. Go to <a href='Users/user_home' class='blue'>My Account</a>. Or <a href='logout' class='blue'>Log Out</a>");
						redirect('/');*/
					}


				} else {

					
						$this->session->set_flashdata('login_error', 'Your Username or Password are invalid. Please try again');
					
						redirect('/');
				}



				
				redirect('Users/user_home');


			} else{

					$this->session->set_flashdata('login_error', 'Your Username or Password are invalid. Please try again');
					redirect('/');

			}
			
			

			} else {

				$this->session->set_flashdata('login_error', 'Your Username or Password are invalid. Please try again');
					redirect('/');	
			}
			


		}


	

	public function logout(){

		$this->session->unset_userdata('user_loggedin');
		redirect('/');
	}


	public function user_home(){

		if (!$this->session->userdata('user_loggedin')) 
			{
				//$this->session->set_userdata('user_loggedin', $data_user['first_name']);
				redirect('/');
			
			}/*else {
				redirect('Users/user_home');

			}*/

		$this->load->view('user_home');
	}


	}



?>
