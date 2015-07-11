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
		$data['content'] = 'daftar/list';
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		
		$this->load->model("m_daftarpasien");
		$data['menu_view'] = $this->menu();
		$data['provinsi'] = $this->m_daftarpasien->get_provinsi();
		$data['poliklinik']=$this->m_daftarpasien->get_dept_rj();

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

	public function add_pasien(){
		$insert['nama']=$_POST['nama'];
		$insert['alias']=$_POST['alias'];		
		$insert['tempat_lahir']=$_POST['tempat_lahir'];
		$insert['tanggal_lahir']=$this->date_db($_POST['tanggal_lahir']);
		$insert['jenis_kelamin']=$_POST['jenis_kelamin'];
		$insert['gol_darah']=$_POST['gol_darah'];
		$insert['pekerjaan']=$_POST['pekerjaan'];
		$insert['jenis_id']=$_POST['jenis_id'];
		$insert['no_id']=$_POST['no_id'];
		$insert['pendidikan']=$_POST['pendidikan'];
		$insert['agama']=$_POST['agama'];
		$insert['status_perkawinan']=$_POST['status_kawin'];
		$insert['alamat_skr']=$_POST['alamat_skr'];
		$insert['prov_id_skr']=$_POST['prov_id_skr'];
		$insert['kab_id_skr']=$_POST['kab_id_skr'];
		$insert['kec_id_skr']=$_POST['kec_id_skr'];
		$insert['kel_id_skr']=$_POST['kel_id_skr'];
	 	$insert['alamat_ktp']=$_POST['alamat_ktp'];
	 	$insert['prov_id']=$_POST['prov_id'];
		$insert['kab_id']=$_POST['kab_id'];
		$insert['kec_id']=$_POST['kec_id'];
		$insert['kel_id']=$_POST['kel_id'];
		$insert['no_telp']=$_POST['no_telp'];
		$insert['nama_wali']=$_POST['nama_wali'];
		$insert['hubungan_wali']=$_POST['hubungan_wali'];
		$insert['alamat_wali']=$_POST['alamat_wali'];
		$insert['no_telp_wali']=$_POST['no_telp_wali'];
		$insert['pekerjaan_wali']=$_POST['pekerjaan_wali'];
		$insert['alergi']=$_POST['alergi'];
	
		$year_now = date('y');
		$month_now = date('m');

		if($_POST['rm_lama'] == ""){
		 	$insert['rm_id'] = $this->m_daftarpasien->create_rm_id($year_now, $month_now);
		}else{
			$insert['rm_id'] = $_POST['rm_lama'];
		}

		$insert['tgl_pendaftaran']= $this->get_now();
		$year_now = date('y');
		$month_now = date('m');

		$input = $this->m_daftarpasien->add_pasien_baru($insert);

		header('Content-Type: application/json');
		echo json_encode($insert);
	}

	public function add_visit_rj(){
		$year_now = date('y');
		$month_now = date('m');
		$date_now = date('d');
		$insert['visit_id'] = $this->m_daftarpasien->create_visit_id($year_now,$month_now,$date_now);

		$insert['rm_id'] = $_POST['rm_id'];
		$insert['dept_id'] = $_POST['dept_id'];
		$insert['tanggal_visit'] = $this->get_now();
		$insert['cara_bayar'] = $_POST['cara_bayar'];
		$insert['nama_asuransi'] = $_POST['nama_asuransi'];
		$insert['no_asuransi'] = $_POST['no_asuransi'];
		$insert['nama_perusahaan'] = $_POST['nama_perusahaan'];
		$insert['kelas_pelayanan'] = $_POST['kelas_pelayanan'];
		$insert['cara_masuk'] = $_POST['cara_masuk'];
		$insert['detail_masuk'] = $_POST['detail_masuk'];
		$insert['is_pasien_lama'] = $_POST['is_pasien_lama'];
		$insert['tipe_kunjungan'] = $_POST['tipe_kunjungan'];
		$insert['petugas_registrasi'] = $_POST['petugas_registrasi'];

		$in_rj['rj_id'] = $this->m_daftarpasien->create_visit_rj_id($insert['dept_id'],$year_now,$month_now,$date_now);
		$in_rj['visit_id'] = $insert['visit_id'];
		$in_rj['waktu_masuk'] = $this->get_now();
		$in_rj['is_kasus_baru'] = $_POST['is_kasus_baru'];
		$in_rj['is_kunjungan_baru'] = $_POST['is_kunjungan_baru'];

		$input_visit = $this->m_daftarpasien->add_visit($insert);
		$input_visit_rj = $this->m_daftarpasien->add_visit_rj($in_rj);
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

	public function search_pasien($query){
		
		$result = $this->m_daftarpasien->get_search_pasien($query);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}
}

?>