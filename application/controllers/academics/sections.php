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
		echo json_encode($result);
	}
	public function ajaxGetRecords(){
		$result = $this->sections_model->getRecords('sections', 'desc', 'id');

		$data = [];
        foreach ($result as $value)
            {	
            	$action = "<center>
                    <button data-toggle='modal' data-target='#modal-edit' class='btn btn-default btn-xs edit-btn'><span class='fa fa-fw fa-pencil'></span></button>                    
                    <button data-toggle='modal' data-target='#modal-delete' data-id='".$value->id."' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove'></span></button>                
                  </center>";

                $arr = array(
                    $value->strand_code,
                    $value->a,
                    $value->name,
                    $value->capacity,
                    $action
                );
                $data['data'][] = $arr;
            }
		echo json_encode($data);
	}

}
