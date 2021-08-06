<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages  extends CI_Controller {
 
	public function Index()
	{
		// This is how to return a value from the model db;
$result=$this->Messages_model->getMsg();
$this->load->view('messages',$result);


	}

    
}
