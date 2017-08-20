<?php

class global_model extends CI_Model{

	public function insert($table,$data)
	{
		$query = $this->db->insert($table, $data);
		echo $this->db->last_query();
		exit;
		return $query;
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