<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

//class Homebersalin extends Application_Base {
class Daftarkelahiran extends Operator_base {
	protected $dept_id;
	function __construct() {
		parent:: __construct();
		$this->load->model('m_homenicu');
		$this->load->model('bersalin/m_homebersalin');
		$this->load->model('farmasi/m_obat');
		$this->load->model('logistik/m_gudangbarang');
		$this->dept_id = $this->m_gudangbarang->get_dept_id('NICU')['dept_id'];
	}

	public function index($page = 0)
	{
		$this->check_auth('R');
		$data['user'] = $this->user;
		$data['menu_view'] = $this->menu();
		// load template
		$data['javascript'] = "j_homenicu";
		$data['page_title'] = 'Daftar';
		$data['content'] = 'daftarkelahiran';
		$data['mydept_id'] = $this->dept_id;
		// $data['javascript'] = 'master/diagnosis/javascript/j_list';
		$this->load->view('base/operator/template', $data);
	}

	public function daftar($page='')
	{
		$year = date('y');
		$month = date('m');
		$datenow = date('d');

		if ($this->input->post('statuslahir') == 'Hidup') {
			$ins = array(
				'nama' => $this->input->post('namabayi'), 
				'alias' => '',
				'tempat_lahir' => 'RANTAU',
				'tanggal_lahir' => $this->date_db($this->input->post('tglKelahiran')),
				'jenis_kelamin' => $this->input->post('jk'),
				'gol_darah' => 'BELUM DIKETAHUI',
				'pekerjaan' => 'BELUM DIKETAHUI',
				'jenis_id' => '',
				'no_id' => '',
				'pendidikan' => 'TIDAK ADA',
				'agama' => '', //ikut ibu
				'status_perkawinan' => 'BELUM KAWIN', //iya lah, orang baru lahir kok
				'alamat_skr' => $this->input->post('alamat_ibu'),//ikut ibu
				'prov_id_skr' => '', //ikut ibu
				'kec_id_skr' => $this->input->post('kecamatan_id'), //ikut ibu
				'kab_id_skr' => $this->input->post('kabupaten_id'), 
				'kel_id_skr' => $this->input->post('kelurahan_id'),
				'nama_wali' => $this->input->post('namaibu'), //nama ibu
				'hubungan_wali' => 'IBU',
				'no_telp_wali' => $this->input->post('telp'),
				'alamat_wali' => $this->input->post('alamat_ibu'),
				'pekerjaan_wali' => '',
				'tgl_pendaftaran' => date('Y-m-d')
			);

			$ins['rm_id'] = $this->m_homenicu->create_rm_id($year, $month);
			$insert = $this->m_homenicu->insert_kelahiran_baru($ins);
		}else{
			$ins['rm_id'] = NULL;
		}

		$status = $this->input->post('statuslahir');
		$suratlahir = ''; $suratmati = '';
		if ($status == 'Hidup') {
			$suratlahir = $this->input->post('surat');
		}else{
			$suratmati = $this->input->post('surat');
		}
		$newborn = array(
			'rm_id' => $ins['rm_id'], 
			'visit_id' => $this->input->post('visit_id_ibu'), //ikut ibu 
			'status' => $this->input->post('statuslahir'),
			'nama' => $this->input->post('namabayi'),
			'waktu_lahir' => $this->date_db($this->input->post('tglKelahiran')),
			'surat_kelahiran' => $suratlahir,
			'surat_kematian' => $suratmati,
			'diagnosa' => $this->input->post('kodediagnosa'),
			'paritas' => $this->input->post('paritas'),
			'jenis_kelamin' => $this->input->post('jk'),
			'berat_badan' => $this->input->post('beratBadan'),
			'panjang_badan' => $this->input->post('pjgBadan'),
			'penolong' => $this->input->post('penolong'),
			'asisten' => $this->input->post('asisten'),
			'is_cacat' => $this->input->post('cacat'),
			'has_anus' => $this->input->post('anus'),
		);
		//print_r($newborn);die;
		$born = $this->m_homenicu->add_kelahiran($newborn);
		if ($born == true AND $this->input->post('statuslahir') == 'Hidup' ) {
			$rujukan = $this->input->post('caramasuk');
			if ($rujukan == 'non') {
				$rujukan = 'Sendiri';
			}
			$params = array(
				'rm_id' => $ins['rm_id'], 
				'dept_id' => $this->dept_id,
				'tanggal_visit' => date('Y-m-d H:i:s'),
				'cara_masuk' => $rujukan,
				'tipe_kunjungan' => 'RAWAT INAP',
				'petugas_registrasi' => $this->session->userdata('session_operator')['petugas_id'],
				'status_visit' => 'REGISTRASI INAP'
			);

			$params['visit_id'] = $this->m_homenicu->create_visit_id($year,$month, $datenow);
			//
			$res = $this->m_homenicu->add_new_visit($params);

			$ri = array(
				'ri_id' => $this->m_homenicu->create_visit_ri_id($this->dept_id, $year,$month,$datenow), 
				'visit_id' => $params['visit_id'],
				'waktu_masuk' => date('Y-m-d H:i:s'),
				'cara_bayar' => '',
				'no_asuransi' => '',
				'nama_asuransi' => '',
				'nama_asuransi' => '',
				'kelas_pelayanan' => '',
				'unit_tujuan' => $this->dept_id
			);

			$res = $this->m_homenicu->add_new_visit_ri($ri);

			$kmr = array(
				'inap_id' => $this->m_homenicu->create_inap_id($year,$month,$datenow), 
				'ri_id' => $ri['ri_id'],
				'waktu_masuk' => date('Y-m-d H:i:s'),
				'kamar_id' => $this->input->post('kamar_id'),
				'bed_id' => $this->input->post('bed_id')
			);

			$res = $this->m_homenicu->add_new_visit_kamar($kmr);

			$res = $this->m_homenicu->update_bed_status($this->input->post('bed_id'));

		}

		if ($res) {
			redirect('nicu/homenicu');
		}
	
	}

	public function get_patient_on_bed($key='')
	{
		$result = $this->m_homenicu->get_patient_on_bed($key);

		header('Content-Type: application/json');
		echo json_encode($result);
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

}
