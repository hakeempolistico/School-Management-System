<?php

class enroll_student extends CI_Model{

function insert_into_db()
{

$lrn = $_POST['lrn'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$sex = $_POST['sex'];
$contact = $_POST['contact'];
$birthdate = $_POST['birthdate'];
$birthplace = $_POST['birthplace'];
$age = $_POST['age'];
$mothertongue = $_POST['mothertongue'];
$religion = $_POST['religion'];
$street = $_POST['street'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];
$province = $_POST['province'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$fathercontact = $_POST['fathercontact'];
$mothercontact = $_POST['mothercontact'];
$guardian = $_POST['guardian'];
$relationship = $_POST['relationship'];
$guardiancontact = $_POST['guardiancontact'];


$this->db->query("INSERT INTO enroll VALUES('','$lrn','$fname','$mname','$lname','$sex','$contact','$birthdate','$birthplace','$age','$mothertongue','$religion','$street','$barangay','$city','$province','$fathername','$mothername','$fathercontact','$mothercontact','$guardian','$relationship','$guardiancontact')");
}


}

?>