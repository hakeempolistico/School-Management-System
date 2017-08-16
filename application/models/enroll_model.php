<?php

class enroll_model extends CI_Model{

public function add($data)
{

$this->db->insert('enroll', $data);

}

}

?>