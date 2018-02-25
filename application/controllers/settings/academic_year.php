<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class academic_year extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index(){	
		$data = $this->parse->parsed();
		$data['a_years'] = $this->global_model->getRecords('academic_years');

		$data['active'] = 'settings/academic_year';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('settings/academic_year', $data);
	}

	public function update(){
		$data = $this->input->post();
		$set = array('status' => 'inactive' );
		$r = $this->global_model->updateRecord('academic_years', $set);

		$where = $data;
		$set = array('status' => 'active' );
		$res = $this->global_model->updateRecord('academic_years', $set, $where);
		echo json_encode($res);
	}
}
