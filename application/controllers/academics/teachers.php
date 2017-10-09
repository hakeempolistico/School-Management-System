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
        $this->parser->parse('academics/teachers', $data);
		$this->sms_session->checkSession();
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
		echo json_encode($result);
	}
	public function ajaxGetRecords(){
		$result = $this->global_model->getRecords('teachers', 'desc', 'id');
		$action = "<center>
                    <button data-toggle='modal' id='view-btn' data-target='#modal-view' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-search'></span></button>
                    <button data-toggle='modal' data-target='#modal-edit' class='btn btn-default btn-xs edit-btn'><span class='fa fa-fw fa-pencil'></span></button>                    
                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove'></span></button>                
                  </center>";

		$data = [];
        foreach ($result as $value)
            {	
            	$status=null;
            	if($value->status == 'Active'){
            		$status = '<center><span class="badge bg-light-blue">'.$value->status.'</span></center>';
            	}
            	else if($value->status == 'Inactive'){
            		$status = '<center><span class="badge bg-red">'.$value->status.'</span></center>';
            	}
            	
                $arr = array(
                    $value->employee_id,
                    $value->first_name.' '.$value->middle_name.' '.$value->last_name,
                    $status,
                    $action
                );
                $data['data'][] = $arr;
            }
		echo json_encode($data);
	}

}
