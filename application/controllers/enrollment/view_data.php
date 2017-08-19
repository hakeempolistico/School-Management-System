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
		$table = "students";
		$records = json_encode($this->global_model->getRecords($table));
		$data['studentRecords'] = $records;
		$this->load->view('enrollment/view_data', $data);
	}
	
	public function ajax()
	{
		$table = "students";
		$set = "lrn";
		$value = $this->input->post('lrn');
		$records = json_encode($this->global_model->getRow($table, $set, $value));
		echo $records;
	}
}
