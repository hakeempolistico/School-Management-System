<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class enroll_student extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}
	
	public function index()
	{	
		$this->load->view('enrollment/picking');
	}

	public function enroll()
	{
		$this->load->view('enrollment/enroll_student');
	}

	public function strands()
	{
		$this->load->view('enrollment/strand_selection');
	}

	public function enrolled()
	{
		$this->load->view('enrollment/enrolled');
	}

	public function search()
	{
		$this->load->view('enrollment/search');
	}

	public function register_error()
	{
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->view('enrollment/enroll_student/enroll');
	}

	public function register()
	{
		$required_message = array('required' => 'Field is required!');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('lrn', 'LRN', 'trim|required|min_length[3]|max_length[20]|is_unique[students.lrn]', $required_message);
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|max_length[40]', $required_message);
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'trim|required|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('sex', 'Sex', 'trim|required|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('contact', 'Contact No', 'trim|required|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('birth_date', 'Birthdate', 'trim|required|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('birth_place', 'Birthplace', 'trim|required|min_length[3]|max_length[40]', $required_message);
		$this->form_validation->set_rules('age', 'Age', 'trim|required|min_length[1]|max_length[5]', $required_message);
		$this->form_validation->set_rules('mother_tongue', 'Mother Tongue', 'trim|required|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('religion', 'Religion', 'trim|required|min_length[3]|max_length[30]', $required_message);
		$this->form_validation->set_rules('street', 'House #, Street', 'trim|required|min_length[3]|max_length[40]', $required_message);
		$this->form_validation->set_rules('barangay', 'Barangay', 'trim|required|min_length[3]|max_length[40]', $required_message);
		$this->form_validation->set_rules('city', 'City', 'trim|required|min_length[3]|max_length[40]', $required_message);
		$this->form_validation->set_rules('province', 'Province', 'trim|required|min_length[3]|max_length[30]', $required_message);
		$this->form_validation->set_rules('father_name', 'Father\'s Name', 'trim|required|min_length[3]|max_length[100]', $required_message);
		$this->form_validation->set_rules('mother_name', 'Mother\'s Name', 'trim|required|min_length[3]|max_length[100]', $required_message);
		$this->form_validation->set_rules('father_contact', 'Father\'s Contact No', 'trim|required|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('mother_contact', 'Mother\'s Contact No', 'trim|required|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('guardian', 'Guardian Name', 'trim|required|min_length[3]|max_length[40]', $required_message);
		$this->form_validation->set_rules('relationship', 'Relationship', 'trim|required|min_length[3]|max_length[40]', $required_message);
		$this->form_validation->set_rules('guardian_contact', 'Guardian\'s Contact', 'trim|required|min_length[3]|max_length[20]', $required_message	);
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('enrollment/enroll_student');
		}
		else
		{
			$this->load->model('enroll_model');
			
			if($this->input->post()) {
				$data = $this->input->post();
				$table = 'students';
				$result = $this->enroll_model->add($table, $data);
				redirect('enrollment/enroll_student/strands');
			}
		}
	}

}

?>
