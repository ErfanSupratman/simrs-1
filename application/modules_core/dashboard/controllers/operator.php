<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Operator extends Operator_base {
	public function __construct() {
		// call the controller construct
		parent::__construct();

		// page title
		$this->page_title();

		// active page
		$active['parent_active'] = "home";
		$active['child_active'] = "home";
		$this->session->set_userdata($active);	
	}

	public function index()
	{
		//echo ($this->uri->segment(1) . '/' . $this->uri->segment(2));die();
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		
		$data['content'] = 'operator/dashboard';
		$this->load->view('base/operator/template', $data);
	}

	// // page title
	public function page_title() {
		$data['page_title'] = 'Dashboard';
		$this->session->set_userdata($data);
	}
}
