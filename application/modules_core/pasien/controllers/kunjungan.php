<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Kunjungan extends Operator_base {
	function __construct(){

		parent:: __construct();
		$data['page_title'] = "Kunjungan";
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		// load template
		$data['content'] = 'kunjungan/list';
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$this->load->view('base/operator/template', $data);

	}

	public function search_kunjungan($query){
			$this->load->model('m_kunjungan');
			$result = $this->m_daftarpasien->get_search_kunjungan($query);
			
			header('Content-Type: application/json');
		 	echo json_encode($result);
	}

}
