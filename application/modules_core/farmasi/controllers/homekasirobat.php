<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Homekasirobat extends Operator_base {
	function __construct(){
		parent:: __construct();
		$this->load->model("m_kasirobat");
		$data['page_title'] = "Penjualan Obat";
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;

		// load template
		$data['content'] = 'kasirobat/home';
		$data['javascript'] = 'kasirobat/j_kasir';
		$this->load->view('base/operator/template', $data);
	}

	public function search_resep()
	{
		foreach ($_POST as $value) {
			$insert = $value;
		}
		
		$result = $this->m_kasirobat->search_resep($insert);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function search_resep_bayar()
	{
		foreach ($_POST as $value) {
			$insert = $value;
		}
		
		$result = $this->m_kasirobat->search_resep_bayar($insert);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

}
