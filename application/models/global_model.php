<?php

class global_model extends CI_Model{

	public function insert($table,$data)
	{
		$this->db->insert($table, $data);
	}

}

?>