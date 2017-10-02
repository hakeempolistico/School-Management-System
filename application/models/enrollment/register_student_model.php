<?php

class register_student_model extends CI_Model{

	public function insert($table,$data)
	{
		$this->db->insert($table, $data);

		$row = $this->db->get($table)->last_row();
		$lrn = $row->lrn;
		return $lrn;
	}

	public function getLastRow($table)
	{
		$row = $this->db->get($table)->last_row();
		$lrn = $row->lrn;
		return $lrn;
	}

	public function insertGetContactId($table,$data)
	{
		$this->db->insert($table, $data);

		$row = $this->db->get($table)->last_row();
		$id = $row->id;
		return $id;
	}

	

}

?>