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
	public function ajaxGetRecords(){
		$result = $this->global_model->getRecords('subjects', 'desc', 'id');
		$action = "<center>
                    <a data-toggle='modal' data-target='#modal-view' class='btn btn-default btn-xs'><span class='fa fa-fw fa-search'></span></a>
                    <a data-toggle='modal' data-target='#modal-edit' class='btn btn-default btn-xs'><span class='fa fa-fw fa-pencil'></span></a>                    
                    <a data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs'><span class='fa fa-fw fa-remove'></span></a>                
                  </center>";
		$data = [];
        foreach ($result as $key => $value)
            {
                $arr = array(
                    $value->name,
                    $value->code,
                    $value->type,
                    $action
                );
                $data['data'][] = $arr;
            }
		echo json_encode($data);
	}

}
