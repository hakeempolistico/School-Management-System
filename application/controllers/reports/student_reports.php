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
		$data['strands'] = $this->global_model->getRecords('strands');
		$data['years'] = $this->global_model->getRecords('year_levels');
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
				else
					$arr[$key] = $val;
			}
		};
		foreach ($data as $key => $val) {
			if($val){
				if($key == 'lrn'){
					$criteria['LRN'] = $val;
				}
				if($key == 'year_level_id'){
					$criteria['Year Level'] = $val;
				}
				if($key == 'section_id'){
					$criteria['Section'] = $val;
				}
				if($key == 'strand_code'){
					$criteria['Strand'] = $val;
				}
				if($key == 'date_enrolled'){
					$criteria['Date Enrolled'] = $val;
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
		};
		/*echo '<pre>';
		print_r($rep_arr);
		echo '<pre>';
		exit;*/

		$data = $this->parse->parsed();
		$data['criteria'] = $criteria;
		$this->parser->parse('reports/student_search', $data);
	}

}
