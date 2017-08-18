<?php

class enroll_model extends CI_Model{

	public function add($table,$data)
	{
		$this->db->insert($table, $data);
	}

}

?>