<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class audit_trail {
	private $CI;

		public function __construct()
	    {
	        $this->CI =& get_instance();
	        $this->CI->load->helper('url');
	        $this->CI->load->model('global_model');
	    }

        public function add($module, $sub, $action)
        {	
        	$user = $this->CI->session->position.' - '.$this->CI->session->first_name.' '.$this->CI->session->last_name;
        	$data = array(
        		'user' => $user,
        		'module' => $module,
        		'sub_module' => $sub,
        		'action' => $action,
        	);
        	$this->CI->global_model->insert('audit_trail', $data);
        }

}