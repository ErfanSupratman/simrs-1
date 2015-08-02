<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Homegudangbarang extends Operator_base {
	protected $dept_id;
	function __construct(){
		parent:: __construct();
		$this->load->model("m_gudangbarang");
		$this->load->model("farmasi/m_obat");
		$data['page_title'] = "Logistik";
		$this->dept_id = $this->m_gudangbarang->get_dept_id('GUDANG BARANG')['dept_id'];
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		//$this->dept_id = $this->m_gudangbarang->get_dept_id('GUDANG BARANG')['dept_id'];
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;

		// load template
		$data['content'] = 'gudangbarang/home';
		$data['javascript'] = 'gudangbarang/j_list';
		$data['satuan_obat'] = $this->m_gudangbarang->get_satuan_barang();
		$data['inventoribarang'] = $this->m_gudangbarang->get_inventori_barang($this->dept_id);
		$data['riwayatpengadaan'] = $this->m_gudangbarang->get_riwayatpengadaan();
		$data['riwayatpenerimaan'] = $this->m_gudangbarang->getriwayatpenerimaan();
		$data['permintaanbarang'] = $this->m_gudangbarang->get_permintaan();
		$data['riwayatpermintaanbarang'] = $this->m_gudangbarang->get_riwayatpermintaan();
		$data['allbarang'] = $this->m_gudangbarang->get_allbarang();
		$data['pengadaan_obat'] = $this->m_obat->get_riwayat_pengadaan();
		$this->load->view('base/operator/template', $data);
	}

	public function addnewmerk()
	{
		$this->form_validation->set_rules('newmerk', 'nama merk', 'required|trim|xss_clean|is_unique[barang_merk.nama_merk]');
		$this->form_validation->set_message('is_unique', 'Merek sudah ada');
		$data['nama_merk'] = $_POST['newmerk'];
		if ($this->form_validation->run() == TRUE) {
			$id = $this->m_gudangbarang->addnewmerk($data);
			$result = array(
				'message'		=> "Data berhasil disimpan",
				'error' => 'n',
				'id' => $id
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

	public function addnewpenyedia()
	{
		$this->form_validation->set_rules('newpenyedia', 'nama obat', 'required|trim|xss_clean|is_unique[barang_penyedia.nama_penyedia]');
		$this->form_validation->set_message('is_unique', 'Penyedia sudah ada');
		$data['nama_penyedia'] = $_POST['newpenyedia'];
		if ($this->form_validation->run() == TRUE) {
			$id = $this->m_gudangbarang->addnewpenyedia($data);
			$result = array(
				'message'		=> "Data berhasil disimpan",
				'error' => 'n',
				'id' => $id
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

	public function search_penyediabarang($value='')
	{
		$result = $this->m_gudangbarang->search_penyediabarang($value);
		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function search_merkbarang($value='')
	{
		$result = $this->m_gudangbarang->search_merkbarang($value);
		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function add_barang()
	{
		$this->form_validation->set_rules('nama', 'nama obat', 'required|trim|xss_clean|is_unique[barang.nama]');
		$this->form_validation->set_rules('merk', 'merek', 'required|trim|xss_clean');
		$this->form_validation->set_rules('penyedia_id', 'penyedia', 'required|trim|xss_clean');
		$this->form_validation->set_rules('satuan_id', 'satuan', 'required|trim|xss_clean');
		$this->form_validation->set_rules('group_id', 'grup', 'required|trim|xss_clean');
		$this->form_validation->set_rules('stok_minimal', 'Stok Minimal', 'required|trim|xss_clean');
		$this->form_validation->set_rules('harga', 'harga', 'required|trim|xss_clean');

		$this->form_validation->set_message('is_unique', 'Nama Barang sudah ada');
		$this->form_validation->set_message('required', 'isi semua data dengan benar');

		if ($this->form_validation->run() == TRUE) {
			$insert['nama'] = $_POST['nama'];
			$insert['merk'] = $_POST['merk'];
			$insert['satuan_id'] = $_POST['satuan_id'];
			$insert['stok_minimal'] = $_POST['stok_minimal'];
			$insert['group_id'] = $_POST['group_id'];
			$insert['harga'] = $_POST['harga'];
			$insert['is_hidden'] = $_POST['is_hidden'];
			$insert['penyedia_id'] = $_POST['penyedia_id'];

			$res = $this->m_gudangbarang->insert_new_barang($insert);
			if ($res) {
				$result = array(
					'message'		=> "Data berhasil disimpan",
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

	public function edit_barang($barang_id)
	{
		$this->form_validation->set_rules('nama', 'nama obat', 'required|trim|xss_clean|is_unique[barang.nama]');
		$this->form_validation->set_rules('merk', 'merek', 'required|trim|xss_clean');
		$this->form_validation->set_rules('penyedia_id', 'penyedia', 'required|trim|xss_clean');
		$this->form_validation->set_rules('satuan_id', 'satuan', 'required|trim|xss_clean');
		$this->form_validation->set_rules('group_id', 'grup', 'required|trim|xss_clean');
		$this->form_validation->set_rules('stok_minimal', 'Stok Minimal', 'required|trim|xss_clean');
		$this->form_validation->set_rules('harga', 'harga', 'required|trim|xss_clean');

		$this->form_validation->set_message('is_unique', 'Nama Barang sudah ada');
		$this->form_validation->set_message('required', 'isi semua data dengan benar');

		if ($this->form_validation->run() == TRUE) {
			$insert['nama'] = $_POST['nama'];
			$insert['merk'] = $_POST['merk'];
			$insert['satuan_id'] = $_POST['satuan_id'];
			$insert['stok_minimal'] = $_POST['stok_minimal'];
			$insert['group_id'] = $_POST['group_id'];
			$insert['harga'] = $_POST['harga'];
			$insert['is_hidden'] = $_POST['is_hidden'];
			$insert['penyedia_id'] = $_POST['penyedia_id'];

			$res = $this->m_gudangbarang->edit_new_barang($barang_id, $insert);
			if ($res) {
				$result = array(
					'message'		=> "Data berhasil disimpan",
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

	public function search_barang($katakunci)
	{
		$res = $this->m_gudangbarang->search_barang($katakunci);
		header('Content-Type: application/json');
	 	echo json_encode($res);
	}

	public function searchdetailbarang($barangid)
	{
		$result = $this->m_gudangbarang->searchdetailbarang($barangid, $this->dept_id);
		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function add_detail_barang()
	{
		$this->form_validation->set_rules('barang_id', 'nama obat', 'required|trim|xss_clean');
		$this->form_validation->set_rules('tahun_pengadaan', 'nama obat', 'required|trim|xss_clean');
		$this->form_validation->set_rules('sumber_dana', 'nama obat', 'required|trim|xss_clean');
		$this->form_validation->set_rules('stok', 'nama obat', 'required|trim|xss_clean');

		$this->form_validation->set_message('required', 'Isi data dengan benar');
		
		if ($this->form_validation->run() == TRUE) {
			$params = array(
					'barang_id' => $_POST['barang_id'],
					'tahun_pengadaan' => $_POST['tahun_pengadaan'],
					'sumber_dana' => $_POST['sumber_dana']
				);
			$brg = $this->m_gudangbarang->get_last_stokbarang($_POST['barang_id'],$_POST['tahun_pengadaan'],$_POST['sumber_dana'], $this->dept_id);
			if ($brg) {
				$result = array(
					'message'		=> "barang sudah ada",
					'error' => 'y'
				);	
			}else{
				$id = $this->m_gudangbarang->add_detail_barang($params);
				if ($id) {
					$param = array('barang_detail_id' => $id, 'stok' => $_POST['stok'], 
								'dept_id' => $this->dept_id, 'tanggal_stok' => date('Y-m-d H:i:s'), 
								'keterangan_stok' => 'IN');
					$ins = $this->m_gudangbarang->add_stok_barang($param);
					$result = array(
						'message'		=> "Data berhasil disimpan",
						'error' => 'n',
					);
				}else{
					$result = array(
						'message'		=> "gagal",
						'error' => 'y'
					);	
				}
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

	public function edit_detail_barang($barang_detail_id)
	{
		$this->form_validation->set_rules('barang_id', 'nama obat', 'required|trim|xss_clean');
		$this->form_validation->set_rules('tahun_pengadaan', 'nama obat', 'required|trim|xss_clean');
		$this->form_validation->set_rules('sumber_dana', 'nama obat', 'required|trim|xss_clean');
		$this->form_validation->set_rules('stok', 'nama obat', 'required|trim|xss_clean');

		$this->form_validation->set_message('required', 'Isi data dengan benar');
		
		if ($this->form_validation->run() == TRUE) {
			$params = array(
					'barang_id' => $_POST['barang_id'],
					'tahun_pengadaan' => $_POST['tahun_pengadaan'],
					'sumber_dana' => $_POST['sumber_dana']
				);
			$brg = $this->m_gudangbarang->get_last_stokbarang($_POST['barang_id'],$_POST['tahun_pengadaan'],$_POST['sumber_dana'], $this->dept_id);
			if ($brg) {
				$result = array(
					'message'		=> "barang sudah ada",
					'error' => 'y'
				);	
			}else{
				$id = $this->m_gudangbarang->update_detail_barang($barang_detail_id, $params);
				if ($id) {
					$result = array(
						'message'		=> "Data berhasil disimpan",
						'error' => 'n',
					);
				}else{
					$result = array(
						'message'		=> "gagal",
						'error' => 'y'
					);	
				}
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

	/*inventori*/
	public function input_in_out($value='')
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

	/*inventori*/

	/*perencanaan pengadaan*/
	public function submit_rencana_pengadaan($value='')
	{
		$this->form_validation->set_rules('no_pengadaan', 'nama obat', 'required|trim|xss_clean|is_unique[barang_rencana_pengadaan.no_pengadaan]');
		$this->form_validation->set_rules('tanggal', 'merek', 'required|trim|xss_clean');

		$this->form_validation->set_message('is_unique', 'Nomor pengadaan sudah ada');
		$this->form_validation->set_message('required', 'isi semua data dengan benar');

		if ($this->form_validation->run() == TRUE) {
			$insert['no_pengadaan'] = $_POST['no_pengadaan'];
			$tgl = DateTime::createFromFormat('d/m/Y H:i',$_POST['tanggal']);
			$insert['tanggal']= $tgl->format('Y-m-d H:i');
			$insert['keterangan']=$_POST['keterangan'];
			$insert['petugas_input'] = $this->session->userdata('session_operator')['petugas_id'];
			$insert['status'] = 'belum diterima';

			$id = $this->m_gudangbarang->insert_rencana_pengadaan($insert);
			$detail = $_POST['data'];
			foreach ($detail as $value) {
				$param = array(
					'barang_rencana_id' => $id, 
					'barang_id' => $value[7], //fak
					'penyedia_id' => $value[8],
					'jumlah' => $value[9],
					'harga' => $value[4],
					'total' => $value[5]
					);

				$this->m_gudangbarang->insert_detailrencana_pengadaan($param);
				$result = array(
					'message'		=> "data berhasil disimpan",
					'error' => 'y'
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

	public function get_detail_riwayatpengadaan($id)
	{
		$res = $this->m_gudangbarang->get_detail_riwayatpengadaan($id);
		header('Content-Type: application/json');
	 	echo json_encode($res);
	}
	/*akhir perencanaan pengadaan*/

	/*penerimaan*/
	public function search_barangbypenyedia($katakunci, $penyedia_id)
	{
		$res = $this->m_gudangbarang->search_barangbypenyedia($katakunci, $penyedia_id);
		header('Content-Type: application/json');
	 	echo json_encode($res);
	}

	public function add_penerimaan()
	{
		$this->form_validation->set_rules('nomor_penerimaan', 'nama obat', 'required|trim|xss_clean|is_unique[barang_penerimaan.nomor_penerimaan]');
		$this->form_validation->set_rules('tanggal', 'merek', 'required|trim|xss_clean');
		$this->form_validation->set_rules('jenis_dana', 'merek', 'required|trim|xss_clean');
		$this->form_validation->set_rules('penyedia_id', 'merek', 'required|trim|xss_clean');

		$this->form_validation->set_message('is_unique', 'Nomor pengadaan sudah ada');
		$this->form_validation->set_message('required', 'isi semua data dengan benar');

		if ($this->form_validation->run() == TRUE) {
			$tgl = DateTime::createFromFormat('d/m/Y H:i', $_POST['tanggal']);
			$data = $_POST['data'];
			$insert = array(
				'nomor_penerimaan' => $_POST['nomor_penerimaan'], 
				'jenis_dana' => $_POST['jenis_dana'], 
				'penyedia_id' => $_POST['penyedia_id'], 
				'tanggal' => $tgl->format('Y-m-d H:i'), 
				'keterangan' => $_POST['keterangan'], 
				'jenispotongan' => $_POST['jenispotongan'], 
				'potongan' => $_POST['potongan'], 
				'ppn' => $_POST['ppn'], 
				'subtotal' => $_POST['subtotal'],
				'petugas_input' => $this->session->userdata('session_operator')['petugas_id'],
				'grandtotal' => $_POST['grandtotal']
			);

			$id = $this->m_gudangbarang->insert_penerimaanbarang($insert);
			if ($id) {
				$jns =  $_POST['jenis_dana'];
				foreach ($data as $value) {
					$params = array(
						'barang_penerimaan_id' => $id, 
						'barang_id' => $value[7] ,
						'jumlah' => $value[9] ,
						'diskon' => $value[10] ,
						'harga' =>  $value[4] ,
						'total' => $value[5]
					);

					$res = $this->m_gudangbarang->insert_penerimaanbarangdetail($params);
					//ubah stok barang
					//8 tahunpengadaan , 
					$last_stok = $this->m_gudangbarang->get_last_stokbarang($value[7],$value[8],$jns, $this->dept_id);
					if ($last_stok) {
						$ins = array(
							'barang_detail_id' => $last_stok['barang_detail_id'], 
							'stok' => ($last_stok['stok'] + intval($value[9])),
							'dept_id' => $this->dept_id,
							'keterangan_stok' => "PENERIMAAN"
						);
						$this->m_gudangbarang->add_stok_barang($ins);
						$result = array(
							'message'		=> "Data berhasil disimpan",
							'error' => 'n',
						);
					}else{
						$thn = date('Y');
						$ins2 = array('barang_id' => $value[7],'tahun_pengadaan'=> $thn, 'sumber_dana' => $jns);
						$id = $this->m_gudangbarang->add_detail_barang($ins2);
						if ($id) {
							$param = array('barang_detail_id' => $id, 'stok' => $value[9], 'dept_id' => $this->dept_id, 'keterangan_stok' =>'PENERIMAAN');
							$ins = $this->m_gudangbarang->add_stok_barang($param);
							$result = array(
								'message'		=> "Data berhasil disimpan",
								'error' => 'n',
							);
						}else{
							$result = array(
								'message'		=> "gagal",
								'error' => 'y'
							);	
						}
					}
				}
			}else{
				$result = array(
					'message'	=> "gagal menyimpan data",
					'error' => 'y'
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

	/*akhir penerimaan */

	/*persetujuan permintaan*/
	public function get_detailpersetujuan($id)
	{
		$res = $this->m_gudangbarang->get_detailpersetujuan($id);
		header('Content-Type: application/json');
	 	echo json_encode($res);
	}

	public function submit_persetujuanpermintaan()
	{
		$data = $_POST['data'];
		$id = $_POST['id'];
		$update = array(
			'tanggal_respond' => date('Y-m-d H:i:s'),
			'petugas_respond' => $this->session->userdata('session_operator')['petugas_id'],
			'is_responded' => '1'
		);
		$res = $this->m_gudangbarang->update_persetujuan($id, $update);
		if ($res) {
			foreach ($data as $value) {
				//8 brg_stok_id, 10 jumlah, 
				//$param = array('jumlah_approved' => $value[10]);
				$this->m_gudangbarang->update_detail_persetujuan($id, $value[8],$value[10]);

				$last_stok = $this->m_gudangbarang->get_last_stokbarangbyid($value[9], $_POST['dept_id_peminta']);
				if ($last_stok) {
					$ins = array(
						'barang_detail_id' => $last_stok['barang_detail_id'], 
						'stok' => ($last_stok['stok'] + intval($value[10])),
						'dept_id' => $_POST['dept_id_peminta'],
						'keterangan_stok' => "PERMINTAAN KE GDG"
					);
					$this->m_gudangbarang->add_stok_barang($ins);
					$result = array(
						'message'		=> "Data berhasil disimpan",
						'error' => 'n',
					);
				}else{
					$param = array('barang_detail_id' => $value[9], 'stok' => $value[10], 'dept_id' => $_POST['dept_id_peminta'], 'keterangan_stok' =>'PERMINTAAN');
					$ins = $this->m_gudangbarang->add_stok_barang($param);
					$result = array(
						'message'		=> "Data berhasil disimpan",
						'error' => 'n',
					);
				
				}

				//update stok gudang
				$last_stokgdg = $this->m_gudangbarang->get_last_stokbarangbyid($value[9], $this->dept_id);
				$new = array(
					'barang_detail_id' => $last_stokgdg['barang_detail_id'], 
					'stok' => ($last_stokgdg['stok'] - intval($value[10])),
					'dept_id' => $this->dept_id,
					'keterangan_stok' => "PERMINTAAN dari UNIT"
				);
				$ins2 = $this->m_gudangbarang->add_stok_barang($new);
			}
		}
		header('Content-Type: application/json');
	 	echo json_encode($result);
	}
	/*akhir persetujuan permintaan*/

	/*opname barang*/
	public function search_barang_opnamealpha($key)
	{
		$result = $this->m_gudangbarang->search_barang_opnamealpha($key);
		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function search_barang_opnamebyname($key)
	{
		$result = $this->m_gudangbarang->search_barang_opnamebyname($key);
		header('Content-Type: application/json');
	 	echo json_encode($result);
	}

	public function opname_process($value='')
	{
		$tanggal = $this->changefuckingdate($this->input->post('tgl_acuan'));
		$stok = $this->input->post('stok');
		$barang_detail_id = $this->input->post('barang_detail_id');
		$harga = $this->input->post('harga_jual');

		$params = array(
			'tgl_opname' => date('Y-m-d H:i:s'), //tanggal sekarang atau waktu realtime
			'tgl_acuan' => $tanggal,
			'barang_detail_id' => $barang_detail_id,
			'stok_fisik' => $stok,
			'keterangan' => 'OK'
			);

		$barang_opname = $last_stok = $this->m_gudangbarang->get_last_stokbarangbyid($barang_detail_id, $this->dept_id);
		//selisih minus berarti stok fisik lebih besar dari stok sistem, dan sebaliknya
		$selisih = intval($barang_opname['stok']) - intval($stok);

		if (intval($selisih) != 0) {			
			//stok sistem
			$params['stok_barang'] = $barang_opname['stok'];
			
			//selisih diberi nilai absolute /positif
			$params['selisih'] = abs($selisih);
			$params['harga'] = $harga;
			$params['jumlah'] = abs($selisih * intval($harga));

			$result = $this->m_gudangbarang->insert_opname_history($params);
			//klo berhasil input, tambah history obat di obat_dept_stock
			//ambil stok terakhir sebelum atau sama dengan tanggal acuan
			
			if ($result) {
				if (intval($selisih) < 0) {
					//update plus
					$update = $this->m_gudangbarang->update_history_after_opname($barang_detail_id, $tanggal, abs($selisih), "IN");
					//ambil stok terakhir setelah diupdate
					//$obat_opname = $this->m_obat->get_obat_deptstok_history($obat_dept_id); //ambil stok
					//$total_stok = intval($obat_opname['total_stok']);
				}else{
					//update minus
					$update = $this->m_gudangbarang->update_history_after_opname($barang_detail_id, $tanggal, abs($selisih), "OUT");
					//ambil stok terakhir setelah diupdate
					//$obat_opname = $this->m_obat->get_obat_deptstok_history($obat_dept_id);
					//$total_stok = intval($obat_opname['total_stok']);
				}

				$last_stok = $this->m_gudangbarang->get_last_stokopname($barang_detail_id);
				//tambah history baru
				$stok_baru = $last_stok['stok_fisik'];
				$insert = array(
					'barang_detail_id' => $barang_detail_id, 
					'tanggal_stok' => date('Y-m-d H:i:s'), //tanggal sekarang atau waktu realtime
					'stok' => $stok_baru,
					'dept_id' => $this->dept_id,
					'keterangan_stok' => 'OPNAME'
					);

				$upd = $this->m_gudangbarang->add_stok_barang($insert);

				$data['message'] = "opname berhasil";
			}else{
				$data['message'] = "opname gagal";
			}

		}else{
			//do nothing
			$data['message'] = "barang tidak diopname";
		}

		//$data['message'] = $selisih;


		header('Content-Type: application/json');
	 	echo json_encode($data);
	}
	/*akhir opname barang*/

	//global
	public function changefuckingdate($date)
	{
		$mydate = explode('/', $date);
		$arr[0] = $mydate[2];
		$arr[1] = $mydate[1];
		$arr[2] = $mydate[0];
		return implode('-', $arr);
	}
}
