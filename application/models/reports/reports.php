<?php

class reports extends CI_Model
{
	public function construct()
	{
		parent::__construct();
	}

	
	public function getReports($arr)
	{
		$this->db->where($arr);
		$this->db->from('enrolled_students');
		$this->db->join('students_info', 'students_info.lrn = enrolled_students.students_info_lrn');
		$this->db->join('sections', 'sections.id = enrolled_students.section_id');
		$this->db->join('addresses', 'addresses.students_info_lrn = enrolled_students.students_info_lrn');
		//echo '<pre>';print_r($this->db->get()->result());echo '<pre>';
		return $this->db->get()->result();

	}
	public function getAcademicYear($val)
	{
		$this->db->where('id', $val);
		$data = $this->db->get('academic_years')->row();
		return $data->year_start.'-'.$data->year_end;

	}
	public function getYearLevel($val)
	{
		$this->db->where('id', $val);
		$data = $this->db->get('year_levels')->row();
		return $data->name;
	}
	public function getSection($val)
	{
		$this->db->where('id', $val);
		$data = $this->db->get('sections')->row();
		return $data->name;
	}
}

?>