<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_management extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'settings/user_management';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('settings/user_management', $data);
	}
	public function ajaxAddUser()
	{	
		$data = $this->input->post();
		$info = $this->global_model->getRow('teachers', 'employee_id', $data['employee_id']);
		unset($info->id);
		$info->username= $info->employee_id;
		$info->password= 'P@ssword123';
		$info->user_role= 'teacher';
		if($this->global_model->getRow('users', 'employee_id', $data['employee_id'])){
			echo 'false';
		}
		else{
			echo json_encode($this->global_model->insert('users', $info));
		}
	}
	public function ajaxDeac()
	{	
		$data = $this->input->post();
		echo $this->global_model->deleteRow('users', $data);
	}
	public function ajaxResetPass()
	{	
		$data = $this->input->post();
		echo $this->global_model->updateRecord('users', array('password' => 'P@ssword123'), array('employee_id' => $data['employee_id']));
	}
	public function ajaxChange()
	{	
		$data = $this->input->post();
		echo $this->global_model->updateRecord('users', array('user_role' => $data['user_role']), array('employee_id' => $data['employee_id']));
	}
	public function ajaxGetTeacherRecords(){
		$result = $this->global_model->getRecords('teachers', 'desc', 'id');

		$data = [];
        foreach ($result as $value)
            {	            	
            	$e_info = $this->global_model->getRow('users', 'employee_id', $value->employee_id);
				if(!$e_info){
					$btn = '<button data-toggle="modal" data-target="#modal-confirm-add" class="btn btn-add-user btn-xs btn-primary"><i class="fa fa-user-plus"></i></button>
                    <button data-toggle="modal"  class="btn btn-xs btn-danger"><i class="fa fa-ban"></i></button>
                    <button data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-ban"></i></button>';
                    $role='-';				
				}else{
					$btn = '
                    <button data-toggle="modal" data-target="#modal-confirm-deac" class="btn btn-xs btn-deac btn-warning"><i class="fa fa-user-times"></i></button>
                    <button data-toggle="modal" data-target="#modal-confirm-reset" class="btn btn-xs btn-reset btn-primary"><i class="fa fa-key"></i></button>
                    <button data-toggle="modal" data-target="#modal-change-role" class="btn btn-xs btn-change btn-info"><i class="fa fa-gear"></i></button>';
                    $role=$e_info->user_role;				
				}

            	$status=null;

            	if($value->status == 'active'){
            		$status = '<center><span class="badge bg-light-blue">'.$value->status.'</span></center>';
					$action = "<center><button data-toggle='modal' data-target='#modal-edit' class='btn btn-default btn-xs edit-btn'><span class='fa fa-fw fa-pencil text-info'></span></button>                    
			                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove text-danger'></span></button></center>";
            	}
            	else if($value->status == 'inactive'){
            		$status = '<center><span class="badge bg-red status">'.$value->status.'</span></center>';
					$action = "<center><button data-toggle='modal' data-target='#modal-edit' class='btn btn-default btn-xs edit-btn'><span class='fa fa-fw fa-pencil text-info'></span></button>                    
			                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-check text-success'></span></button></center>";
            	}

                $arr = array(
                    $value->employee_id,
                    $value->first_name.' '.$value->last_name,
                    $value->position,
                    $role,
                    $status,
                    $btn
                    
                );
                $data['data'][] = $arr;
            }

		echo json_encode($data);
	}

}
