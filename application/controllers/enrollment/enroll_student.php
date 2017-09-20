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
		$data = $this->parse->parsed();
		$data['onlineRecords']  = json_encode($this->global_model->getRecords('registered_students'));
		$this->parser->parse('enrollment/search', $data);
	}

	public function enroll()
	{
		$data = $this->parse->parsed();
		$this->parser->parse('enrollment/enroll_student', $data);
	}

	public function strands()
	{
		$data = $this->parse->parsed();
		$this->parser->parse('enrollment/strand_selection', $data);
	}

	public function enrolled()
	{
		$data = $this->parse->parsed();
		$this->parser->parse('enrollment/enrolled', $data);
	}

	public function search()
	{	
		$data = $this->parse->parsed();
		$data['onlineRecords']  = json_encode($this->global_model->getRecords('registered_students'));
		$this->parser->parse('enrollment/search', $data);

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
		$this->form_validation->set_rules('lrn', 'LRN', 'trim|required|min_length[3]|max_length[15]|is_unique[students.lrn]', $required_message);
		$this->form_validation->set_rules('grade', 'Grade', 'trim|required|min_length[3]|max_length[15]', $required_message);
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|max_length[40]', $required_message);
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'trim|min_length[3]|max_length[20]', $required_message);
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
		$this->form_validation->set_rules('note', 'Note', 'trim|min_length[1]|max_length[200]', $required_message);
				
		if ($this->form_validation->run() == FALSE)
		{
			$data = $this->parse->parsed();
		$this->parser->parse('enrollment/enroll_student', $data);
		}
		else
		{
			$this->load->model('enroll_model');
			
			if($this->input->post()) {
				$data = $this->input->post();
				$data2 = $this->input->post('requirement[]');

				foreach($data2 as $val){
					$dataReq = array(
						'lrn' =>  $this->input->post('lrn'),
						'requirement' => $val
						);
					$result = $this->global_model->insert('requirements', $dataReq);
				}

				unset($data['requirement']);
				$result = $this->global_model->insert('students', $data);

				redirect('enrollment/enroll_student/strands');
			}
		}
	}

	public function ajax()
	{
		$table = $this->input->post('table');
		$set = $this->input->post('set');
		$value = $this->input->post('lrn');
		$records = json_encode($this->global_model->getRow($table, $set, $value));
		echo $records;
	}

	public function move()
	{	
		$this->load->model('enroll_model');
			
		if($this->input->post()) {
			$data = $this->input->post();
			$data2 = $this->input->post('requirement[]');

			foreach($data2 as $val){
				$dataReq = array(
					'lrn' =>  $this->input->post('lrn'),
					'requirement' => $val
				);
			$result = $this->global_model->insert('requirements', $dataReq);
			}

			unset($data['requirement']);
			$result = $this->global_model->insert('students', $data);

			$lrn = array('lrn' => $this->input->post('lrn'));
			$this->global_model->delete('online_applicants', $lrn);


			redirect('enrollment/enroll_student/strands');
		}
	}

	public function average()
	{
		$arr = $this->input->post('subj[]');

		$a = array_filter($arr);
		$average = array_sum($a)/count($a);
		
		redirect('enrollment/enroll_student/strands', $average);
	}


}

?>
