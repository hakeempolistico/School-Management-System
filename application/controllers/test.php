<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller 
{
	public function index()
	{	
		
	}
	public function global_model(){
		$this->load->library('unit_test');

		echo '<div style="font-family: century gothic"> <h4>Global Model Unit Test</h4>';
		
		$getRecords = $this->global_model->getRecords('audit_trail');
		$this->unit->run($getRecords, 'is_array', 'getRecords Function');

		$getActiveRecords = $this->global_model->getRecords('strands');
		$this->unit->run($getRecords, 'is_array', 'getActiveRecords Function');

		$getActiveRecords = $this->global_model->getRow('strands', 'status', 'active');
		$this->unit->run($getRecords, 'is_array', 'getActiveRow Function');

		$getActiveRecords = $this->global_model->getRow('strands', 'status', 'active');
		$this->unit->run($getRecords, 'is_array', 'getActiveRow Function');

		echo $this->unit->report();
		echo '</div>';
	}
}

?>
