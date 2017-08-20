<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_data extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{	
		$data['teacherRecords']  = json_encode($this->global_model->getRecords('teachers'));
		$data['studentRecords'] = json_encode($this->global_model->getRecords('students'));
		$data['roomRecords'] = json_encode($this->view_model->getRooms());
		$this->load->view('enrollment/view_data', $data);
	}
	
	public function ajax()
	{
		$table = $this->input->post('table');;
		$set = $this->input->post('set');;
		$value = $this->input->post('lrn');
		$records = json_encode($this->global_model->getRow($table, $set, $value));
		echo $records;
	}
}
