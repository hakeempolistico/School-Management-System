<?php

class users_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}

			
	function checkRecord($username, $password, $table){
		$this->db->where('username',$username);
	    $query = $this->db->get($table);
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }		
	}

	public function checkPassword($username, $password, $table){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
	    $query = $this->db->get($table);
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }	
	}

}

?>