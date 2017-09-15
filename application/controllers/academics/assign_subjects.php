<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class assign_subjects extends CI_Controller {

	public function index()
	{	
		$data = $this->parse->parsed();
        $this->parser->parse('academics/assign_subjects', $data);
		$this->sms_session->checkSession();
	}

}
