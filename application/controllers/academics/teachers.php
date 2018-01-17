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
		echo json_encode($result);
	}
	public function ajaxGetRecords(){
		$result = $this->global_model->getRecords('teachers', 'desc', 'id');

		$data = [];
        foreach ($result as $value)
            {	
            	$status=null;
            	if($value->status == 'active'){
            		$status = '<span class="badge bg-light-blue">'.$value->status.'</span>';
					$action = "
                    <button data-toggle='modal' id='view-btn' data-target='#modal-schedule' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-clock-o text-success'></span></button>
                    <button data-toggle='modal' id='view-btn' data-target='#modal-view' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-search text-info'></span></button>                  
                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove text-danger'></span></button>                
                  ";
            	}
            	else if($value->status == 'inactive'){
            		$status = '<span class="badge bg-red">'.$value->status.'</span>';
					$action = "
                    <button data-toggle='modal' id='view-btn' data-target='#modal-schedule' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-clock-o text-success'></span></button>
                    <button data-toggle='modal' id='view-btn' data-target='#modal-view' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-search text-info'></span></button>                  
                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-check text-success'></span></button>                
                  ";
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
