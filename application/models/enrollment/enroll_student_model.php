<?php

class enroll_student_model extends CI_Model{

	public function getSections($table, $set1, $value1, $set2, $value2)
	{
		$this->db->where($set1, $value1);
		$this->db->where($set2, $value2);

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
	

}

?>