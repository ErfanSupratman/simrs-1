<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );

class Homebersalin extends Application_Base {
	function __construct() {
		parent:: __construct();
		$this->load->model('m_bersalin');
	}

	public function index($page = 0)
	{
		// load template
		$data['content'] = 'home';
		$data['menu'] = $this->menu();
		//$data['user'] = $this->user;
		$this->dept_id = 19;
		$this->load->model('m_bersalin');
		$data['menu_view'] = $this->menu();

		$allpasienbersalin = $this->m_bersalin->get_pasien_by_dept($this->dept_id);
		//$data['allpasiens'] = $allpasienbersalin;
		$data['javascript'] = "bersalindetail/javascript/j_list";

		$this->session->set_userdata($data);
		$this->load->view('base/operator/template', $data);
	}

	public function search_pasien($value='')
	{
		$result = $this->m_bersalin->get_search_pasien($value);

		header('Content-Type: application/json');
	 	echo json_encode($result); 
	}

}
