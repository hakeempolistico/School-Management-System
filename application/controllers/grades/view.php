<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view extends CI_Controller {

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

		$data['active'] = 'grades/view';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('grades/view', $data);
	}
	public function getClassStudents()
	{
		$data = $this->input->post();
		$result = $this->global_model->getRows('enrolled_students', array('section_id' => $data['section_id'] ) );
		foreach ($result as $val) {
			$d = $this->global_model->getRow('students_info', 'lrn', $val->students_info_lrn);
			$arr1 =  array('lrn' => $val->students_info_lrn, 'semester' => $data['semester'], 'quarter' => 'First Quarter', 'subject_code' => $data['subject_code']);
			$grade1 = $this->global_model->getRows('grades', $arr1);
			if($grade1){
				$val->first_grade = $grade1['0']->grade;
			}
			$arr2 =  array('lrn' => $val->students_info_lrn, 'semester' => $data['semester'], 'quarter' => 'Second Quarter', 'subject_code' => $data['subject_code']);
			$grade2 = $this->global_model->getRows('grades', $arr2);
			if($grade2){
				$val->second_grade = $grade2['0']->grade;
			}
			$val->full_name = $d->first_name.' '.$d->last_name;
		}
		echo json_encode($result);
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
		$result = $this->global_model->getRows('enrolled_students', array('section_id' => $post['class'], 'academic_year_id' => $this->session->academic_year ) );
		foreach ($result as $val) {
			$d = $this->global_model->getRow('students_info', 'lrn', $val->students_info_lrn);
			$arr =  array('lrn' => $val->students_info_lrn, 'semester' => $post['semester'], 'quarter' => 'First Quarter', 'subject_code' => $post['subject'], 'academic_year' => $this->session->academic_year);
			$arr2 =  array('lrn' => $val->students_info_lrn, 'semester' => $post['semester'], 'quarter' => 'Second Quarter', 'subject_code' => $post['subject'], 'academic_year' => $this->session->academic_year);
			$grade1q = $this->global_model->getRows('grades', $arr);
			$grade2q = $this->global_model->getRows('grades', $arr2);

			if($grade1q && $grade2q){
				$val->ave = ($grade1q['0']->grade + $grade2q['0']->grade) / 2;
				if($val->ave > 74.0){
					$val->ave = '<center><span class="badge bg-green">'.$val->ave.'</span></center>';
				}
				else{
					$val->ave = '<center><span class="badge bg-red">'.$val->ave.'</span></center>';
				}
			}
			else{
				$val->ave = '<center>--</center>';
			}
			if($grade1q){
				$int = $grade1q['0']->grade;

				if($int > 74.0 ){
					$val->grade1q = '<center><span class="badge bg-green">'.$grade1q['0']->grade.'</span></center>';
				}
				else{
					$val->grade1q = '<center><span class="badge bg-red">'.$grade1q['0']->grade.'</span></center>';
				}
			}
			else{
				$val->grade1q = '<center>--</center>';
			}
			if($grade2q){
				$int = $grade2q['0']->grade;

				if($int > 74.0 ){
					$val->grade2q = '<center><span class="badge bg-green">'.$grade2q['0']->grade.'</span></center>';
				}
				else if($int < 75.0 ){
					$val->grade2q = '<center><span class="badge bg-red">'.$grade2q['0']->grade.'</span></center>';
				}
			}
			else{
				$val->grade2q = '<center>--</center>';
			}
			$val->full_name = $d->first_name.' '.$d->last_name;
		}
		/*echo '<pre>';
		print_r($result);
		echo '<pre>'; exit;*/

		$data = $this->parse->parsed();

		$data['grades'] = $result;
		$data['data'] = $post;
		$data['active'] = 'grades/view';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('grades/vclass_subject', $data);
	}
}
