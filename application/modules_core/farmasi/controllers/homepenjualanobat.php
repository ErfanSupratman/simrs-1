<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Homepenjualanobat extends Operator_base {
	function __construct(){
		parent:: __construct();
		$this->load->model("m_jualobat");
		$data['page_title'] = "Penjualan Obat";
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		// load template
		$data['content'] = 'penjualanobat/home';
		$data['javascript'] = 'penjualanobat/j_jualobat';
		$this->load->view('base/operator/template', $data);
	}

}
