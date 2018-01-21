<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('dashboard_model');
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['teachersCount'] = $this->global_model->count('teachers');
		$data['roomsCount'] = $this->global_model->count('rooms');
		$data['subjectsCount'] = $this->global_model->count('subjects');
		$data['sectionsCount'] = $this->global_model->count('sections');
		$data['enrolledStudentsCount'] = $this->global_model->count('enrolled_students');
		$data['students_enrolled'] = $this->dashboard_model->getStudents();
		foreach ($data['students_enrolled'] as $key => $val) {
			$code = $this->dashboard_model->getStrand($val->section_id);
			$data['students_enrolled'][$key]->strand_name = $code;
		};

		//GET GRADE 12 PERCENTAGE
		$graduatingCount = 0;
		$data['enrolled_students'] = $this->global_model->getRecords('enrolled_students');
		foreach ($data['enrolled_students'] as $key => $val) {
			$val->grade = $this->global_model->getRow('sections', 'id', $val->section_id)->year_level_id;
			if($this->global_model->getRow('sections', 'id', $val->section_id)->year_level_id == '2'){
				$graduatingCount = $graduatingCount + 1;
			}
		}
		$data['graduatingPercent'] = round(($graduatingCount / $data['enrolledStudentsCount']) * 100);

		//GET TEACHERS ACTIVE PERCENTAGE
		$teachers = $this->global_model->getRecords('teachers');
		$activeTeacher = $this->global_model->getActiveRecords('teachers');
		$data['activeTeachersPercent'] = round((count($activeTeacher) / count($teachers)) * 100);

		//GET ROOMS ACTIVE PERCENTAGE
		$rooms = $this->global_model->getRecords('rooms');
		$activeRooms = $this->global_model->getActiveRecords('rooms');
		$data['activeRoomsPercent'] = round((count($activeRooms) / count($rooms)) * 100);


		//GET CLASS ACTIVE PERCENTAGE
		$classes = $this->global_model->getRecords('sections');
		$activeClasses = $this->global_model->getActiveRecords('sections');
		$data['activeClassesPercent'] = round((count($activeClasses) / count($classes)) * 100);

		//GET STRAND STATUS 
		$activeStrands = $this->global_model->getActiveRecords('strands');
		$e_students = $data['enrolled_students'];
		foreach ($activeStrands as $k => $val) {
			$sections = $this->global_model->getRows('sections', array('strand_code' => $val->code));
			$stud_count = 0;
			foreach ($e_students as $key => $value) {
				if($this->global_model->getRow('sections', 'id' , $value->section_id)->strand_code == $val->code){
					$stud_count = $stud_count + 1;
				}
			}
			$val->stud_count = $stud_count;
			$count = count($e_students);
			$val->percent = round(($stud_count / $count) * 100);
			$stud_count = 0;

			if($val->code == 'STEM'){
				$val->color='green';
			}
			if($val->code == 'ABM'){
				$val->color='teal';
			}
			if($val->code == 'HUMSS'){
				$val->color='maroon';
			}
			if($val->code == 'GAS'){
				$val->color='aqua';
			}
			if($val->code == 'TVL-AS'){
				$val->color='purple';
			}
			if($val->code == 'TVL-HE'){
				$val->color='orange';
			}
		}
		$data['strandStatus'] = $activeStrands;
		/*echo '<pre>';
		print_r($activeStrands);
		echo '<pre>'; exit;*/

		$data['active'] = 'dashboard';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['title'] = 'Strands';
		$data['header'] = $this->load->view('template/header', $data, TRUE);

    	$this->parser->parse('enrollment/dashboard', $data);
	}

}
