<?php

class subjects_model extends CI_Model{

	public function update($table, $data){	
	$this->db->where('code', $data['set']);
	unset($data['set']);
	$this->db->set($data);
	$query = $this->db->update($table);
	return $query;
	}

}

?>