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
		$data['title'] = 'Rooms';
		$data['header'] = $this->load->view('template/header', $data, TRUE);

        $this->parser->parse('academics/rooms', $data);
	}
	public function getSchedule(){

		$where = $this->input->post();
		//$where = array('room_id'=> 'Room 105');
		$res = $this->global_model->getRows('schedules', $where);

		$result = array();
		foreach ($res as $key => $val) {
			$array = array('id'=> $val->section_id);
			$section_info =  $this->global_model->getRows('sections', $array);
			if($section_info[0]->strand_code == 1){
				$grade = 'Grade 11';
			}
			else{
				$grade = 'Grade 12';
			}
			$val->class = $section_info[0]->strand_code.' '.$grade.'-'.$section_info[0]->name;
			$val->time = $val->time_start.'-'.$val->time_end;

			//$result = array_merge_recursive((array) $result,(array) $res[$key]);
		}

		//echo json_encode($res);
		echo '<pre>'; 
		print_r($res);
		echo '<pre>';
	}
	public function addRoom()
	{
		$data = $this->input->post();
		$this->audit_trail->set('Academics', 'Rooms', 'add', $data['room_name']);
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

		$data = [];
        foreach ($result as $value)
            {	
            	$status=null;
            	$status = '<center><span class="badge bg-light-blue status">'.$value->status.'</span></center>';
				$action = "
					<center>
						<button data-toggle='modal' data-target='#modal-schedule' class='btn btn-default btn-xs schedule-btn'><span class='fa fa-fw fa-clock-o text-success'></span></button>
						<button data-toggle='modal' data-target='#modal-edit' class='btn btn-default btn-xs edit-btn'><span class='fa fa-fw fa-pencil text-info'></span>
						</button>                    
				        <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove text-danger'></span></button>
			        </center>";
            	           	
                $arr = array(
                    $value->room_id,
                    $value->room_name,
                    $value->building,
                    $value->type,
                    $action
                );
                $data['data'][] = $arr;
            }

		echo json_encode($data);
	}
	public function auditTrailUpdate()
	{
		$data = $this->input->post();
		$room_id = null;
		$room_name = null;
		$building = null;

		if($data['room_id'] != $data['newId'] && isset($data['newId'])){
			$room_id = $data['room_id'].' to '.$data['newId'];
			$this->audit_trail->set('Academics', 'Rooms', 'edit', 'ROOM NUMBER - '.$room_id);
		}
		if($data['name'] != $data['newName'] && isset($data['newName'])){
			$room_name = $data['name'].' to '.$data['newName'];
			$this->audit_trail->set('Academics', 'Rooms', 'edit', 'ROOM NAME - '.$room_name);
		}
		if($data['building'] != $data['newBuilding'] && isset($data['newBuilding'])){
			$building = $data['building'].' to '.$data['newBuilding'];
			$this->audit_trail->set('Academics', 'Rooms', 'edit', 'BUILDING - '.$building);
		}
		
		
		/*if(isset($data['status']) && $data['status'] == 'active'){
			$this->audit_trail->set('Academic', 'Rooms', 'activate', 'ROOM ID - '.$data['room_id'].' set to '.$data['status']);
		}
		if(isset($data['status']) && $data['status'] == 'inactive'){
			$this->audit_trail->set('Academics', 'Rooms', 'deactivate', 'ROOM ID - '.$data['room_id'].' set to '.$data['status']);
		}*/
	}

	public function getRoomSchedule() {
			$data = $this->input->post();
			//$id= $data['room_id'];
			$class = $this->rooms_model->getDistinctClass('Lab101');
			$sub = $this->rooms_model->getDistnctSubject('Lab101');
			$time = $this->rooms_model->getDistnctTime('Lab101');
			/*foreach ($res as $key => $val) {
				$val->strand = $this->global_model->getRow('sections', 'id', $val->section_id)->strand_code;
				if($this->global_model->getRow('sections', 'id', $val->section_id)->year_level_id == '1'){
					$val->year = 'Grade 11';
				}
				else{
					$val->year = 'Grade 12';
				};
				$val->section = $this->global_model->getRow('sections', 'id', $val->section_id)->name;
			}*/

			echo '<pre>';
			print_r($class);
			echo '<pre>';

			echo '<pre>';
			print_r($time);
			echo '<pre>';

			echo '<pre>';
			print_r($sub);
			echo '<pre>'; exit;

			echo json_encode($res);
	}
	













}