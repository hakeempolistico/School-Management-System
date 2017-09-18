<?php

class assign_subjects_model extends CI_Model{

	public function getSections($data){	
	$this->db->where($data);
	$query = $this->db->get('sections')->result();
	return $query;
	}

}

?>