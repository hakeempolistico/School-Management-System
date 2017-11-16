<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rooms extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('academics/rooms_model');
	}
	public function index()
	{	
		$data = $this->parse->parsed();

		$data['active'] = 'academics/rooms';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

        $this->parser->parse('academics/rooms', $data);
	}
	public function addRoom()
	{
		$data = $this->input->post();
		echo $this->global_model->insert('rooms', $data);
	}
	public function ajaxCountRow()
	{
		$data = $this->input->post();
		$result = $this->global_model->count($data['table'], $data['set'], $data['value']);
		echo json_encode($result);
	}
	public function ajaxGetRow()
	{
		$data = $this->input->post();
		$result = $this->global_model->getRow($data['table'], $data['set'], $data['value']);
		echo json_encode($result);
	}
	public function ajaxUpdate(){
		$data = $this->input->post();
		$result = $this->rooms_model->update('rooms', $data);
		echo json_encode($result);
	}
	public function ajaxDeleteRow(){
		$data = $this->input->post();
		$result = $this->global_model->deleteRow('rooms', $data);
		echo json_encode($result);
	}
	public function ajaxGetRecords(){
		$result = $this->global_model->getRecords('rooms', 'desc', 'id');
		$action = "
					<button data-toggle='modal' data-target='#modal-schedule' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-clock-o text-success'></span></button>
                    <button data-toggle='modal' data-target='#modal-edit' class='btn btn-default btn-xs edit-btn'><span class='fa fa-fw fa-pencil text-info'></span></button>                    
                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove text-danger'></span></button>                
                  ";

		$data = [];
        foreach ($result as $value)
            {	            	
                $arr = array(
                    $value->room_id,
                    $value->room_name,
                    $value->building,
                    $action
                );
                $data['data'][] = $arr;
            }
		echo json_encode($data);
	}
	
}