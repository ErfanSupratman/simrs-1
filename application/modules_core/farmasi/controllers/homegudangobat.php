<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );

class Homegudangobat extends Application_Base {
	function __construct(){
		parent:: __construct();
		$this->load->model("m_obat");
	}

	public function index($page = 0)
	{
		// load template
		$this->load->model('m_obat');
		$dept_id = '21';
		$data['content'] = 'gudangobat/home';
		$data['menu_view'] = $this->menu();
		$data['javascript'] = 'gudangobat/j_list';

		$data['jenis_obat'] = $this->m_obat->get_jenis_obat();
		$data['satuan_obat'] = $this->m_obat->get_satuan_obat();
		// $data['obat'] = $this->m_obat->get_all_obat($dept_id);
		$data['inventori'] =  $this->m_obat->get_inventori($dept_id);
		$item = "a";
		$data['opname'] = $this->m_obat->get_alpha_obat_opname($item);
		$data['riwayat_pengadaan'] = $this->m_obat->get_riwayat_pengadaan();
		$this->load->view('base/operator/template', $data);
	}

	/*add obat*/
	public function get_merk()
	{
		$result = $this->m_obat->get_merk();

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function search_merk($search='')
	{
		$result = $this->m_obat->search_merk($search);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function add_obat()
	{
		$this->form_validation->set_rules('nama', 'nama obat', 'required|trim|xss_clean|is_unique[obat.nama]');
		$this->form_validation->set_rules('harga_dasar', 'Harga Dasar', 'required|trim|xss_clean');
		$this->form_validation->set_rules('hps', 'HPS', 'required|trim|xss_clean');
		$this->form_validation->set_rules('margin', 'margin', 'required|trim|xss_clean');
		$this->form_validation->set_rules('stok_min', 'Stok Minimal', 'required|trim|xss_clean');
		$this->form_validation->set_rules('merk', 'Merek', 'required|trim|xss_clean');
		$this->form_validation->set_rules('penyedia', 'Nama Penyedia', 'required|trim|xss_clean');
		//$this->form_validation->set_message('is_unique[obat.nama]', 'Nama Obat sudah ada');

		if ($this->form_validation->run() == TRUE) {
			$insert['nama'] = $_POST['nama'];
			$insert['harga_dasar'] = $_POST['harga_dasar'];
			$insert['merk_id'] = $_POST['merk_id'];
			$insert['jenis_obat_id'] = $_POST['jenis_obat_id'];
			$insert['satuan_id'] = $_POST['satuan_id'];
			$insert['hps'] = $_POST['hps'];
			$insert['margin'] = $_POST['margin'];
			$insert['harga_jual'] = $_POST['harga_jual'];
			$insert['is_hidden'] = $_POST['is_hidden'];
			$insert['is_generik'] = $_POST['is_generik'];
			$insert['penyedia_id'] = $_POST['penyedia_id'];

			$res_id = $this->m_obat->insert_obat($insert);
			
			if($res_id){
				$stok['stok_minimal'] = $_POST['stok_min'];
				$stok['obat_id'] = $res_id;
				$stok['dept_id'] = '21'; //id gudang =  21

				$stockresult = $this->m_obat->insert_stock_dept($stok);	
			}

			$result = array(
				'message'		=> "Data berhasil disimpan"
			);					

			header('Content-Type: application/json');
		 	echo json_encode($result);
		}else{
			$result = array(
				'message'		=> str_replace("\n", "", validation_errors()),
			);

			header('Content-Type: application/json');
		 	echo json_encode($result);
		}
	}

	//edit obat
	public function edit_obat()
	{
		$this->form_validation->set_rules('nama', 'nama obat', 'required|trim|xss_clean');
		$this->form_validation->set_rules('harga_dasar', 'Harga Dasar', 'required|trim|xss_clean');
		$this->form_validation->set_rules('hps', 'HPS', 'required|trim|xss_clean');
		$this->form_validation->set_rules('margin', 'margin', 'required|trim|xss_clean');
		$this->form_validation->set_rules('stok_min', 'Stok Minimal', 'required|trim|xss_clean');
		$this->form_validation->set_rules('merk', 'Merek', 'required|trim|xss_clean');
		//$this->form_validation->set_message('is_unique[obat.nama]', 'Nama Obat sudah ada');

		if ($this->form_validation->run() == TRUE) {
			$insert['nama'] = $_POST['nama'];
			$insert['obat_id'] = $_POST['obat_id'];
			$insert['harga_dasar'] = $_POST['harga_dasar'];
			$insert['merk_id'] = $_POST['merk_id'];
			$insert['jenis_obat_id'] = $_POST['jenis_obat_id'];
			$insert['satuan_id'] = $_POST['satuan_id'];
			$insert['hps'] = $_POST['hps'];
			$insert['margin'] = $_POST['margin'];
			$insert['harga_jual'] = $_POST['harga_jual'];
			$insert['is_hidden'] = $_POST['is_hidden'];
			$insert['is_generik'] = $_POST['is_generik'];

			$res_id = $this->m_obat->edit_obat($insert);
			
			if($res_id){
				$stok['stok_minimal'] = $_POST['stok_min'];
				$stok['obat_id'] = $res_id;
				$stok['dept_id'] = '21'; //id gudang =  21

				$stockresult = $this->m_obat->edit_stock_dept($stok);	
			}

			$result = array(
				'message'		=> "Data berhasil disimpan"
			);					

			header('Content-Type: application/json');
		 	echo json_encode($result);
		}else{
			$result = array(
				'message'		=> str_replace("\n", "", validation_errors()),
			);

			header('Content-Type: application/json');
		 	echo json_encode($result);
		}
	}

	public function tampil_detail($value='')
	{
		$result = $this->m_obat->get_detail_obat($value);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function filter_stok()
	{
		$result = $this->m_obat->filter_stok();

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function filter_obat()
	{
		$insert['nama']= $_POST['nama'];
		$insert['satuan_id'] = $_POST['satuan_id'];
		$insert['is_generik'] = $_POST['is_generik'];
		$result = $this->m_obat->filter_obat($insert);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function filter_obat_opname()
	{
		$insert['nama']= $_POST['namaObatOpname'];
		$result = $this->m_obat->filter_obat_opname($insert);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}
	/*akhir add obat*/

	/*detail obat*/
	public function search_obat($search)
	{
		$result = $this->m_obat->search_obat($search);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function search_penyedia($search)
	{
		$result = $this->m_obat->search_penyedia($search);

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function add_detail_obat()
	{
		$this->form_validation->set_rules('nama', 'nama obat', 'required|trim|xss_clean');
		$this->form_validation->set_rules('tgl_kadaluarsa', 'Tanggal Kadaluarsa', 'required|trim|xss_clean');
		$this->form_validation->set_rules('tahun_pengadaan', 'Tahun Pengadaan', 'required|trim|xss_clean');
		$this->form_validation->set_rules('total_stok', 'Jumlah Stok', 'required|trim|xss_clean');

		if ($this->form_validation->run() == TRUE) {
			$insert['obat_id'] = $_POST['obat_id'];
			$insert['tgl_kadaluarsa'] = $_POST['tgl_kadaluarsa'];
			$insert['no_batch'] = $_POST['no_batch'];
			$insert['tahun_pengadaan'] = $_POST['tahun_pengadaan'];
			$insert['sumber_dana'] = $_POST['sumber_dana'];
			//$insert['penyedia_id'] = $_POST['penyedia_id'];

			$obat_detail_id = $this->m_obat->insert_detail_obat($insert);

			if ($obat_detail_id) {
				$ins = array(
					'obat_detail_id' => $obat_detail_id,
					'dept_id' => '21'
					);
				$obat_dept_id = $this->m_obat->insert_obat_dept($ins);

				if ($obat_dept_id) {
					$insert['total_stok'] = $_POST['total_stok'];
					$ins2 = array(
						'obat_dept_id' => $obat_dept_id,
						'tanggal' => date('Y-m-d'),
						'masuk' => $insert['total_stok'],
						'total_stok' => $insert['total_stok'],
						'keterangan' => 'IN'
						);
					$obat_dept_stok = $this->m_obat->insert_dept_stok($ins2);
					$result = true;

					header('Content-Type: application/json');
				 	echo(json_encode($obat_dept_stok));		
				}else{
					$result = false;
					header('Content-Type: application/json');
			 		echo(json_encode($result));		
				}
			}else{
				$result = false;
				header('Content-Type: application/json');
		 		echo(json_encode($result));		
			}
		}else{
			$result = array(
				'message'		=> str_replace("\n", "", validation_errors()),
			);

			header('Content-Type: application/json');
		 	echo json_encode($result);
		}
		
	}

	public function edit_detail_obat()
	{
		$this->form_validation->set_rules('nama', 'nama obat', 'required|trim|xss_clean');
		$this->form_validation->set_rules('tgl_kadaluarsa', 'Tanggal Kadaluarsa', 'required|trim|xss_clean');
		$this->form_validation->set_rules('tahun_pengadaan', 'Tahun Pengadaan', 'required|trim|xss_clean');
		//$this->form_validation->set_rules('total_stok', 'Jumlah Stok', 'required|trim|xss_clean');

		if ($this->form_validation->run() == TRUE) {
			$insert['obat_id'] = $_POST['obat_id'];
			$insert['obat_detail_id'] = $_POST['obat_detail_id'];
			$insert['tahun_pengadaan'] = $_POST['tahun_pengadaan'];
			$insert['tgl_kadaluarsa'] = $_POST['tgl_kadaluarsa'];

			$result = $this->m_obat->edit_detail_obat($insert);
			header('Content-Type: application/json');
		 	echo(json_encode($result));
	 	}else{
	 		$result = array(
				'message'		=> str_replace("\n", "", validation_errors()),
			);

			header('Content-Type: application/json');
		 	echo json_encode($result);	
	 	}
	}
	/*akhir detail obat*/

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

			$result = $this->m_obat->get_filter_tgl($insert);
		}else{
			if ($insert['nama'] != "") {
				$result = $this->m_obat->get_filter_nama($insert);
			}else if ($insert['jenis'] != "") {
				$result = $this->m_obat->get_filter_jenis($insert);
			}else if($insert['merk'] != ""){
				$result = $this->m_obat->get_filter_merk($insert);
			}else if($insert['penyedia'] !=""){
				$result = $this->m_obat->get_filter_penyedia($insert);
			}else if($insert['sumber'] != ""){
				$result = $this->m_obat->get_filter_sumber($insert);
			}else{
				$result = $this->m_obat->get_filter_nofilter($insert);
			}
		}	


		header('Content-Type: application/json');
	 	echo(json_encode($result));
	}

	public function input_in_out()
	{
		$insert['obat_dept_id'] = $_POST['obat_dept_id'];
		$insert['tanggal'] = $_POST['tanggal'];
		$insert['is_out'] = $_POST['is_out'];
		$insert['jumlah'] = $_POST['jumlah'];
		$insert['keterangan'] = $_POST['keterangan'];

		$res = $this->m_obat->input_in_out($insert);
		if ($res) {
			$ins['obat_dept_id'] = $_POST['obat_dept_id'];
			$ins['tanggal'] = $_POST['tanggal'];
			$is_out = $_POST['is_out'];
			if ($is_out == 'IN') {
				$ins['masuk'] = $_POST['jumlah'];
				$ins['keluar'] = '';
			}else{
				$ins['keluar'] = $_POST['jumlah'];
				$ins['masuk'] = '';
			}
			$ins['total_stok'] = $_POST['sisa'];
			$ins['keterangan'] = $_POST['is_out'];

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
	/*akhir inventori*/


	/*stok opname*/
	public function get_alpha_obat_opname($alpha){
		$result = $this->m_obat->get_alpha_obat_opname($alpha);

		header('Content-Type: application/json');
	 	echo json_encode($result);		
	}
	public function get_opname_by_name($value){
		$result = $this->m_obat->get_opname_by_name($value);

		header('Content-Type: application/json');
	 	echo json_encode($result);			
	}
	/*akhir stok opname*/

	/*pengadaan*/
	public function get_obat_detail_pengadaan($obat_id){
		$result = $this->m_obat->get_obat_detail_pengadaan($obat_id);

		header('Content-Type: application/json');
	 	echo json_encode($result);	
	}

	public function add_pengadaan(){
		// foreach ($_POST as $value) 
		// {
		// 	$insert = $value;
		// }
		$insert['no_pengadaan'] = $_POST['no_pengadaan'];
		$insert['tanggal'] = $this->date_db($_POST['tanggal']);
		$insert['petugas_input'] = $_POST['petugas_input'];
		$insert['keterangan'] = $_POST['keterangan'];
		$insert['status'] = "Menunggu";

		$hasil = $this->m_obat->add_pengadaan($insert);

		$tgl = $_POST['tanggal'];
		$insert['tanggal'] = $this->date_table($tgl);
		$petugas = $this->m_obat->get_nama_petugas($insert['no_pengadaan']);
		$insert['nama_petugas'] = $petugas['nama_petugas'];
		header('Content-Type:application/json');
		echo(json_encode($insert));
	}


	public function date_db($date){
		$dateTime = DateTime::createFromFormat('d/m/Y',$date);
		$newDateString = $dateTime->format('Y-m-d');
		return $newDateString;
	}

	public function date_table($date){
		$dateTime = DateTime::createFromFormat('d/m/Y',$date);
		$newDateString = $dateTime->format('d F Y');
		return $newDateString;
	}

	public function get_petugas($value){
		$result = $this->m_obat->get_petugas($value);

		header('Content-Type: application/json');
	 	echo json_encode($result);	
	}

	public function get_obat($value){
		$result = $this->m_obat->get_obat($value);

		header('Content-Type: application/json');
		echo json_encode($result);
	}
	/*akhir perencanaan pengadaan*/
}
