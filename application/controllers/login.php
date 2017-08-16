<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{	
		$this->load->view('login/login');
	}


	public function Login2()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$admin = "admin";
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
			
		if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('login/login');
			}
		
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->users_model->checkUserPassword($username, $password);

			if($result==3){
				redirect('enrollment/dashboard');
			}
			else if($result==1){
				$data['userError'] = "Username does not exist!";
				$this->load->view('login/login', $data);
			}
			else if($result==2){
				$data['passError'] = "Incorrect password!";
				$this->load->view('login/login', $data);
			}
		}
		
	}

	

}

?>
