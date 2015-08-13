<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Igddetail extends CI_Controller {
	function __construct(){

		parent:: __construct();
		$this->load->model("m_igddetail");
	}

	public function index($page = 0)
	{
		// load template
		$data['content'] = 'igddetail/list';
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$this->load->view('base/operator/template', $data);
	}

	public function periksa($igd_id, $visit_id){
		$data['content'] = 'igddetail/list';
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		//$data['menu_view'] = $this->menu();
		$dept = $this->m_igddetail->get_dept_id("IGD");
		$data['dept_id'] = $dept['dept_id'];
		$dept_id = $dept['dept_id'];
		$rm = $this->m_igddetail->get_rm_id($visit_id);
		$rm_id = $rm['rm_id'];
		$pasien = $this->m_igddetail->get_pasien($rm_id);
		$params = $this->get_alamat_pasien($pasien, $igd_id);
		$data['pasien'] = $params;
		$data['visit_id'] = $visit_id;
		$data['igd_id'] = $igd_id;
		$history = $this->m_igddetail->get_overview_history($igd_id);
		$data['overview_history'] = $history;
		$data['visit_resep'] = $this->m_igddetail->get_visit_resep($igd_id);
		$data['order_operasi'] = $this->m_igddetail->get_order_kamar_operasi($igd_id);
		$data['gizi']= $this->m_igddetail->get_visit_gizi($igd_id);
		$data['riwayat_klinik'] = $this->m_igddetail->get_riwayat_klinik($rm_id);
		$data['riwayat_igd'] = $this->m_igddetail->get_riwayat_igd($rm_id);

		$data['visit_care'] = $this->m_igddetail->get_visit_care($visit_id);
		$data['igd_overview_history'] = $this->m_igddetail->get_igd_overview_history($igd_id);

		$data['visit_care_igd'] = $this->m_igddetail->get_visit_care_igd($igd_id, $dept_id);

		$this->load->view('base/operator/template', $data);
	}

	public function get_alamat_pasien($arr, $visit_id)
	{
		$prov_skrg = $this->m_igddetail->get_prov($arr['prov_id_skr']);
		$kab_skrg = $this->m_igddetail->get_kab($arr['kab_id_skr']);
		$kec_skrg = $this->m_igddetail->get_kec($arr['kec_id_skr']);
		$kel_skrg = $this->m_igddetail->get_kel($arr['kel_id_skr']);

		$prov_ktp = $this->m_igddetail->get_prov($arr['prov_id']);
		$kab_ktp = $this->m_igddetail->get_kab($arr['kab_id']);
		$kec_ktp = $this->m_igddetail->get_kec($arr['kec_id']);
		$kel_ktp = $this->m_igddetail->get_kel($arr['kel_id']);
		$visit = $this->m_igddetail->get_carabayar($visit_id);
		
		$arr['provinsi_skr'] = $prov_skrg['nama_prov'];
		$arr['kabupaten_skr'] = $kab_skrg['nama_kab'];
		$arr['kecamatan_skr'] = $kec_skrg['nama_kec'];
		$arr['kelurahan_skr'] = $kel_skrg['nama_kel'];
		if(!empty($prov_ktp))
			$arr['provinsi'] = $prov_ktp['nama_prov'];
		if(!empty($kab_ktp))
			$arr['kabupaten'] = $kab_ktp['nama_kab'];
		if(!empty($kec_ktp))
			$arr['kecamatan'] = $kec_ktp['nama_kec'];
		if(!empty($kel_ktp))
			$arr['kelurahan'] = $kel_ktp['nama_kel'];
		
		$arr['pembayaran'] = $visit['cara_bayar'];
		$arr['coba'] = $visit_id;

		return $arr;
	}

	public function search_diagnosa(){
		$value = $_POST['search'];
    	$result = $this->m_igddetail->search_diagnosa($value);

		header('Content-Type: application/json');
		echo json_encode($result);
    }

    public function save_overview()
	{
		
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$insert['id'] = $this->m_igddetail->get_overview_id($insert['visit_id']);

		$tgl = $this->date_db($insert['waktu']);
		$insert['waktu'] = $tgl	;

		$hasil = $this->m_igddetail->insert_overview($insert);

		$unit = $this->m_igddetail->get_unit($insert['rj_id']);
		$insert['unit'] = $unit['nama_dept'];

		header('Content-Type:application/json');
		echo(json_encode($insert));
	}

	public function save_over_igd(){
		foreach($_POST as $value){
			$insert = $value;
		}

		$insert['id'] = $this->m_igddetail->get_overview_igd_id($insert['visit_id']);
		$tgl = $this->date_db($insert['waktu']);
		$insert['waktu'] = $tgl;

		$hasil = $this->m_igddetail->insert_overview_igd($insert);

		$unit = $this->m_igddetail->get_unit($insert['sub_visit']);
		$insert['unit'] = $unit['nama_dept'];

		header('Content-Type:application/json');
		echo(json_encode($insert));
	}

	public function date_db($date){
		$dateTime = DateTime::createFromFormat('d/m/Y H:i:s',$date);
		$newDateString = $dateTime->format('Y-m-d H:i:s');
		return $newDateString;
	}

	public function fdate_db($date){
		$dateTime = DateTime::createFromFormat('d/m/Y',$date);
		$newDateString = $dateTime->format('Y-m-d');
		return $newDateString;
	}

	public function get_detail_over($value){
    	$result = $this->m_igddetail->get_detail_over($value);

		header('Content-Type: application/json');
		echo json_encode($result);
    }

    public function get_detail_over_igd($value){
    	$result = $this->m_igddetail->get_detail_over_igd($value);

		header('Content-Type: application/json');
		echo json_encode($result);
    }

    public function get_diag_name($value){
    	$result = $this->m_igddetail->get_diag_name($value);

    	header('Content-Type: application/json');
    	echo json_encode($result);
    }

    public function get_master_tindakan(){
    	$result = $this->m_igddetail->get_master_tindakan();

    	header('Content-Type: application/json');
    	echo json_encode($result);	
    }

    public function save_tindakan()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];
		
		$id = $this->m_igddetail->get_last_visit_care($visit_id);
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
		
		$tgl = $this->date_db($insert['waktu_tindakan']);
		$insert['waktu_tindakan'] = $tgl;
		$hasil = $this->m_igddetail->save_tindakan($insert);
		
		$ins = $this->m_igddetail->get_inserted_visit_care($insert['care_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));
	}

	public function hapus_tindakan($id, $v_id, $dept){
		$input = $this->m_igddetail->hapus_tindakan($id);

		$result = $this->m_igddetail->get_visit_care_igd($v_id, $dept);
		
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function search_perawat(){
		$data = $_POST['search'];

		$result = $this->m_igddetail->search_perawat($data);

    	header('Content-Type: application/json');
    	echo json_encode($result);	
	}

	public function save_visit_resep()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];
		$id = $this->m_igddetail->get_last_visit_resep();
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

		$tgl = $this->fdate_db($insert['tanggal']);
		$insert['tanggal'] = $tgl;
		$hasil = $this->m_igddetail->save_visit_resep($insert);
		
		$ins = $this->m_igddetail->get_inserted_visit_resep($insert['resep_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));

	}

	public function hapus_resep($id, $igd_id){
		$input = $this->m_igddetail->hapus_resep($id);

		$result = $this->m_igddetail->get_visit_resep($igd_id);
		
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function save_order_operasi(){
		foreach ($_POST as $value) {
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];
		$id = $this->m_igddetail->get_last_order_operasi($visit_id);

		if($id){
			$vir = intval(substr($id['value'], strlen($visit_id) + 2)) + 1;
			if (strlen($vir) == "1") {
				$vir = '0'. $vir;
			}
			$insert['order_operasi_id'] = "OR".$visit_id."".($vir);
		}else{
			$insert['order_operasi_id'] = "OR".$visit_id."01";
		}

		$tujuan = $this->m_igddetail->get_dept_id($insert['dept_tujuan']);
		$insert['dept_tujuan'] = $tujuan['dept_id'];

		$waktu = $this->date_db($insert['waktu_mulai']);
		$insert['waktu_mulai'] = $waktu;

		$hasil = $this->m_igddetail->save_order_operasi($insert);

		$ins = $this->m_igddetail->get_inserted_order_operasi($insert['order_operasi_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));
	}

	public function hapus_order($id, $igd_id){
        $input = $this->m_igddetail->hapus_order_operasi($id);

        $result = $this->m_igddetail->get_order_kamar_operasi($igd_id);

        header('Content-Type:application/json');
		echo(json_encode($result));
    }

    public function save_gizi(){
    	foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];

		$id = $this->m_igddetail->get_last_visit_gizi($visit_id);
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

		$tgl = $this->fdate_db($insert['tanggal']);
		$insert['tanggal'] = $tgl;

		$hasil = $this->m_igddetail->save_gizi($insert);

		header('Content-Type:application/json');
		echo(json_encode($insert));
    }

    public function hapus_gizi($id, $igd_id){
    	$input = $this->m_igddetail->hapus_gizi($id);

		$result = $this->m_igddetail->get_visit_gizi($igd_id);
		
		header('Content-Type: application/json');
		echo json_encode($result);
    }

    public function search_sebab(){
    	$search = $_POST['search'];

    	$result = $this->m_igddetail->search_sebab($search);
		
		header('Content-Type: application/json');
		echo json_encode($result);	
    }

    public function save_resume(){
    	foreach ($_POST as $value) {
    		$insert = $value;
    	}

    	$tgl = $insert['waktu_keluar'].":00";
    	$format = $this->date_db($tgl);
    	$insert['waktu_keluar'] = $format;

    	$save = $this->m_igddetail->save_resume($insert['igd_id'], $insert);

    	header('Content-Type: application/json');
		echo json_encode($insert);
    }
}