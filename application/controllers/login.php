<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller 
{
	public function index()
	{	
		if(isset($this->session->logged_in)) {
			redirect('enrollment/dashboard');
		}
		else {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
				
			if ($this->form_validation->run() == FALSE) {
					$this->load->view('login/login');
				}
			
			else {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$result = $this->users_model->checkUserPassword($username, $password);
				if(isset($result->user_role)){
					$u_permission = $this->users_model->getPermissions($result->user_role);
				}

				if(is_object($result)){
					//print_r($result);
					$userdata = array(
					        'username'  => $result->username,
					        'first_name'     =>  $result->first_name,
					        'last_name'     =>  $result->last_name,
					        'position'     =>  $result->position,
					        'date_created' => $result->date_created,
					        'sex' => $result->sex,
					        'birthdate' => $result->birthdate,
					        'contact_no' => $result->contact_no,
					        'email' => $result->email,
					        'employee_id' => $result->employee_id,
					        'major' => $result->major,
					        'user_role' => $result->user_role,
					        'logged_in' => TRUE
					);


				foreach ($u_permission as $key => $value) {
					$userdata[$value->module_name] = $value->status;
				}
				
				/*echo '<pre>';
				print_r($userdata);
				echo '<pre>'; exit;
*/
					$this->session->set_userdata($userdata);
					$this->audit_trail->set('-','-','login','-');
					redirect('enrollment/dashboard');
				}
				else if($result==1) {
					$data['userError'] = "Username does not exist!";
					$this->load->view('login/login', $data);
				}
				else if($result==2) {
					$data['passError'] = "Incorrect password!";
					$this->load->view('login/login', $data);
				}
			}	
		}
	}

	public function logout(){
			$this->audit_trail->set('-','-','logout','-');
			session_destroy();
			$this->load->view('login/login');
		}
}

?>
