<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class enroll_student extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('enrollment/picking');
	}

	public function enroll()
	{
		$this->load->view('enrollment/enroll_student');
	}

	public function strands()
	{
		$this->load->view('enrollment/strand_selection');
	}

	public function enrolled()
	{
		$this->load->view('enrollment/enrolled');
	}

	public function search()
	{
		$this->load->view('enrollment/search');
	}

}