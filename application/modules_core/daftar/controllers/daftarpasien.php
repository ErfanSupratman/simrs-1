<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Daftarpasien extends operator_base {
	public function __construct() {
		// call the controller construct
		parent::__construct();

		// page title
		$data['page_title'] = "Daftar Pasien";
		$this->session->set_userdata($data);	

	}

	public function index($page = 0)
	{
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		// load template
		$data['content'] = 'registrasipasien';
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$this->load->view('base/operator/template', $data);
	}

}
