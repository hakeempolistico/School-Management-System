<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class enroll_student extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->view('enrollment/enroll_student/enroll');
	}

	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('lrn', 'LRN', 'trim|required|min_length[3]|max_length[20]|is_unique[enroll.lrn]');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('mname', 'Middle Name', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('sex', 'Sex', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('contact', 'Contact No', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('birthdate', 'Birthdate', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('birthplace', 'Birthplace', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('age', 'Age', 'trim|required|min_length[1]|max_length[5]');
		$this->form_validation->set_rules('mothertongue', 'Mother Tongue', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('religion', 'Religion', 'trim|required|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('street', 'House #, Street', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('barangay', 'Barangay', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('city', 'City', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('province', 'Province', 'trim|required|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('fathername', 'Father\'s Name', 'trim|required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('mothername', 'Mother\'s Name', 'trim|required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('fathercontact', 'Father\'s Contact No', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('mothercontact', 'Mother\'s Contact No', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('guardian', 'Guardian Name', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('relationship', 'Relationship', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('guardiancontact', 'Guardian\'s Contact', 'trim|required|min_length[3]|max_length[20]');
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('enrollment/enroll_student');
		}
		else
		{
			$this->load->model('enroll_model');
			
			if($this->input->post()) {
			$data = $this->input->post();
			$result = $this->enroll_model->add($data);
			redirect('enrollment/enroll_student/strands');
			}
		}
		}

}

?>
