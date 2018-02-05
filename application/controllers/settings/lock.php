<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lock extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index(){	
		$data = $this->parse->parsed();
		$data['modules'] = $this->global_model->getActiveRecords('modules');

		$data['active'] = 'settings/lock';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('settings/lock', $data);
	}
	public function ajaxUpdate(){
		$data = $this->input->post();
		$where = array('module_name' => $data['module'] );
		$set = array('status' => $data['status'] );
		$res = $this->global_model->updateRecord('modules', $set, $where);
		echo json_encode($res);
	}
	public function ajaxUpdateRecord(){
		$data = $this->input->post();
		$where = array('module_name' => $data['module'] );
		$set = array($data['user'] => $data['status'] );
		$res = $this->global_model->updateRecord('user_permission', $set, $where);
		echo json_encode($res);
	}
	public function ajaxGetPermission(){
		$res = $this->global_model->getRecords('user_permission');
		echo json_encode($res);
	}
}
