<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_management extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'user_management';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('settings/user_management', $data);
	}

}
