<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Daftarpasien extends Operator_base {

	function __construct(){

		parent:: __construct();
		$this->load->model("m_daftarpasien");
		$data['page_title'] = "Ad. Rawat Jalan";
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		// load template
		$data['content'] = 'daftar/list';
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		
		$this->load->model("m_daftarpasien");	
		$data['provinsi'] = $this->m_daftarpasien->get_provinsi();
		$data['poliklinik']=$this->m_daftarpasien->get_dept_rj();
		$data['pasien_rujuk']=$this->m_daftarpasien->get_pasien_rujuk();
		$data['pasien_kunjungan']=$this->m_daftarpasien->get_pasien_kunjungan();
		$data['javascript'] = "daftar/j_list";
		$this->load->view('base/operator/template', $data);
	}

	public function selectProvinsi($prov){
		
		$kabupaten = $this->m_daftarpasien->get_kabupaten_prov($prov);
		echo"<option value=''>Pilih Kabupaten</option>";
		foreach ($kabupaten as $kab) {
			echo "<option value='".$kab['kab_id']."'>". $kab['nama_kab']." </option>";
		}
	}

	public function selectKabupaten($kab){
			
		$kecamatan = $this->m_daftarpasien->get_kecamatan_kab($kab);
		echo"<option value=''>Pilih Kecamatan</option>";
		foreach ($kecamatan as $kec) {
			echo "<option value='".$kec['kec_id']."'>". $kec['nama_kec']." </option>";
		}
	}

	public function selectKecamatan($kec){
		
		$kelurahan = $this->m_daftarpasien->get_kelurahan_kec($kec);
		echo"<option value=''>Pilih Kelurahan</option>";
		foreach ($kelurahan as $kel) {
			echo "<option value='".$kel['kel_id']."'>". $kel['nama_kel']." </option>";
		}
	}

	public function add_visit_rj(){
		$year_now = date('y');
		$month_now = date('m');
		$date_now = date('d');
		$insert['visit_id'] = $this->m_daftarpasien->create_visit_id($year_now,$month_now,$date_now);

		$insert['rm_id'] = $_POST['rm_id'];
		$insert['dept_id'] = $_POST['dept_id'];
		$insert['tanggal_visit'] = $this->get_now();
		$insert['cara_masuk'] = $_POST['cara_masuk'];
		$insert['detail_masuk'] = $_POST['detail_masuk'];
		$insert['is_pasien_lama'] = $_POST['is_pasien_lama'];
		$insert['tipe_kunjungan'] = $_POST['tipe_kunjungan'];
		$insert['petugas_registrasi'] = $_POST['petugas_registrasi'];
		$insert['status_visit'] = "REGISTRASI";

		$in_rj['visit_id'] = $insert['visit_id'];
		$in_rj['waktu_masuk'] = $this->get_now();
		$in_rj['cara_bayar'] = $_POST['cara_bayar'];
		$in_rj['nama_asuransi'] = $_POST['nama_asuransi'];
		$in_rj['no_asuransi'] = $_POST['no_asuransi'];
		$in_rj['nama_perusahaan'] = $_POST['nama_perusahaan'];
		$in_rj['kelas_pelayanan'] = $_POST['kelas_pelayanan'];

		$input_visit = $this->m_daftarpasien->add_visit($insert);

		if($_POST['dept_id'] != 9){
			$in_rj['unit_tujuan'] = $_POST['dept_id'];
			$in_rj['rj_id'] = $this->m_daftarpasien->create_visit_rj_id($insert['dept_id'],$year_now,$month_now,$date_now);
			$input_visit_rj = $this->m_daftarpasien->add_visit_rj($in_rj);
		}
		else{
			$in_rj['igd_id'] = $this->m_daftarpasien->create_visit_rj_id($insert['dept_id'],$year_now,$month_now,$date_now);
			$input_visit_rj = $this->m_daftarpasien->add_visit_igd($in_rj);
		}

	}
	

	public function get_now() {
	    $this->load->helper('date');
        $datestring = '%Y-%m-%d';
        $time = time();
        $now = mdate($datestring, $time);
        return $now;
	}

	public function date_db($date){
		$dateTime = DateTime::createFromFormat('d/m/Y',$date);
		$newDateString = $dateTime->format('Y-m-d');
		return $newDateString;
	}

	public function date_view($date){
		$time = strtotime($date);
		$tgl = date('d F Y', $time);
		return $tgl;
	}

	public function search_pasien(){
		$query = $_POST['search'];
		$result = $this->m_daftarpasien->get_search_pasien($query);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function get_pasien_rujukan($rj_id){
		$result = $this->m_daftarpasien->get_pasien_rujukan($rj_id);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function get_pasien_rujuk(){
		$result = $this->m_daftarpasien->get_pasien_rujuk();

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function get_search_rujukan(){
		$value = $_POST['search'];
		$result = $this->m_daftarpasien->get_search_rujukan($value);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function submit_tindakrujuk(){
		foreach ($_POST as $value) {
			$insert = $value;
		}
		//buat rj_id
		$year_now = date('y');
		$month_now = date('m');
		$date_now = date('d');
		$insert['waktu_masuk'] = $this->get_now();
		$insert['rj_id'] = $this->m_daftarpasien->create_visit_rj_id($insert['unit_tujuan'],$year_now,$month_now,$date_now);

		//tambah data kedalam visit_rj
		$input = $this->m_daftarpasien->add_visit_rj($insert);

		//update visit_status di table visit
		$update['status_visit'] = 'REGISTRASI';
		$update_v = $this->m_daftarpasien->update_visit($insert['visit_id'], $update);

		if($input & $update_v)
		
		$result = $this->m_daftarpasien->get_pasien_rujuk();

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function batal_rujuk($v_id){
		//update visit_status
		$update['status_visit'] = 'CHECKOUT';
		$update_v = $this->m_daftarpasien->update_visit($v_id, $update);

		//get data rujuk
		$result = $this->m_daftarpasien->get_pasien_rujuk();

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}
}

?>