<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );

class Icudetail extends Application_base {
	function __construct(){

		parent:: __construct();
		$this->load->model("m_icudetail");
	}

	public function index($page = 0)
	{
		// load template
		$data['content'] = 'icudetail/list';
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$data['menu_view'] = $this->menu();
		$this->load->view('base/operator/template', $data);
	}

	public function daftar($rm_id='', $visit_id='')
	{
		$data['content'] = 'icudetail/list';
		$data['javascript'] = 'icu/icudetail/javascript/j_list';
		$data['menu_view'] = $this->menu();
		$data['rm_id'] = $rm_id;
		$data['visit_id'] = $visit_id;
		$this->session->set_userdata($data);

		$data['pasienicu'] = $this->m_icudetail->get_pasien_icu($rm_id);
		$data['tindakan'] = $this->m_icudetail->get_master_tindakan();
		$data['kategori'] = $this->m_icudetail->get_tindakan_kategori();
		$data['visit_care'] = $this->m_icudetail->get_visit_care($visit_id);
		$data['overview_history'] = $this->m_icudetail->get_overview($visit_id);
		$data['visit_resep'] = $this->m_icudetail->get_visit_resep($visit_id);
		$data['order_operasi'] = $this->m_icudetail->get_order_operasi($visit_id);
		$data['gizi'] = $this->m_icudetail->get_visit_gizi($visit_id);
		$data['makan'] = $this->m_icudetail->get_permintaan_awal($visit_id);
		$data['riwayat'] = $this->m_icudetail->get_all_medical_record($rm_id);
		//print_r($data['makan']);die();

		$this->load->view('base/operator/template', $data);
	}

