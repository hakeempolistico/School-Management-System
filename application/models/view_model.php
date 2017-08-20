<?php

class view_model extends CI_Model{

	public function getRooms()
	{	
		$this->db->select('*');
		$this->db->from('rooms');
		$this->db->join('classes', 'classes.id = rooms.class_id');
		$query = $this->db->get()->result();
		return $query;
	}

}

?>