<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Pilih extends Operator_base {

	function __construct(){

		parent:: __construct();
		$this->load->model("m_pilihkamar");
		$data['page_title'] = "Pilih Kamar";
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		// load template
		$data['content'] = 'pilihkamar';
		$data['datapasien'] = $this->m_pilihkamar->get_data_pasien();
		$data['departemen'] = $this->m_pilihkamar->get_dept();
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$this->load->view('base/operator/template', $data);
	}

	public function get_order_pasien(){
		$result = $this->m_pilihkamar->get_data_pasien();

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function search_pasien($keyword){
		$result = $this->m_pilihkamar->get_search_pasien($keyword);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_kelas_kamar($query){
		$result = $this->m_pilihkamar->get_kelas_kamar($query);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function submit_pilih_kamar(){
		//ambil data
		$insert['inap_id']=$_POST['inap_id'];
		$insert['kamar_id']=$_POST['kamar_id'];
		$insert['bed_id'] = $bed['bed_id'];
		//$insert = 
		//masukan kedalam table visit_inap_kamar

		//edit status_visit pada table visit


	}

	public function check_bed($query){
		$result = $this->m_pilihkamar->check_bed($query);

		header('Content-Type: application/json');
		echo json_encode($result);		
	}

	public function get_kamar($query){
		$result = $this->m_pilihkamar->get_kamar($query);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_bed($query){
		$result = $this->m_pilihkamar->get_bed($query);

		header('Content-Type: application/json');
		echo json_encode($result);	
	}

}