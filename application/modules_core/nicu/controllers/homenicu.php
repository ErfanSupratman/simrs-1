<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );

class Homenicu extends Application_Base {
	function __construct() {
		parent:: __construct();
		$this->load->model('m_nicu');
	}

	public function index($page = 0)
	{
		// load template
		$data['content'] = 'home';
		$data['menu'] = $this->menu();
		$this->dept_id = 23;
		$this->load->model('m_nicu');
		$data['menu_view'] = $this->menu();

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
