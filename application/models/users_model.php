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
		$resultUsers = $this->db->get('users');
		$userName = $resultUsers->row()->username;

		if($userName == $username){
			$pass = $resultUsers->row()->password;

			if($pass == $password){
				return $resultUsers->row();
			}
			else{
				return 2;
			}
		}
		else{
			return 1;
		}

	}

}

?>