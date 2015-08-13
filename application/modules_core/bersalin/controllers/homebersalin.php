<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

//class Homebersalin extends Application_Base {
class Homebersalin extends Operator_base {
	protected $dept_id;
	function __construct() {
		parent:: __construct();
		$this->load->model('m_bersalin');
		$this->load->model('m_homebersalin');
		$this->load->model('farmasi/m_obat');
		$this->load->model('logistik/m_gudangbarang');
		$this->dept_id = $this->m_gudangbarang->get_dept_id('BERSALIN')['dept_id'];
	}

	public function index($page = 0)
	{
		// user_auth
		$this->check_auth('R');
		$data['user'] = $this->user;
		$data['menu_view'] = $this->menu();
		// load template
		$data['content'] = 'home';
	
		$this->load->model('m_bersalin');
		$this->load->model('m_homebersalin');
		
		
		$data['javascript'] = "j_home";
		$data['page_title'] = 'Home Bersalin';
		$data['pasien_bersalin'] = $this->m_bersalin->get_antrian_pasien();
		$data['obatunit'] = $this->m_homebersalin->get_obat_unit($this->dept_id);
		$data['inventoribarang'] = $this->m_gudangbarang->get_inventori_barang($this->dept_id);
		$data['departemen'] = $this->m_homebersalin->get_all_departemen_ri();
		$data['all_kamar_unit'] = $this->m_homebersalin->get_all_kamar_unit($this->dept_id);
		$data['jaspel'] = $this->m_homebersalin->get_jaspel($this->dept_id);
		$this->session->set_userdata($data);
		$this->load->view('base/operator/template', $data);
	}

	public function search_pasien(){
		$insert = $_POST['search'];

		$result = $this->m_bersalin->search_pasien($insert);

		header('Content-Type: application/json');
		echo json_encode($result);	
	}

	/*farmasi bersalin*/
	//filter
	public function submit_filter_farmasi()
	{
		if (isset($_POST['filterby'])) {
			$filterby = $_POST['filterby'];
			$filterval = $_POST['valfilter'];
			
			$result = $this->m_homebersalin->filter_farmasi($filterby,$filterval, $this->dept_id);			
		}else if (isset($_POST['expired'])) {
			$filterby = $_POST['expired'];
			$now = date('Y-m-d');
			$result = $this->m_homebersalin->filter_farmasi_expired($filterby,$now,$this->dept_id);
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
			$ins['tanggal'] = $insert['tanggal'];
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
	public function get_obat_gudang()
	{
		$katakunci = $_POST['katakunci'];
		$result = $this->m_homebersalin->get_obat_farmasi($katakunci,$this->dept_id, '21');

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
					$ins['jumlah_request'] =  $key[10];
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
	public function get_obat_retur()
	{
		$katakunci = $_POST['katakunci'];
		$result = $this->m_homebersalin->get_obat_farmasi_unit($katakunci, $this->dept_id);

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
					//ubah stok di gudang dan unit, yang ubah gudang bukan unit :D
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
	public function get_barang_gudang()
	{
		$katakunci = $_POST['katakunci'];
		$elny2 = $this->m_homebersalin->get_barang_gudang($katakunci,$this->dept_id,'24');
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
	/*akhir logistik*/
	

	/*pindah pasien*/
	public function pindah_proses()
	{
		$year_now = date('y');
		$month_now = date('m');
		$date_now = date('d');
		$update = array('dept_id' => $this->input->post('dept_id_tujuan'), 'status_visit'=>'PINDAH');

		//update visit
		$up = $this->m_homebersalin->update_visit($this->input->post('visit_id'), $update);

		$current = array(
			'waktu_keluar' => $this->date_db($this->input->post('tanggal_pindah')),
			'alasan_keluar' => 'Pasien pindah ruangan atau poli'
			);
		//update visit ri
		$cur = $this->m_homebersalin->update_visit_ri($this->input->post('visit_id'),$this->input->post('ri_id'), $current);		

		//update visit kamar
		$km = array('waktu_keluar' => $this->date_db($this->input->post('tanggal_pindah')));
		$kmrlama = $this->m_homebersalin->update_visit_kamar($this->input->post('ri_id'), $km);
		//update bed
		$bed = $this->m_homebersalin->update_bed($this->input->post('bed_id_lama'), array('is_dipakai'=>'0'));

		$newri_id = $this->m_homebersalin->create_visit_ri_id($this->input->post('dept_id_tujuan'),$year_now,$month_now,$date_now);
		$new_visit = array(
			'ri_id' => $newri_id, 
			'waktu_masuk' => $this->date_db($this->input->post('tanggal_pindah')),
			'cara_bayar' => $this->input->post('cara_bayar'),
			'no_asuransi' => $this->input->post('no_asuransi'),
			'nama_asuransi' => $this->input->post('nama_asuransi'),
			'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'kelas_pelayanan' => $this->input->post('kelas_pelayanan'),
			'visit_id' => $this->input->post('visit_id'),
			'unit_asal' => $this->dept_id,
			'unit_tujuan' => $this->input->post('dept_id_tujuan'),
			);
		//insert visit_ri
		$new_visithasil = $this->m_homebersalin->insert_new_visit($new_visit);

		$newkamar = array(
			'ri_id' => $newri_id, 
			'waktu_masuk' => $this->date_db($this->input->post('tanggal_pindah')),
			'kamar_id' => $this->input->post('kamar_id_baru'),
			'bed_id' => $this->input->post('bed_id_baru'),
			'inap_id' => $this->m_homebersalin->create_inap_id($year_now,$month_now,$date_now)
			);
		//insert visit kamar
		$newkamarhasil = $this->m_homebersalin->insert_new_kamar($newkamar);
		//update bed
		$bed2 = $this->m_homebersalin->update_bed($this->input->post('bed_id_baru'), array('is_dipakai'=>'1'));
		if ($up and $cur and $kmrlama and $new_visithasil and $newkamarhasil and $bed and $bed2) {
			$akhir = 'berhasil';
		}else{
			$akhir = 'gagal';
		}
		header('Content-Type: application/json');
	 	echo json_encode($akhir);
	}
	/*akhir pindah pasien*/

	/*data kamar*/
	public function get_detail_kamar($kamar_id)
	{
		$elny2 = $this->m_homebersalin->get_detail_kamar($kamar_id);
		header('Content-Type: application/json');
	 	echo json_encode($elny2);
	}
	/*akhir data kamar*/

	/*jaspel*/


	/*akhir jaspel*/

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