	public function get_all_petugas()
	{
		$result = $this->m_icudetail->get_all_petugas();

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	/*visit care icu*/
	public function get_tindakan($id)
	{
		$result = $this->m_icudetail->get_tindakan($id);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function save_tindakan()
	{
		foreach ($_POST as $value) {
			$insert = $value;
		}

		//$insert['visit_id'] = $this->session->userdata('visit_id');
		$visit_id = $insert['visit_id'];
		$id = $this->m_icudetail->get_last_visit_care($visit_id);
		if($id){
			$vid = intval(substr($id['value'], strlen($visit_id) + 2)) + 1;
			if (strlen($vid) == "1") {
				$vid = '000'. $vid;
			}else if(strlen($vid) == "2"){
				$vid = '00' . $vid;
			}else if (strlen($vid) == "3") {
				$vid = '0' . $vid;
			}
			$insert['care_id'] = "CA".$visit_id."".($vid);
		}else{
			$insert['care_id'] = "CA".$visit_id."0001";
		}

		//$insert['waktu_tindakan'] = $insert['waktu_tindakan'] ."".date('H:i:s');
		$hasil = $this->m_icudetail->save_tindakan($insert);
		
		$ins = $this->m_icudetail->get_inserted_visit_care($insert['care_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));
	}
	/*akhir visit care icu*/

	/*overview*/
	public function save_overview()
	{
		foreach ($_POST as $value) {
			$insert = $value;
		}

		//$insert['visit_id'] = $this->session->userdata('visit_id');
		$visit_id = $insert['visit_id'];
		$id = $this->m_icudetail->get_last_visit_overview($visit_id);
		if($id){
			$vid = intval(substr($id['value'], strlen($visit_id))) + 1;
			if (strlen($vid) == "1") {
				$vid = '0'. $vid;
			}
			$insert['overview_id'] = $visit_id."".($vid);
		}else{
			$insert['overview_id'] = $visit_id."01";
		}

		//$insert['waktu_tindakan'] = date('Y-m-d H:i:s');
		$hasil = $this->m_icudetail->save_overview($insert);
		
		$ins = $this->m_icudetail->get_inserted_visit_overview($insert['overview_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));
	}
	/*akhir overview*/

	/*visit resep icu*/
	public function save_visit_resep($value='')
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];
		$id = $this->m_icudetail->get_last_visit_resep($visit_id);
		if($id){
			$vir = intval(substr($id['value'], strlen($visit_id) + 2)) + 1;
			if (strlen($vir) == "1") {
				$vir = '000'. $vir;
			}else if(strlen($vir) == "2"){
				$vir = '00' . $vir;
			}else if (strlen($vir) == "3") {
				$vir = '0' . $vir;
			}
			$insert['resep_id'] = "RE".$visit_id."".($vir);
		}else{
			$insert['resep_id'] = "RE".$visit_id."0001";
		}

		//$insert['tanggal'] = date('Y-m-d H:i:s');
		$hasil = $this->m_icudetail->save_visit_resep($insert);
		
		$ins = $this->m_icudetail->get_inserted_visit_resep($insert['resep_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));
	}

	public function delete_resep($value='')
	{
		$result = $this->m_icudetail->delete_resep($value);
		header('Content-Type:application/json');
		echo(json_encode($result));
	}
	/*akhir visit resep*/

	/*order operasi*/
	public function order_kamar_operasi()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];
		$id = $this->m_icudetail->get_last_order_operasi($visit_id);
		if($id){
			$vig = intval(substr($id['value'], strlen($visit_id) + 2)) + 1;
			if (strlen($vig) == "1") {
				$vig = '0'. $vig;
			}
			$insert['order_operasi_id'] = "OR".$visit_id."".($vig);
		}else{
			$insert['order_operasi_id'] = "OR".$visit_id."01";
		}

		//$insert['waktu_mulai'] = date('Y-m-d H:i:s');
		$hasil = $this->m_icudetail->save_order_operasi($insert);
		
		$ins = $this->m_icudetail->get_inserted_order_operasi($insert['order_operasi_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));
	}


	public function delete_order($value='')
	{
		$result =  $this->m_icudetail->delete_order($value);
		header('Content-Type:application/json');
		echo(json_encode($result));	
	}
	/*akhir order operasi*/


	/*konsultasi gizi*/
	public function save_gizi()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];
		$id = $this->m_icudetail->get_last_visit_gizi($visit_id);
		if($id){
			$vig = intval(substr($id['value'], strlen($visit_id) + 2)) + 1;
			if (strlen($vig) == "1") {
				$vig = '000'. $vig;
			}else if(strlen($vir) == "2"){
				$vig = '00' . $vig;
			}else if (strlen($vig) == "3") {
				$vig = '0' . $vig;
			}
			$insert['gizi_id'] = "GI".$visit_id."".($vig);
		}else{
			$insert['gizi_id'] = "GI".$visit_id."0001";
		}

		//$insert['tanggal'] = date('Y-m-d H:i:s');
		$hasil = $this->m_icudetail->save_visit_gizi($insert);
		
		$ins = $this->m_icudetail->get_inserted_visit_gizi($insert['gizi_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));

	}

	public function delete_gizi($value='')
	{
		$result =  $this->m_icudetail->delete_gizi($value);
		header('Content-Type:application/json');
		echo(json_encode($result));
	}
	/*akhir konsultasi gizi*/

	/*permintaan makan - putyu*/
	public function get_identitas_pasien($query){
		$result = $this->m_icudetail->get_identitas_pasien($query);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function get_ruang($query){
		$result = $this->m_icudetail->get_ruang($query);

		header('Content-Type: application/json');
		echo json_encode($result);

	}

	public function get_paket_makan(){
		$result = $this->m_icudetail->get_paket_makan();

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function search_paket_makan($query){
		$result = $this->m_icudetail->search_paket_makan($query);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function add_permintaan_makan(){
		$insert['visit_id'] = $_POST['visit_id'];
		//$insert['waktu_permintaan'] = $this->date_db($_POST['waktu_permintaan']);
		$insert['paket_id'] = $_POST['paket_id'];
		$insert['keterangan'] = $_POST['keterangan'];
		$insert['id'] = $this->m_icudetail->create_permintaan_makan($insert['visit_id']);

		$input = $this->m_icudetail->add_permintaan_makan($insert);

		if($input){
			$result = $this->m_icudetail->get_permintaan_makan($insert['id']);		
			header('Content-Type: application/json');
			echo json_encode($result);
		}

	}

	public function get_permintaan_makan($visit_id){
		$result = $this->m_icudetail->get_permintaan_awal($visit_id);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function delete_permintaan_makan($value='')
	{
		$result =  $this->m_icudetail->delete_permintaan_makan($value);
		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	/*akhir permintaan makan*/

	/*riwayat penyakit*/
	public function get_overview_riwayat($visit_id='')
	{
		$result = $this->m_icudetail->get_riwayat($visit_id);

		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function get_therapy_riwayat($visit_id)
	{
		$result = $this->m_icudetail->get_therapy_riwayat($visit_id);

		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function get_resep_riwayat($visit_id)
	{
		$result = $this->m_icudetail->get_resep_riwayat($visit_id);

		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function get_penunjang_riwayat($visit_id)
	{
		$result = $this->m_icudetail->get_penunjang_riwayat($visit_id);

		header('Content-Type:application/json');
		echo(json_encode($result));
	}


	/*akhir riwayat penyakit*/

	public function date_db($date){
		$dateTime = DateTime::createFromFormat('d/m/Y',$date);
		$newDateString = $dateTime->format('Y-m-d');
		return $newDateString;
	}
}
