<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );

class Bersalindetail extends Application_Base {
	protected $ses;
	function __construct() {
		parent:: __construct();

		$this->load->model('m_bersalin');
	}
	public function index($page = 0)
	{
		// load template
		
		
	}

	public function daftar($rm_id = '', $visit_id='')
	{
		$data['content'] = 'bersalindetail/list';
		$data['menu'] = $this->menu();
		$data['menu_view'] = $this->menu();
		//$data['user'] = $this->user;
		$data['javascript'] = "bersalindetail/javascript/j_list";	
		$this->load->model('m_bersalin');
		//load semua data pasien dengan no rm tertentu
		$pasien = $this->m_bersalin->get_pasien($rm_id);
		$params = $this->get_alamat_pasien($pasien);
		$data['pasien'] = $params;

		$history = $this->get_overview_history($visit_id);
		$data['overview_history'] = $history;
		
		$data['tindakan'] = $this->m_bersalin->get_master_tindakan();
		$data['kategori'] = $this->m_bersalin->get_tindakan_kategori();
		$data['visit_id'] = $visit_id;

		$data['visit_care'] = $this->m_bersalin->get_visit_care($visit_id);

		$this->session->set_userdata($data);
		$data['visit_resep'] = $this->m_bersalin->get_visit_resep($visit_id);
		$data['petugas'] = $this->m_bersalin->get_all_petugas();
		$data['gizi'] = $this->m_bersalin->get_visit_gizi($visit_id);
		$data['departmentoperasi'] =  $this->m_bersalin->get_department_operasi();
		$data['order_operasi'] = $this->m_bersalin->get_order_operasi($visit_id);
		$data['dept_rujukan'] = $this->m_bersalin->get_dept_rujukan();
		
		$this->load->view('base/operator/template', $data);
	}

	public function get_alamat_pasien($arr)
	{
		$prov_skrg = $this->m_bersalin->get_prov($arr['prov_id_skr']);
		$kab_skrg = $this->m_bersalin->get_kab($arr['kab_id_skr']);
		$kec_skrg = $this->m_bersalin->get_kec($arr['kec_id_skr']);
		$kel_skrg = $this->m_bersalin->get_kel($arr['kel_id_skr']);

		$prov_ktp = $this->m_bersalin->get_prov($arr['prov_id']);
		$kab_ktp = $this->m_bersalin->get_kab($arr['kab_id']);
		$kec_ktp = $this->m_bersalin->get_kec($arr['kec_id']);
		$kel_ktp = $this->m_bersalin->get_kel($arr['kel_id']);

		
		$arr['provinsi_skr'] = $prov_skrg['nama_prov'];
		$arr['kabupaten_skr'] = $kab_skrg['nama_kab'];
		$arr['kecamatan_skr'] = $kec_skrg['nama_kec'];
		$arr['kelurahan_skr'] = $kel_skrg['nama_kel'];
		$arr['provinsi'] = $prov_ktp['nama_prov'];
		$arr['kabupaten'] = $kab_ktp['nama_kab'];
		$arr['kecamatan'] = $kec_ktp['nama_kec'];
		$arr['kelurahan'] = $kel_ktp['nama_kel'];
		
		return $arr;
	}

	public function get_overview_history($v_id)
	{
		$result = $this->m_bersalin->get_overview_history($v_id);
		return $result;
	}

	public function save_overview()
	{
		$this->load->model('m_bersalin');
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$insert['tanggal'] = date('Y-m-d H:i:s');
		//kurang overview_id
		//$insert['overview_id'] = '100';
		$hasil = $this->m_bersalin->insert_overview($insert);

		header('Content-Type:application/json');
		echo(json_encode($insert));
	}

