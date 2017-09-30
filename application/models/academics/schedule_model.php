<?php

class schedule_model extends CI_Model{

	public function getClass(){	
		$this->db->select('a.id');
		$this->db->select('a.name as section_name');
		$this->db->select('a.strand_code');
		$this->db->select('b.name as year_level');
	    $this->db->from('sections as a');
	    $this->db->join('year_levels as b', 'a.year_level_id = b.id') ;
		return $this->db->get()->result();
	}
	public function getSectionDetails($data){	
		$this->db->select('a.id');
		$this->db->select('a.name as section_name');
		$this->db->select('a.strand_code');
		$this->db->select('a.capacity');
		$this->db->select('b.name as year_level');
		$this->db->where('a.id', $data['id']);
	    $this->db->from('sections as a');
	    $this->db->join('year_levels as b', 'a.year_level_id = b.id') ;
		return $this->db->get()->result();
	}
	public function getSubjects($data){	
		$this->db->select('a.id');
		$this->db->select('b.code as section_code');
		$this->db->select('b.name as section_name');
		$this->db->where('a.section_id', $data['section_id']);
	    $this->db->from('class_subjects as a');
	    $this->db->join('subjects as b', 'a.subject_id = b.id') ;
		return $this->db->get()->result();
	}

}

?>