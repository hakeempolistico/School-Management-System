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
			$lrn = $registeredStudents->lrn;
			$id = $registeredStudents->id;

			$url = base_url('enrollment/enroll_student/enroll');

			$action = '<form method="post" action="'.$url.'"><input type="hidden" name="lrn" value="'.$lrn.'"><button type="submit" class="btn btn-block btn-info btn-flat btn-xs buttonView" style="max-width: 100px; display:block;margin: auto;">Enroll</button></form>'; 


			$fullName = $registeredStudents->first_name.' '.$registeredStudents->last_name;

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

		$enrollInfo = array(
			'id' => '',
			'registered_student_lrn' => $this->input->post('registered_student_lrn'),
			'note' => $this->input->post('note'),
			'section_id' => $this->input->post('section_id'),
			'academic_year_id' => $academic_year_id
			);

		$this->global_model->insert('enrolled_students', $enrollInfo);

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

	public function ajax()
	{
		$table = $this->input->post('table');
		$set = $this->input->post('set');
		$value = $this->input->post('value');
		$records = json_encode($this->global_model->getRow($table, $set, $value));
		echo $records;
	}

}

?>
