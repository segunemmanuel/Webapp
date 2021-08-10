<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home  extends CI_Controller {
 
	public function login()
{
$this->load->view('templates/header');
$this->load->view('login');
$this->load->view('templates/footer');

	}

public function register(){
// process the formm regsitration
// Form validation process

$this->form_validation->set_rules('name','Your full-name','trim|required|min_length[3]');
$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
$this->form_validation->set_rules('confirm_password', 'Password', 'required|min_length[5]');
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
                    
					$this->load->view('templates/header');
					$this->load->view('dashboard');
					$this->load->view('templates/footer');

                }






        }





		public function resetpassword(){
			$this->load->view('templates/header');
            $this->load->view('resetpassword');
            $this->load->view('templates/footer');
		}


		public function verifypasswordcode(){
			$this->load->view('templates/header');
            $this->load->view('resetpassword');
            $this->load->view('templates/footer');
		}
}


