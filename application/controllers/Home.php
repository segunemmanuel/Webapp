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

$this->session->set_userdata('email',$email);


if($result== TRUE){

// Email the user
$token=md5(uniqid(rand(),true));
$randcode=md5($email);
$code=substr($randcode,2,8);
$status="TRUE";
$subject= "Password Reset Link | Lineo";
$message="Dear customer,\r\n You requested for a password reset link on Lineo platform\r\n Kindly click on the link or copy and paste this link in your browser url to reset your password.\n\n This is your link: ".base_url('home/verifytoken')."/?tokenID=" . $token . "&status=".$status ."\n\n Your reset password code is:".$code."\r\n Thanks\r\nRegards,\r\n\lineo support\r\n\lineo.com";



// setting the email config
$config=array(
	'protocol'=>'smtp',
	'smtp_host'=>'ssl://smtp.googlemail.com',
	'smtp_port'=>465,
	'smtp_user'=>'segun9679gmail.com',
	'smtp_pass'=>'segun8080',
	'mailtype'=>'html',
	'smtp_timeout'=> '7',
	'charset'=>'iso-8859-1',
	'wordwrap' =>TRUE
);
// Load library and pass in the config
$this->load->library('email',$config);

$this->email->set_newline('\r\n');

$supportEmail="reset@lineo.com";
$supportname="support team";
$email=$this->session->userdata('email');

$this->email->from($supportEmail, $supportname);
$this->email->to($email);
$this->email->subject($subject);
$this->email->message($message);

if($this->email->send()){
	echo $message;

	// insert data into the db
$data =array(
	'email'=>$email,
	'token'=>$token,
	'code'=>$code,
	'status'=>TRUE );

// Call the model function to insert data into the reset password table
$result=$this->User_model->insertpasswordresetcode($data);

if($result>0){
$success="Please check your email for pasword reset code";
$this->session->set_flashdata('success',$success);
redirect('home/login');

}

}

//  for inital msg
else{
$error=  "Message not sent, Re type";
$this->session->flash_data('error',$error);
redirect('home/resetpassword');

}
 
// Insert the token and the code in to database


}
else{
// Redirect users to login;
$error=  "Email not valid re enter";
$this->session->flash_data('error',$error);
redirect('home/resetpassword');

}




		}
	}


		public function verifytoken(){
// HOW TO GRAB QUERY REQUESTS
			$url=parse_url($_SERVER['REQUEST_URI']);
			parse_str($url['query'],$params);
			$tokenID=  $params['tokenID'];
			$status= $params['status'];
			$result=$this->User_model->verifyToken($tokenID,$status);

if($result==false){
$error="Sorry, Token expired Try again";
$this->session->set_flashdata('error',$error);
redirect('home/resetpassword');
}
else
{
	$useremail=$result;
	$success="Your token has been verified for " . $useremail. ",Pls enter a  code";
$this->session->set_flashdata('success',$success);
redirect('home/verifypasswordcode');
}
}


		public function verifypasswordcode(){
			$this->form_validation->set_rules('resetcode','Reset Code ','trim|required|min_length[7]');


			if($this->form_validation->run()==FALSE){
			
				$this->load->view('templates/header');
				$this->load->view('verifypasswordresetcode');
				$this->load->view('templates/footer');  
			
			}
			else{
				$code=$this->input->post('resetcode');
				$result=$this->User_model->verifyCode($code);

if($result){
redirect('home/newpassword');

}else{
	$error="Sorry, Passowrd reset code invalid Try again";
	$this->session->set_flashdata('error',$error);
redirect('home/resetpassword');

}

 			}
		}




		public function newpassword(){
			$this->load->view('templates/header');
            $this->load->view('newpassword');
            $this->load->view('templates/footer');
		}


}


