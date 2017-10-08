<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller{
	
	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('users_model');
	    
	}

	public function index()
	{	
		$data = $this->parse->parsed();
        $this->parser->parse('profile/my_profile', $data);
	}

	public function change_password()
	{
		$data = $this->input->post();
		$username = $data['username'];
		$curr_pass = $this->users_model->getPassword($username);

		if($curr_pass == $data['current'] && $data['new'] == $data['retype']){
			echo json_encode($this->users_model->changePassword($data['username'], $data['new']));
		}
		else{
			echo 'false';
		}
		//echo '<pre>'; print_r($data); echo '<pre>';
	}
}