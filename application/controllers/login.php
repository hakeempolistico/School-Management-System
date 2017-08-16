<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->view('login/login');
	}

	public function index2()
	{	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->view('login/login_2');
	}

	public function Login2()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
			
		if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('login/login');
			}
		
		
		else
		{
			if ($this->input->post())
			{
				$this->load->model('users_model');				
				$data = $this->input->post();
				$this->users_model->login($data['username'], $data['password']);
		
				$result=$this->users_model->login($data['username'], $data['password']);
				
				if(!$result) {
					redirect('/login/index2');
				}
				
				else {
					redirect ('/enrollment/dashboard/');
				}
				
				echo $result;
				exit();
			}
		}
		
	}

	

}

?>
