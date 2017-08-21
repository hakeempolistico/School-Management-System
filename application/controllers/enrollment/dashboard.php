<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index()
	{	
		$data = $this->parse->parsed();
    $this->parser->parse('enrollment/dashboard', $data);

		$this->sms_session->checkSession();

	}

}
