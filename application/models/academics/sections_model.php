<?php

class sections_model extends CI_Model{

	public function update($table, $data){	
		$this->db->where('strand_code', $data['set']);
		$this->db->where('year_level_id', $data['set2']);
		$this->db->where('name', $data['set3']);
		unset($data['set']);
		unset($data['set2']);
		unset($data['set3']);
		$this->db->set($data);
		$query = $this->db->update($table);
		return $query;
	}
	public function getRecords($table, $order_by=null, $set=null)
	{
		if($order_by != null && $set != null)
		{
		   $this->db->order_by('s.'.$set, $order_by);
		}
		$this->db->select('s.id, s.strand_code, yl.name a, s.name, s.capacity');
		$this->db->from('sections as s');
		$this->db->join('year_levels as yl', 'yl.id = s.year_level_id');
		return $this->db->get()->result();
	}

}

?>