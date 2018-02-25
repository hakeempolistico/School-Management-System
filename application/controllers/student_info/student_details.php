<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student_details extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('global_model');
	    $this->load->model('student_information/student_details_model');
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'student_info/student_details';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

		$arr = $this->global_model->getRows('enrolled_students', array('academic_year_id'=> $this->session->academic_year));

		foreach ($arr as $val) {
		    $val->full_name = $this->student_details_model->getStudentInfo($val->students_info_lrn)[0]->first_name.' '.
		    $this->student_details_model->getStudentInfo($val->students_info_lrn)[0]->middle_name.' '.
		    $this->student_details_model->getStudentInfo($val->students_info_lrn)[0]->last_name;
		    $val->strand = $this->student_details_model->getClass($val->section_id)[0]->strand_code;
		    $val->section = $this->student_details_model->getClass($val->section_id)[0]->name;
		    if($this->student_details_model->getClass($val->section_id)[0]->year_level_id == 1){
		    	$val->grade = 'Grade 11';
		    }
		    else{
		    	$val->grade = 'Grade 12';
		    };
		}

		$data['student_details'] = $arr;

    	$this->parser->parse('student_info/student_details', $data);
	}

	public function getStudentInfo(){
		$arr = $this->global_model->getRows('students_info', $this->input->post());
		foreach ($arr as $key => $val) {
			$val->date_registered = date("F j, Y", strtotime($val->date_registered)); 
			$val->birth_date = date("F j, Y", strtotime($val->birth_date)); 
		}
		echo json_encode($arr);
	}

	public function getGuardianInfo(){
		echo json_encode($this->global_model->getRows('guardians', $this->input->post()));
	}

	public function getSched(){
		$lastLrn = $this->input->post('lrn');

		$nameRow = $this->global_model->getRow('students_info', 'lrn', $lastLrn);
		$data['name'] = $nameRow->first_name.' '.$nameRow->middle_name.' '.$nameRow->last_name;  //NAME
		$data['sex'] = strtoupper($nameRow->sex);  //SEX

		$enrolledRow = $this->global_model->getRow('enrolled_students', 'students_info_lrn', $lastLrn);
		$data['students_info_lrn'] = $enrolledRow->students_info_lrn; //LRN
		$data['note'] = $enrolledRow->note;
		if(!$enrolledRow->note){
			$data['note'] = 'N/A';
		}
		$section_id = $enrolledRow->section_id;
        $academic_year_id = $enrolledRow->academic_year_id;
        $db_date_enrolled = $enrolledRow->date_enrolled;
        $dateTime = explode(" ", $db_date_enrolled);
        $data['date_enrolled'] = $dateTime[0]; //DATE_ENROLLED

        $sectionRow = $this->global_model->getRow('sections', 'id', $section_id);
        $data['strand_code'] = $sectionRow->strand_code; //STRAND
        $year_level_id = $sectionRow->year_level_id;
        $sec_name = $sectionRow->name;


        if ($year_level_id == 1)
	    {
	        $year_level = '11';  //YEAR_LEVEL 11
	    } else 
	    {
	        $year_level = '12';  //YEAR_LEVEL 12
	    }

	    $data['section_name'] = $year_level.'-'.$sec_name; //SECTION YEAR AND NAME

	    $academicYearRow = $this->global_model->getRow('academic_years', 'id', $academic_year_id);
	    $data['academic_year'] = $academicYearRow->year_start.'-'.$academicYearRow->year_end;  //ACADEMIC_YEAR

	    $schedulesTable = $this->global_model->getRows('schedules', array('section_id' => $section_id, 'academic_year' => $this->session->academic_year)); 


	    $data['arr'] =[];

		$ttt = [];
	    foreach ($schedulesTable as $row) 
	    {
	    	$subject_code = $row->subject_code; //SUBJECT_CODE
	    	$subject_name = '';

	    	$subjectRow =$this->global_model->getRow('subjects', 'code', $subject_code);

			if($subjectRow){
				
	    		$subject_name = $subjectRow->name; //SUBJECT_NAME
			}
			if(substr($row->time_start,3,2)=='00'){
				$row->time_start = substr($row->time_start,0,2);
				if(substr($row->time_start,0,1)=='0'){
					$row->time_start = substr($row->time_start,1,1);
				}
			};
			if(substr($row->time_end,3,2)=='00'){
				$row->time_end = substr($row->time_end,0,2);
				if(substr($row->time_end,0,1)=='0'){
					$row->time_end = substr($row->time_end,1,1);
				}
			};

	    	$time = $row->time_start.'-'.$row->time_end; //TIME
	    	$room = $row->room_id; //ROOM
	    	$day = $row->day;

	    	if($subject_code == 'BREAK' || $subject_code == 'VACANT' ){	

	          } 
	        else{
	        	if ($day == 'Monday'){
	              $sched_day = 'M';  //SCHED_DAY M
	            } else if($day == 'Tuesday'){
	              $sched_day = 'T';  //SCHED_DAY T
	            } else if($day == 'Wednesday'){
	              $sched_day = 'W';  //SCHED_DAY W
	            } else if($day == 'Thursday'){
	              $sched_day = 'Th';  //SCHED_DAY TH
	            } else if($day == 'Friday'){
	              $sched_day = 'F';  //SCHED_DAY F
	            }
		    	$sched = array(
		    		$subject_code,
		    		$subject_name,
		    		$time,
		    		$sched_day,
		    		$room
		    	);
		    	/*echo '<pre>';
		    	print_r($sched);
		    	echo '<pre>';*/

		    	if($data['arr']){
		    		foreach ($data['arr'] as $key => $value) {
			    		if($subject_code == $value[0]){
			    			$data['arr'][$key][3] = $sched_day.' / '.$value[3];
			    			$data['arr'][$key][2] = $time.' / '.$value[2];
			    			$data['arr'][$key][4] = $room.' / '.$value[4];

			    			$ttt[] = $subject_code;			    			
			    			break;
			    		}
			    		else {
			    			$data['arr'][] = $sched;	
			    		}
		    		}
		    	}
		    	else{
		    		$data['arr'][] = $sched;	
		    	}
	        }
	    }

	    foreach ($data['arr'] as $key => $value) {
	    	$allTime = explode(" / ",$value[2]);
	    	$allRoom = explode(" / ",$value[4]);
	    	$allDay = explode(" / ",$value[3]);
	    	/*if(count(array_unique($allTime) == 1)){
	    		$data['arr'][$key][2] = $allTime[0];
	    	};*/
	    	if(count(array_unique($allRoom) == 1)){
	    		$data['arr'][$key][4] = $allRoom[0];
	    	}
	    	if(count($allDay)==1){
	    		unset($data['arr'][$key]);
	    	}
	    };

	    foreach ($data['arr'] as $key => $value) {
	    	$allTime = explode(" / ",$value[2]);
	    	$allDay = explode(" / ",$value[3]);
	    	$try = array();
	    	$try2 = array();
	    	foreach ($allDay as $k => $val) {
	    		if($val == 'F'){
					array_unshift($try2, $val);
					array_unshift($try, $allTime[$k]);
	    		}
	    	}
	    	foreach ($allDay as $k => $val) {
	    		if($val == 'Th'){
					array_unshift($try2, $val);
					array_unshift($try, $allTime[$k]);
	    		}
	    	}
	    	foreach ($allDay as $k => $val) {
	    		if($val == 'W'){
					array_unshift($try2, $val);
					array_unshift($try, $allTime[$k]);
	    		}
	    	}
	    	foreach ($allDay as $k => $val) {
	    		if($val == 'T'){
					array_unshift($try2, $val);
					array_unshift($try, $allTime[$k]);
	    		}
	    	}
	    	foreach ($allDay as $k => $val) {
	    		if($val == 'M'){
					array_unshift($try2, $val);
					array_unshift($try, $allTime[$k]);
	    		}
	    	}
	    	$data['arr'][$key][2] = implode(" / ",$try);
	    	$data['arr'][$key][3] = implode(" / ",$try2);
	    };

	    echo json_encode($data['arr']);
	}

}
