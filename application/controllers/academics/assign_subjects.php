<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class assign_subjects extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{	
		$data = $this->parse->parsed();
		$data['teachers'] = $this->global_model->getRecords('teachers');
		$data['subjects'] = $this->global_model->getRecords('subjects');
        $this->parser->parse('academics/assign_subjects', $data);
	}

	public function getStrands(){		
		echo json_encode($this->global_model->getRecords('strands'));
	}

	public function getYears(){		
		echo json_encode($this->global_model->getRecords('year_levels'));
	}

	public function getSection(){	
		$this->load->model('academics/assign_subjects_model');	
		echo json_encode($this->assign_subjects_model->getSections($this->input->post()));
	}

	public function getSubjects(){	
		echo json_encode($this->global_model->getRecords('subjects'));
	}

	public function getTeachers(){	
		echo json_encode($this->global_model->getRecords('teachers'));
	}

	public function addClassSubjects(){
		$data = array(
			"teacher_id" => $this->input->post('employee_id'),
			"section_id" => $this->input->post('section_id'),
			"subject_id" => $this->input->post('section_id')
		);

		$this->global_model->insert($this->input->post('table'),$data);
	}

}
