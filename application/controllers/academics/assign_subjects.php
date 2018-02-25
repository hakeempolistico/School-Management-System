<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class assign_subjects extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('academics/assign_subjects_model');
	}

	public function index()
	{	
		$data = $this->parse->parsed();
		$data['teachers'] = $this->global_model->getRecords('teachers');
		$data['subjects'] = $this->global_model->getRecords('subjects');

		$data['active'] = 'academics/assign_subjects';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['title'] = 'Assign Subjects';
		$data['header'] = $this->load->view('template/header', $data, TRUE);

        $this->parser->parse('academics/assign_subjects', $data);
	}

	public function getStrands(){		
		echo json_encode($this->global_model->getActiveRecords('strands'));
	}

	public function getYears(){		
		echo json_encode($this->global_model->getRecords('year_levels'));
	}

	public function getSection(){			
		echo json_encode($this->assign_subjects_model->getActiveSections($this->input->post()));
	}

	public function getSubjects(){	
		echo json_encode($this->global_model->getRecords('subjects'));
	}

	public function getTeachers(){	
		echo json_encode($this->global_model->getActiveRecords('teachers'));
	}

	public function deleteClassSubject(){	
		$this->global_model->deleteMultiple('class_subjects', $this->input->post());
	}

	public function getClassSubjects(){
		echo json_encode($this->assign_subjects_model->getClassSubjects($this->input->post()));
	}

	public function getCurrSubjects(){
		echo json_encode($this->assign_subjects_model->getCurrSubjects($this->input->post()));
	}

	public function getSubjectName(){
		echo json_encode($this->global_model->getRecord('subjects', $this->input->post()));
	}

	public function addClassSubjects(){
		$data = array(
			"teacher_id" => $this->input->post('teacher_id'),
			"section_id" => $this->input->post('section_id'),
			"subject_id" => $this->input->post('subject_id')
		);

		$this->global_model->insert('class_subjects',$this->input->post());
	}

	public function auditTrailSave()
	{
		$data = $this->input->post();

		$record = $this->global_model->getRecord('sections', array('id' => $data['section_id'] ));

		$strand_code = $record->strand_code;
		$year_level_id = $record->year_level_id;
		$name = $record->name;

		if ($year_level_id == '1'){
			$year = '11';
		} else {
			$year = '12';
		}

		$this->audit_trail->set('Academics', 'Assign Subjects', 'save', 'Saved subjects for '.$strand_code.'-'.$year.$name);
	}

}
