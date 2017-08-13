<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->load->view('login/login');
	}
	public function validation(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$table = "users";

		$result = $this->users_model->checkRecord($username, $password, $table);
		if($result ==true){
			//echo "Username found!";
			$result = $this->users_model->checkPassword($username, $password, $table);

			if($result==true){
				echo true;
			}
			else{
				echo 3;
			}
		}
		else
			echo 2;
	}	

}
