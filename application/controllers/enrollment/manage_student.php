<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_student extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sms_session->checkSession();
	}

	public function index()
	{
		$data = $this->parse->parsed();
		$data['stemStudents']  = json_encode($this->global_model->getRow('students','strand','STEM'));
		$data['stemClasses']  = json_encode($this->global_model->getRow('classes','strand','STEM'));
		$data['rooms']  = json_encode($this->global_model->getRecords('rooms'));

		$data['gasStudents']  = json_encode($this->global_model->getRow('students','strand','GAS'));
		$data['gasClasses']  = json_encode($this->global_model->getRow('classes','strand','GAS'));

		$data['humssStudents']  = json_encode($this->global_model->getRow('students','strand','HUMSS'));
		$data['humssClasses']  = json_encode($this->global_model->getRow('classes','strand','HUMSS'));

		$data['abmStudents']  = json_encode($this->global_model->getRow('students','strand','ABM'));
		$data['abmClasses']  = json_encode($this->global_model->getRow('classes','strand','ABM'));

		$data['tvlheStudents']  = json_encode($this->global_model->getRow('students','strand','TVL-HE'));
		$data['tvlheClasses']  = json_encode($this->global_model->getRow('classes','strand','TVLHE'));

		$data['tvlasStudents']  = json_encode($this->global_model->getRow('students','strand','TVL-AS'));
		$data['tvlasClasses']  = json_encode($this->global_model->getRow('classes','strand','TVLAS'));
		$this->parser->parse('enrollment/manage_student', $data);
	}

}
