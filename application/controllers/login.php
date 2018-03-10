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
				$a_year = $this->global_model->getRow('academic_years', 'status', 'active');
				$active_year = $a_year->id;
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
				        'advisory_class' => $result->advisory_class,	
				        'email' => $result->email,
				        'employee_id' => $result->employee_id,
				        'major' => $result->major,
				        'user_role' => $result->user_role,
				        'academic_year' => $active_year,
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

	public function optimize_db(){
		$this->load->dbutil();
		$result = $this->dbutil->optimize_database();

			if ($result !== FALSE)
			{
			        echo '<pre>'; print_r($result); echo '<pre>';
			}
	}

	public function backup(){
		// Load the DB utility class
		$this->load->dbutil();
		/*$prefs = array(
        'tables'        => array('academic_years', 'addresses'),   // Array of tables to backup.
        'ignore'        => array(),                     // List of tables to omit from the backup
        'format'        => 'zip',                       // gzip, zip, txt
        'filename'      => 'mybackup.sql',              // File name - NEEDED ONLY WITH ZIP FILES
        'add_drop'      => TRUE,                        // Whether to add DROP TABLE statements to backup file
        'add_insert'    => TRUE,                        // Whether to add INSERT data to backup file
        'newline'       => "\n"                         // Newline character used in backup file
		);

		$this->dbutil->backup($prefs);*/

		// Backup your entire database and assign it to a variable
		$backup = $this->dbutil->backup();

		// Load the file helper and write the file to your server
		$this->load->helper('file');
		write_file('/path/to/mybackup.gz', $backup);

		// Load the download helper and send the file to your desktop
		$this->load->helper('download');
		force_download('mybackup.gz', $backup);
	}
}

?>
