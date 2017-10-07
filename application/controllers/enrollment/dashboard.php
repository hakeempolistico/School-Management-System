<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['teachersCount'] = $this->global_model->count('teachers');
		$data['roomsCount'] = $this->global_model->count('rooms');
		$data['subjectsCount'] = $this->global_model->count('subjects');
		$data['enrolledStudentsCount'] = $this->global_model->count('enrolled_students');
		
    	$this->parser->parse('enrollment/dashboard', $data);

		

	}

}
