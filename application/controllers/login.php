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

			if(is_object($result)){
				//print_r($result);
				$userdata = array(
				        'username'  => $result->username,
				        'first_name'     =>  $result->first_name,
				        'last_name'     =>  $result->last_name,
				        'position'     =>  $result->position,
				        'date_created' => $result->date_created,
				        'logged_in' => TRUE
				);

				$this->session->set_userdata($userdata);
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
