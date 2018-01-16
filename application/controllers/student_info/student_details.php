<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student_details extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('global_model');
	    $this->load->model('student_information/student_details_model');
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'student_info/student_details';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

		$arr = $this->student_details_model->getStudentDetails();

		foreach ($arr as $val) {
		    $val->full_name = $this->student_details_model->getStudentInfo($val->students_info_lrn)[0]->first_name.' '.
		    $this->student_details_model->getStudentInfo($val->students_info_lrn)[0]->middle_name.' '.
		    $this->student_details_model->getStudentInfo($val->students_info_lrn)[0]->last_name;
		    $val->strand = $this->student_details_model->getClass($val->section_id)[0]->strand_code;
		    $val->section = $this->student_details_model->getClass($val->section_id)[0]->name;
		    if($this->student_details_model->getClass($val->section_id)[0]->year_level_id == 1){
		    	$val->grade = 'Grade 11';
		    }
		    else{
		    	$val->grade = 'Grade 12';
		    };
		}

		$data['student_details'] = $arr;

    	$this->parser->parse('student_info/student_details', $data);
	}

	public function getStudentInfo(){
		$arr = $this->global_model->getRows('students_info', $this->input->post());
		foreach ($arr as $key => $val) {
			$val->date_registered = date("F j, Y", strtotime($val->date_registered)); 
			$val->birth_date = date("F j, Y", strtotime($val->birth_date)); 
		}
		echo json_encode($arr);
	}

	public function getGuardianInfo(){
		echo json_encode($this->global_model->getRows('guardians', $this->input->post()));
	}


}
