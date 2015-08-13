<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Bersalindetail extends Operator_base {
	protected $ses;
	protected $dept_id;
	function __construct() {
		parent:: __construct();

		$this->load->model('logistik/m_gudangbarang');
		$this->load->model('m_bersalin');
		$this->dept_id = $this->m_gudangbarang->get_dept_id('BERSALIN')['dept_id'];
	}
	public function index($page = 0)
	{
		// load template	
	}

	public function daftar($ri_id = '', $visit_id='')
	{
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		$data['page_title'] = 'Detail Bersalin';
		$this->session->set_userdata($data);

		$data['content'] = 'bersalindetail/list';

		$data['javascript'] = "bersalindetail/javascript/j_list";	
		$this->load->model('m_bersalin');

		//load semua data pasien dengan no rm tertentu
		$pasien = $this->m_bersalin->get_pasien($visit_id, $ri_id);		
		$data['pasien'] = $pasien;

		$data['overview_history'] = $this->m_bersalin->get_overview_history($visit_id);
		$data['overviewigd_history'] = $this->m_bersalin->get_overviewigd_history($visit_id);
		$data['overviewhamil_history'] = $this->m_bersalin->get_overviewhamil_history($visit_id);
		$data['overview_kunjungandokter'] = $this->m_bersalin->getinfo_kunjungan_dokter($visit_id);
		$data['overview_asuhan'] = $this->m_bersalin->get_asuhan_dokter($visit_id);
		$data['dept_rujukan'] = $this->m_bersalin->get_dept_rujukan();
		$data['riwayat_kegiatanbers'] = $this->m_bersalin->get_kegiatan_bersalin($visit_id);
		$data['visit_resep'] = $this->m_bersalin->get_visit_resep($visit_id);
		$data['order_operasi'] = $this->m_bersalin->get_order_operasi($visit_id);
		$data['riwayat_klinik'] = $this->m_bersalin->get_riwayat_klinik($pasien['rm_id']);
		$data['riwayat_igd'] = $this->m_bersalin->get_riwayat_igd($pasien['rm_id']);
		$data['riwayat_perawatan'] = $this->m_bersalin->get_riwayat_perawatan($pasien['rm_id']);
		$data['gizi'] = $this->m_bersalin->get_visit_gizi($visit_id);
		$data['tipediet'] = $this->m_bersalin->get_tipe_diet();
		$data['permintaan_makan'] = $this->m_bersalin->get_permintaan_makan($visit_id);
		$dept= $this->m_gudangbarang->get_dept_id('IGD')['dept_id'];
		$data['visit_care_igd'] = $this->m_bersalin->get_visit_care_unit($visit_id, $dept);
		$data['visit_care_klinik'] = $this->m_bersalin->get_visit_care_klinik($visit_id);
		$data['visit_care_unit'] = $this->m_bersalin->get_visit_care_unit($visit_id, $this->dept_id);
		$this->load->view('base/operator/template', $data);
	}

	/*overview klinis*/
	public function search_diagnosa($value){
    	$result = $this->m_bersalin->search_diagnosa($value);

		header('Content-Type: application/json');
		echo json_encode($result);
    }

    public function search_dokter(){
    	$query = $_POST['katakunci'];
		$result = $this->m_bersalin->search_dokter($query);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_dokter(){
		$result = $this->m_bersalin->get_dokter();

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function search_perawat($query){
		$result = $this->m_bersalin->search_perawat($query);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_detail_overview_klinis($id='')
	{
		$result = $this->m_bersalin->get_detail_overview_klinis($id);
		$tgl = DateTime::createFromFormat('Y-m-d H:i:s', $result['waktu']);
		$result['waktu'] = $tgl->format('d F Y H:i:s');
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function save_overview()
	{
		$this->load->model('m_bersalin');
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$insert['waktu'] = date('Y-m-d H:i:s');
		$insert['id'] = $this->m_bersalin->get_overview_id($insert['visit_id']);

		$hasil = $this->m_bersalin->insert_overview($insert);

		header('Content-Type:application/json');
		echo(json_encode($insert));
	}

	/*akhir overview klinis*/

	/*overview igd*/
	public function submit_overview_igd()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}
		$insert['id'] = $this->m_bersalin->get_overviewigd_id($insert['visit_id']);
		$result = $this->m_bersalin->insert_overview_igd($insert);

		header('Content-Type:application/json');
		echo(json_encode($insert));
	}

	public function get_detail_overview_igd($id='')
	{
		$result = $this->m_bersalin->get_detail_overview_igd($id);
		$tgl = DateTime::createFromFormat('Y-m-d H:i:s', $result['waktu']);
		$result['waktu'] = $tgl->format('d F Y H:i:s');
		header('Content-Type: application/json');
		echo json_encode($result);
	}
	/*akhir overview igd*/

	/*overview ibu hamil*/
	public function submit_visit_hamil()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}
		$insert['tgl_overview'] = date('Y-m-d H:i:s');
		$insert['id'] = $this->m_bersalin->get_overviewibu($insert['visit_id']);
		$result = $this->m_bersalin->insert_overviewibu($insert);

		header('Content-Type:application/json');
		echo(json_encode($insert));
	}

	public function get_detail_overview_hamil($id='')
	{
		$result = $this->m_bersalin->get_detail_overview_hamil($id);
		$tgl = DateTime::createFromFormat('Y-m-d', $result['perkiraan_lahir']);
		$result['perkiraan_lahir'] = $tgl->format('d/m/Y');
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function submit_fisik_hamil()
	{
		$this->form_validation->set_rules('diagnosa_kerja', 'nomor permitaan', 'required|trim|xss_clean');
		$this->form_validation->set_rules('dokter_periksa', 'nomor permitaan', 'required|trim|xss_clean');
		$this->form_validation->set_message('required', "isi data dokter atau diagnosa");

		if ($this->form_validation->run() == TRUE) {
			$insert['ri_id_overview'] = $_POST['ri_id_overview'];
			$insert['rencana_terapi'] = $_POST['rencana_terapi'];
			$insert['keadaan_umum'] = $_POST['keadaan_umum'];
			$insert['pemeriksaan_luar'] = $_POST['pemeriksaan_luar'];
			$insert['pemeriksaan_dalam'] = $_POST['pemeriksaan_dalam'];
			$insert['dokter_periksa'] = $_POST['dokter_periksa'];
			$insert['diagnosa_kerja'] = $_POST['diagnosa_kerja'];
			$insert['tensi'] = $_POST['tensi'];
			$insert['nadi'] = $_POST['nadi'];
			$insert['pernafasan'] = $_POST['pernafasan'];
			$insert['suhu'] = $_POST['suhu'];
			$insert['tanggal_periksa'] = date('Y-m-d H:i:s');

			$ins = $this->m_bersalin->insert_pemeriksaan_fisikibu($insert);

			$res = array(
				'message'		=> "Data Berhasil disimpan",
				'error' => 'n'
			);
		}else{
			$res = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'y'
			);
		}
		header('Content-Type: application/json');
	 	echo json_encode($res);
	}

	public function get_fisik_ibu($id='')
	{
		$result = $this->m_bersalin->get_pemeriksaan_fisikibu($id);

		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function get_detail_fisik_ibu($id)
	{
		$result = $this->m_bersalin->get_detail_fisik_ibu($id);

		header('Content-Type:application/json');
		echo(json_encode($result));
	}
	/*akhir overview ibu hamil*/


	/*overview perawatan*/
	public function submitoverviewperawatan()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$insert['kunjungan_dok_id'] = $this->m_bersalin->get_kunjungan_id($insert['visit_id']);
		$result = $this->m_bersalin->insert_kunjungan_dokter($insert);

		header('Content-Type:application/json');
		echo(json_encode($insert));
	}

	public function get_detail_over_perawatan($id)
	{
		$result = $this->m_bersalin->get_detail_over_perawatan($id);

		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	//asuhan keperawatan
	public function submit_asuhan()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$insert['asuhan_id'] = $this->m_bersalin->get_asuhan_id($insert['visit_id']);
		$insert['dept_id'] = '19'; //bersalin
		$result = $this->m_bersalin->insert_asuhan($insert);

		header('Content-Type:application/json');
		echo(json_encode($insert));
	}
	/*akhir overview perawatan*/

	/*visit kegiatan bersalin*/
	public function submit_kegiatan_bersalin()
	{
		$this->form_validation->set_rules('jenis_kegiatan', 'nomor permitaan', 'required|trim|xss_clean');
		$this->form_validation->set_rules('dokter', 'nomor permitaan', 'required|trim|xss_clean');
		$this->form_validation->set_rules('status', 'nomor permitaan', 'required|trim|xss_clean');
		$this->form_validation->set_rules('rujukan_dari', 'nomor permitaan', 'required|trim|xss_clean');
		$this->form_validation->set_message('required', "isi data dengan benar");

		if ($this->form_validation->run() == TRUE) {
			$insert = array(
				'jenis_kegiatan' => $_POST['jenis_kegiatan'],
				'visit_id' => $_POST['visit_id'],
				'sub_visit' => $_POST['sub_visit'],
				'status' => $_POST['status'] ,
				'rujukan_dari' => $_POST['rujukan_dari'],
				'dirujuk_ke' => $_POST['dirujuk_ke'],
				'waktu' => $_POST['waktu'],
				'dokter' => $_POST['dokter'] ,
				'asisten' => $_POST['asisten'] ,
				'keterangan' =>  $_POST['keterangan']
				);
			$insert['bersalin_id'] = $this->m_bersalin->get_last_kegiatan_bersalin($insert);
			$this->m_bersalin->insert_kegiatan_bersalin($insert);
			$result = array(
				'data' => $insert,
				'error' => 'n'
				);
		}else{
			$result = array(
				'data' => strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'y'
				);
		}
		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function search_asisten($kata)
	{
		$result = $this->m_bersalin->get_asisten($kata);

		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function hapus_kegiatan_bersalin($id)
	{
		$result = $this->m_bersalin->hapus_kegiatan_bersalin($id);
		/*if ($result) {
			$res = $this->m_bersalin->get_kegiatan_bersalin($visit_id, $ri_id);
			$arr = array('ket' => 'y', 'result'=>$res);
		}else{
			$arr = array('ket' => 'n', 'result'=>"gagal");
		}*/
		header('Content-Type:application/json');
		echo(json_encode($result));
	}
	/*akhir visit kegiatan bersalin*/


	/*visit resep*/
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

		$tgl = $this->fdate_db($insert['tanggal']);
		$insert['tanggal'] = $tgl;
		$insert['status_bayar'] = 'BELUM';
		$insert['status_ambil'] = 'BELUM';
		$hasil = $this->m_bersalin->save_visit_resep($insert);
		
		$ins = $this->m_bersalin->get_inserted_visit_resep($insert['resep_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));

	}

	public function hapus_resep($id, $igd_id){
		$input = $this->m_bersalin->hapus_resep($id);

		//$result = $this->m_igddetail->get_visit_resep($igd_id);
		
		header('Content-Type: application/json');
		echo json_encode($input);
	}
	/*akhir visit resep*/


	/*order operasi*/
	public function save_order_operasi(){
		foreach ($_POST as $value) {
			$insert = $value;
		}

		$insert['dept_id'] = $this->dept_id;

		$visit_id = $insert['visit_id'];
		$id = $this->m_bersalin->get_last_order_operasi($visit_id);

		if($id){
			$vir = intval(substr($id['value'], strlen($visit_id) + 2)) + 1;
			if (strlen($vir) == "1") {
				$vir = '0'. $vir;
			}
			$insert['order_operasi_id'] = "OR".$visit_id."".($vir);
		}else{
			$insert['order_operasi_id'] = "OR".$visit_id."01";
		}

		$tujuan = $this->m_bersalin->get_dept_id($insert['dept_tujuan']);
		$insert['dept_tujuan'] = $tujuan['dept_id'];

		$waktu = $this->date_db($insert['waktu_mulai']);
		$insert['waktu_mulai'] = $waktu;

		$hasil = $this->m_bersalin->save_order_operasi($insert);

		$ins = $this->m_bersalin->get_inserted_order_operasi($insert['order_operasi_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));
	}

	public function hapus_order($id){//, $igd_id
        $input = $this->m_bersalin->hapus_order_operasi($id);

        //$result = $this->m_bersalin->get_order_kamar_operasi($igd_id);

        header('Content-Type:application/json');
		echo(json_encode($input));
    }

	/*akhir order operasi*/

	/*visit gizi*/
    public function save_gizi(){
    	foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$visit_id = $insert['visit_id'];

		$id = $this->m_bersalin->get_last_visit_gizi($visit_id);
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

		$hasil = $this->m_bersalin->save_gizi($insert);

		header('Content-Type:application/json');
		echo(json_encode($insert));
    }

    public function hapus_gizi($id){//, $igd_id
    	$input = $this->m_bersalin->hapus_gizi($id);

		//$result = $this->m_igddetail->get_visit_gizi($igd_id);
		
		header('Content-Type: application/json');
		echo json_encode($input);
    }

	/*akhir visit gizi*/

	/*permintaan makan*/
	public function get_paket_makan($id)
	{
		$input = $this->m_bersalin->get_paket_makan($id);
		
		header('Content-Type: application/json');
		echo json_encode($input);
	}

	public function submit_permintaan_makan()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$insert['waktu_permintaan'] = $this->date_db($insert['waktu_permintaan']);
		$id = $this->m_bersalin->submit_permintaan_makan($insert);
		$insert['makan_id'] = $id;

		header('Content-Type: application/json');
		echo json_encode($insert);
	}

	public function edit_permintaan_makan($id)
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$insert['waktu_permintaan'] = $this->date_db($insert['waktu_permintaan']);
		$result = $this->m_bersalin->edit_permintaan_makan($id,$insert);

		header('Content-Type: application/json');
		echo json_encode($insert);
	}

	public function hapus_permintaan_makan($id)
	{
		$result = $this->m_bersalin->hapus_permintaan_makan($id);

		header('Content-Type: application/json');
		echo json_encode($result);
	}
	/*akhir permintaan makan*/

	/*resume pulang*/
	public function save_resume($bed_id){
    	foreach ($_POST as $value) {
    		$insert = $value;
    	}

    	$tgl = $insert['waktu_keluar'].":00";
    	$format = $this->date_db($tgl);
    	$insert['waktu_keluar'] = $format;
    	if (isset($insert['waktu_kematian']) && !empty($insert['waktu_kematian'])) {
    		$insert['waktu_kematian'] = $this->date_db($insert['waktu_kematian']);
    	}

		//update status visit disini
		$update['status_visit']="CHECKOUT";
		
    	$save = $this->m_bersalin->save_resume($insert['ri_id'], $insert);

    	$up = $this->m_bersalin->update_visit($insert['visit_id'], $update);
    	$up_bed = $this->m_bersalin->update_bed($bed_id);
    	header('Content-Type: application/json');
		echo json_encode($insert);
    }
	/*resume*/

	/*riwayat*/
	public function get_detail_over($value){
    	$result = $this->m_bersalin->get_detail_overview_klinis($value);

		header('Content-Type: application/json');
		echo json_encode($result);
    }
	/*akhir riwayat*/

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

	/*tindakan*/
	public function get_tindakan($id)
	{
		$result = $this->m_bersalin->get_tindakan($id);

		header('Content-Type:application/json');
		echo(json_encode($result));
	}

	public function save_tindakan()
	{
		$this->load->model('igd/m_igddetail');
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
		$insert['dept_id'] = $this->dept_id;
		$hasil = $this->m_igddetail->save_tindakan($insert);
		
		$ins = $this->m_igddetail->get_inserted_visit_care($insert['care_id']);
		header('Content-Type:application/json');
		echo(json_encode($ins));
	}

	public function hapus_tindakan($id, $v_id){//, $dept
		$this->load->model('igd/m_igddetail');
		$input = $this->m_igddetail->hapus_tindakan($id);

		//$result = $this->m_igddetail->get_visit_care_igd($v_id, $dept);
		
		header('Content-Type: application/json');
		echo json_encode($input);
	}
	/*akhir tindakan*/
}

