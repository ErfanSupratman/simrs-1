<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homeigd extends CI_Controller {

	function __construct(){

		parent:: __construct();
		$this->load->model("m_homeigd");
	}

	public function index($page = 0)
	{
		// load template
		$data['content'] = 'home';
		$data['pasien_igd'] = $this->m_homeigd->get_antrian_pasien();
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$this->load->view('base/operator/template', $data);
	}

	public function search_pasien(){
		$insert = $_POST['search'];

		$result = $this->m_homeigd->search_pasien($insert);

		header('Content-Type: application/json');
		echo json_encode($result);	
	}

	public function search_antrian(){
		$result = $this->m_homeigd->get_antrian_pasien();

		header('Content-Type: application/json');
		echo json_encode($result);	
	}

}
