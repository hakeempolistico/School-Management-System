<?php

class teachers_model extends CI_Model{

	public function update($table, $data){	
	$this->db->where('employee_id', $data['set']);
	unset($data['set']);
	$this->db->set($data);
	$query = $this->db->update($table);
	return $query;
	}

}

?>