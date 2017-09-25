<?php

class global_model extends CI_Model{

	public function insert($table,$data)
	{
		$query = $this->db->insert($table, $data);
		return $query;
	}

	public function getRecords($table, $order_by=null, $set=null)
	{
		if($order_by != null && $set != null)
		{
		   $this->db->order_by($set, $order_by);
		}
		$query = $this->db->get($table)->result();
		return $query;
	}

	public function getRow($table, $set, $value)
	{
		$this->db->where($set, $value);
		$query = $this->db->get($table)->row();
		return $query;
	}

	public function delete($table,$data)
	{
		$query = $this->db->delete($table, $data);
		return $query;
	}

	public function count($table, $set=null, $value=null, $set2=null, $value2=null, $set3=null, $value3=null)
	{
		if($set != null && $value != null){
			$this->db->where($set, $value);
		}
		if($set2 != null && $value2 != null){
			$this->db->where($set2, $value2);
		}
		if($set3 != null && $value3 != null){
			$this->db->where($set3, $value3);
		}
		$query = $this->db->get($table);
		return $query->num_rows();
	}

}

?>