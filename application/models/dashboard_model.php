<?php

class dashboard_model extends CI_Model{

	public function getStudents()
	{	
		$this->db->select('students_info.lrn, first_name, middle_name, last_name, section_id');
		$this->db->from('enrolled_students');
		$this->db->limit(5);
		$this->db->order_by('enrolled_students.id', 'desc');
		$this->db->join('students_info', 'students_info.lrn = enrolled_students.students_info_lrn');
		$query = $this->db->get()->result();
		return $query;
	}

	public function getStrand($id)
	{	
		$this->db->select('strand_code');
		$this->db->from('sections');
		$this->db->where('id', $id);
		$query = $this->db->get()->result();
		$code = $query[0]->strand_code;

		$this->db->select('name');
		$this->db->from('strands');
		$this->db->where('code', $code);
		$res = $this->db->get()->result();
		return $res[0]->name;
	}

}

?>