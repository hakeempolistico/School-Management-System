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

        public function set($module, $sub, $type, $action)
        {	
        	switch ($type) {
			    case "add":
			        $action_type =  "Added Data";
			        break;
			    case "edit":
			        $action_type =  "Updated Data";
			        break;
			    case "activate":
			        $action_type =  "Activated Data";
			        break;
			    case "deactivate":
			        $action_type =  "Deactivated Data";
			        break;
			    case "login":
			        $action_type =  "Logged In";
			        break;
			    case "logout":
			        $action_type =  "Logged Out";
			        break;
			    default:
			        $action_type = "-";
			}

        	$user = $this->CI->session->position.' - '.$this->CI->session->first_name.' '.$this->CI->session->last_name;
        	$data = array(
        		'user' => $user,
        		'module' => $module,
        		'sub_module' => $sub,
        		'action_type' => $action_type,
        		'action' => $action,
        	);
        	$this->CI->global_model->insert('audit_trail', $data);
        }

}