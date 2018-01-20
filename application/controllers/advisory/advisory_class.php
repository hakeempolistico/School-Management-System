<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class advisory_class extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'advisory/advisory_class';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('advisory/advisory_class', $data);
	}

}
