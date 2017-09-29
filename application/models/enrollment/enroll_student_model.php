<?php

class enroll_student_model extends CI_Model{

	public function getSections($table, $set1, $value1, $set2, $value2)
	{
		$this->db->where($set1, $value1);
		$this->db->where($set2, $value2);

		$query = $this->db->get($table)->result();
		return $query;
	}

	public function countRows($table, $set, $value)
	{
		$this->db->where($set, $value); //section_id = value
		$query = $this->db->get($table)->result(); //enrolled_students table
		return $query;
	}
	

}

?>