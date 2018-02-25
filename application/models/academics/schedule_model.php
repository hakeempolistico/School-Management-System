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
	public function getSections($data){
		$this->db->where($data);
		$this->db->from('sections');
		return $this->db->get()->result();
	}
	public function getSubjects($section_id){	
		$this->db->select('a.id');
		$this->db->select('b.code as section_code');
		$this->db->select('b.name as section_name');
		$this->db->where('a.section_id', $section_id);
		$this->db->where('academic_year', $this->session->academic_year);
	    $this->db->from('class_subjects as a');
	    $this->db->join('subjects as b', 'a.subject_id = b.code') ;
		return $this->db->get()->result();
	}
	public function getSubjectsDetails($data){
		$this->db->where($data);
	    $this->db->from('curriculum');
		return $this->db->get()->result();
	}
	public function getRecords($table, $where)
	{
		$this->db->where($where);
		$this->db->order_by("row", "asc");
		$query = $this->db->get($table)->result();
		return $query;
	}

}

?>