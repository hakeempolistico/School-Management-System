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
		$countUser = $resultUsers->num_rows();

		if($countUser>0){
			$this->db->where('password',$password);
			$resultPass = $this->db->get('users');
			$countPass = $resultPass->num_rows();

			if($countPass>0){
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