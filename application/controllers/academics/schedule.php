<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class schedule extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('academics/schedule_model');
	}

	public function index()
	{
		$data = $this->parse->parsed();
		$data['classesCount'] = $this->global_model->count('sections');
		$data['classes'] = $this->global_model->getRecords('sections');		
		$data['teachers'] = $this->global_model->getActiveRecords('teachers');		
		$data['rooms'] = $this->global_model->getActiveRecords('rooms');			
		$data['subjects'] = $this->global_model->getRecords('subjects');		
		$data['year_levels'] = $this->global_model->getRecords('year_levels');		
		$data['strands'] = $this->global_model->getActiveRecords('strands');		
		$data['classes'] = $this->schedule_model->getClass();		

		$data['active'] = 'academics/schedule';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['title'] = 'Schedule';
		$data['header'] = $this->load->view('template/header', $data, TRUE);

		$this->parser->parse('academics/schedule', $data);
	}

	public function getSectionsDetails()
	{
		$data = $this->input->post();
		$row = $this->schedule_model->getSectionDetails($data);
		echo json_encode($row);
	}

	public function getSubjects()
	{
		$section_id = $this->input->post('section_id');
		$row = $this->schedule_model->getSubjects($section_id);
		echo json_encode($row);
	}
	public function getSubjectsDetails()
	{
		$row = $this->schedule_model->getSubjectsDetails($this->input->post());
		echo json_encode($row);
	}
	public function getSections()
	{
		$sections = $this->schedule_model->getSections($this->input->post());
		echo json_encode($sections);
	}

	public function addSchedule()
	{
		$data = $this->input->post();
		$row = $this->global_model->insert('schedules', $data);
		echo json_encode($row);
	}

	public function deleteSchedule()
	{
		$row = $this->global_model->deleteRows('schedules', $this->input->post());
		echo json_encode($row);
	}

	public function getSchedule()
	{
		$data = $this->schedule_model->getRecords('schedules', $this->input->post());		
		$timeslot = array();
		$schedule_row;

		foreach($data as $key=>$val) {
			$time = $val->time_start.'-'.$val->time_end ;
			$day = $val->day;

			if(!in_array($time, $timeslot, true)){
		        $timeslot[$time][$day]['subject'] = $val->subject_code;
			    $timeslot[$time][$day]['room'] = $val->room_id;
			    $timeslot[$time][$day]['color'] = $val->color;
		    }
		};

		echo json_encode($timeslot);
	}


}
