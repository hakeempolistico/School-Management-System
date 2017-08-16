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
		$countUser = $this->db->count_all_results('users');

		if($countUser>0){
			$this->db->where('password',$password);
			$countPass = $this->db->count_all_results('users'); 
			if($countPass>0){
				return 3;
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