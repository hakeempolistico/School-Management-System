<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subjects extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'academics/subjects';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['title'] = 'Subjects';
		$data['header'] = $this->load->view('template/header', $data, TRUE);

        $this->parser->parse('academics/subjects', $data);
	}

	public function ajaxInsert(){
		$data = $this->input->post();
		$result = $this->global_model->insert('subjects',$data);
		$this->audit_trail->set('Academics', 'Subjects', 'add', $data['set'].'-'.$data['value']);
		echo json_encode($result);
	}
	public function ajaxUpdate(){
		$data = $this->input->post();
		$result = $this->subjects_model->update('subjects', $data);
		echo json_encode($result);
	}
	public function ajaxDeleteRow(){
		$data = $this->input->post();
		$result = $this->global_model->deleteRow('subjects',$data);
		echo json_encode($result);
	}
	public function ajaxGetRow(){
		$data = $this->input->post();
		$result = $this->global_model->getRow($data['table'], $data['set'], $data['value']);
		echo json_encode($result);
	}
	public function ajaxCountRow(){
		$data = $this->input->post();
		$result = $this->global_model->count($data['table'], $data['set'], $data['value']);
		echo json_encode($result);
	}
	public function ajaxGetRecords(){
		$result = $this->global_model->getRecords('subjects', 'desc', 'id');
		$action = "
                    <button data-toggle='modal' id='view-btn' data-target='#modal-view' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-search text-info'></span></button>                    
                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove text-danger'></span></button>                
                  ";
		$data = [];
        foreach ($result as $key => $value)
            {
            	$status=null;
            	if($value->status == 'active'){
            		$status = '<center><span class="badge bg-light-blue">'.$value->status.'</span></center>';
					$action = "<center><button data-toggle='modal' id='view-btn' data-target='#modal-view' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-search text-info'></span></button>                    
			                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove text-danger'></span></button></center>";
            	}
            	else if($value->status == 'inactive'){
            		$status = '<center><span class="badge bg-red status">'.$value->status.'</span></center>';
					$action = "<center><button data-toggle='modal' id='view-btn' data-target='#modal-view' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-search text-info'></span></button>                    
			                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-check text-success'></span></button></center>";
            	}
                $arr = array(
                    $value->code,
                    $value->name,
                    $value->type,
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
		$code = null;
		$name = null;
		$type = null;
		$description = null;

		if($data['code'] != $data['newCode'] && isset($data['newCode'])){
			$code = $data['code'].' to '.$data['newCode'];
			$this->audit_trail->set('Academics', 'Subjects', 'edit', 'CODE - '.$code);
		}
		if($data['name'] != $data['newName'] && isset($data['newName'])){
			$name = $data['name'].' to '.$data['newName'];
			$this->audit_trail->set('Academics', 'Subjects', 'edit', 'NAME - '.$name);
		}
		if($data['type'] != $data['newType'] && isset($data['newType'])){
			$type = $data['type'].' to '.$data['newType'];
			$this->audit_trail->set('Academics', 'Subjects', 'edit', 'TYPE - '.$type);
		}
		if($data['description'] != $data['newDescription'] && isset($data['newDescription'])){
			$description = $data['description'].' to '.$data['newDescription'];
			$this->audit_trail->set('Academics', 'Subjects', 'edit', 'DESCRIPTION - '.$description);
		}
		if(isset($data['status']) && $data['status'] == 'active'){
			$this->audit_trail->set('Academics', 'Subjects', 'activate', 'SUBJECT : '.$data['set'].' set to '.$data['status']);
		}
		if(isset($data['status']) && $data['status'] == 'inactive'){
			$this->audit_trail->set('Academics', 'Subjects', 'deactivate', 'SUBJECT : '.$data['set'].' set to '.$data['status']);
		}
	}

}
