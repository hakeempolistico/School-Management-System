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

	public function populateTable()
	{
		$registeredStudents = $this->global_model->getRecords('registered_students');

		

		

		$data = [];
		foreach ($registeredStudents as $registeredStudents) 
		{
			$action = '<a href="'.\<?php echo site_url('enrollment/enroll_student/') ?\>.'?lrn='.$registeredStudents->lrn.'" type="button" class="btn btn-block btn-info btn-flat btn-xs buttonView" style="max-width: 100px; display:block;margin: auto;">View</a>';

			$fullName = $registeredStudents->first_name.' '.$registeredStudents->last_name;
			
			$dateRegistered = $registeredStudents->date_registered;
			$explodedDateRegistered = explode(" ", $dateRegistered);
			$explodedDate = explode("-", $explodedDateRegistered[0]);
			$y = $explodedDate[0];
			$m = $explodedDate[1];
			$d = $explodedDate[2];
			$newDate = $m.'-'.$d.'-'.$y;
			
			$arr = array(
		        $registeredStudents->lrn,
		        $fullName,
		        $newDate,
		        $action
		    );

            $data['data'][] = $arr;
		}

		echo json_encode($data);
	}

	public function enroll()
	{
		$data = $this->parse->parsed();
		$this->parser->parse('enrollment/enroll_student', $data);
	}

}

?>
