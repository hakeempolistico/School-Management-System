<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subjects extends CI_Controller {

	public function index()
	{	
		$data = $this->parse->parsed();
        $this->parser->parse('academics/subjects', $data);
		$this->sms_session->checkSession();
	}

}
