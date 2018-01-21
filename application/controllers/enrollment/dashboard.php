<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('dashboard_model');
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['teachersCount'] = $this->global_model->count('teachers');
		$data['roomsCount'] = $this->global_model->count('rooms');
		$data['subjectsCount'] = $this->global_model->count('subjects');
		$data['enrolledStudentsCount'] = $this->global_model->count('enrolled_students');
		$data['students_enrolled'] = $this->dashboard_model->getStudents();
		foreach ($data['students_enrolled'] as $key => $val) {
			$code = $this->dashboard_model->getStrand($val->section_id);
			$data['students_enrolled'][$key]->strand_name = $code;
		};

		$data['active'] = 'dashboard';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['title'] = 'Strands';
		$data['header'] = $this->load->view('template/header', $data, TRUE);

    	$this->parser->parse('enrollment/dashboard', $data);
	}

}
