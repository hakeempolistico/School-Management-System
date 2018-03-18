<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form137 extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'reports/form137';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

		$students = $this->global_model->getRecords('enrolled_students');

		foreach ($students as $v) {
			$s_info = $this->global_model->getRow('students_info', 'lrn', $v->students_info_lrn);
			$v->full_name = $s_info->first_name.' '.$s_info->last_name;
		}

		$data['students'] = $students;
    	$this->parser->parse('reports/form137_student', $data);
	}

	public function form(){
		$lrn = $this->input->post('lrn');

		$arr = array();
		
		$sy = $this->global_model->getRow('academic_years', 'id', $this->session->academic_year);
		$arr['sy'] = $sy->year_start.'-'.$sy->year_end;
		
		//GRADE LEVEL
		$s_info = $this->global_model->getRow('enrolled_students', 'students_info_lrn', $lrn);
		$gl = $this->global_model->getRow('sections', 'id', $s_info->section_id);
		$yl_info = $this->global_model->getRow('year_levels', 'id', $gl->year_level_id);
		$arr['grade_level'] = substr($yl_info->name,6,8);

		//SECTION
		$arr['section'] = $gl->name;

		//STUDENT NAME
		$info = $this->global_model->getRow('students_info', 'lrn', $lrn);
		$s_fullname = $info->first_name.' '.$info->last_name;

		//SUBJECT INFO
		$sub_info = $this->global_model->getRows('class_subjects', array('section_id' => $s_info->section_id, 'semester' => 'First Semester'));
		foreach ($sub_info as $v) {
			$i = $this->global_model->getRow('subjects', 'code', $v->subject_id);
			$v->subject_name = $i->name;
			$v->subject_type = $i->type;

			$g = $this->global_model->getRows('grades', array('lrn'=>$lrn, 'subject_code' => $v->subject_id, 'semester' =>'First Semester', 'quarter' => 'First Quarter', 'academic_year' => $this->session->academic_year));
			if($g){
				foreach ($g as $val) {
					if($g){
						$v->q1 = $val->grade;
					}
				}
			}
			else{
				$v->q1 = '-';
			}
			

			$g2 = $this->global_model->getRows('grades', array('lrn'=>$lrn, 'subject_code' => $v->subject_id, 'semester' => 'First Semester', 'quarter' => 'Second Quarter', 'academic_year' => $this->session->academic_year));
			if($g2){
				foreach ($g2 as $val) {
					if($g2){
						$v->q2 = $val->grade;
					}
				}
			}
			else{
				$v->q2 = '-';
			}

			if($g && $g2){
				$v->ave = ($v->q1 + $v->q2) / 2;
				if($v->ave > 74){
					$v->action_taken = 'PASSED';
				}else{
					$v->action_taken = 'FAILED';
				}
			}else{
				$v->ave = '-';
				$v->action_taken = null;
			}
			
		}

		//SUBJECT INFO 2
		$sub_info2 = $this->global_model->getRows('class_subjects', array('section_id' => $s_info->section_id, 'semester' => 'Second Semester'));
		foreach ($sub_info2 as $v) {
			$i = $this->global_model->getRow('subjects', 'code', $v->subject_id);
			$v->subject_name = $i->name;
			$v->subject_type = $i->type;

			$g = $this->global_model->getRows('grades', array('lrn'=>$lrn, 'subject_code' => $v->subject_id, 'semester' => 'Second Semester', 'quarter' => 'First Quarter', 'academic_year' => $this->session->academic_year));
			if($g){
				foreach ($g as $val) {
					if($g){
						$v->q1 = $val->grade;
					}
				}
			}
			else{
				$v->q1 = '-';
			}
			

			$g2 = $this->global_model->getRows('grades', array('lrn'=>$lrn, 'subject_code' => $v->subject_id, 'semester' => 'Second Semester', 'quarter' => 'Second Quarter', 'academic_year' => $this->session->academic_year));
			if($g2){
				foreach ($g2 as $val) {
					if($g2){
						$v->q2 = $val->grade;
					}
				}
			}
			else{
				$v->q2 = '-';
			}

			if($g && $g2){
				$v->ave = ($v->q1 + $v->q2) / 2;
				if($v->ave > 74){
					$v->action_taken = 'PASSED';
				}else{
					$v->action_taken = 'FAILED';
				}
			}else{
				$v->ave = '-';
				$v->action_taken = null;
			}
			
		}


		/*echo '<pre>';
		print_r($stud_info);
		echo '<pre>'; exit;*/

		$data = $this->parse->parsed();

		$data['s_record'] = $arr;
		$data['sub_info'] = $sub_info;
		$data['sub_info2'] = $sub_info2;

		//LEARNERS INFO
		$data['last_name'] = $info->last_name;
		$data['first_name'] = $info->first_name;
		$data['middle_name'] = $info->middle_name;
		$data['lrn'] = $info->lrn;
		$data['birth_date'] = $info->birth_date;
		$data['sex'] = $info->sex;
		$data['admission'] = substr($info->date_registered,0,10);

		$data['active'] = 'reports/form137';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('reports/form137', $data);
	}

}
