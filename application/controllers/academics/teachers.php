<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teachers extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('academics/teachers_model');
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'academics/teachers';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['title'] = 'Teachers';
		$data['header'] = $this->load->view('template/header', $data, TRUE);

        $this->parser->parse('academics/teachers', $data);
	}
	public function ajaxCountRow(){
		$data = $this->input->post();
		$result = $this->global_model->count($data['table'], $data['set'], $data['value']);
		echo json_encode($result);
	}
	public function ajaxGetRow(){
		$data = $this->input->post();
		$result = $this->global_model->getRow($data['table'], $data['set'], $data['value']);
		echo json_encode($result);
	}
	public function ajaxDeleteRow(){
		$table = $this->input->post('table');	
		$data = $this->input->post();
		unset($data['table']);
		$result = $this->global_model->deleteRow($table, $data);
		echo json_encode($result);
	}
	public function ajaxUpdate(){
		$table = $this->input->post('table');		
		$data = $this->input->post();
		unset($data['table']);
		$result = $this->teachers_model->update($table, $data);
		echo json_encode($result);
	}
	public function ajaxInsert(){
		$table = $this->input->post('table');
		$data = $this->input->post();
		unset($data['table']);
		$result = $this->global_model->insert($table,$data);
		$this->audit_trail->set('Academics', 'Teachers', 'add', $data['first_name'].' '.$data['last_name']);
		echo json_encode($result);
	}
	public function ajaxGetRecords(){
		$result = $this->global_model->getRecords('teachers', 'desc', 'id');

		$data = [];
        foreach ($result as $value)
            {	
            	$status=null;
            	if($value->status == 'active'){
            		$status = '<center><span class="badge bg-light-blue">'.$value->status.'</span></center>';
					/*$action = "
                    <button data-toggle='modal' id='view-btn' data-target='#modal-schedule' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-clock-o text-success'></span></button>
                    <button data-toggle='modal' id='view-btn' data-target='#modal-view' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-search text-info'></span></button>                  
                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove text-danger'></span></button>                
                  ";*/	
                  $action = "
                    <button data-toggle='modal' id='view-btn' data-target='#modal-view' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-search text-info'></span></button>                  
                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove text-danger'></span></button>                
                  ";
            	}
            	else if($value->status == 'inactive'){
            		$status = '<center><span class="badge bg-red">'.$value->status.'</span></center>';
					/*$action = "
                    <button data-toggle='modal' id='view-btn' data-target='#modal-schedule' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-clock-o text-success'></span></button>
                    <button data-toggle='modal' id='view-btn' data-target='#modal-view' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-search text-info'></span></button>                  
                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-check text-success'></span></button>                
                  ";*/
					$action = "
                    <button data-toggle='modal' id='view-btn' data-target='#modal-view' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-search text-info'></span></button>                  
                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-check text-success'></span></button>                
                  ";
            	}
            	
                $arr = array(
                    $value->employee_id,
                    $value->first_name.' '.$value->middle_name.' '.$value->last_name,
                    $value->position,
                    $value->major,
                    $status,
                    $action
                );
                $data['data'][] = $arr;
            }
		echo json_encode($data);
	}
	public function auditTrailUpdate()
	{
		$data = $this->input->post();
		$employee_id = null;
		$first_name = null;
		$middle_name = null;
		$last_name = null;
		$birthdate = null;
		$sex = null;
		$contact_number = null;
		$email = null;
		$major = null;
		$position = null;

		if($data['employee_id'] != $data['new_empoyee_id'] && isset($data['new_empoyee_id'])){
			$employee_id = $data['employee_id'].' to '.$data['new_empoyee_id'];
			$this->audit_trail->set('Academics', 'Teachers', 'edit', 'EMPLOYEE ID - '.$employee_id);
		}
		if($data['oldFirstName'] != $data['first_name'] && isset($data['first_name'])){
			$first_name = $data['oldFirstName'].' to '.$data['first_name'];
			$this->audit_trail->set('Academics', 'Teachers', 'edit', 'FIRST NAME - '.$first_name);
		}
		if($data['oldMiddleName'] != $data['middle_name'] && isset($data['middle_name'])){
			$middle_name = $data['oldMiddleName'].' to '.$data['middle_name'];
			$this->audit_trail->set('Academics', 'Teachers', 'edit', 'MIDDLE NAME - '.$middle_name);
		}
		if($data['oldLastName'] != $data['last_name'] && isset($data['last_name'])){
			$last_name = $data['oldLastName'].' to '.$data['last_name'];
			$this->audit_trail->set('Academics', 'Teachers', 'edit', 'LAST NAME - '.$last_name);
		}
		if($data['oldBirthdate'] != $data['birthdate'] && isset($data['birthdate'])){
			$birthdate = $data['oldBirthdate'].' to '.$data['birthdate'];
			$this->audit_trail->set('Academics', 'Teachers', 'edit', 'BIRTHDATE - '.$birthdate);
		}
		if($data['oldSex'] != $data['sex'] && isset($data['sex'])){
			$sex = $data['oldSex'].' to '.$data['sex'];
			$this->audit_trail->set('Academics', 'Teachers', 'edit', 'SEX - '.$sex);
		}
		if($data['oldContactNo'] != $data['contact_no'] && isset($data['contact_no'])){
			$contact_no = $data['oldContactNo'].' to '.$data['contact_no'];
			$this->audit_trail->set('Academics', 'Teachers', 'edit', 'CONTACT - '.$contact_no);
		}
		if($data['oldEmail'] != $data['email'] && isset($data['email'])){
			$email = $data['oldEmail'].' to '.$data['email'];
			$this->audit_trail->set('Academics', 'Teachers', 'edit', 'EMAIL - '.$email);
		}
		if($data['oldMajor'] != $data['major'] && isset($data['major'])){
			$major = $data['oldMajor'].' to '.$data['major'];
			$this->audit_trail->set('Academics', 'Teachers', 'edit', 'MAJOR - '.$major);
		}
		if($data['oldPosition'] != $data['position'] && isset($data['position'])){
			$position = $data['oldPosition'].' to '.$data['position'];
			$this->audit_trail->set('Academics', 'Teachers', 'edit', 'POSITION - '.$position);
		}
		
		if(isset($data['status']) && $data['status'] == 'active'){
			$this->audit_trail->set('Academic', 'Teachers', 'activate', 'EMPLOYEE ID - '.$data['employee_id'].' set to '.$data['status']);
		}
		if(isset($data['status']) && $data['status'] == 'inactive'){
			$this->audit_trail->set('Academics', 'Teachers', 'deactivate', 'EMPLOYEE ID - '.$data['employee_id'].' set to '.$data['status']);
		}
	}

}
