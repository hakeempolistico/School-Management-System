<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form137 extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'reports/form137';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('reports/form137', $data);
	}

}
