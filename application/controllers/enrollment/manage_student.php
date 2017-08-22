<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_student extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{
		$data = $this->parse->parsed();
		$this->parser->parse('enrollment/manage_student', $data);
	}

}