	public function get_tindakan($id)
	{
		$this->load->model('m_bersalin');
		$result = $this->m_bersalin->get_tindakan($id);

		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function save_tindakan()
	{
		$this->load->model('m_bersalin');
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];
		$id = $this->m_bersalin->get_last_visit_care($visit_id);
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

		//$insert['waktu_tindakan'] = date('Y-m-d H:i:s');
		$hasil = $this->m_bersalin->save_tindakan($insert);
		
		$ins = $this->m_bersalin->get_inserted_visit_care($insert['care_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));
	}

	public function save_visit_resep()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];
		$id = $this->m_bersalin->get_last_visit_resep($visit_id);
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
		$hasil = $this->m_bersalin->save_visit_resep($insert);
		
		$ins = $this->m_bersalin->get_inserted_visit_resep($insert['resep_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));

	}

	public function delete_resep($value='')
	{
		$result = $this->m_bersalin->delete_resep($value);
		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	/*konsultasi gizi*/
	public function save_gizi()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];
		$id = $this->m_bersalin->get_last_visit_gizi($visit_id);
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
		$hasil = $this->m_bersalin->save_visit_gizi($insert);
		
		$ins = $this->m_bersalin->get_inserted_visit_gizi($insert['gizi_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));

	}

	public function delete_gizi($value='')
	{
		$result =  $this->m_bersalin->delete_gizi($value);
		header('Content-Type:application/json');
		echo(json_encode($result));
	}
	/*akhir konsultasi gizi*/

	/*order operasi*/
	public function order_kamar_operasi()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];
		$id = $this->m_bersalin->get_last_order_operasi($visit_id);
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
		$hasil = $this->m_bersalin->save_order_operasi($insert);
		
		$ins = $this->m_bersalin->get_inserted_order_operasi($insert['order_operasi_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));
	}


	public function delete_order($value='')
	{
		$result =  $this->m_bersalin->delete_order($value);
		header('Content-Type:application/json');
		echo(json_encode($result));	
	}
	/*akhir order operasi*/

	/*permintaan makan*/
	public function get_ruang($value='')
	{
		$result =  $this->m_bersalin->get_ruang($value);
		header('Content-Type:application/json');
		echo(json_encode($result));	
	}

	public function get_permintaan_makan($value='')
	{
		$result =  $this->m_bersalin->get_permintaan_makan($value);
		header('Content-Type:application/json');
		echo(json_encode($result));	
	}

	public function get_paket_makan()
	{
		$result =  $this->m_bersalin->get_paket_makan();
		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function search_paket_makan($value='')
	{
		$result =  $this->m_bersalin->search_paket_makan($value);
		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function add_permintaan_makan()
	{
		$insert['visit_id'] = $_POST['visit_id'];
		//$now = date('Y-m-d H:i:s');
		$insert['waktu_permintaan'] = date('Y-m-d H:i:s', strtotime($_POST['waktu_permintaan'] . " 00:00:00"));
		$insert['paket_id'] = $_POST['paket_id'];
		$insert['keterangan'] = $_POST['keterangan'];
		$insert['id'] = $this->m_bersalin->create_permintaan_makan($insert['visit_id']);

		$input = $this->m_bersalin->add_permintaan_makan($insert);

		if($input){
			$result = $this->m_bersalin->get_permintaan_makan($insert['id']);		
			header('Content-Type: application/json');
			echo json_encode($result);
		}
	}

	public function get_permintaan_awal($value='')
	{
		$result =  $this->m_bersalin->get_permintaan_awal($value);
		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function delete_permintaan_makan($value='')
	{
		$result =  $this->m_bersalin->delete_permintaan_makan($value);
		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	/*akhir permintaan makan*/

	/*visit kegiatan bersalin*/
	public function get_all_petugas()
	{
		$result =  $this->m_bersalin->get_all_petugas();
		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function get_dept_rujukan()
	{
		$result =  $this->m_bersalin->get_dept_rujukan();
		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function submit_kegiatan_bersalin()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		//$insert['waktu'] = date('Y-m-d H:i:s'); //ini untuk waktu, real time aja
		$insert['bersalin_id'] = $this->m_bersalin->get_last_kegiatan_bersalin($insert);
		$result = $this->m_bersalin->insert_kegiatan_bersalin($insert);
		header('Content-Type:application/json');
		echo(json_encode($result));
	}
	/*akhir visit kegiatan bersalin*/
	
}