<?php

class global_model extends CI_Model{

	public function insert($table,$data)
	{
		$this->db->insert($table, $data);
	}

	public function getRecords($table)
	{
		$query = $this->db->get($table)->result();
		return $query;
	}

	public function getRow($table, $set, $value)
	{
		$this->db->where($set, $value);
		$query = $this->db->get($table)->result();
		return $query;
	}

}

?>