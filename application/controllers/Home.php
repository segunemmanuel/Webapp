<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home  extends CI_Controller {
 
	public function __construct(){
		parent::__construct();
		$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
	  }


	public function login()
{
	// Validate form inputs
$this->form_validation->set_rules('email', 'Email', 'trim|required');
$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');




if ($this->form_validation->run() == FALSE)
                {
$this->load->view('templates/header');
$this->load->view('login');
$this->load->view('templates/footer');
                }
				else{ 
					// collect form data and login;
					$rawpass = md5($this->input->post('password'));
					$email = $this->input->post('email');

				
$result=$this->User_model->getLoginInData($email, $rawpass);
if($result== FALSE){
	$error="User not found. Please register";
	$this->session->set_flashdata('error', $error);
	redirect('home/login');
	 
}
else{
redirect('/dashboard');

}
				}



	}

public function register(){
// process the formm regsitration
// Form validation process

$this->form_validation->set_rules('name','Your full-name','trim|required|min_length[3]');
$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
$this->form_validation->set_rules('confirm_password', 'Password confirmation', 'required|min_length[5]');
$this->form_validation->set_rules('email', 'Email', 'trim|required');
$this->form_validation->set_rules('sex', 'Your Sex');


if ($this->form_validation->run() == FALSE)
                {
					$this->load->view('templates/header');
					$this->load->view('register');
					$this->load->view('templates/footer');
                }
				else
{
// Collect form data;
$fullname = $this->input->post('name');
$rawpass = md5($this->input->post('password'));
$confirm_password = $this->input->post('confirm_password');
$email = $this->input->post('email');
$sex = $this->input->post('sex');


// VERIFY IF USER EXISTS


$result=$this->User_model->userExists($email);

if($result==TRUE)
{
$error="User already exists, pls login";
 $this->session->set_flashdata('error',$error);

	// REDIRECT TO LOGIN PAGE
redirect('home/login');

}
else
{
// INSERT INTO DB
$password=md5($rawpass);
$result=$this->User_model->insertUserRegistrationData($email,$fullname,$rawpass,$sex);
$success="Registration successful, pls login";
 $this->session->set_flashdata('error',$success);
if($result>0){
	redirect('home/login');
}
else{

	$error="Registration successful, pls login";
	$this->session->set_flashdata('error',$error);
	redirect('home/register');

}

}

}

        }



		// RESETING PASSWORD
		public function resetpassword()
		{
// VALIDATION OF EMAIL INPUT
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('resetpassword');
				$this->load->view('templates/footer');
			}
			else
			{

				// Get email from  the user
				$email=$this->input->post('email');
// Check if email exists in the database;

$result=$this->User_model->userEmailExists($email);


// Email the user





// Insert the token and the code in to database

// Redirect users to login;

		}
	}










		public function verifypasswordcode(){
			$this->load->view('templates/header');
            $this->load->view('resetpassword');
            $this->load->view('templates/footer');
		}
}


