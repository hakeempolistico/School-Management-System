<?php

class view_model extends CI_Model{

	public function getRooms()
	{	
		$this->db->select('*');
		$this->db->from('rooms');
		$this->db->join('classes', 'classes.id = rooms.class_id');
		$query = $this->db->get()->result();
		return $query;
	}

	public function insertRequirement($table, $dataReq){
		$this->db->select('requirement');
		$this->db->where('lrn', $dataReq['lrn']);
		$this->db->where('requirement', $dataReq['requirement']);
		$rows = $this->db->get($table)->num_rows();
		if($rows==0){
			$this->db->insert($table, $dataReq);
		}
	}
	public function updateStudent($lrn){;
		$this->db->where('lrn', $lrn);
		$this->db->set('requirements', 'complete');
		$this->db->update('students');
	}

}

?>