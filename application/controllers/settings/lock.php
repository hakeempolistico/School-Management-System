<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lock extends CI_Controller {

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

		$data['active'] = 'settings/lock';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('settings/lock', $data);
	}
}
