<?php

class advisory_class_model extends CI_Model{

	public function getGrades($table, $where)
	{
		$this->db->select('*');
		$this->db->from('grades');
		$this->db->join('enrolled_students', 'enrolled_students.students_info_lrn = grades.lrn');
		$this->db->where($where);
		return $this->db->get()->result();

	}
}

?>