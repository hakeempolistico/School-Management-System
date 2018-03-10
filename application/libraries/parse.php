<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class parse {
	private $CI;

		public function __construct()
	    {
	        $this->CI =& get_instance();
			$this->CI->load->library('parser');
	    }

        public function parsed()
        {	
        	$data = array(
        	'logo' => '<!-- mini logo for sidebar mini 50x50 pixels --> 
        	<span class="logo-mini"><b>S</b>M</span>
        	<!-- logo for regular state and mobile devices -->
        	<span class="logo-lg">School Management</span>',
        	'footer' => '<footer class="main-footer hidden-print">
    						<div class="pull-right hidden-xs">
      						<b>Version</b> 1.0
    						</div>
    						<strong>Copyright &copy; 2017-2018 <a href="https://adminlte.io">Araullo School Management System</a>.</strong> All rights reserved.
  						</footer>'
			);
        	return $data;	
        }

}