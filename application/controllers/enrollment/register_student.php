<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_student extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{
		$data = $this->parse->parsed();
		$this->parser->parse('enrollment/register_student', $data);
	}

	public function register_error()
	{
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$data = $this->parse->parsed();
		$this->parser->parse('enrollment/register_student', $data);
	}

	public function register()
	{	
		$required_message = array('required' => 'Field is required!');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('lrn', 'LRN', 'trim|required|min_length[3]|max_length[15]|is_unique[students_info.lrn]', $required_message);
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|max_length[40]', $required_message);
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'trim|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('sex', 'Sex', 'trim|required|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('contact_number', 'Contact No', 'trim|required|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('birth_date', 'Birthdate', 'trim|required|min_length[3]|max_length[20]', $required_message);
		$this->form_validation->set_rules('birth_place', 'Birthplace', 'trim|required|min_length[3]|max_length[40]', $required_message);
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
		$this->form_validation->set_rules('guardian_contact', 'Guardian\'s Contact', 'trim|required|min_length[3]|max_length[20]', $required_message);
				
		if ($this->form_validation->run() == FALSE)
		{
			$data = $this->parse->parsed();
			$this->parser->parse('enrollment/register_student', $data);
		}
		else
		{
			
			if($this->input->post()) {

				$from = new DateTime($this->input->post('birth_date'));
				$to   = new DateTime('today');
				$age = $from->diff($to)->y;

				# procedural
				#echo date_diff(date_create('1970-02-01'), date_create('today'))->y;

				$studentInfo = array(
					'id' => '' ,
					'lrn' => $this->input->post('lrn'),
					'first_name' => $this->input->post('first_name') ,
					'middle_name' => $this->input->post('middle_name') ,
					'last_name' => $this->input->post('last_name') ,
					'sex' => $this->input->post('sex') ,
					'contact_number' => $this->input->post('contact_number') ,
					'birth_date' => $this->input->post('birth_date'),
					'birth_place' => $this->input->post('birth_place'),
					'age' => $age,
					'mother_tongue' => $this->input->post('mother_tongue') ,
					'religion' => $this->input->post('religion') ,
					'online_applicant' => 0 
				);		
				

				$lrn = $this->register_student_model->insert('students_info', $studentInfo);


				$addressInfo = array(
					'id' => '' ,
					'students_info_lrn' => $lrn,
					'street' => $this->input->post('street') ,
					'barangay' => $this->input->post('barangay') ,
					'city' => $this->input->post('city') ,
					'province' => $this->input->post('province')
				);


				$this->global_model->insert('addresses', $addressInfo);	

				$parentsInfo = array(
					'id' => '' ,
					'students_info_lrn' => $lrn,
					'mother_name' => $this->input->post('mother_name') ,
					'mother_contact' => $this->input->post('mother_contact') ,
					'father_name' => $this->input->post('father_name') ,
					'father_contact' => $this->input->post('father_contact')
				);	

				$parentId = $this->register_student_model->insertGetContactId('parents', $parentsInfo);

				$guardianInfo = array(
					'id' => '' ,
					'students_info_lrn' => $lrn,
					'name' => $this->input->post('guardian') ,
					'contact' => $this->input->post('guardian_contact') ,
					'relationship' => $this->input->post('relationship')
				);	

				$guardianId = $this->register_student_model->insertGetContactId('guardians', $guardianInfo);

				$studentContacts = array(
					'id' => '' ,
					'students_info_lrn' => $lrn,
					'parents_id' => $parentId,
					'guardian_id' => $guardianId 
				);	

				$this->global_model->insert('student_contacts', $studentContacts);

				$regStudent = array(
					'id' => '' ,
					'students_info_lrn' => $lrn
				);	

				$this->global_model->insert('registered_students', $regStudent);

				redirect('enrollment/register_student/after_register');

			}
		}
	}


	public function after_register()
	{
		$data = $this->parse->parsed();
		$data['lastLrn'] = json_encode($this->register_student_model->getLastRow('students_info'));
		$this->parser->parse('enrollment/after_register', $data);
	}

	public function ajax()
	{
		$table = $this->input->post('table');
		$set = $this->input->post('set');
		$value = $this->input->post('value');
		$records = json_encode($this->global_model->getRow($table, $set, $value));
		echo $records;
	}

	public function form()
	{
		$data = $this->parse->parsed();
		$this->parser->parse('enrollment/register_form', $data);
	}

	public function form_print()
	{
		$this->load->view('enrollment/form-print');
	}
	

}

?>
