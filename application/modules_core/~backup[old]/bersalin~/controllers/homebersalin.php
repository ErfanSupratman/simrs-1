<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

//class Homebersalin extends Application_Base {
class Homebersalin extends Operator_base {
	function __construct() {
		parent:: __construct();
		$this->load->model('m_bersalin');
		$this->load->model('m_homebersalin');
		$this->load->model('farmasi/m_obat');
		$this->load->model('logistik/m_gudangbarang');
	}

	public function index($page = 0)
	{
		// user_auth
		$this->check_auth('R');
		$data['user'] = $this->user;
		// load template
		$data['content'] = 'home';
		
		$this->dept_id = 19;
		$this->load->model('m_bersalin');
		$this->load->model('m_homebersalin');
		$data['menu_view'] = $this->menu();

		$allpasienbersalin = $this->m_bersalin->get_pasien_by_dept($this->dept_id);
		//$data['allpasiens'] = $allpasienbersalin;
		$data['javascript'] = "j_home";
		$data['page_title'] = 'Home Bersalin';
		$data['obatunit'] = $this->m_homebersalin->get_obat_unit();

		$this->session->set_userdata($data);
		$this->load->view('base/operator/template', $data);
	}

	public function search_pasien($value='')
	{
		$result = $this->m_bersalin->get_search_pasien($value);

		header('Content-Type: application/json');
	 	echo json_encode($result); 
	}

	/*farmasi bersalin*/
	//filter
	public function submit_filter_farmasi()
	{
		if (isset($_POST['filterby'])) {
			$filteby = $_POST['filterby'];
			$filterval = $_POST['valfilter'];
			switch ($filterby) {
				case 'jenis':
					
					break;
				case 'merek':
						
					break;
				case 'nama':
					# code...
					break;
			}
		}

		if (isset($_POST['expired'])) {
			$filterby = $_POST['expired'];
			$now = date('Y-m-d');
			$result = $this->m_homebersalin->filter_farmasi_expired($filterby,$now);
		}

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function input_in_out()
	{
		$insert['obat_dept_id'] = $_POST['obat_dept_id'];
		$tgl = DateTime::createFromFormat('d/m/Y',$_POST['tanggal']);
		$insert['tanggal'] = $tgl->format('Y-m-d');
		$insert['is_out'] = $_POST['is_out'];
		$insert['jumlah'] = $_POST['jumlah'];
		$insert['keterangan'] = $_POST['keterangan'];

		$res = $this->m_obat->input_in_out($insert); //pake di obat aja :D
		if ($res) {
			$ins['obat_dept_id'] = $_POST['obat_dept_id'];
			$ins['tanggal'] = $tgl;
			$is_out = $_POST['is_out'];
			if ($is_out == 'IN') {
				$ins['masuk'] = $_POST['jumlah'];
				$ins['keluar'] = '';
			}else{
				$ins['keluar'] = $_POST['jumlah'];
				$ins['masuk'] = '';
			}
			$ins['total_stok'] = $_POST['sisa'];
			$ins['keterangan'] = "IN - OUT";

			$res = $this->m_obat->input_riwayat_out($ins);
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

	//permintaan
	public function get_obat_gudang($katakunci)
	{
		$result = $this->m_homebersalin->get_obat_farmasi($katakunci, '21');

		header('Content-Type: application/json');
	 	echo json_encode($result); 
	}

	public function get_stok_unit($tgl_kadaluarsa, $dept_id)
	{
		$result = $this->m_homebersalin->get_stok_unit($tgl_kadaluarsa, $dept_id);
		if (!empty($result)) {
			$hasil = $result['total_stok'];
		}else{
			$hasil = '0';
		}
		header('Content-Type: application/json');
	 	echo json_encode($hasil);
	}

	public function submit_permintaan_bersalin($value='')
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
			$insert['dept_id'] = '19';

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

	//retur
	public function get_obat_retur($katakunci)
	{
		$result = $this->m_homebersalin->get_obat_farmasi($katakunci, '19');

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
			$insert['dept_id'] = '19';
			$insert['petugas_input'] = $this->session->userdata('session_operator')['petugas_id'];
			$insert['keterangan'] = $_POST['keterangan'];
			$wkt =  DateTime::createFromFormat('d/m/Y H:i',$_POST['waktu']);
			$insert['waktu'] = $tgl->format('Y-m-d H:i');

			$val = $_POST['data'];

			$id = $this->m_homebersalin->submit_retur_dept($insert);
			if ($id) {
				foreach ($val as $key) {
					$ins['retur_dept_id'] = $id;
					$ins['obat_detail_id'] = $key[0];
					$ins['jumlah'] = $key[8];

					$res = $this->m_homebersalin->insert_detail_returdept($ins);
					//ubah stok di gudang dan unit
					$last = $this->m_obat->get_last_stok_by_detail($ins['obat_detail_id'],'21');  //gudang
					$param = array(
							'obat_dept_id' => $last['obat_dept_id'],
							'tanggal' => date('Y-m-d H:i:s'),
							'masuk' => $ins['jumlah'],
							'total_stok' => ($last['total_stok'] + $ins['jumlah']),
							'keterangan' => 'RETUR DARI UNIT'
						);
					$updateunit = $this->m_obat->update_stok_returdepartemen($param); //insert data baru gudang
					$last = $this->m_obat->get_last_stok_by_detail($ins['obat_detail_id'],'19');  //gudang
					$params = array(
							'obat_dept_id' => $last['obat_dept_id'],
							'tanggal' => date('Y-m-d H:i:s'),
							'masuk' => $ins['jumlah'],
							'total_stok' => ($last['total_stok'] - $ins['jumlah']),
							'keterangan' => 'RETUR KE GDG'
						);
					$update = $this->m_obat->update_stok_returdepartemen($params); //insert data baru unit bersalin
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
	/*akhir farmasi bersalin*/

	/*permintaan logistik*/
	public function get_barang_gudang($katakunci)
	{
		$elny2 = $this->m_gudangbarang->getdetailbarang($katakunci,'24');
		header('Content-Type: application/json');
	 	echo json_encode($elny2);
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
			$insert['dept_id'] = '19';

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
	/*akhir logistik*/

}
