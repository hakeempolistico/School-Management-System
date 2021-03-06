<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class curriculum extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('academics/curriculum_model');	
	}

	public function index()
	{	
		$data = $this->parse->parsed();
		$data['teachers'] = $this->global_model->getRecords('teachers');
		$data['subjects'] = $this->global_model->getRecords('subjects');

		$data['active'] = 'academics/curriculum';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['title'] = 'Curriculum';
		$data['header'] = $this->load->view('template/header', $data, TRUE);

        $this->parser->parse('academics/curriculum', $data);
	}

	public function getStrands(){
		echo json_encode($this->global_model->getActiveRecords('strands'));
	}

	public function getYears(){		
		echo json_encode($this->global_model->getActiveRecords('year_levels'));
	}

	public function getSection(){			
		echo json_encode($this->curriculum_model->getSections($this->input->post()));
	}

	public function getSubjects(){	
		echo json_encode($this->global_model->getActiveRecords('subjects'));
	}

	public function deleteCurrSubject(){	
		$this->global_model->deleteMultiple('curriculum', $this->input->post());
	}

	public function getClassSubjects(){	
		echo json_encode($this->curriculum_model->getClassSubjects($this->input->post()));
	}

	public function addClassSubjects(){
		$data = $this->input->post();
		$year_id = $this->input->post('year_level_id');
		$this->global_model->insert('curriculum',$data);

		if ($year_id == '1'){
			$year = '11';
		}else {
			$year = '12';
		}
		
		$this->audit_trail->set('Academics', 'Curriculum', 'add', $data['subject_code'].' to '.$data['strand_code'].$year.' '.$data['semester']);
		
	}

}
