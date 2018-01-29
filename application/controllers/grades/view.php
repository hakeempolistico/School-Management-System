<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view extends CI_Controller {

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

		$data['active'] = 'grades/view';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('grades/view', $data);
	}
	public function getClassStudents()
	{
		$data = $this->input->post();
		$result = $this->global_model->getRows('enrolled_students', array('section_id' => $data['section_id'] ) );
		foreach ($result as $val) {
			$d = $this->global_model->getRow('students_info', 'lrn', $val->students_info_lrn);
			$arr1 =  array('lrn' => $val->students_info_lrn, 'semester' => $data['semester'], 'quarter' => 'First Quarter', 'subject_code' => $data['subject_code']);
			$grade1 = $this->global_model->getRows('grades', $arr1);
			if($grade1){
				$val->first_grade = $grade1['0']->grade;
			}
			$arr2 =  array('lrn' => $val->students_info_lrn, 'semester' => $data['semester'], 'quarter' => 'Second Quarter', 'subject_code' => $data['subject_code']);
			$grade2 = $this->global_model->getRows('grades', $arr2);
			if($grade2){
				$val->second_grade = $grade2['0']->grade;
			}
			$val->full_name = $d->first_name.' '.$d->last_name;
		}
		echo json_encode($result);
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
}
