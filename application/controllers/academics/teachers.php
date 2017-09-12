<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teachers extends CI_Controller {

	public function index()
	{	
		$data = $this->parse->parsed();
        $this->parser->parse('academics/teachers/teachers', $data);
		$this->sms_session->checkSession();
	}
	public function view()
	{	
		$data = $this->parse->parsed();
        $this->parser->parse('academics/teachers/view', $data);
		$this->sms_session->checkSession();
	}

}
