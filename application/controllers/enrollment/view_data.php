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
		$data = $this->parse->parsed();
		$data['teacherRecords']  = json_encode($this->global_model->getRecords('teachers'));
		$data['studentRecords'] = json_encode($this->global_model->getRecords('students'));
		$data['roomRecords'] = json_encode($this->view_model->getRooms());
		$data['classRecords'] = json_encode($this->view_model->getClasses());
		$this->parser->parse('enrollment/view_data', $data);
	}
	
	public function ajax()
	{
		$table = $this->input->post('table');
		$set = $this->input->post('set');
		$value = $this->input->post('lrn');
		$records = json_encode($this->global_model->getRow($table, $set, $value));
		echo $records;
	}
	public function ajaxReq()
	{
		$table = $this->input->post('table');
		$set = $this->input->post('set');
		$value = $this->input->post('lrn');
		$records = json_encode($this->global_model->getRow($table, $set, $value));
		echo $records;
	}
	public function updateRequirements()
	{
		$data2 = $this->input->post('requirement[]');
				foreach($data2 as $val){
					$dataReq = array(
						'lrn' =>  $this->input->post('lrn'),
						'requirement' => $val
						);
					$result = $this->view_model->insertRequirement('requirements', $dataReq);
				}
		if(count($data2)==3){
			$lrn = $this->input->post('lrn');
			$this->view_model->updateStudent($lrn);
		}
		redirect('enrollment/view_data');
	}
}
