<?php

class rooms_model extends CI_Model{

	public function update($table, $data){	
		$this->db->where('room_id', $data['set']);
		unset($data['set']);
		$this->db->set($data);
		$query = $this->db->update($table);
		return $query;
	}

	public function getDistinctClass($room_id){
		$this->db->select('DISTINCT(section_id)');
		$this->db->where('room_id', $room_id);
		$this->db->from('schedules');
		return $this->db->get()->result();
	}

	public function getDistnctSubject($room_id){
		$this->db->select('DISTINCT(subject_code)');
		$this->db->where('room_id', $room_id);
		$this->db->from('schedules');
		return $this->db->get()->result();
	}

	public function getDistnctTime($room_id){
		$this->db->select('DISTINCT(time_start)');
		$this->db->where('room_id', $room_id);
		$this->db->from('schedules');
		return $this->db->get()->result();
	}

}

?>