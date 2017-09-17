<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class enroll_student extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{
		$data = $this->parse->parsed();
		$data['registeredStudents'] = json_encode($this->global_model->getRecords('registered_students'));
		$this->parser->parse('enrollment/search', $data);
	}

}

?>
