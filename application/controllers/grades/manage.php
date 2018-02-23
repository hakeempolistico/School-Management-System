<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    // $this->load->model('dashboard_model');
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['subjects'] = $this->global_model->getActiveRecords('subjects');

		$data['active'] = 'grades/manage';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('grades/manage', $data);
	}

	public function class_subject(){
		/*$data = $this->input->post();
		echo '<pre>';
		print_r($this->input->post());
		echo '<pre>';*/

		$post = $this->input->post();
		$s_info = $this->global_model->getRow('sections', 'id', $post['class']);
		if($s_info->year_level_id == '1'){
			$s_info->year_level_id = '11';
		} else{
			$s_info->year_level_id = '12';
		}
		$post['section_info'] = $s_info->strand_code.'-'.$s_info->year_level_id.' '.$s_info->name;
		$result = $this->global_model->getRows('enrolled_students', array('section_id' => $post['class'] ) );
		foreach ($result as $val) {
			$d = $this->global_model->getRow('students_info', 'lrn', $val->students_info_lrn);
			$arr =  array('lrn' => $val->students_info_lrn, 'semester' => $post['semester'], 'quarter' => $post['quarter'], 'subject_code' => $post['subject']);
			$grade = $this->global_model->getRows('grades', $arr);
			if($grade){
				$int = $grade['0']->grade;
				$val->action = '<center><button class="btn btn-default btn-xs"><span class="fa fa-fw fa-ban text-danger" disabled></span></button></center>';

				if($int > 74.0 ){
					$val->grade = '<center><span class="badge bg-green">'.$grade['0']->grade.'</span></center>';
					$val->status = '<center><span class="badge bg-green">passed</span></center>';
				}
				else if($int < 75.0 ){
					$val->grade = '<center><span class="badge bg-red">'.$grade['0']->grade.'</span></center>';
					$val->status = '<center><span class="badge bg-red">failed</span></center>';
				}
			}
			else{
				$val->action = '<center><button class="btn btn-default btn-xs btn-input"><span class="fa fa-fw fa-check text-success"></span></button></center>';
			}

			$val->full_name = $d->first_name.' '.$d->last_name;
		}
		/*echo '<pre>';
		print_r($result);
		echo '<pre>'; exit;*/

		$data = $this->parse->parsed();

		$data['grades'] = $result;
		$data['data'] = $post;
		$data['active'] = 'grades/manage';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('grades/class_subject', $data);
	}

	public function getClass()
	{
		$data = $this->input->post();
		$result = $this->global_model->getRows('class_subjects', $data );
		foreach ($result as $val) {
			$d = $this->global_model->getRow('sections', 'id', $val->section_id);
			if($d->year_level_id=='1'){
				$d->year_level_id = '11';
			}
			else{
				$d->year_level_id = '12';
			}
			$val->class = $d->strand_code.'-'.$d->year_level_id.$d->name;
		}
		echo json_encode($result);
	}
	public function getSubjects()
	{
		$data = $this->input->post();
		$result = $this->global_model->getRows('class_subjects', $data );
		$s_codes = array();
		foreach ($result as $val) {
			array_push($s_codes,$val->subject_id);
		}
		echo json_encode(array_unique($s_codes));
	}
	public function getClassStudents()
	{
		$data = $this->input->post();
		$result = $this->global_model->getRows('enrolled_students', array('section_id' => $data['section_id'] ) );
		foreach ($result as $val) {
			$d = $this->global_model->getRow('students_info', 'lrn', $val->students_info_lrn);
			$arr =  array('lrn' => $val->students_info_lrn, 'semester' => $data['semester'], 'quarter' => $data['quarter'], 'subject_code' => $data['subject_code']);
			$grade = $this->global_model->getRows('grades', $arr);
			if($grade){
				$val->grade = $grade['0']->grade;
			}
			$val->full_name = $d->first_name.' '.$d->last_name;
		}
		echo json_encode($result);
	}
	public function addGrade()
	{
		$data = $this->input->post();
		$result = $this->global_model->insert('grades', $data);
		echo json_encode($result);
	}

}
