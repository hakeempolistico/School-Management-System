<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sections extends CI_Controller {

	public function index()
	{	
		$data = $this->parse->parsed();
        $this->parser->parse('academics/sections', $data);
		$this->sms_session->checkSession();
	}

}
