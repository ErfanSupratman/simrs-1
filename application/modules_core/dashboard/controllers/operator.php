<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operator extends CI_Controller {
	// public function __construct() {
	// 	// call the controller construct
	// 	parent::__construct();
	// 	// load model
	// 	$this->load->model('m_dashboard');
	// 	// page title
	// 	$this->page_title();

	// 	// active page
	// 	$active['parent_active'] = "home";
	// 	$active['child_active'] = "home";
	// 	$this->session->set_userdata($active);	

	// }

	public function index()
	{
		// // menu
		// $data['menu'] = $this->menu();
		// // $data['menu2'] = $this->menu_horizontal();
		// // user detail
		// $data['user'] = $this->user;

		// // load template
		 $data['content'] = 'operator/dashboard';
		$this->load->view('base/operator/template', $data);
	}

	// // page title
	// public function page_title() {
	// 	$data['page_title'] = 'Dashboard';
	// 	$this->session->set_userdata($data);
	// }
}
