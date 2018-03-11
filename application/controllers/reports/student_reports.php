<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student_reports extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('reports/reports');
	}
	public function index()
	{	
		$data = $this->parse->parsed();
		$data['active'] = 'reports/student_reports';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['strands'] = $this->global_model->getRecords('strands');
		$data['years'] = $this->global_model->getRecords('year_levels');
		$data['teachers'] = $this->global_model->getRecords('teachers');
        $this->parser->parse('reports/student_reports', $data);
	}

	public function search()
	{
		$data = $this->input->post();
		$arr = array();
		$criteria = array();

		foreach ($data as $key => $val) {
			if($val){
				if($key == 'lrn'){
					$arr['enrolled_students.students_info_lrn'] = $val;
				}
				else{
					$arr[$key] = $val;
				}
			}
		};

		foreach ($arr as $key => $val) {
			if($key == 'adviser'){
				$a_info = $this->global_model->getRows('advisory_class', array('employee_id' => $val));
				$arr['section_id'] = $a_info[0]->section_id;
				unset($arr['adviser']);
			}
		};

		foreach ($data as $key => $val) {
			if($val){
				if($key == 'lrn'){
					$criteria['LRN'] = $val;
				}
				if($key == 'year_level_id'){
					$criteria['Year Level'] = $this->reports->getYearLevel($val);
				}
				if($key == 'section_id'){
					$criteria['Section'] = $this->reports->getSection($val);
				}
				if($key == 'strand_code'){
					$criteria['Strand'] = $val;
				}
				if($key == 'adviser'){
					$a_info = $this->global_model->getRows('teachers', array('employee_id' => $val));
					$criteria['adviser'] = $a_info[0]->first_name.' '.$a_info[0]->last_name;
				}
				if($key == 'date_enrolled'){
					$criteria['Date Enrolled'] = $val;
				}
				if($key == 'age'){
					$criteria['Age'] = $val;
				}
				if($key == 'first_name'){
					$criteria['First Name'] = $val;
				}
				if($key == 'middle_name'){
					$criteria['Middle Name'] = $val;
				}
				if($key == 'last_name'){
					$criteria['Last Name'] = $val;
				}
				if($key == 'street'){
					$criteria['Street'] = $val;
				}
				if($key == 'barangay'){
					$criteria['Barangay'] = $val;
				}
				if($key == 'city'){
					$criteria['City'] = $val;
				}
				if($key == 'province'){
					$criteria['Province'] = $val;
				}
				if($key == 'religion'){
					$criteria['Religion'] = $val;
				}
			}
		};

		$report = $this->reports->getReports($arr);
		$rep_arr = array();
		foreach ($report as $key => $val) {
			foreach ($val as $k => $value) {
				if($k == 'academic_year_id'){
					$rep_arr[$key][$k] = $this->reports->getAcademicYear($value);
				}
				else if($k == 'year_level_id'){
					$rep_arr[$key]['year_level'] = $this->reports->getYearLevel($value);
				}
				else if($k == 'date_enrolled'){
					$date = substr($value,0,9);
					$rep_arr[$key][$k] = $date;
				}
				else{
					$rep_arr[$key][$k] = $value;
				}
			}
		};/*
		echo '<pre>';
		print_r($rep_arr);
		echo '<pre>';
		exit;*/

		$data = $this->parse->parsed();
		$data['active'] = 'reports/student_reports';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['criteria'] = $criteria;
		$data['result'] = $rep_arr;
		$this->parser->parse('reports/student_search', $data);
	}

	public function top_students(){

	$data = $this->parse->parsed();
    $d = array('section_id' => '1', 'semester' => 'First Semester', 'quarter' => 'First Quarter');
    $s_info = $this->global_model->getRow('sections', 'id', $d['section_id']);
    $curriculum = $this->global_model->getRows('curriculum', array('semester' => $d['semester'],'strand_code' => $s_info->strand_code, 'year_level_id' => $s_info->year_level_id));

    $subjects = array();
    foreach ($curriculum as $v) {
      array_push($subjects, $v->subject_code);
    }

    $e_students = $this->global_model->getRows('enrolled_students', array('section_id' => $d['section_id'], 'academic_year_id' => $this->session->academic_year));

    $stud = array();
    foreach ($e_students as $v) {
      array_push($stud, $v->students_info_lrn);
    }

    $a_grades = array();
    foreach ($stud as $v) {
      foreach ($subjects as $value) {
        $grades = $this->global_model->getRows('grades', array('lrn' => $v, 'semester' => $d['semester'], 'quarter' => $d['quarter'], 'subject_code' => $value, 'academic_year' => $this->session->academic_year) );
        if($grades && $grades[0]->grade > 74){
          $a_grades[$v][$value] = $grades[0]->grade;
        }
        else if($grades && $grades[0]->grade < 75){
          $a_grades[$v][$value] = $grades[0]->grade;
        }
        else{
          $a_grades[$v][$value] = null;          
        }
      }
      $subs = array();
      /*foreach ($grades as $key => $val) {
        $a_grades[$val->lrn][$val->subject_code] = $val->grade;
        array_push($subs, $val->subject_code);
      }*/
    }

    foreach ($a_grades as $k => $v) {
    	$ave = 0;
    	foreach ($v as $key => $val) {	
    		if($val){
    			$f = (float)$val;
    		}
    		else{
    			$f = (float)0;
    		}
    		$ave = ($ave + $f);
    	}
    	$stud_info = $this->global_model->getRow('students_info', 'lrn', $k);
    	$a_grades[$k]['full_name'] = $stud_info->first_name.' '.$stud_info->last_name;
	    $ave = $ave / count($v);
	   	$ave = number_format($ave,2);
	   	$a_grades[$k]['ave'] = $ave;
    }

    /*echo 'subjects';
    echo '<pre>';
    print_r($subjects);
    echo '<pre>';
    echo 'grades';
    echo '<pre>';
    print_r($a_grades);
    echo '<pre>';
    exit;*/

    
    /*$section_info = $this->global_model->getRow('sections', 'id', $this->session->advisory_class);
    if($section_info->year_level_id == 1){
      $section_info->class = $section_info->strand_code.' 11'.$section_info->name;
    }
    else{
      $section_info->class = $section_info->strand_code.' 12'.$section_info->name;      
    }*/

    $data['semester'] = $d['semester'];
    $data['quarter'] = $d['quarter'];

		$data = $this->parse->parsed();
		$data['active'] = 'reports/top_stuents';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['stud_grades'] = $a_grades;
		$data['criteria'] = $d;
		//$data['result'] = $rep_arr;
		$this->parser->parse('reports/top_students', $data);
	}

}
//lrn, first_name, middle_name, last_name, contact_number, birthdate, street, barangay, city, province
