<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subjects extends CI_Controller {

	public function index()
	{	
		$data = $this->parse->parsed();
        $this->parser->parse('academics/subjects', $data);
		$this->sms_session->checkSession();
	}

	public function ajaxInsert(){
		$data = $this->input->post();
		$result = $this->global_model->insert('subjects',$data);
		echo json_encode($result);
	}
	public function ajaxUpdate(){
		$data = $this->input->post();
		$result = $this->subjects_model->update('subjects', $data);
		echo json_encode($result);
	}
	public function ajaxDeleteRow(){
		$data = $this->input->post();
		$result = $this->global_model->delete('subjects',$data);
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
		$action = "<center>
                    <button data-toggle='modal' id='view-btn' data-target='#modal-view' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-search'></span></button>
                    <button data-toggle='modal' data-target='#modal-edit' class='btn btn-default btn-xs edit-btn'><span class='fa fa-fw fa-pencil'></span></button>                    
                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove'></span></button>                
                  </center>";
		$data = [];
        foreach ($result as $key => $value)
            {
                $arr = array(
                    $value->code,
                    $value->name,
                    $value->type,
                    $action
                );
                $data['data'][] = $arr;
            }
		echo json_encode($data);
	}

}
