<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class schedule extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('academics/schedule_model');
	}

	public function index()
	{
		$data = $this->parse->parsed();
		$data['classesCount'] = $this->global_model->count('sections');
		$data['classes'] = $this->global_model->getRecords('sections');		
		$data['teachers'] = $this->global_model->getRecords('teachers');		
		$data['rooms'] = $this->global_model->getRecords('rooms');			
		$data['subjects'] = $this->global_model->getRecords('subjects');		
		$data['classes'] = $this->schedule_model->getClass();		
		$this->parser->parse('academics/schedule', $data);
	}

	public function getSectionsDetails()
	{
		$data = $this->input->post();
		$row = $this->schedule_model->getSectionDetails($data);
		echo json_encode($row);
	}

	public function getSubjects()
	{
		$data = $this->input->post();
		$row = $this->schedule_model->getSubjects($data);
		echo json_encode($row);
	}

}
