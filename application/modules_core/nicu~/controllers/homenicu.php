<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Homenicu extends Operator_Base {
	function __construct() {
		parent:: __construct();
		$this->load->model('m_nicu');
		$data['page_title'] = "Home NICU";
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		// load template
		$data['content'] = 'home';
		$this->dept_id = 23;
		$this->load->model('m_nicu');

		$data['javascript'] = "nicudetail/j_list";

		$this->session->set_userdata($data);
		$this->load->view('base/operator/template', $data);
	}

	public function search_pasien($value='')
	{
		$result = $this->m_nicu->get_search_pasien($value);

		header('Content-Type: application/json');
	 	echo json_encode($result); 
	}

}
