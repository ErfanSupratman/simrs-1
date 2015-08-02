<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Homeapotikumum extends Operator_base {
	protected $dept_id;
	function __construct(){
		parent:: __construct();
		$this->load->model("m_apotekumum");
		$this->load->model("m_obat");
		$this->load->model("bersalin/m_homebersalin");
		$data['page_title'] = "Apotek Umum";
		$this->dept_id = $this->m_apotekumum->get_dept_id('APOTEK UMUM')['dept_id'];
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;

		// load template
		$data['content'] = 'apotikumum/home';
		$data['javascript'] = 'apotikumum/j_home';

		$data['jenis_obat'] = $this->m_obat->get_jenis_obat();
		$data['satuan_obat'] = $this->m_obat->get_satuan_obat();
		$item = "a";
		$data['opname'] = $this->m_obat->get_alpha_obat_opname($item, $this->dept_id);
		$data['my_dept_id'] = $this->dept_id;

		$this->load->view('base/operator/template', $data);
	}

	/*master obat*/
	public function filter_obat()
	{
		$insert['nama']= $_POST['nama'];
		$insert['satuan_id'] = $_POST['satuan_id'];
		$insert['is_generik'] = $_POST['is_generik'];
		$result = $this->m_apotekumum->filter_obat($insert);

		header('Content-Type: application/json');
	 	echo(json_encode($result));
	}

	public function filter_stok()
	{
		$dept_id = $_POST['dept_id'];
		$result = $this->m_apotekumum->filter_stok($dept_id);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function edit_obat()
	{
		$this->form_validation->set_rules('stok_minimal', 'Stok Minimal', 'required|trim|xss_clean');
		
		$this->form_validation->set_message('required', 'isi semua data dengan benar');

		if ($this->form_validation->run() == TRUE) {
			$stok = $_POST['stok_minimal'];
			$obat_id = $_POST['obat_id'];
			$stockresult = $this->m_apotekumum->edit_stock_dept($obat_id, $this->dept_id, $stok);	
		
			$result = array(
				'message'		=> $this->dept_id,
				'error' => 'n'
			);					
		}else{
			$result = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'y'
			);
		}
		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	//detail
	public function search_obat()
	{
		$search = $_POST['katakunci'];
		$result = $this->m_apotekumum->get_obat_all($search);		

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function tampil_detail($value='')
	{
		$result = $this->m_apotekumum->get_detail_obat($value);

		header('Content-Type: application/json');
		echo json_encode($result);
	}	

	/*akhir master obat*/

	/*inventori*/
	public function filter_obat_inventori()
	{
		foreach ($_POST as $value) 
		{
			$insert = $value;
		}

		$insert['now'] = date('Y-m-d');
		if ($insert['filter'] != '') {
			if ($insert['filter'] == '3') {
				$insert['end'] = '3';
			}else if ($insert['filter'] == '6') {
				$insert['end'] = '6';
			}else{
				$insert['end'] = '0';
			}

			$result = $this->m_apotekumum->get_filter_tgl($insert, $this->dept_id);
		}else{
			if ($insert['filterInv'] == "Nama") {
				$result = $this->m_apotekumum->get_filter_nama($insert, $this->dept_id);
			}else if ($insert['filterInv'] == "Jenis") {
				$result = $this->m_apotekumum->get_filter_jenis($insert, $this->dept_id);
			}else if($insert['filterInv'] == "Merek"){
				$result = $this->m_apotekumum->get_filter_merk($insert, $this->dept_id);
			}else if($insert['filterInv'] =="Penyedia"){
				$result = $this->m_apotekumum->get_filter_penyedia($insert, $this->dept_id);
			}else if($insert['filterInv'] == "Sumber"){
				$result = $this->m_apotekumum->get_filter_sumber($insert, $this->dept_id);
			}else if($insert['filterInv'] == ""){
				$result = $this->m_apotekumum->get_filter_nofilter($insert, $this->dept_id);
			}
		}	


		header('Content-Type: application/json');
	 	echo(json_encode($result));
	}
	/*akhir inventori*/

	/*permintaan*/
	public function submit_permintaan($value='')
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
			$result = $this->m_homebersalin->insert_permintaan($insert); //pake di bersalin
			if($result){
				foreach ($val as $key) {
					$ins['obat_id'] = $key[1];
					$ins['obat_detail_id'] = $key[0];
					$ins['jumlah_request'] =  $key[8];
					$ins['obat_permintaan_id'] = $result;

					$elny = $this->m_homebersalin->insert_detail_permintaan($ins); //pake
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
	/*akhir permintaan*/

	/*retur ke gudang*/
	public function get_obat_retur()
	{
		$katakunci = $_POST['katakunci'];
		$result = $this->m_homebersalin->get_obat_farmasi($katakunci, $this->dept_id); //==bersalin

		header('Content-Type: application/json');
	 	echo json_encode($result); 
	}

	public function submit_returobat()
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
	/*retur ke gudang*/

	/*opname*/
	public function get_alpha_obat_opname($alpha){
		$result = $this->m_obat->get_alpha_obat_opname($alpha, $this->dept_id);

		header('Content-Type: application/json');
	 	echo json_encode($result);		
	}

	public function get_opname_by_name(){
		$value = $_POST['kunci'];
		$result = $this->m_apotekumum->get_opname_by_name($value, $this->dept_id);

		header('Content-Type: application/json');
	 	echo json_encode($result);			
	}

	public function opname_process($value='')
	{
		$tanggal = $this->input->post('tanggal_acuan');
		$stok = $this->input->post('stok');
		$obat_dept_id = $this->input->post('obat_dept_id');
		$obat_opname_id = $this->input->post('obat_opname_id');
		$harga = $this->input->post('harga_jual');

		$params = array(
			'tgl_opname' => date('Y-m-d H:i:s'), //tanggal sekarang atau waktu realtime
			'tgl_acuan' => $tanggal,
			'obat_dept_id' => $obat_dept_id,
			'stok_fisik' => $stok,
			'keterangan' => 'OK'
			);

		$obat_opname = $this->m_obat->get_obat_deptstok_history($obat_dept_id);
		//selisih minus berarti stok fisik lebih besar dari stok sistem, dan sebaliknya
		$selisih = intval($obat_opname['total_stok']) - intval($stok);

		if (intval($selisih) != 0) {			
			//stok sistem
			$params['stok_obat'] = $obat_opname['total_stok'];
			
			//selisih diberi nilai absolute /positif
			$params['selisih'] = abs($selisih);
			$params['harga'] = abs($selisih * intval($harga));

			$result = $this->m_obat->insert_opname_history($params);
			//klo berhasil input, tambah history obat di obat_dept_stock

			//ambil stok terakhir sebelum atau sama dengan tanggal acuan
			
			if ($result) {
				if (intval($selisih) < 0) {
					//update plus
					$update = $this->m_obat->update_history_after_opname($obat_dept_id, $tanggal, abs($selisih), "IN");
				}else{
					//update minus
					$update = $this->m_obat->update_history_after_opname($obat_dept_id, $tanggal, abs($selisih), "OUT");
				}

				$last_stok = $this->m_obat->get_last_stokopname($obat_dept_id);
				//tambah history baru
				$stok_baru = $last_stok['stok_fisik'];
				$insert = array(
					'obat_dept_id' => $obat_dept_id, 
					'tanggal' => date('Y-m-d H:i:s'), //tanggal sekarang atau waktu realtime
					'total_stok' => $stok_baru,
					'keterangan' => 'OPNAME'
					);

				$upd = $this->m_obat->insert_new_obat_history($insert);

				$data['message'] = "opname berhasil";
			}else{
				$data['message'] = "opname gagal";
			}

		}else{
			//do nothing
			$data['message'] = "obat tidak diopname";
		}

		//$data['message'] = $selisih;


		header('Content-Type: application/json');
	 	echo json_encode($data);
	}
	/*akhir opname*/

	/*laporan*/
	public function print_laporan_kadaluarsa($value='')
	{
		$filter['now'] = date('Y-m-d');
		$filter['end'] = $_POST['hd'];
		$dept_id = $_POST['dept_id'];
		$data['result'] = $this->m_apotekumum->get_filter_tgl($filter, $dept_id);
		$data['nama_dept'] = $this->m_obat->get_nama_dept($dept_id)['nama_dept'];
	
		if($filter['end'] === '0')
			$data['filter'] = 'sudah kadaluarsa';  
		else $data['filter'] = "akan kadaluarsa dalam ". $filter['end'] . " bulan";
		$this->load->view('farmasi/gudangobat/laporan/kadaluarsa',$data);
	}

	public function print_laporan_stokwarning()
	{
		$dept_id = $_POST['dept_id'];
		$result = $this->m_apotekumum->filter_stok($dept_id);

		$data['nama_dept'] = $this->m_obat->get_nama_dept($dept_id)['nama_dept'];
		$data['hasil'] = $result;
		$data['waktu'] = date('d F Y H:i:s');
		$this->load->view('farmasi/gudangobat/laporan/stokwarning',$data);
	}

	public function print_laporan_last_stok()
	{
		$dept_id = $_POST['dept_id'];
		$insert['satuan'] = '';
		$insert['is_generik'] = '';
		$result = $this->m_apotekumum->get_filter_nofilter($insert, $dept_id);

		$data['nama_dept'] = $this->m_obat->get_nama_dept($dept_id)['nama_dept'];
		$data['hasil'] = $result;
		$data['waktu'] = date('d F Y H:i:s');
		$this->load->view('farmasi/gudangobat/laporan/laststok',$data);
	}
	/*laporan akhir*/
}
