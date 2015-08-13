<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );

class Daftarpasien extends Application_base {
	function __construct(){

		parent:: __construct();
		$this->load->model("m_daftarpasien");
	}

	public function index($page = 0)
	{
		// load template
		$data['content'] = 'daftarpasien/list';
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$data['menu_view'] = $this->menu();
		$this->load->view('base/operator/template', $data);
	}	

	public function periksa($rj_id, $visit_id){
		$data['content'] = 'daftarpasien/list';
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$rm = $this->m_daftarpasien->get_rm_id($visit_id);
		$rm_id = $rm['rm_id'];
		$dept = $this->m_daftarpasien->get_dept_id("POLI UMUM");
		$data['dept_id'] = $dept['dept_id'];
		$data['menu_view'] = $this->menu();
		$pasien = $this->m_daftarpasien->get_pasien($rm_id);
		$params = $this->get_alamat_pasien($pasien, $visit_id);
		$data['pasien'] = $params;
		$data['visit_id'] = $visit_id;
		$data['visit_rj'] = $this->m_daftarpasien->get_ri_id($visit_id);
		$history = $this->get_overview_history($visit_id,$rj_id);
		$data['overview_history'] = $history;
		$data['visit_resep'] = $this->m_daftarpasien->get_visit_resep($visit_id);
		$data['kategori'] = $this->m_daftarpasien->get_tindakan_kategori();
		$data['dokter'] = $this->m_daftarpasien->get_dokter();
		$data['order_operasi'] = $this->m_daftarpasien->get_order_kamar_operasi($visit_id);
		$data['visit_care'] = $this->m_daftarpasien->get_visit_care($visit_id);
		$data['gizi']= $this->m_daftarpasien->get_visit_gizi($visit_id);
		$data['poliklinik'] = $this->m_daftarpasien->get_dept_rj();
		$data['riwayat_klinik'] = $this->m_daftarpasien->get_riwayat_klinik($rm_id);

		$this->load->view('base/operator/template', $data);	
	}

	public function get_master_tindakan(){
    	$result = $this->m_daftarpasien->get_master_tindakan();

    	header('Content-Type: application/json');
    	echo json_encode($result);	
    }

	public function get_overview_history($v_id, $rj_id)
	{
		$result = $this->m_daftarpasien->get_overview_history($v_id, $rj_id);
		return $result;
	}

	public function get_tindakan($id)
	{
		$result = $this->m_daftarpasien->get_tindakan($id);

		header('Content-Type:application/json');
		echo(json_encode($result));
	}


	public function get_alamat_pasien($arr, $visit_id)
	{
		$prov_skrg = $this->m_daftarpasien->get_prov($arr['prov_id_skr']);
		$kab_skrg = $this->m_daftarpasien->get_kab($arr['kab_id_skr']);
		$kec_skrg = $this->m_daftarpasien->get_kec($arr['kec_id_skr']);
		$kel_skrg = $this->m_daftarpasien->get_kel($arr['kel_id_skr']);

		$prov_ktp = $this->m_daftarpasien->get_prov($arr['prov_id']);
		$kab_ktp = $this->m_daftarpasien->get_kab($arr['kab_id']);
		$kec_ktp = $this->m_daftarpasien->get_kec($arr['kec_id']);
		$kel_ktp = $this->m_daftarpasien->get_kel($arr['kel_id']);
		$visit = $this->m_daftarpasien->get_carabayar($visit_id);
		
		$arr['provinsi_skr'] = $prov_skrg['nama_prov'];
		$arr['kabupaten_skr'] = $kab_skrg['nama_kab'];
		$arr['kecamatan_skr'] = $kec_skrg['nama_kec'];
		$arr['kelurahan_skr'] = $kel_skrg['nama_kel'];
		$arr['provinsi'] = $prov_ktp['nama_prov'];
		$arr['kabupaten'] = $kab_ktp['nama_kab'];
		$arr['kecamatan'] = $kec_ktp['nama_kec'];
		$arr['kelurahan'] = $kel_ktp['nama_kel'];
		$arr['pembayaran'] = $visit['cara_bayar'];
		$arr['coba'] = $visit_id;

		return $arr;
	}

	public function save_overview()
	{
		
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$insert['id'] = $this->m_daftarpasien->get_overview_id($insert['visit_id']);

		$insert['waktu'] = date('Y-m-d H:i:s');

		$hasil = $this->m_daftarpasien->insert_overview($insert);

		header('Content-Type:application/json');
		echo(json_encode($insert));
	}

