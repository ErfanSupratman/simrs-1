<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );

class Rawatinap extends Application_base {
	public function index($page = 0)
	{
		// load template
		$data['content'] = 'rawatinap/list';
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$this->load->model("m_daftarpasien");
		$data['provinsi'] = $this->m_daftarpasien->get_provinsi();
		$data['kamar'] = $this->m_daftarpasien->get_nama_kamar();
		$data['menu_view'] = $this->menu();
		$this->load->view('base/operator/template', $data);
	}

	public function selectProvinsi($prov){
		$this->load->model("m_daftarpasien");	
		$kabupaten = $this->m_daftarpasien->get_kabupaten_prov($prov);
		echo"<option value=''>Pilih Kabupaten</option>";
		foreach ($kabupaten as $kab) {
			echo "<option value='".$kab['kab_id']."'>". $kab['nama_kab']." </option>";
		}
	}

	public function selectKabupaten($kab){
		$this->load->model("m_daftarpasien");	
		$kecamatan = $this->m_daftarpasien->get_kecamatan_kab($kab);
		echo"<option value=''>Pilih Kecamatan</option>";
		foreach ($kecamatan as $kec) {
			echo "<option value='".$kec['kec_id']."'>". $kec['nama_kec']." </option>";
		}
	}

	public function selectKecamatan($kec){
		$this->load->model("m_daftarpasien");	
		$kelurahan = $this->m_daftarpasien->get_kelurahan_kec($kec);
		echo"<option value=''>Pilih Kelurahan</option>";
		foreach ($kelurahan as $kel) {
			echo "<option value='".$kel['kel_id']."'>". $kel['nama_kel']." </option>";
		}
	}

	public function select_kelas_kamar($nama_kamar){
		$this->load->model("m_daftarpasien");	
		$kelas = $this->m_daftarpasien->get_kelas_kamar($nama_kamar);
		echo"<option value=''>--Pilih Kelas--</option>";
		foreach ($kelas as $kel) {
			echo "<option value='".$kel['kelas_kamar']."'>". $kel['kelas_kamar']." </option>";
		}
	}

	
	public function add_visit_ri(){
		$this->load->model("m_daftarpasien");	

		$year_now = date('y');
		$month_now = date('m');
		$date_now = date('d');
		$insert['visit_id'] = $this->m_daftarpasien->create_visit_id($year_now,$month_now,$date_now);

		$insert['rm_id'] = $_POST['rm_id'];
		$insert['tanggal_visit'] = $this->get_now();
		$insert['cara_bayar'] = $_POST['cara_bayar'];
		$insert['nama_asuransi'] = $_POST['nama_asuransi'];
		$insert['no_asuransi'] = $_POST['no_asuransi'];
		$insert['nama_perusahaan'] = $_POST['nama_perusahaan'];
		$insert['kelas_pelayanan'] = $_POST['kelas_pelayanan'];
		$insert['cara_masuk'] = $_POST['cara_masuk'];
		$insert['detail_masuk'] = $_POST['detail_masuk'];
		$insert['petugas_registrasi'] = $_POST['petugas_registrasi'];
		$insert['tipe_kunjungan'] = $_POST['tipe_kunjungan'];

		$nama_kamar = $_POST['nama_kamar'];
		$kelas_kamar = $_POST['kelas_kamar'];
		$in_ri['waktu_masuk'] = $this->get_now();

		$insert['dept_id'] = $this->m_daftarpasien->get_kamar_dept_id($nama_kamar, $kelas_kamar);
		$in_ri['ri_id'] = $this->m_daftarpasien->create_visit_ri_id($insert['dept_id'],$year_now,$month_now,$date_now);
		$in_ri['visit_id'] = $insert['visit_id'];

		$in_kamar['inap_id'] = $this->m_daftarpasien->create_inap_id($year_now,$month_now,$date_now);
		$in_kamar['visit_id'] = $insert['visit_id'];
		$in_kamar['waktu_masuk'] = $this->get_now();
		$in_kamar['kamar_id'] = $this->m_daftarpasien->get_kamar_id($nama_kamar, $kelas_kamar);
		$in_kamar['bed_id'] = "1";

		$input_visit = $this->m_daftarpasien->add_visit($insert);
		$input_visit_ri = $this->m_daftarpasien->add_visit_ri($in_ri);
		$input_visit_in_kamar = $this->m_daftarpasien->add_visit_inap_kamar($in_kamar);

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
			$this->load->model('m_daftarpasien');
			$result = $this->m_daftarpasien->get_search_pasien($query);

			header('Content-Type: application/json');
		 	echo json_encode($result);
	}

}
