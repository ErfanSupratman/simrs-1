<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Homereturobat extends Operator_base {
	protected $dept_id;
	function __construct(){
		parent:: __construct();
		$this->load->model("m_returobat");
		$this->load->model("m_apotekumum");
		$data['page_title'] = "Retur Obat";
		$this->dept_id = $this->m_apotekumum->get_dept_id('APOTEK UMUM')['dept_id'];
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		// load template
		$data['content'] = 'returobat/home';
		$data['javascript'] = 'returobat/j_retur';
		$data['get_obat_retur'] = $this->m_returobat->get_all_returpasien($this->dept_id);
		$this->load->view('base/operator/template', $data);
	}

	public function search_retur()
	{
		$key = $_POST['key'];
		$result = $this->m_returobat->get_search_returpasien($key, $this->dept_id);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

}
