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

	public function getClass()
	{
		$data = $this->input->post();
		$result = $this->global_model->getRows('class_subjects', array('subject_id' => $data['subject_code'] ) );
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
