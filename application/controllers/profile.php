<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller{
	
	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    
	}

	public function index()
	{	
		$data = $this->parse->parsed();
        $this->parser->parse('profile/my_profile', $data);
	}
}