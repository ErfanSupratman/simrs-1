<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );

class Homerawatjalan extends Application_base {
	function __construct(){

		parent:: __construct();
		$this->load->model("m_homerawatjalan");
	}

	public function index($page = 0)
	{
		// load template
		$data['content'] = 'home';
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$data['menu_view'] = $this->menu();	
		$data['antrian'] = $this->m_homerawatjalan->daftar_pasien();
		$this->load->view('base/operator/template', $data);
	}

	public function get_antrian(){
		$result = $this->m_homerawatjalan->daftar_pasien();

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function search_pasien($query){
		$result = $this->m_homerawatjalan->get_search_pasien($query);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function filter_pasien(){
		$query = $_POST['search'];
		$start = $this->date_db($_POST['start']);
		$end = $this->date_db($_POST['end']);

		$result = $this->m_dafm_homerawatjalantarpasien->get_filter_pasien($query, $start, $end);

		header('Content-Type: applicaion/json');
		echo json_encode($result);
	}

	public function date_db($date){
		$dateTime = DateTime::createFromFormat('d/m/Y',$date);
		$newDateString = $dateTime->format('Y-m-d');
		return $newDateString;
	}

}
