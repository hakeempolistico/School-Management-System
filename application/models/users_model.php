<?php

class users_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}

	public function login ($username, $password){
		$this->db->where('username',$username);
		$result = $this->db->get('users');
		
		$result = $result->result_array();
		
		if(strcmp($result[0]['password'], $password) != 0) {
			return FALSE;		
		}
		
		else {
				
		return $result;
		
		}	
	}

	public function checkUserPassword($username, $password){
		$this->db->where('username',$username);
		$resultUsers = $this->db->get('users')->row();
		if($resultUsers == null) {
			return 1;
		}
		$userName = $resultUsers->username;

		if($userName == $username){
			$pass = $resultUsers->password;

			if($pass == $password){
				return $resultUsers;
			}
			else{
				return 2;
			}
		}
		else{
			return 1;
		}

	}

	public function getPassword($username)
	{
		$this->db->where('username',$username);
		return $resultUsers = $this->db->get('users')->row()->password;
	}

	public function changePassword($username, $new)
	{
		$this->db->set('password', $new);
		$this->db->where('username', $username);
		return $this->db->update('users'); 

	}

	public function getSubjects($employee_id)
	{
		$this->db->where('teacher_id', $employee_id);
		$this->db->join('sections', 'sections.id = class_subjects.section_id');
		return $this->db->get('class_subjects')->result();
	}

	public function getClass($id)
	{
		$this->db->select('sections.name as section, year_levels.name as year_level, sections.strand_code');
		$this->db->where('sections.id', $id);
		$this->db->join('year_levels', 'year_levels.id = sections.year_level_id');
		$data = $this->db->get('sections')->result();
		$class;
		foreach ($data as $key => $val) {
			$res = $val->strand_code.' '.substr($val->year_level,6).'-'.$val->section;
		}
		return $res;
	}

	public function getSubject($code)
	{
		$this->db->where('code', $code);
		$data = $this->db->get('subjects')->result();
		return $data[0]->name;
	}

}

?>