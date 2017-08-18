<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index()
	{	
			$this->sms_session->checkSession();
			$this->load->view('enrollment/dashboard');

	}

}
