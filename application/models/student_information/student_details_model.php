<?php

class student_details_model extends CI_Model{

	public function getStudentDetails()
	{	
		return $this->db->get('enrolled_students')->result();
	}
	public function getStudentInfo($lrn)
	{	
		$this->db->where('lrn', $lrn);
		return $this->db->get('students_info')->result();
	}
	public function getClass($section_id)
	{	
		$this->db->where('id', $section_id);
		return $this->db->get('sections')->result();
	}
	
}

?>