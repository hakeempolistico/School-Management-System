<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    // $this->load->model('dashboard_model');
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['subjects'] = $this->global_model->getActiveRecords('subjects');

		$data['active'] = 'grades/manage';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('grades/manage', $data);
	}

	public function getClass()
	{
		$data = $this->input->post();
		$result = $this->global_model->getRows('class_subjects', $data );
		foreach ($result as $val) {
			$d = $this->global_model->getRow('sections', 'id', $val->section_id);
			if($d->year_level_id=='1'){
				$d->year_level_id = '11';
			}
			else{
				$d->year_level_id = '12';
			}
			$val->class = $d->strand_code.'-'.$d->year_level_id.$d->name;
		}
		echo json_encode($result);
	}
	public function getClassStudents()
	{
		$data = $this->input->post();
		$result = $this->global_model->getRows('enrolled_students', array('section_id' => $data['section_id'] ) );
		foreach ($result as $val) {
			$d = $this->global_model->getRow('students_info', 'lrn', $val->students_info_lrn);
			$arr =  array('lrn' => $val->students_info_lrn, 'semester' => $data['semester'], 'quarter' => $data['quarter'], 'subject_code' => $data['subject_code']);
			$grade = $this->global_model->getRows('grades', $arr);
			if($grade){
				$val->grade = $grade['0']->grade;
			}
			$val->full_name = $d->first_name.' '.$d->last_name;
		}
		echo json_encode($result);
	}
	public function addGrade()
	{
		$data = $this->input->post();
		$result = $this->global_model->insert('grades', $data);
		echo json_encode($result);
	}

}
