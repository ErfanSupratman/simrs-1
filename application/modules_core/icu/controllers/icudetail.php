<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Icudetail extends Operator_base {
	function __construct(){

		parent:: __construct();
		$this->load->model("m_icudetail");
		$data['page_title'] = "ICU Detail";
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		// load template
		$data['content'] = 'icudetail/list';
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$this->load->view('base/operator/template', $data);
	}

}
