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
		//$jjjj = $this->global_model->getRecords('registered_students');
		//$jjjk = $jjjj['0']->lrn;

		//print_r($jjjk); exit;
		$this->parser->parse('enrollment/search', $data);
	}

	public function strands()
	{
		$data = $this->parse->parsed();
		//$jjjj = $this->global_model->getRecords('registered_students');
		//$jjjk = $jjjj['0']->lrn;

		//print_r($jjjk); exit;
		$this->parser->parse('enrollment/strand_selection', $data);
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

	public function submit()
	{
		$year = date('Y');
		$academic_year = $this->enroll_student_model->getAcademicYearId('academic_years', 'year_start', $year, 'id');

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

		redirect('enrollment/enroll_student/after_enroll');
	}

	public function enroll()
	{
		
		$data = $this->parse->parsed();
		$data['lrn'] =  $this->input->post('lrn');
		$this->parser->parse('enrollment/page2', $data);
	}

	public function after_enroll()
	{
		$data = $this->parse->parsed();
		$data['lastLrn'] = json_encode($this->enroll_student_model->getLastRow('enrolled_students'));
		$this->parser->parse('enrollment/after_enroll', $data);
	}

	public function reg_form()
	{
		$lastLrn = $this->input->post('value');
		$after_enroll = array();

		$nameRow = $this->global_model->getRow('students_info', 'lrn', $lastLrn);
		$after_enroll['name'] = $nameRow->first_name.' '.$nameRow->middle_name.' '.$nameRow->last_name;  //NAME
		$after_enroll['sex'] = strtoupper($nameRow->sex);  //SEX

		$enrolledRow = $this->global_model->getRow('enrolled_students', 'students_info_lrn', $lastLrn);
		$after_enroll['students_info_lrn'] = $enrolledRow->students_info_lrn; //LRN
		$note = $enrolledRow->note;
		$section_id = $enrolledRow->section_id;
        $academic_year_id = $enrolledRow->academic_year_id;
        $db_date_enrolled = $enrolledRow->date_enrolled;
        $dateTime = explode(" ", $db_date_enrolled);
        $after_enroll['date_enrolled'] = $dateTime[0]; //DATE_ENROLLED

        $sectionRow = $this->global_model->getRow('sections', 'id', $section_id);
        $after_enroll['strand_code'] = $sectionRow->strand_code; //STRAND
        $year_level_id = $sectionRow->year_level_id;

        if ($year_level_id == 1)
	    {
	        $after_enroll['year_level'] = '11';  //YEAR_LEVEL 11
	    } else 
	    {
	        $after_enroll['year_level'] = '12';  //YEAR_LEVEL 12
	    }

	    $academicYearRow = $this->global_model->getRow('academic_years', 'id', $academic_year_id);
	    $after_enroll['academic_year'] = $academicYearRow->year_start.'-'.$academicYearRow->year_end;  //ACADEMIC_YEAR

	    $schedulesTable = $this->enroll_student_model->getMultRows('schedules', 'section_id', $section_id); 


	    $arr =[];
	    foreach ($schedulesTable as $row) 
	    {
	    	$subject_code = $row->subject_code; //SUBJECT_CODE
	    	$subject_name = '';

	    	$subjectRow =$this->global_model->getRow('subjects', 'code', $subject_code);

			if($subjectRow){
				
	    		$subject_name = $subjectRow->name; //SUBJECT_NAME
			}

	    	$time = $row->time_start.'-'.$row->time_end; //TIME
	    	$room = $row->room_id; //ROOM
	    	$day = $row->day;

	    	if($subject_code == 'BREAK'){
	            return;
	          } else if($subject_code == 'VACANT'){
	            return;
	          }

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

	    	$arr[] = $sched;
	    }


		echo '<pre>'; 
		print_r($arr);
		echo '<pre>'; 
		exit;
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
