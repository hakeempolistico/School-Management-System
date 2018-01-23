<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class advisory_class extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'advisory/advisory_class';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('advisory/advisory_class', $data);
	}

	public function getAdvisoryClass(){

		$result = $this->global_model->getRecords('enrolled_students', 'section_id', $this->input->post('section_id'));

		$data = [];
        foreach ($result as $value)
            {	            	
            	$action = "
                      <center>
                      	<button class='btn btn-default btn-xs btn-view'><span class='fa fa-fw fa-search text-primary' data-toggle='modal' data-target='#modal-view'></span></button>
                      	<button class='btn btn-default btn-xs btn-grades'><span class='fa fa-fw fa-line-chart text-primary' data-toggle='modal' data-target='#modal-grades'></span></button>
                      </center>";
            	$lrn = $value->students_info_lrn;
            	$student_info = $this->global_model->getRow('students_info', 'lrn', $lrn );
            	$value->full_name = $student_info->first_name.' '.$student_info->middle_name.' '.$student_info->last_name  ;
                $arr = array(
                    $lrn,
                    $value->full_name,
                    $action
                );
                $data[] = $arr;
            }

		echo json_encode($data);
	}

}
