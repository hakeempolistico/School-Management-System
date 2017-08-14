<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('index');
	}

	public function index2()
	{
		$this->load->view('index2');
	}

	public function topnav()
	{
		$this->load->view('pages/layout/top-nav');
	}

	public function boxed()
	{
		$this->load->view('pages/layout/boxed');
	}

	public function fixed()
	{
		$this->load->view('pages/layout/fixed');
	}

	public function colside()
	{
		$this->load->view('pages/layout/collapsed-sidebar');
	}

	public function widgets()
	{
		$this->load->view('pages/widgets');
	}

	public function chartjs()
	{
		$this->load->view('pages/charts/chartjs');
	}

	public function morris()
	{
		$this->load->view('pages/charts/morris');
	}

	public function flot()
	{
		$this->load->view('pages/charts/flot');
	}

	public function inline()
	{
		$this->load->view('pages/charts/inline');
	}

	public function loading()
	{
		$this->load->view('enrollment/loading');
	}

	public function por()
	{
		$this->load->view('pages/examples/404');
	}

	public function payb()
	{
		$this->load->view('pages/examples/500');
	}

	public function blank()
	{
		$this->load->view('pages/examples/blank');
	}

	public function invoiceprint()
	{
		$this->load->view('pages/examples/invoice-print');
	}

	public function invoice()
	{
		$this->load->view('pages/examples/invoice');
	}

	public function lockscreen()
	{
		$this->load->view('pages/examples/lockscreen');
	}

	public function login()
	{
		$this->load->view('pages/examples/login');
	}

	public function pace()
	{
		$this->load->view('pages/examples/pace');
	}

	public function profile()
	{
		$this->load->view('pages/examples/profile');
	}

	public function register()
	{
		$this->load->view('pages/examples/register');
	}

	public function advanced()
	{
		$this->load->view('pages/forms/advanced');
	}

	public function editors()
	{
		$this->load->view('pages/forms/editors');
	}

	public function general()
	{
		$this->load->view('pages/forms/general');
	}

	public function compose()
	{
		$this->load->view('pages/mailbox/compose');
	}

	public function mailbox()
	{
		$this->load->view('pages/mailbox/mailbox');
	}

	public function readmail()
	{
		$this->load->view('pages/mailbox/read-mail');
	}

	public function data()
	{
		$this->load->view('pages/tables/data');
	}

	public function simple()
	{
		$this->load->view('pages/tables/simple');
	}

	public function buttons()
	{
		$this->load->view('pages/UI/buttons');
	}

	public function uigeneral()
	{
		$this->load->view('pages/UI/general');
	}

	public function icons()
	{
		$this->load->view('pages/UI/icons');
	}

	public function modals()
	{
		$this->load->view('pages/UI/modals');
	}

	public function sliders()
	{
		$this->load->view('pages/UI/sliders');
	}

	public function timeline()
	{
		$this->load->view('pages/UI/timeline');
	}

	public function calendar()
	{
		$this->load->view('pages/calendar');
	}

}
