<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class advisory_class extends CI_Controller {
  public function __construct()
  {
      parent::__construct();
      $this->sms_session->checkSession();
      $this->load->model('advisory_class/advisory_class_model');
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
                        <button class='btn btn-default btn-xs btn-view' data-toggle='modal' data-target='#modal-view'><span class='fa fa-fw fa-search text-primary' ></span></button>
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
    $res = $this->advisory_class_model->getGrades('grades', $data);
    $arr = array();
    foreach ($res as $val) {
      $info = $this->global_model->getRow('students_info', 'lrn', $val->lrn);
      $full_name = $info->first_name.' '.$info->last_name;
      /*if($value->quarter == 'First Quarter'){
        $arr[$value->subject_code]['first_quarter'] = $value->grade;  
      }
      else if($value->quarter == 'Second Quarter'){
        $arr[$value->subject_code]['second_quarter'] = $value->grade;  
      }*/
      $arr[$full_name][$val->subject_code] = $val->grade;
    }
  
    echo json_encode($arr);
  }
  public function getSubjects(){
    $data = $this->input->post();
    $section_id = $data['section_id'];
    $semester = $data['semester'];
    $strand_code = $this->global_model->getRow('sections', 'id', $section_id)->strand_code;
    $year_level = $this->global_model->getRow('sections', 'id', $section_id)->year_level_id;
    $res = $this->global_model->getRows('curriculum', array('strand_code' => $strand_code, 'year_level_id' => $year_level));
    $arr = array();
    foreach ($res as $val) {
      array_push($arr,$val->subject_code);
    }
  
    echo json_encode($arr);
  }
  public function grades(){
    $data = $this->parse->parsed();
    $d = $this->input->post();
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
          $a_grades[$v][$value] = '<center><span class="badge bg-green">'.$grades[0]->grade.'</span></center>';
        }
        else if($grades && $grades[0]->grade < 75){
          $a_grades[$v][$value] = '<center><span class="badge bg-red">'.$grades[0]->grade.'</span></center>';
        }
        else{
          $a_grades[$v][$value] = '<center>--</center>';          
        }
      }
      $subs = array();
      /*foreach ($grades as $key => $val) {
        $a_grades[$val->lrn][$val->subject_code] = $val->grade;
        array_push($subs, $val->subject_code);
      }*/
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

    
    $section_info = $this->global_model->getRow('sections', 'id', $this->session->advisory_class);
    if($section_info->year_level_id == 1){
      $section_info->class = $section_info->strand_code.' 11'.$section_info->name;
    }
    else{
      $section_info->class = $section_info->strand_code.' 12'.$section_info->name;      
    }
    $data['semester'] = $d['semester'];
    $data['quarter'] = $d['quarter'];

    $data['subjects'] = $subjects;
    $data['grades'] = $a_grades;
    $data['class'] = $section_info->class;
    $data['active'] = 'advisory/advisory_class';
    $data['template'] = $this->load->view('template/sidenav', $data, TRUE);
    $this->parser->parse('advisory/grades', $data);
  }
}