<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class strands extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('academics/strands_model');
	}
	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'academics/strands';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);
		$data['title'] = 'Strands';
		$data['header'] = $this->load->view('template/header', $data, TRUE);

        $this->parser->parse('academics/strands', $data);
	}
	public function ajaxCountRow()
	{
		$data = $this->input->post();
		$result = $this->global_model->count($data['table'], $data['set'], $data['value']);
		echo json_encode($result);
	}
	public function ajaxDeleteRow(){
		$data = $this->input->post();
		$result = $this->global_model->deleteRow('strands',$data);
		echo json_encode($result);
	}
	public function ajaxUpdate(){
		$data = $this->input->post();
		$result = $this->strands_model->update('strands', $data);
		echo json_encode($data);
	}
	public function addStrand()
	{
		$data = $this->input->post();
		echo $this->global_model->insert('strands', $data);
	}
	public function ajaxGetRow()
	{
		$data = $this->input->post();
		$result = $this->global_model->getRow($data['table'], $data['set'], $data['value']);
		echo json_encode($result);
	}
	public function ajaxGetRecords(){
		$result = $this->global_model->getRecords('strands', 'desc', 'id');

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
            		$status = '<center><span class="badge bg-red status">'.$value->status.'</span></center>';
					$action = "<center><button data-toggle='modal' data-target='#modal-edit' class='btn btn-default btn-xs edit-btn'><span class='fa fa-fw fa-pencil text-info'></span></button>                    
			                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-check text-success'></span></button></center>";
            	}
                $arr = array(
                    $value->code,
                    $value->name,
                    $status,
                    $action
                );
                $data['data'][] = $arr;
            }
		echo json_encode($data);
	}

}
