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

}

?>