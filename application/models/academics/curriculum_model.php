<?php

class curriculum_model extends CI_Model{

	public function getSections($data){	
	$this->db->where($data);
	$query = $this->db->get('sections')->result();
	return $query;
	}

	public function getClassSubjects($data){	
	$this->db->where($data);
	$query = $this->db->get('class_subjects')->result();
	return $query;
	}

}

?>