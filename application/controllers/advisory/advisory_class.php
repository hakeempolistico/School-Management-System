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

    $section_info = $this->global_model->getRow('sections', 'id', $this->session->advisory_class);
    if($section_info->year_level_id == 1){
      $section_info->class = $section_info->strand_code.' 11'.$section_info->name;
    }
    else{
      $section_info->class = $section_info->strand_code.' 12'.$section_info->name;      
    }
    $data['class'] = $section_info->class;

		$data['active'] = 'advisory/advisory_class';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);


    	$this->parser->parse('advisory/advisory_class', $data);
	}

  public function getAdvisoryClass(){

    $result = $this->global_model->getRows('enrolled_students', array('section_id' => $this->session->advisory_class));

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
                $data['data'][] = $arr;
            }

    echo json_encode($data);
  }

	public function getGrades(){

		$data = $this->input->post();
    $res = $this->global_model->getRows('grades', $data);
    $arr = array();
    foreach ($res as $key => $value) {
      if($value->quarter == 'First Quarter'){
        $arr[$value->subject_code]['first_quarter'] = $value->grade;  
      }
      else if($value->quarter == 'Second Quarter'){
        $arr[$value->subject_code]['second_quarter'] = $value->grade;  
      }
      
    }
	
		echo json_encode($arr);
	}

}
