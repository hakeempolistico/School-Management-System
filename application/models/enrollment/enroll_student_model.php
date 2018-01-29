<?php

class enroll_student_model extends CI_Model{

	public function getSections($table, $set1, $value1, $set2, $value2)
	{
		$this->db->where($set1, $value1);
		$this->db->where($set2, $value2);
		$this->db->where('status', 'active');

		$query = $this->db->get($table)->result();
		return $query;
	}

	public function getAcademicYearId($table, $set, $value, $id)
	{
		$this->db->select($id);
		$this->db->where($set, $value);
		
		$query = $this->db->get($table)->result();
		return $query;
	}

	public function getLastRow($table)
	{
		$row = $this->db->get($table)->last_row();
		$lrn = $row->students_info_lrn;
		return $lrn;
	}

	public function getMultRows($table, $set, $value)
	{
		$this->db->select('*');
		$this->db->where($set, $value);

		$query = $this->db->get($table)->result();
		return $query;
	}
	

}

?>