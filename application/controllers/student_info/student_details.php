<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student_details extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    //$this->load->model('global_model');
	    //$this->load->model('student_details_model');
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'student_info/student_details';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('student_info/student_details', $data);
	}

}
