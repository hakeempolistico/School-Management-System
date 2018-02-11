<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sections extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('academics/sections_model');
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'academics/sections';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['title'] = 'Sections';
		$data['header'] = $this->load->view('template/header', $data, TRUE);

        $this->parser->parse('academics/sections', $data);
	}
	public function getStrands()
	{		
		echo json_encode($this->global_model->getRecords('strands'));
	}
	public function ajaxCountRow()
	{
		$data = $this->input->post();
		$result = $this->global_model->count($data['table'], $data['set'], $data['value'], $data['set2'], $data['value2'], $data['set3'], $data['value3']);
		echo json_encode($result);
	}
	public function ajaxUpdate(){
		$data = $this->input->post();
		$result = $this->sections_model->update('sections', $data);
		echo json_encode($result);
	}
	public function getYears()
	{		
		echo json_encode($this->global_model->getRecords('year_levels'));
	}
	public function ajaxDeleteRow(){
		$data = $this->input->post();
		$result = $this->global_model->deleteRow('sections',$data);
		echo json_encode($result);
	}
	public function ajaxInsert(){
		$table = $this->input->post('table');
		$data = $this->input->post();
		unset($data['table']);
		$result = $this->global_model->insert($table,$data);
		$input_year = $data['year_level_id'];

		if($input_year == '1'){
			$year = '11';
		}else{
			$year = '12';
		}

		$this->audit_trail->set('Academics', 'Sections', 'add', $data['strand_code'].'-'.$year.$data['name']);
		echo json_encode($result);
	}
	public function ajaxGetRecords(){
		$result = $this->sections_model->getRecords('sections', 'desc', 'id');

		$data = [];
        foreach ($result as $value)
            {	
            	$status=null;
            	if($value->status == 'active'){
            		$status = '<center><span class="badge bg-light-blue">'.$value->status.'</span></center>';
					$action = "<center><button data-toggle='modal' data-target='#modal-edit' class='btn btn-default btn-xs edit-btn'><span class='fa fa-fw fa-pencil text-info'></span></button>                    
			                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove text-danger'></span></button></center>";
            	}
            	else if($value->status == 'inactive'){
            		$status = '<center><span class="badge bg-red">'.$value->status.'</span></center>';
					$action = "<center><button data-toggle='modal' data-target='#modal-edit' class='btn btn-default btn-xs edit-btn'><span class='fa fa-fw fa-pencil text-info'></span></button>                    
			                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-check text-success'></span></button></center>";
            	}

                $arr = array(
                    $value->strand_code,
                    $value->a,
                    $value->name,
                    $value->capacity,
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
		$strand_code = null;
		$year_level = null;
		$name = null;
		$capacity = null;

		if($data['strand_code'] != $data['newStrand'] && isset($data['newStrand'])){
			$strand_code = $data['strand_code'].' to '.$data['newStrand'];
			$this->audit_trail->set('Academics', 'Sections', 'edit', 'CODE - '.$strand_code);
		}
		if($data['year_level'] != $data['newYear'] && isset($data['newYear'])){
			$year_level = $data['year_level'].' to '.$data['newYear'];
			$this->audit_trail->set('Academics', 'Sections', 'edit', 'YEAR LEVEL - '.$year_level);
		}
		if($data['name'] != $data['newName'] && isset($data['newName'])){
			$name = $data['name'].' to '.$data['newName'];
			$this->audit_trail->set('Academics', 'Sections', 'edit', 'NAME - '.$name);
		}
		if($data['capacity'] != $data['newCapacity'] && isset($data['newCapacity'])){
			$capacity = $data['capacity'].' to '.$data['newCapacity'];
			$this->audit_trail->set('Academics', 'Sections', 'edit', 'CAPACITY - '.$capacity);
		}
		if(isset($data['status']) && $data['status'] == 'active'){
			$this->audit_trail->set('Academics', 'Sections', 'activate', 'SECTION : '.$data['set'].'-'.$data['set2'].$data['name'].' set to '.$data['status']);
		}
		if(isset($data['status']) && $data['status'] == 'inactive'){
			$this->audit_trail->set('Academics', 'Sections', 'deactivate', 'SECTION : '.$data['set'].'-'.$data['set2'].$data['name'].' set to '.$data['status']);
		}
	}

}
