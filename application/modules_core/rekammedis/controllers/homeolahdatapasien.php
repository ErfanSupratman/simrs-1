<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

//class Homebersalin extends Application_Base {
class Homeolahdatapasien extends Operator_base {
	protected $dept_id;
	function __construct() {
		parent:: __construct();
		$this->load->model('m_olahpasien');
		$this->load->model('logistik/m_gudangbarang');
		$this->load->model("pasien/m_pendaftaran");
		$this->dept_id = $this->m_gudangbarang->get_dept_id('BERSALIN')['dept_id'];
	}

	public function index($page = 0)
	{

		$this->check_auth('R');
		$data['user'] = $this->user;
		$data['menu_view'] = $this->menu();
		$data['page_title'] = 'Data Pasien';
		$this->session->set_userdata($data);
		// load template
		$data['javascript'] = "olahdatapasien/j_pasien";
		$data['content'] = 'olahdatapasien/home';
		/*$res = $this->m_olahpasien->get_rekap_rj();
		echo json_encode($res);die;*/
		$data['allpoli'] = $this->m_olahpasien->get_all_poli();
		$data['rekap_rj'] = $this->get_rekap_rj();
		$data['provinsi'] = $this->m_pendaftaran->get_provinsi();
		$data['all_pasienactive'] = $this->m_olahpasien->get_all_pasien_active();
		$data['all_pasieninactive'] = $this->m_olahpasien->get_all_pasien_inactive();
		$data['all_pasienmeninggal'] = $this->m_olahpasien->get_all_pasien_meninggal();
		$data['all_pasienrj'] = $this->m_olahpasien->get_all_pasien_rj();
		$data['all_pasienri'] = $this->m_olahpasien->get_all_pasien_ri();
		$this->load->view('base/operator/template', $data);
	}

	public function get_rekap_rj()
	{
		//$poli = $this->m_olahpasien->get_all_poli();
		$jlh_pasien = array();
		for ($i=30; $i >= 0; $i--) {
			$date =  date('Y-m-d',strtotime("-".$i." day"));
			$date .= ' 00:00:00';
			$jlh_pasien[$i]['waktu_masuk'] = $date;
			$jlh_pasien[$i]['tgl'] = $this->m_olahpasien->get_jlh_per_poli($date);
		}

		return $jlh_pasien;
		//echo json_encode($jlh_pasien);
	}

	public function get_detail_pasien($rm_id)
	{
		$result = $this->m_olahpasien->get_detail_pasien($rm_id);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_detail_pasienmeninggal($rm_id)
	{
		$result = $this->m_olahpasien->get_detail_pasienmeninggal($rm_id);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function selectProvinsi($prov){
		$kabupaten = $this->m_daftarpasien->get_kabupaten_prov($prov);
		echo"<option value='' selected>Pilih Kabupaten</option>";
		foreach ($kabupaten as $kab) {
			echo "<option value='".$kab['kab_id']."'>". $kab['nama_kab']." </option>";
		}
	}

	public function selectKabupaten($kab){
		$kecamatan = $this->m_daftarpasien->get_kecamatan_kab($kab);
		echo"<option value='' selected>Pilih Kecamatan</option>";
		foreach ($kecamatan as $kec) {
			echo "<option value='".$kec['kec_id']."'>". $kec['nama_kec']." </option>";
		}
	}

	public function selectKecamatan($kec){
		$kelurahan = $this->m_pendaftaran->get_kelurahan_kec($kec);
		echo"<option value='' selected>Pilih Kelurahan</option>";
		foreach ($kelurahan as $kel) {
			echo "<option value='".$kel['kel_id']."'>". $kel['nama_kel']." </option>";
		}
	}

	public function get_kab($id='')
	{
		$result = $this->m_olahpasien->get_kab($id);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_kec($id='')
	{
		$result = $this->m_olahpasien->get_kec($id);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_kel($id='')
	{
		$result = $this->m_olahpasien->get_kel($id);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_umur($tanggal_lahir)
	{
		$datetime1 = new DateTime();
		$datetime2 = new DateTime($tanggal_lahir);
		$interval = $datetime1->diff($datetime2);
		$umur = '';
		if($interval->y > 0)
			$umur .= $interval->y ." tahun ";
		if($interval->m > 0)
			$umur .= $interval->m." bulan ";
		if($interval->d > 0)
			$umur .= $interval->d ." hari";

		header('Content-Type: application/json');
		echo json_encode(array('umur' => $umur));
	}

	public function edit_pasien()
	{
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

		$rm_id = $_POST['rm_lama'];

		$result = $this->m_olahpasien->update_info_pasien($insert, $rm_id);
		header('Content-Type: application/json');
		echo json_encode($insert);
	}

	public function inactive_pasien()
	{
		$insert['status_pasien'] = $_POST['status_pasien'];
		if ($insert['status_pasien'] == 'meninggal') {
			$insert['tgl_meninggal'] = $this->date_db($_POST['tgl_meninggal']);
			$insert['sebab'] = $_POST['sebab'];
		}

		$result = $this->m_olahpasien->inactive_pasien($_POST['rm_id'], $insert);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function delete_pasien($rm_id)
	{
		$result = $this->m_olahpasien->delete_pasien($rm_id);
	}

	public function submit_search_active()
	{
		$katakunci = $_POST['katakunci'];

		$result = $this->m_olahpasien->search_active_pasien($katakunci);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function submit_search_inactive()
	{
		$katakunci = $_POST['katakunci'];

		$result = $this->m_olahpasien->search_inactive_pasien($katakunci);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function submit_search_died()
	{
		$katakunci = $_POST['katakunci'];

		$result = $this->m_olahpasien->search_died_pasien($katakunci);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	/*pasien rawat jalan*/
	public function get_riwayat_klinik($rm_id)
	{
		$result = $this->m_olahpasien->get_riwayatklinik($rm_id);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_riwayat_igd($rm_id)
	{
		$result = $this->m_olahpasien->get_riwayatigd($rm_id);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_riwayat_ri($rm_id)
	{
		$result = $this->m_olahpasien->get_riwayatri($rm_id);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_detail_riwayatklinik($id)
	{
		$result = $this->m_olahpasien->get_detail_overview_klinis($id);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_detail_riwayatigd($id)
	{
		$result = $this->m_olahpasien->get_detail_overview_igd($id);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_detail_riwayatperawatan($id)
	{
		$result = $this->m_olahpasien->get_detail_over_perawatan($id);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	//rekap
	public function filter_rekap_rj()
	{
		$s = $_POST['start'];
		$e = $_POST['end'];
		$start = new DateTime($s);
		$end = new DateTime($e);
		$jlh = $start->diff($end);

		$jlh_pasien = array();
		for ($i=$jlh; $i >= 0; $i--) {
			$date =  date('Y-m-d',strtotime("-".$i." day"));
			$date .= ' 00:00:00';
			$jlh_pasien[$i]['waktu_masuk'] = $date;
			$jlh_pasien[$i]['tgl'] = $this->m_olahpasien->get_jlh_per_poli($date);
		}
		
		header('Content-Type: application/json');
		echo json_encode($jlh_pasien);
	}

	/*akhir pasien rawat jalan*/

	public function date_db($date){
		$dateTime = date_create($date);
		$newDateString = $dateTime->format('Y-m-d H:i:s');
		return $newDateString;
	}

	public function fdate_db($date){
		$dateTime = date_create($date);
		$newDateString = $dateTime->format('Y-m-d');
		return $newDateString;
	}

}
