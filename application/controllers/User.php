<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User  extends CI_Controller {
 
	public function index()
	{
		$this->load->view('user');
		// file path
	}
 
    public function p_id($p){
      if(isset($p)){
		$this->load->view('p_id');

      }
else return $this->load->view('');
}

        




    
}


