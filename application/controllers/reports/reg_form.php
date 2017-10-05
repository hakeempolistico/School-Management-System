<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reg_form extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('academics/strands_model');
	}
	public function index()
	{	
		$data = $this->parse->parsed();
        $this->parser->parse('reports/reg_form', $data);
	}
	

}
