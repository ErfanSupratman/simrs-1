<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Homegudangobat extends Operator_base {
	function __construct(){
		parent:: __construct();
		$this->load->model("m_obat");
		$data['page_title'] = "Gudang Obat";
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		//print_r($this->session->userdata('session_operator'));die();		
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		
		// load template
		$this->load->model('m_obat');
		$dept_id = '21';
		$data['content'] = 'gudangobat/home';
		
		$data['javascript'] = 'gudangobat/j_list';

		$data['jenis_obat'] = $this->m_obat->get_jenis_obat();
		$data['satuan_obat'] = $this->m_obat->get_satuan_obat();
		// $data['obat'] = $this->m_obat->get_all_obat($dept_id);
		$data['inventori'] =  $this->m_obat->get_inventori($dept_id);
		$item = "a";
		$data['opname'] = $this->m_obat->get_alpha_obat_opname($item);
		$data['riwayat_pengadaan'] = $this->m_obat->get_riwayat_pengadaan();
		$data['riwayat_penerimaan'] = $this->m_obat->get_riwayat_penerimaan($dept_id);
		$data['persetujuan'] = $this->m_obat->get_persetujuan();
		$data['riwayat_persetujuan'] = $this->m_obat->get_riwayat_permintaan();
		$data['returdept'] = $this->m_obat->get_returdepartment();
		$data['riwayat_retur'] = $this->m_obat->get_riwayat_returdepartemen();
		$data['riwayat_returdistributor'] = $this->m_obat->get_riwayat_returdistributor();
		$data['all_dept'] = $this->m_obat->get_all_dept();
		$this->load->view('base/operator/template', $data);
	}

	/*add obat*/
	public function get_merk()
	{
		$result = $this->m_obat->get_merk();

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function addnewmerk()
	{
		$this->form_validation->set_rules('newmerk', 'nama obat', 'required|trim|xss_clean|is_unique[obat_merk.nama_merk]');
		$this->form_validation->set_message('is_unique', 'Merek sudah ada');
		$data['nama_merk'] = $_POST['newmerk'];
		if ($this->form_validation->run() == TRUE) {
			$id = $this->m_obat->addnewmerk($data);
			$result = array(
				'message'		=> "Data berhasil disimpan",
				'error' => 'n',
				'id' => $id
			);
		}else{
			$result = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'n'
			);	
		}
		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function addnewpenyedia()
	{
		$this->form_validation->set_rules('newpenyedia', 'nama obat', 'required|trim|xss_clean|is_unique[master_penyedia.nama_penyedia]');
		$this->form_validation->set_message('is_unique', 'Penyedia sudah ada');
		$data['nama_penyedia'] = $_POST['newpenyedia'];
		if ($this->form_validation->run() == TRUE) {
			$id = $this->m_obat->addnewpenyedia($data);
			$result = array(
				'message'		=> "Data berhasil disimpan",
				'error' => 'n',
				'id' => $id
			);
		}else{
			$result = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'n'
			);	
		}
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

		$this->form_validation->set_message('is_unique', 'Nama Obat sudah ada');
		$this->form_validation->set_message('required', 'isi semua data dengan benar');

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
				'message'		=> "Data berhasil disimpan",
				'error' => 'n'
			);					

			header('Content-Type: application/json');
		 	echo json_encode($result);
		}else{
			$result = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'y'
			);

			header('Content-Type: application/json');
		 	echo json_encode($result);
		}
	}

	//edit obat
	public function edit_obat()
	{
		$this->form_validation->set_rules('nama', 'nama obat', 'required|trim|xss_clean|is_unique[obat.nama]');
		$this->form_validation->set_rules('harga_dasar', 'Harga Dasar', 'required|trim|xss_clean');
		$this->form_validation->set_rules('hps', 'HPS', 'required|trim|xss_clean');
		$this->form_validation->set_rules('margin', 'margin', 'required|trim|xss_clean');
		$this->form_validation->set_rules('stok_min', 'Stok Minimal', 'required|trim|xss_clean');
		$this->form_validation->set_rules('merk', 'Merek', 'required|trim|xss_clean');
		
		$this->form_validation->set_message('required', 'isi semua data dengan benar');
		$this->form_validation->set_message('is_unique', 'Nama Obat sudah ada');

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
				'message'		=> "Data berhasil disimpan",
				'error' => 'n'
			);					

			header('Content-Type: application/json');
		 	echo json_encode($result);
		}else{
			$result = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'y'
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

		//$data['data'] = $result;
		header('Content-Type: application/json');
	 	echo(json_encode($result));
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
		//$result = $this->m_obat->search_obat($search);
		$result = $this->m_obat->get_obat_all($search);		

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
		//$this->form_validation->set_rules('tgl_kadaluarsa', 'Tanggal Kadaluarsa', 'required|trim|xss_clean|is_unique[obat_detail.tgl_kadaluarsa]');
		$this->form_validation->set_rules('tahun_pengadaan', 'Tahun Pengadaan', 'required|trim|xss_clean');
		$this->form_validation->set_rules('total_stok', 'Jumlah Stok', 'required|trim|xss_clean');
		$this->form_validation->set_rules('no_batch', 'Nomor Batch', 'required|trim|xss_clean');


		//$this->form_validation->set_message('is_unique', 'Obat sudah ada, cek tanggal kadaluarsa atau no batch');
		$this->form_validation->set_message('required', 'isi semua data dengan benar');

		if ($this->form_validation->run() == TRUE) {
			$insert['obat_id'] = $_POST['obat_id'];
			$insert['tgl_kadaluarsa'] = $_POST['tgl_kadaluarsa'];
			$cek = $this->m_obat->cek_detail_obat($insert['obat_id'], $insert['tgl_kadaluarsa']);
			if($cek == false){
				$insert['no_batch'] = $_POST['no_batch'];
				$insert['tahun_pengadaan'] = $_POST['tahun_pengadaan'];
				$insert['sumber_dana'] = $_POST['sumber_dana'];

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

						$result = "data berhasil disimpan" ;
						$error = 'n';	
					}else{
						$result = "gagal";
						$error = 'y';	
					}
				}else{
					$result = "gagal";
					$error = 'y';	
				}
			}else{
				$result = "Obat sudah ada, cek tanggal kadaluarsa atau no batch";	
				$error = 'y';	
			}
		}else{
			$result = strip_tags(str_replace("\n ", "", validation_errors()));
			$error = 'y';	
		}

		$res = array(
				'message' => $result,
				'error' => $error
		);

		header('Content-Type: application/json');
	 	echo json_encode($res);
		
	}

	public function edit_detail_obat()
	{
		$this->form_validation->set_rules('nama', 'nama obat', 'required|trim|xss_clean');
		//$this->form_validation->set_rules('tgl_kadaluarsa', 'Tanggal Kadaluarsa', 'required|trim|xss_clean|is_unique[obat_detail.tgl_kadaluarsa]');
		$this->form_validation->set_rules('tahun_pengadaan', 'Tahun Pengadaan', 'required|trim|xss_clean');

		$this->form_validation->set_message('required', 'isi semua data dengan benar');
		//$this->form_validation->set_message('is_unique', 'Obat sudah ada');

		if ($this->form_validation->run() == TRUE) {
			$insert['obat_id'] = $_POST['obat_id'];
			$insert['obat_detail_id'] = $_POST['obat_detail_id'];
			$cek = $this->m_obat->cek_detail_obat($insert['obat_id'], $insert['tgl_kadaluarsa']);
			if($cek == false){		
				$insert['tahun_pengadaan'] = $_POST['tahun_pengadaan'];
				$insert['tgl_kadaluarsa'] = $_POST['tgl_kadaluarsa'];

				$result = $this->m_obat->edit_detail_obat($insert);
				if ($result) {
						$result = array(
						'message'		=> "data berhasil diubah",
						'error' => 'n'
					);	
				}else{
					$result = array(
						'message'		=> "gagal mengubah data",
						'error' => 'y'
					);
				}
			}else{
				$result = array(
					'message'		=> "Obat sudah ada",
					'error' => 'y'
				);
			}

			header('Content-Type: application/json');
		 	echo(json_encode($result));
	 	}else{
	 		$result = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'y'
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

	public function get_detail_obat_bydeptid($obat_dept_id)
	{
		$result = $this->m_obat->get_detail_obat_bydeptid($obat_dept_id);

		header('Content-Type: application/json');
	 	echo json_encode($result);
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
					//ambil stok terakhir setelah diupdate
					//$obat_opname = $this->m_obat->get_obat_deptstok_history($obat_dept_id); //ambil stok
					//$total_stok = intval($obat_opname['total_stok']);
				}else{
					//update minus
					$update = $this->m_obat->update_history_after_opname($obat_dept_id, $tanggal, abs($selisih), "OUT");
					//ambil stok terakhir setelah diupdate
					//$obat_opname = $this->m_obat->get_obat_deptstok_history($obat_dept_id);
					//$total_stok = intval($obat_opname['total_stok']);
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
	/*akhir stok opname*/

	/*pengadaan*/
	public function get_obat_detail_pengadaan($obat_id){
		$result = $this->m_obat->get_obat_detail_pengadaan($obat_id);

		header('Content-Type: application/json');
	 	echo json_encode($result);	
	}

	public function add_pengadaan(){
		$this->form_validation->set_rules('no_pengadaan', 'Nomor Pengadaan', 'required|trim|xss_clean|is_unique[obat_rencana_pengadaan.no_pengadaan]');
		$this->form_validation->set_rules('tanggal', 'Tanggal Pengadaan', 'required|trim|xss_clean');
		//$this->form_validation->set_rules('petugas_input', 'Petugas', 'required|trim|xss_clean');

		$this->form_validation->set_message('required', 'isi semua data dengan benar');
		$this->form_validation->set_message('is_unique', 'Nomor Sudah Ada');

		if ($this->form_validation->run() == TRUE) {
			$insert['no_pengadaan'] = $_POST['no_pengadaan'];
			$insert['tanggal'] = $this->date_db($_POST['tanggal']);
			$insert['petugas_input'] = $this->session->userdata('session_operator')['petugas_id'];
			$insert['keterangan'] = $_POST['keterangan'];
			$insert['status'] = "Menunggu";

			$hasil = $this->m_obat->add_pengadaan($insert);
			$pengadaan = $_POST['pengadaan'];

			foreach($pengadaan as $value){
				$value['obat_rencana_id'] = $hasil;
				$rencana_detail = $this->m_obat->add_detail_rencana($value);
			}

			$tgl = $_POST['tanggal'];
			$insert['tanggal'] = $this->date_table($tgl);
			$petugas = $this->m_obat->get_nama_petugas($insert['petugas_input']);
			$insert['nama_petugas'] = $petugas['nama_petugas'];
			$insert['pengadaan_id'] = $hasil;

			$result = array(
				'message'		=> "data berhasil diinput",
				'error' => 'n',
				'hasil' => $insert
			);
			header('Content-Type:application/json');
			echo(json_encode($result));
		}else{
			$result = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'y'
			);

			header('Content-Type: application/json');
		 	echo json_encode($result);
		}
	}

	public function get_detail_rencana($value='')
	{
		$result = $this->m_obat->get_detail_rencana($value);

		header('Content-Type: application/json');
		echo json_encode($result);
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

	/*penerimaan obat*/
	public function get_obat_penyedia()
	{
		$katakunci = $_POST['katakunci'];
		$penyedia_id = $_POST['penyedia_id'];
		$result = $this->m_obat->get_obat_penyedia($katakunci, $penyedia_id);

		header('Content-Type: application/json');
		echo json_encode($result);
	}
	public function add_penerimaan()
	{
		$this->form_validation->set_rules('nomor_penerimaan', 'Nomor Penerimaan', 'required|trim|xss_clean|is_unique[obat_penerimaan.nomor_penerimaan]');
		$this->form_validation->set_rules('penyedia_id', 'Tanggal Pengadaan', 'required|trim|xss_clean');
		//$this->form_validation->set_rules('petugas_input', 'Petugas', 'required|trim|xss_clean');

		$this->form_validation->set_message('required', 'isi semua data dengan benar');
		$this->form_validation->set_message('is_unique', 'nomor penerimaan sudah ada');

		if ($this->form_validation->run() == TRUE) {
			$insert['nomor_penerimaan'] = $_POST['nomor_penerimaan'];
			$insert['tanggal'] = $_POST['tanggal'];
			$insert['petugas_input'] = $this->session->userdata('session_operator')['petugas_id'];//$_POST['petugas_input'];
			$insert['penyedia_id'] = $_POST['penyedia_id'];
			$insert['sumber_dana'] = $_POST['sumber_dana'];
			$insert['keterangan'] = $_POST['keterangan'];
			$insert['jenis_potongan'] = $_POST['jenispotongan'];
			$insert['potongan'] = $_POST['potongan'];
			$insert['ppn'] = $_POST['ppn'];
			$insert['grandtotal'] = $_POST['grandtotal'];
			$insert['subtotal'] = $_POST['subtotal'];
			$insert['tanggal_faktur'] = $_POST['tanggal_faktur'];

			if($id = $this->m_obat->add_penerimaan($insert)){
				$params = $_POST['data'];

				//insert detail dan tambah riwayat
				foreach ($params as $value) {
					$value['obat_penerimaan_id'] = $id;
					$res = $this->m_obat->add_detail_penerimaan($value);

					//ambil obat dengan tanggal kedaluarsa sama, tambah history
					$obat = $this->m_obat->get_obat_per_tgl_kadaluarsa($value['obat_id'], $value['tgl_kadaluarsa']); //ini blm fix coeg
					if ($obat) {
						$last_stok = $this->m_obat->get_obat_deptstok_history($obat['obat_dept_id']);
						$riwayat['obat_dept_id'] = $obat['obat_dept_id'];
						$riwayat['tanggal'] = $insert['tanggal'];
						$riwayat['masuk'] = $value['jumlah'];
						$riwayat['keterangan'] = "PENERIMAAN";
						$riwayat['total_stok'] = (intval($last_stok['total_stok']) + intval($value['jumlah']));
						$input = $this->m_obat->insert_new_obat_history($riwayat);

						if ($input) {
							$result = array(
								'message'		=> "data berhasil disimpan",
								'error' => 'n'
							);
						}	
					}else{
						$new['obat_id'] = $value['obat_id'];
						$new['tgl_kadaluarsa'] = $value['tgl_kadaluarsa'];
						$new['no_batch'] = $value['no_batch'];
						$new['tahun_pengadaan'] = date('Y');
						$new['sumber_dana'] = $insert['sumber_dana'];

						$obat_detail_id = $this->m_obat->insert_detail_obat($new);

						if ($obat_detail_id) {
							$ins = array(
								'obat_detail_id' => $obat_detail_id,
								'dept_id' => '21'
								);
							$obat_dept_id = $this->m_obat->insert_obat_dept($ins);

							if ($obat_dept_id) {
								//$insert['total_stok'] = $_POST['total_stok'];
								$ins2 = array(
									'obat_dept_id' => $obat_dept_id,
									'tanggal' => date('Y-m-d'),
									'masuk' => $value['jumlah'],
									'total_stok' => $value['jumlah'],
									'keterangan' => 'PENERIMAAN'
									);
								$obat_dept_stok = $this->m_obat->insert_dept_stok($ins2);

								$result = array(
									'message'		=> "data berhasil disimpan",
									'error' => 'n'
								);	
							}else{
								$result = array(
									'message'		=> "gagal, terjadi kesalahan",
									'error' => 'y'
								);
							}
						}else{
							$result = array(
								'message'		=> "gagal, terjadi kesalahan",
								'error' => 'y'
							);	
						}
					}
				}
			}else{
				$result = array(
					'message'		=> "gagal, terjadi kesalahan",
					'error' => 'y'
				);
			}
		}else{
			$result = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'y'
			);
		}

		$this->print_penerimaan();

		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function print_penerimaan()
	{
		//print
	}

	/*akhir penerimaan*/

	/*persetujuan permintaan*/
	public function get_detail_persetujuan($obat_permintaan_id)
	{
		$result = $this->m_obat->get_detail_permintaan($obat_permintaan_id);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function submit_persetujuan_permintaan()
	{
		$permintaan_id = $_POST['permintaan_id'];
		$dept_id = $_POST['dept_id'];
		$persetujuan = $_POST['approve'];
		$insert['petugas_respond'] = $this->session->userdata('session_operator')['petugas_id'];
		$insert['tanggal_respond'] = date('Y-m-d');
		$insert['is_responded'] = '1';


		$update = $this->m_obat->update_persetujuan_permintaan($permintaan_id, $insert);
		if ($update) {
			foreach ($persetujuan as $value) {
				//6 (jumlah) sama 8 (obat detail), 9(tgl_kadaluarsa)
				$update =  $this->m_obat->update_detail_persetujuan($permintaan_id, $value['8'], $value['6']);

				//update stok obat, kurangi stok 
				//$cek = $this->m_obat->get_last_stok_by_tgl($value[9], $dept_id);
				$cek = $this->m_obat->get_last_stok_by_detail($value[8], $dept_id);
				if($cek){//klo ada obat, tambah 
					$params = array(
						'obat_dept_id' => $cek['obat_dept_id'],
						'tanggal' => date('Y-m-d H:i:s'),
						'masuk' => $value[6],
						'total_stok' => ($value[6] + $cek['total_stok']),
						'keterangan' => 'PERMINTAAN KE GUDANG'
					);
					//tambah detail baru, update stok
					$update = $this->m_obat->update_stok_returdepartemen($params);
				}else{//insert data baru sebagai obat detail di gudang
					$ins = array(
						'obat_detail_id' => $value['8'],
						'dept_id' => $dept_id
						);
					$obat_dept_id = $this->m_obat->insert_obat_dept($ins);

					if ($obat_dept_id) {
						//$insert['total_stok'] = $_POST['total_stok'];
						$ins2 = array(
							'obat_dept_id' => $obat_dept_id,
							'tanggal' => date('Y-m-d'),
							'masuk' => $value['6'],
							'total_stok' => $value['6'],
							'keterangan' => 'PERMINTAAN KE GDG'
							);
						$obat_dept_stok = $this->m_obat->insert_dept_stok($ins2);

						$result = array(
							'message'		=> "data berhasil disimpan",
							'error' => 'n'
						);	
					}else{
						$result = array(
							'message'		=> "gagal, terjadi kesalahan",
							'error' => 'y'
						);
					}
				}
				//update stok di gudang
				//$ck = $this->m_obat->get_last_stok_by_tgl($value[9], '21');
				$ck = $this->m_obat->get_last_stok_by_detail($value[8], '21');
				$par = array(
					'obat_dept_id' => $ck['obat_dept_id'],
					'tanggal' => date('Y-m-d H:i:s'),
					'keluar' => $value[6],
					'total_stok' => ($ck['total_stok'] - $value[6]),
					'keterangan' => 'PERMINTAAN DARI UNIT'
				);
				$up = $this->m_obat->update_stok_returdepartemen($par);
			}
		}

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function get_detail_riwayat_persetujuan($obat_permintaan_id)
	{
		$result = $this->m_obat->get_detail_riwayat_persetujuan($obat_permintaan_id);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	/*akhir persetujuan permintaan*/

	/*retur obat departement*/
	public function get_detail_returdepartment($obat_retur_id)
	{
		$result = $this->m_obat->get_detail_returdepartment($obat_retur_id);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function confirmreturdept()
	{
		$returid = $_POST['obat_retur_id'];
		$detail = $_POST['approve'];
		$dept_id = $_POST['retur_dept_id'];

		$insert['penerima_retur'] = $this->session->userdata('session_operator')['petugas_id'];
		$insert['tanggal_confirm'] = date('Y-m-d H:i:s');
		$insert['status'] = 'diterima';

		$update = $this->m_obat->update_returdepartemen($returid, $insert);
		if ($update) {
			foreach ($detail as $value) {
				//ubah stok (cols[5]) /obat_detail_id
				$tgl_kadaluarsa =  $value[6];
				//$obat = $this->m_obat->get_last_stok_by_tgl($tgl_kadaluarsa, '21');
				$obat = $this->m_obat->get_last_stok_by_detail($value[5], '21');
				$params = array(
					'obat_dept_id' => $obat['obat_dept_id'],
					'tanggal' => date('Y-m-d H:i:s'),
					'masuk' => $value[3],
					'total_stok' => ($value[3] + $obat['total_stok']),
					'keterangan' => 'RETUR DEPT'
					);
				//tambah detail baru, update stok
				$update = $this->m_obat->update_stok_returdepartemen($params);
				//update stok di departemen, kurangi
				$det = $this->m_obat->get_last_stok_by_detail($value[5], $dept_id);
				$upd = array(
					'obat_dept_id' => $value[5],
					'tanggal' => date('Y-m-d H:i:s'),
					'keluar' => $value[3],
					'total_stok' => ($det['total_stok'] - $value[3]),
					'keterangan' => 'RETUR KE GDG'
					);
				$update = $this->m_obat->update_stok_returdepartemen($upd);
			}			
		}
		header('Content-Type: application/json');
		echo(json_encode($params));
	}

	public function get_detail_riwayat_returdepartemen($obat_retur_id)
	{
		$result = $this->m_obat->get_detail_returdepartment($obat_retur_id);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	/*akhir retur obat departement*/

	/*retur ke distributor*/
	public function get_obat_bypenyedia()
	{
		$katakunci = $_POST['katakunci'];
		$penyedia_id = $_POST['penyedia_id'];
		$result = $this->m_obat->get_obat_bypenyedia($katakunci, $penyedia_id);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function submitreturdistributor()
	{
		$this->form_validation->set_rules('no_retur', 'Nomor Retur', 'required|trim|xss_clean|is_unique[obat_retur_distributor.no_retur]');
		$this->form_validation->set_rules('penyedia_id', 'Penyedia', 'required|trim|xss_clean');

		$this->form_validation->set_message('required', 'isi semua data dengan benar');
		$this->form_validation->set_message('is_unique', 'nomor retur sudah ada');

		if ($this->form_validation->run() == TRUE) {
			$insert['no_retur'] = $_POST['no_retur'];
			$insert['penyedia_id'] = $_POST['penyedia_id'];
			$insert['keterangan'] = $_POST['keterangan'];
			$insert['waktu'] = date('Y-m-d H:i:s');
			$insert['petugas_input'] = $this->session->userdata('session_operator')['petugas_id'];

			$detail = $_POST['data'];
			$retur = $this->m_obat->add_obat_retur_distributor($insert);
			if ($retur) {
				foreach ($detail as $value) {
					$param['retur_distributor_id'] = $retur;
					$param['obat_detail_id'] = $value[0];
					$param['jumlah'] = $value[8];
					$ins = $this->m_obat->insert_returdist_detail($param);
					$det = $this->m_obat->get_last_stok_by_detail($value[0], '21');
					$upd = array(
						'obat_dept_id' => $value[0],
						'tanggal' => date('Y-m-d H:i:s'),
						'keluar' => $value[8],
						'total_stok' => ($det['total_stok'] - $value[8]),
						'keterangan' => 'RETUR DISTRIBUTOR'
					);

					$update = $this->m_obat->update_stok_returdepartemen($upd);
				}
				$result = array(
				'message'		=> "Data berhasil dimasukkan",
				'error' => 'n'
			);
			}
		}else{
			$result = array(
				'message'		=> strip_tags(str_replace("\n ", "", validation_errors())),
				'error' => 'y'
			);
		}

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function getdetailreturdistributor($retur_id)
	{
		$retur = $this->m_obat->getdetailreturdistributor($retur_id);

		header('Content-Type: application/json');
		echo json_encode($retur);
	}
	/*akhir retur ke distributor*/

	/*print laporan*/
	public function print_laporan_obat($value='')
	{
		# code...
	}

	public function print_laporan_kadaluarsa($value='')
	{
		$filter['now'] = date('Y-m-d');
		$filter['end'] = $_POST['hd'];
		$data['result'] = $this->m_obat->get_filter_tgl($filter);
		$data['nama_dept'] = 'GUDANG OBAT';
	
		if($filter['end'] === '0')
			$data['filter'] = 'sudah kadaluarsa';  
		else $data['filter'] = "akan kadaluarsa dalam ". $filter['end'] . " bulan";
		$this->load->view('farmasi/gudangobat/laporan/kadaluarsa',$data);
	}

	public function print_laporan_permintaan($value='')
	{
		$dept = $_POST['filterlaporandeptpermintaan'];
		$awal = $_POST['start'];
		$akhir = $_POST['end'];

		$result = $this->m_obat->get_laporan_permintaan($dept, $awal, $akhir);

		$data['awal'] = $awal;
		$data['akhir'] = $akhir;
		if($dept == ''){
			$data['nama_dept'] = 'SEMUA_DEPTARTEMEN';
		}else{
			$dep = $this->m_obat->get_dept($dept);
			$data['nama_dept'] = "DEPARTEMEN ".$dep['nama_dept'];
		}
		$data['hasil'] = $result;
		$this->load->view('farmasi/gudangobat/laporan/permintaan',$data);

	}

	public function print_laporan_returdept($value='')
	{
		$dept = $_POST['filterInv'];
		$awal = $_POST['start'];
		$akhir = $_POST['end'];

		$result = $this->m_obat->get_laporan_returdept($dept, $awal, $akhir);
		$data['awal'] = $awal;
		$data['akhir'] = $akhir;
		if($dept == ''){
			$data['nama_dept'] = 'SEMUA_DEPTARTEMEN';
		}else{
			$dep = $this->m_obat->get_dept($dept);
			$data['nama_dept'] = "DEPARTEMEN ".$dep['nama_dept'];
		}
		$data['hasil'] = $result;
		$this->load->view('farmasi/gudangobat/laporan/returdept',$data);
	}

	public function print_laporan_returdist($value='')
	{
		$dist = $_POST['iddistributorlaporan'];
		$awal = $_POST['start'];
		$akhir = $_POST['end'];

		$result = $this->m_obat->get_laporan_returdist($dist, $awal, $akhir);
		$data['awal'] = $awal;
		$data['akhir'] = $akhir;
		if($dist == '-1'){
			$data['nama_dist'] = 'SEMUA_DISTRIBUTOR';
		}else{
			$d = $this->m_obat->get_penyedia_by_id($dist);
			$data['nama_dist'] = "DISTRIBUTOR ".$d['nama_penyedia'];
		}
		$data['hasil'] = $result;
		$this->load->view('farmasi/gudangobat/laporan/returdist',$data);
	}

	public function print_laporan_stokopname($value='')
	{		
		$awal = $_POST['start'];
		$akhir = $_POST['end'];

		$result = $this->m_obat->get_laporan_stokopname($awal, $akhir);
		$data['awal'] = $awal;
		$data['akhir'] = $akhir;
		
		$data['nama_dept'] = "GUDANG OBAT";
		
		$data['hasil'] = $result;
		$this->load->view('farmasi/gudangobat/laporan/stokopname',$data);
	}

	public function print_laporan_stokwarning($value='')
	{
		# code...
	}

	public function print_laporan_stokterakhir($value='')
	{
		# code...
	}
	/*akhir print laporan*/

	/*global*/
	public function format_date($waktu)
	{
		$rr = explode("-", $waktu);
		$tgl = $rr[0];
		$thn = $rr[2];
		$temp = $rr[1];
		$bln = "";
		switch($temp){
			case 'Januari' : $bln = "01" ;break;
			case 'Februari' : $bln = "02" ;break;
			case 'Maret' : $bln = "03" ;break;
			case 'April' : $bln = "04" ;break;
			case 'Mei' : $bln = "05" ;break;
			case 'Juni' : $bln = "06" ;break;
			case 'Juli' : $bln = "07" ;break;
			case 'Agustus' : $bln = "08" ;break;
			case 'September' : $bln = "09" ;break;
			case 'Oktober' : $bln = "10" ;break;
			case 'November' : $bln = "11" ;break;
			case 'Desember' : $bln = "12" ;break;
		}

		$wkt = implode("-", $thn,$bln,$tgl);
		return $tgl;
	}

	public function print_kartustok($id)
	{
		$obat = $this->m_obat->get_kartustok($id, '21');
		$data['obat'] = $obat;
		$data['nama_dept'] = $obat[0]['nama_dept'];
		$data['satuan'] = $obat[0]['satuan'];
		$data['nama'] = $obat[0]['nama'];
		$this->load->view('farmasi/gudangobat/laporan/kartustok',$data);
	}

}
