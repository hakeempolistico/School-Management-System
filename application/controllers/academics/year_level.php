<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class year_level extends CI_Controller {

	public function index()
	{	
		$data = $this->parse->parsed();
        $this->parser->parse('academics/year_level', $data);
		$this->sms_session->checkSession();
	}

}
