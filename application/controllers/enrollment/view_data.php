<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_data extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{	
		
		$this->load->view('enrollment/view_data');
	}
	
	public function ajax()
	{
		$info = array("lrn"=>"1231231231", "name"=>"hakeem", "sex"=>"male");
		echo json_encode($info);
	}
}
