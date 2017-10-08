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

}

?>