	public function save_tindakan()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];
		
		$id = $this->m_daftarpasien->get_last_visit_care($visit_id);
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
		

		$insert['waktu_tindakan'] = date('Y-m-d H:i:s');
		$hasil = $this->m_daftarpasien->save_tindakan($insert);
		
		$ins = $this->m_daftarpasien->get_inserted_visit_care($insert['care_id']);
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
		$id = $this->m_daftarpasien->get_last_visit_resep();
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

		$insert['tanggal'] = date('Y-m-d H:i:s');
		$hasil = $this->m_daftarpasien->save_visit_resep($insert);
		
		$ins = $this->m_daftarpasien->get_inserted_visit_resep($insert['resep_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));

	}

	public function hapus_tindakan($id, $v_id){
		$input = $this->m_daftarpasien->hapus_tindakan($id);

		$result = $this->m_daftarpasien->get_visit_care($v_id);
		
		header('Content-Type: application/json');
		echo json_encode($result);
	}


	//-------- pemberian resep ---------------//

	public function hapus_resep($id, $v_id){
		$input = $this->m_daftarpasien->hapus_resep($id);

		$result = $this->m_daftarpasien->get_visit_resep($v_id);
		
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function search_dokter($query){
		$result = $this->m_daftarpasien->search_dokter($query);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_dokter(){
		$result = $this->m_daftarpasien->get_dokter();

		header('Content-Type: application/json');
		echo json_encode($result);	
	}

	//-------- Order Operasi ---------------//
	public function save_order_operasi(){
		foreach ($_POST as $value) {
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];
		$id = $this->m_daftarpasien->get_last_order_operasi($visit_id);

		if($id){
			$vir = intval(substr($id['value'], strlen($visit_id) + 2)) + 1;
			if (strlen($vir) == "1") {
				$vir = '0'. $vir;
			}
			$insert['order_operasi_id'] = "OR".$visit_id."".($vir);
		}else{
			$insert['order_operasi_id'] = "OR".$visit_id."01";
		}

		$d_id = $this->m_daftarpasien->get_dept_id($insert['dept_id']);
		$insert['dept_id'] = $d_id['dept_id'];

		$tujuan = $this->m_daftarpasien->get_dept_id($insert['dept_tujuan']);
		$insert['dept_tujuan'] = $tujuan['dept_id'];

		$insert['waktu_mulai'] = date('Y-m-d H:i:s');
		$hasil = $this->m_daftarpasien->save_order_operasi($insert);

		$ins = $this->m_daftarpasien->get_inserted_order_operasi($insert['order_operasi_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));
	}

	public function hapus_order($id){
		$input = $this->m_daftarpasien->hapus_order_operasi($id);
		return $input;
	}

    public function search_diagnosa($value){
    	$result = $this->m_daftarpasien->search_diagnosa($value);

		header('Content-Type: application/json');
		echo json_encode($result);
    }

    public function get_detail_over($value){
    	$result = $this->m_daftarpasien->get_detail_over($value);

		header('Content-Type: application/json');
		echo json_encode($result);
    }

    public function save_gizi(){
    	foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];

		$id = $this->m_daftarpasien->get_last_visit_gizi($visit_id);
		if($id){
			$vid = intval(substr($id['value'], strlen($visit_id) + 2)) + 1;
			if(strlen($vid) == "1"){
				$vid = '00' . $vid;
			}else if (strlen($vid) == "2") {
				$vid = '0' . $vid;
			}
			$insert['gizi_id'] = "GI".$visit_id."".($vid);
		}else{
			$insert['gizi_id'] = "GI".$visit_id."001";
		}

		$insert['tanggal'] = date('Y-m-d');

		$hasil = $this->m_daftarpasien->save_gizi($insert);

		header('Content-Type:application/json');
		echo(json_encode($insert));
    }

    public function hapus_gizi($id, $v_id){
    	$input = $this->m_daftarpasien->hapus_gizi($id);

		$result = $this->m_daftarpasien->get_visit_gizi($v_id);
		
		header('Content-Type: application/json');
		echo json_encode($result);
    }

    public function save_resume(){
    	//get data
		foreach ($_POST as $value) {
			$insert =  $value;
		}
		$tgl = $insert['waktu_keluar'];
		$insert['waktu_keluar'] = $this->date_db($tgl);
		$id = $insert['rj_id'];
    	//update table_rj
		$update = $this->m_daftarpasien->save_resume($id, $insert);

		//update table visit
		if($insert['alasan_keluar'] == "Pasien Dipindahkan"){
			$data['status_visit'] = "RUJUK RJ";
		}else{
			$data['status_visit'] = "CHECKOUT";
		}
		$data['visit_id'] = $insert['visit_id'];
		$update_v = $this->m_daftarpasien->update_visit($insert['visit_id'], $data);

		if($update)
			return true;
		return false;
    }

    public function date_db($date){
		$dateTime = DateTime::createFromFormat('d/m/Y H:i:s',$date);
		$newDateString = $dateTime->format('Y-m-d H:i:s');
		return $newDateString;
	}
}
