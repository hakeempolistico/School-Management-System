<?php

class enroll_model extends CI_Model{

public function add($data)
{

$studentInfo = array(
	'id' => '',
	'lrn' => $data['lrn'],
	'fname' => $data['fname'],
	'mname' => $data['mname'],
	'lname' => $data['lname'],
	'sex' => $data['sex'],
	'contact' => $data['contact'],
	'birthdate' => $data['birthdate'],
	'birthplace' => $data['birthplace'],
	'age' => $data['age'],
	'mothertongue' => $data['mothertongue'],
	'religion' => $data['religion'],
	'street' => $data['street'],
	'barangay' => $data['barangay'],
	'city' => $data['city'],
	'province' => $data['province'],
	'fathername' => $data['fathername'],
	'mothername' => $data['mothername'],
	'fathercontact' => $data['fathercontact'],
	'mothercontact' => $data['mothercontact'],
	'guardian' => $data['guardian'],
	'relationship' => $data['relationship'],
	'guardiancontact' => $data['guardiancontact']
	);
	
$this->db->insert('enroll', $studentInfo);

}

}

?>