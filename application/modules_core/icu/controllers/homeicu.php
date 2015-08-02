<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Homeicu extends Operator_base {
	protected $dept_id;
	function __construct(){
		parent:: __construct();
		$this->load->model("m_homeicu");
		$this->load->model("bersalin/m_homebersalin");
		$this->load->model("logistik/m_gudangbarang");
		$data['page_title'] = "Home ICU";
		$this->dept_id = $this->m_gudangbarang->get_dept_id('ICU')['dept_id'];
		$this->session->set_userdata($data);	
	}

	public function index($page = 0)
	{
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		// load template
		$data['content'] = 'home';
		$data['pasien_icu'] = $this->m_homeicu->get_antrian_pasien();
		$data['javascript'] = 'j_homeicu';
		$data['obatunit'] = $this->m_homebersalin->get_obat_unit($this->dept_id);
		$data['inventoribarang'] = $this->m_gudangbarang->get_inventori_barang($this->dept_id);
		$this->load->view('base/operator/template', $data);
	}
	public function search_pasien()
	{
		$insert = $_POST['search'];
		$result = $this->m_homeicu->search_pasien($insert);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	/*farmasi*/
	public function submit_filter_farmasi()
	{
		if (isset($_POST['filterby'])) {
			$filterby = $_POST['filterby'];
			$filterval = $_POST['valfilter'];
			switch ($filterby) {
				case 'jenis':
					$result = $this->m_homebersalin->filter_farmasi_jenis($filterval);
					break;
				case 'merek':
					$result = $this->m_homebersalin->filter_farmasi_merek($filterval);	
					break;
				case 'nama':
					$result = $this->m_homebersalin->filter_farmasi_nama($filterval);
					break;
			}
			
		}

		if (isset($_POST['expired'])) {
			$filterby = $_POST['expired'];
			$now = date('Y-m-d');
			$result = $this->m_homebersalin->filter_farmasi_expired($filterby,$now,$this->dept_id);
		}

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	//permintaan
	public function submit_permintaan_obat($value='')
	{
		$this->form_validation->set_rules('no_permintaan', 'nomor permitaan', 'required|trim|xss_clean|is_unique[obat_permintaan.no_permintaan]');
		$this->form_validation->set_message('is_unique', 'Nomor permintaan sudah ada');
		$this->form_validation->set_message('required', 'Data tidak boleh kosong');

		if ($this->form_validation->run() == TRUE) {
			$insert['no_permintaan'] = $_POST['no_permintaan'];
			$tgl = DateTime::createFromFormat('d/m/Y H:i',$_POST['tanggal_request']);
			$insert['tanggal_request'] = $tgl->format('Y-m-d H:i');
			$insert['keterangan_request'] = $_POST['keterangan_request'];
			$insert['petugas_request'] = $this->session->userdata('session_operator')['petugas_id'];
			$insert['is_responded'] = '0';
			$insert['dept_id'] = $this->dept_id;

			$val = $_POST['data'];
			$result = $this->m_homebersalin->insert_permintaan($insert);
			if($result){
				foreach ($val as $key) {
					$ins['obat_id'] = $key[1];
					$ins['obat_detail_id'] = $key[0];
					$ins['jumlah_request'] =  $key[8];
					$ins['obat_permintaan_id'] = $result;

					$elny = $this->m_homebersalin->insert_detail_permintaan($ins);
				}
				$elny2 = array(
					'message'		=> "Data berhasil disimpan",
					'error' => 'n'
				);
			}
		}else{
			$elny2 = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'y'
			);
		}

		header('Content-Type: application/json');
	 	echo json_encode($elny2);
	}

	//retur farmasi
	public function get_obat_retur()
	{
		$katakunci = $_POST['katakunci'];
		$result = $this->m_homebersalin->get_obat_farmasi($katakunci, $this->dept_id);

		header('Content-Type: application/json');
	 	echo json_encode($result); 
	}

	public function submit_retur_bersalin()
	{
		$this->form_validation->set_rules('no_returdept', 'Nomor Retur', 'required|trim|xss_clean|is_unique[obat_retur_dept.no_returdept]');
		$this->form_validation->set_message('is_unique', 'Nomor Retur sudah ada');
		$this->form_validation->set_message('required', 'Data tidak boleh kosong');

		if ($this->form_validation->run() == TRUE) {
			$insert['status'] = 'belum diterima';
			$insert['no_returdept'] = $_POST['no_returdept'];
			$insert['dept_id'] = $this->dept_id;
			$insert['petugas_input'] = $this->session->userdata('session_operator')['petugas_id'];
			$insert['keterangan'] = $_POST['keterangan'];
			$tgl =  DateTime::createFromFormat('d/m/Y H:i',$_POST['waktu']);
			$insert['waktu'] = $tgl->format('Y-m-d H:i');

			$val = $_POST['data'];

			$id = $this->m_homebersalin->submit_retur_dept($insert);
			if ($id) {
				foreach ($val as $key) {
					$ins['retur_dept_id'] = $id;
					$ins['obat_detail_id'] = $key[0];
					$ins['jumlah'] = $key[8];

					$res = $this->m_homebersalin->insert_detail_returdept($ins);
				}

				$elny2 = array(
					'message'		=> "Data berhasil disimpan",
					'error' => 'n'
				);
			}
		}else{
			$elny2 = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'y'
			);
		}

		header('Content-Type: application/json');
	 	echo json_encode($elny2);
	}

	//logistik
	public function input_in_outbarang($value='')
	{
		$insert['barang_detail_id'] = $_POST['barang_detail_id'];
		$tgl = DateTime::createFromFormat('d/m/Y H:i', $_POST['tanggal']);
		$insert['tanggal'] = $tgl->format('Y-m-d H:i');
		$insert['is_out'] = $_POST['is_out'];
		$insert['jumlah'] = $_POST['jumlah'];
		$insert['keterangan'] = $_POST['keterangan'];
		$insert['barang_dept_id'] = $this->dept_id;

		$res = $this->m_gudangbarang->input_in_out($insert);
		if ($res) {
			$ins['barang_detail_id'] = $_POST['barang_detail_id'];
			$ins['dept_id'] = $this->dept_id;
			$ins['stok'] = $_POST['sisa'];
			$ins['keterangan_stok'] = "IN - OUT";

			$res = $this->m_gudangbarang->input_riwayat_out($ins);
			if ($res) {
				$message = "true";
			}else{
				$message = "false";
			}
		}else{
			$message = "false";
		}

		header('Content-Type: application/json');
	 	echo(json_encode($message));
	}

	public function get_detail_inventori($id)
	{
		$res = $this->m_gudangbarang->get_detail_inventori($id, $this->dept_id);
		header('Content-Type: application/json');
	 	echo json_encode($res);
	}

	public function submit_permintaan_barangunit($value='')
	{
		$this->form_validation->set_rules('no_permintaanbarang', 'nomor permitaan', 'required|trim|xss_clean|is_unique[barang_permintaan.no_permintaanbarang]');
		$this->form_validation->set_message('is_unique', 'Nomor permintaan sudah ada');
		$this->form_validation->set_message('required', 'Data tidak boleh kosong');

		if ($this->form_validation->run() == TRUE) {
			$insert['no_permintaanbarang'] = $_POST['no_permintaanbarang'];
			$tgl = DateTime::createFromFormat('d/m/Y H:i',$_POST['tanggal_request']);
			$insert['tanggal_request'] = $tgl->format('Y-m-d H:i');
			$insert['keterangan_request'] = $_POST['keterangan_request'];
			$insert['petugas_request'] = $this->session->userdata('session_operator')['petugas_id'];
			$insert['is_responded'] = '0';
			$insert['dept_id'] = $this->dept_id;

			$val = $_POST['data'];
			$result = $this->m_homebersalin->insert_permintaanbarang($insert);
			if($result){
				foreach ($val as $key) {
					$ins['barang_id'] = $key[9];
					$ins['barang_stok_id'] = $key[8];
					$ins['jumlah_request'] =  $key[10];
					$ins['barang_permintaan_id'] = $result;

					$elny = $this->m_homebersalin->insert_detail_permintaanbarang($ins);
				}
				$elny2 = array(
					'message'		=> "Data berhasil disimpan",
					'error' => 'n'
				);
			}
		}else{
			$elny2 = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'y'
			);
		}

		header('Content-Type: application/json');
	 	echo json_encode($elny2);
	}

	/*akhir farmasi*/

}
