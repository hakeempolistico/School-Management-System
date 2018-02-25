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
		$data['active'] = 'enrollment/enroll_student';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$this->parser->parse('enrollment/search', $data);
	}
	
	public function strands()
	{
		$data = $this->parse->parsed();
		//$jjjj = $this->global_model->getRecords('registered_students');
		//$jjjk = $jjjj['0']->lrn;

		//print_r($jjjk); exit;
		$data['active'] = 'enrollment/enroll_student';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$this->parser->parse('enrollment/strand_selection', $data);
	}

	public function getStrands()
	{
		$grade_requirement = $this->input->post('grade_requirement');
		$status = $this->input->post('status');

		$records = $this->enroll_student_model->getStrands('strands', 'grade_requirement', $grade_requirement, 'status', $status);

		$data = [];
		// print_r($records);
		// exit;
		foreach ($records as $record) 
		{
			$strand_code = $record->code;  
			$strand_name = $record->name;

			$arr = array(
				'strand_code' => $strand_code,
				'strand_name' => $strand_name
			);

			$data[] = $arr;

		}

		echo json_encode($data);
	}

	public function getSectionTable()
	{
		$strand = $this->input->post('strand');
		$year = $this->input->post('year_level_id');

		$records = $this->enroll_student_model->getSections('sections', 'strand_code', $strand, 'year_level_id', $year);

		$data = [];
		foreach ($records as $record) 
		{
			$id = $record->id;
			$strand_code = $record->strand_code;  
			$year_level_id = $record->year_level_id;
			$name = $record->name;
			$capacity = $record->capacity;


			$countRows = $this->global_model->count('enrolled_students', 'section_id', $id);

			$currentCapacity = $countRows.'/'.$capacity;

			if ($year_level_id == 1){
				$year_level_id = 11;
			} else {
				$year_level_id = 12;
			}

			if ($capacity != $countRows){
				$status = '<center><span class="badge bg-light-blue">Open</span></center>';
			} else {
				$status = '<center><span class="badge bg-red">Full</span></center>';
			}

			$section = $strand_code.$year_level_id.$name;

			$arr = array(
				'',
				$id,
				$section,
				$currentCapacity,
				$status
				);

			$data[] = $arr;

		}

		echo json_encode($data);
	}

	public function populateTable()
	{
		$registeredStudents = $this->global_model->getRecords('registered_students');

		$data = [];
		foreach ($registeredStudents as $registeredStudents) 
		{
			$lrn = $registeredStudents->students_info_lrn;
			$id = $registeredStudents->id;

			$url = base_url('enrollment/enroll_student/enroll');

			$action = '<form method="post" action="'.$url.'"><input type="hidden" name="lrn" value="'.$lrn.'"><button type="submit" class="btn btn-block btn-info btn-flat btn-xs buttonView" style="max-width: 100px; display:block;margin: auto;">Enroll</button></form>'; 

			$name = $this->global_model->getRow('students_info', 'lrn', $lrn);

			$fullName = $name->first_name.' '.$name->last_name;


			$dateRegistered = $registeredStudents->date_registered;
			$explodedDateRegistered = explode(" ", $dateRegistered);
			$explodedDate = explode("-", $explodedDateRegistered[0]);
			$y = $explodedDate[0];
			$m = $explodedDate[1];
			$d = $explodedDate[2];
			$newDate = $m.'-'.$d.'-'.$y;
			
			$arr = array(
		        $lrn,
		        $fullName,
		        $newDate,
		        $action
		    );

            $data['data'][] = $arr;
		}

		echo json_encode($data);
	}

	public function populateTable2()
	{
		$enrolledStudents = $this->global_model->getRows('enrolled_students', array('academic_year_id' => $this->session->academic_year));

		$data = [];
		foreach ($enrolledStudents as $enrolledStudents) 
		{
			$lrn = $enrolledStudents->students_info_lrn;
			$id = $enrolledStudents->id;


			$name = $this->global_model->getRow('students_info', 'lrn', $lrn);

			$fullName = $name->first_name.' '.$name->last_name;

			$class = $this->global_model->getRow('sections', 'id', $enrolledStudents->section_id);
			$c_strand = $class->strand_code;
			if($class->year_level_id == 1){
				$c_grade = 'Grade 11';
			}
			else{
				$c_grade = 'Grade 12';
			}
			$c_section = $class->name;


			$dateEnrolled = $enrolledStudents->date_enrolled;
			$explodedDateEnrolled = explode(" ", $dateEnrolled);
			$explodedDate = explode("-", $explodedDateEnrolled[0]);
			$y = $explodedDate[0];
			$m = $explodedDate[1];
			$d = $explodedDate[2];
			$newDate = $m.'-'.$d.'-'.$y;
			
			$arr = array(
		        $lrn,
		        $fullName,
				$c_strand,
				$c_grade,
				$c_section,
		        $newDate
		    );

            $data['data'][] = $arr;
		}

		echo json_encode($data);
	}

	public function submit()
	{
		$year = date('Y');
		$academic_year = $this->enroll_student_model->getAcademicYearId('academic_years', 'year_start', $year, 'id');
		$strand_code = $this->input->post('strand');

		foreach ($academic_year as $val) {
			$academic_year_id = $val->id;
		}

		$students_info_lrn = $this->input->post('students_info_lrn');
		$enrollInfo = array(
			'id' => '',
			'students_info_lrn' => $students_info_lrn,
			'note' => $this->input->post('note'),
			'section_id' => $this->input->post('section_id'),
			'academic_year_id' => $academic_year_id
			);


		$this->global_model->insert('enrolled_students', $enrollInfo);
		$this->global_model->delete('registered_students', 'students_info_lrn', $students_info_lrn);

		$reqs = $this->input->post('requirements');

		foreach ($reqs as $req) 
		{
			$reqInfo = array(
				'id' => '',
				'enrolled_student_lrn' => $students_info_lrn,
				'requirement' => $req
			);

			$this->global_model->insert('requirements', $reqInfo);

		}

		$this->audit_trail->set('Enrollment', 'Enroll Student', 'enrolled', 'Enrolled '.$students_info_lrn.' to '.$strand_code);
		redirect('enrollment/enroll_student/after_enroll');
	}

	public function enroll()
	{
		
		$data = $this->parse->parsed();
		$data['active'] = 'enrollment/enroll_student';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['lrn'] =  $this->input->post('lrn');
		$this->parser->parse('enrollment/page2', $data);
	}

	public function after_enroll()
	{
		$data = $this->parse->parsed();
		$lastLrn = $this->enroll_student_model->getLastRow('enrolled_students');

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


	    //SCHEDULE
	    $schedulesTable = $this->enroll_student_model->getMultRows('schedules', 'section_id', $section_id); 

	    $arr = array();
	    foreach ($schedulesTable as $key => $val) {
	    	if(!isset($arr[$val->subject_code]['time'])){
	    		$arr[$val->subject_code]['time'] = $val->time_start.'-'.$val->time_end; 
	    	}else{
	    		$arr[$val->subject_code]['time'] = $arr[$val->subject_code]['time'].'/'.$val->time_start.'-'.$val->time_end; 
	    	}

	    	if(!isset($arr[$val->subject_code]['day'])){
	    		$arr[$val->subject_code]['day'] = $val->day; 
	    	}else{
	    		$arr[$val->subject_code]['day'] = $arr[$val->subject_code]['day'].'/'.$val->day; 
	    	}

	    	if(!isset($arr[$val->subject_code]['room_id'])){
	    		$arr[$val->subject_code]['room_id'] = $val->room_id; 
	    	}else{
	    		$arr[$val->subject_code]['room_id'] = $arr[$val->subject_code]['room_id'].'/'.$val->room_id; 
	    	}

	    	
	    	$arr[$val->subject_code]['subject_code'] = $val->subject_code;
	    	$arr[$val->subject_code]['subject_name'] = $this->global_model->getRow('subjects', 'code', $val->subject_code)->name;
	    	
	    }

	    foreach ($arr as $key => $val) {
	    	$arr_time = explode("/",$val['time']);
	    	$arr_room = explode("/",$val['room_id']);
	    	if (count(array_unique($arr_time)) <= 1) {
	    		$arr[$key]['time'] = $arr_time[0];
	    	}	
	    	if (count(array_unique($arr_room)) <= 1) {
	    		$arr[$key]['room_id'] = $arr_room[0];
	    	}	
		}

	    $data['schedules'] = $arr;

	   
	    $data['active'] = 'enrollment/enroll_student';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$this->parser->parse('enrollment/after_enroll', $data);
	}

	

	public function ajaxRowUrl()
	{
		$table = $this->input->post('table');
		$set = $this->input->post('set');
		$value = $this->input->post('value');
		$records = json_encode($this->enroll_student_model->getMultRows($table, $set, $value));
		echo $records;
	}

}

?>
