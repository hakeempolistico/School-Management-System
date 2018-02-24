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

        public function set($module, $sub, $action, $description)
        {	
        	switch ($action) {
			    case "add":
			        $action =  "Added Data";
			        break;
			    case "edit":
			        $action =  "Updated Data";
			        break;
			    case "activate":
			        $action =  "Activated";
			        break;
			    case "deactivate":
			        $action =  "Deactivated";
			        break;
			    case "login":
			        $action =  "Logged In";
			        break;
			    case "logout":
			        $action =  "Logged Out";
			        break;
			    case "registered":
			        $action =  "Registered Student";
			        break;
			    case "enrolled":
			        $action =  "Enrolled Student";
			        break;
			    case "save":
			        $action =  "Saved Data";
			        break;
			    case "assign":
			        $action =  "Assigned Class";
			        break;
			    default:
			        $action = "-";
			}

        	$user = $this->CI->session->position.' - '.$this->CI->session->first_name.' '.$this->CI->session->last_name;
        	$data = array(
        		'user' => $user,
        		'module' => $module,
        		'sub_module' => $sub,
        		'action' => $action,
        		'description' => $description,
        	);
        	$this->CI->global_model->insert('audit_trail', $data);
        }

}