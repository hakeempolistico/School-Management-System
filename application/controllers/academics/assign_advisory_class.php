<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class assign_advisory_class extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	    $this->load->model('academics/assign_subjects_model');
	}

	public function index()
	{	
		$data = $this->parse->parsed();

		$data['teachersInfo'] = $this->global_model->getActiveRecords('teachers');
		foreach ($data['teachersInfo'] as $key => $val) {
			if($val->advisory_class){
				$val->advisory_status = '<span class="badge bg-green status">assigned</span>';
			}
			else{
				$val->advisory_status = '<span class="badge bg-red status">unassigned</span>';
				$val->advisory_class = '-';
			}
		}
		$data['strandsInfo'] = $this->global_model->getActiveRecords('strands');

		$data['active'] = 'academics/assign_advisory_class';
		$data['template'] = $this->load->view('template/sidenav', $data, TRUE);

    	$this->parser->parse('academics/assign_advisory_class', $data);
	}

	public function getSection(){			
		echo json_encode($this->assign_subjects_model->getActiveSections($this->input->post()));
	}

	public function validate(){			
		echo json_encode($this->global_model->getRows('advisory_class', $this->input->post()));
	}

	public function add(){			
		echo json_encode($this->global_model->insert('advisory_class', $this->input->post()));
	}

	public function updateAdvisory(){		
		$set = array('section_id' => $this->input->post('section_id'));
		$where = array('employee_id' => $this->input->post('employee_id'), 'academic_year' => $this->input->post('academic_year'));	
		echo json_encode($this->global_model->updateRecord('advisory_class', $set, $where));
	}

	public function update(){
		$set = array('advisory_class' => $this->input->post('advisory_class'));
		$where = array('employee_id' => $this->input->post('employee_id'));
		echo json_encode($this->global_model->updateRecord('teachers', $set, $where));
	}

	public function checkSection(){
		echo json_encode($this->global_model->getRow('teachers', 'advisory_class', $this->input->post('section_id')));
	}

	public function ajaxGetRecords(){
		$result = $this->global_model->getActiveRecords('teachers', 'desc', 'id');

		$data = [];
        foreach ($result as $value)
            {	            	
            	$status=null;
            	$action='<center><button data-toggle="modal" data-target="#modal-view" class="btn btn-default btn-xs btn-assign"><span class="fa fa-fw fa-pencil text-info"></span></button></center>';

            	$a_info = $this->global_model->getRows('advisory_class', array('employee_id' => $value->employee_id, 'academic_year' => $this->session->academic_year));

				if(!$a_info == null){
					$value->advisory_status = '<span class="badge bg-green status">assigned</span>';
            		$class = $this->global_model->getRow('sections', 'id', $a_info[0]->section_id);
            		if($class->year_level_id=='1'){
            			$class->year_level_id='11';
            		}
            		else{
            			$class->year_level_id='12';
            		}
            		$value->class=$class->strand_code.'-'.$class->year_level_id.$class->name;
				}
				else{
					$value->advisory_status = '<span class="badge bg-red status">unassigned</span>';
					$value->class = '-';
				}

                $arr = array(
                    $value->employee_id,
                    $value->first_name.' '.$value->middle_name.' '.$value->last_name,
                    '<div class="class-name">'.$value->class.'</div><div class="section-id" hidden>'.$value->class.'</div>',
                    $value->advisory_status,
                    $action
                );
                $data['data'][] = $arr;
            }
		echo json_encode($data);
	}

	public function auditTrailAssign()
	{
		$data = $this->input->post();

		$record = $this->global_model->getRecord('teachers', array('id' => $data['employee_id'] ));

		$first_name = $record->first_name;
		$middle_name = $record->middle_name;
		$last_name = $record->last_name;

		$section = $this->global_model->getRecord('sections', array('id' => $data['section'] ));

		$strand_code = $section->strand_code;
		$year_level_id = $section->year_level_id;
		$name = $section->name;


		if ($year_level_id == '1'){
			$year = '11';
		} else {
			$year = '12';
		}

		$this->audit_trail->set('Academics', 'Assign Advisory Class', 'assign', $first_name.' '.$middle_name.' '.$last_name.' assigned to '.$strand_code.'-'.$year.$name);
	}

}
