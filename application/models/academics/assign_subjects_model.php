<?php

class assign_subjects_model extends CI_Model{

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

	public function getCurrSubjects($data){	
	$this->db->where($data);
	$query = $this->db->get('curriculum')->result();
	return $query;
	}

}

?>