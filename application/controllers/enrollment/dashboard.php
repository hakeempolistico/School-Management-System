<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index()
	{	
		$data = array(
        	'logo' => '<!-- mini logo for sidebar mini 50x50 pixels --> 
        	<span class="logo-mini"><b>S</b>M</span>
        	<!-- logo for regular state and mobile devices -->
        	<span class="logo-lg">School Management</span>',
        	'footer' => '
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2017-2018 <a href="https://adminlte.io">Araullo School Management System</a>.</strong> All rights
    reserved.
  </footer>'
		);

		$this->parser->parse('enrollment/dashboard', $data);

		$this->sms_session->checkSession();

	}

}
