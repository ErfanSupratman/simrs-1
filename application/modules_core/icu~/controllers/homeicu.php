<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Homeicu extends Operator_base {
	function __construct(){

		parent:: __construct();
		$this->load->model("m_homeicu");
		$data['page_title'] = "Home ICU";
		$this->session->set_userdata($data);	
	}

	public function index($page = 0)
	{	
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;

		// load template
		$data['content'] = 'home';
		$this->load->view('base/operator/template', $data);
	}

	public function search_pasien($query){
		$result = $this->m_homeicu->get_search_pasien($query);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function filter_pasien(){
		$query = $_POST['search'];
		$start = $this->date_db($_POST['start']);
		$end = $this->date_db($_POST['end']);

		$result = $this->m_homeicu->get_filter_pasien($query, $start, $end);

		header('Content-Type: applicaion/json');
		echo json_encode($result);
	}

	public function date_db($date){
		$dateTime = DateTime::createFromFormat('d/m/Y',$date);
		$newDateString = $dateTime->format('Y-m-d');
		return $newDateString;
	}
}
