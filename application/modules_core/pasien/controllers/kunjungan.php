<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );

class Kunjungan extends Application_base {
	public function index($page = 0)
	{
		// load template
		$data['content'] = 'kunjungan/list';
		$data['menu_view'] = $this->menu();
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
