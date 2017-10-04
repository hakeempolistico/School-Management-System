<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student_reports extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('academics/strands_model');
	}
	public function index()
	{	
		$data = $this->parse->parsed();
		$data['strands'] = $this->global_model->getRecords('strands');
		$data['years'] = $this->global_model->getRecords('year_levels');
        $this->parser->parse('reports/student_reports', $data);
	}
	public function search(){
		$data = $this->input->post();
		echo '<pre>';
		print_r($data); 
		echo '<pre>'; 

	}

}
