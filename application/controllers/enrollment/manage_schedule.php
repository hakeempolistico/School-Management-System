<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_schedule extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{
		$data = $this->parse->parsed();
		$data['studentsCount'] = $this->global_model->count('students');
		$data['teachersCount'] = $this->global_model->count('teachers');
		$data['roomsCount'] = $this->global_model->count('rooms');
		$data['classesCount'] = $this->global_model->count('classes');
		$data['students'] = $this->global_model->getRecords('students');		
		$data['teachers'] = $this->global_model->getRecords('teachers');		
		$data['rooms'] = $this->global_model->getRecords('rooms');		
		$this->parser->parse('enrollment/manage_schedule', $data);
	}

	public function ajax()
	{
		$post = $this->input->post();
		$row = $this->global_model->getRow($post['table'], $post['set'], $post['value']);
		echo json_encode($row);
	}

}
