<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

//class Homebersalin extends Application_Base {
class Homenicu extends Operator_base {
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
		$data['content'] = 'home';
		$data['javascript'] = "j_homenicu";
		$data['page_title'] = 'Home NICU';
		$this->session->set_userdata($data);

		$data['pasien_nicu'] = $this->m_homenicu->get_antrian_pasien();
		$data['obatunit'] = $this->m_homebersalin->get_obat_unit($this->dept_id);
		$data['inventoribarang'] = $this->m_gudangbarang->get_inventori_barang($this->dept_id);
		$data['departemen'] = $this->m_homebersalin->get_all_departemen_ri();
		$this->load->view('base/operator/template', $data);
	}

	public function search_pasien(){
		$insert = $_POST['search'];

		$result = $this->m_homenicu->search_pasien($insert);

		header('Content-Type: application/json');
		echo json_encode($result);	
	}

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

}
