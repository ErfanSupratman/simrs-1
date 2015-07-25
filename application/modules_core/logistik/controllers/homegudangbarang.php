<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Homegudangbarang extends Operator_base {
	function __construct(){
		parent:: __construct();
		$this->load->model("m_gudangbarang");
		$this->load->model("farmasi/m_obat");
		$data['page_title'] = "Logistik";
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;

		// load template
		$data['content'] = 'gudangbarang/home';
		$data['javascript'] = 'gudangbarang/j_list';
		$data['satuan_obat'] = $this->m_obat->get_satuan_obat();
		$this->load->view('base/operator/template', $data);
	}

	/*public function addnewmerk()
	{
		$this->form_validation->set_rules('newmerk', 'nama merk', 'required|trim|xss_clean|is_unique[obat_merk.nama_merk]');
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
				'error' => 'y'
			);	
		}
		header('Content-Type: application/json');
	 	echo json_encode($result);
	}*/

	public function add_barang()
	{
		$this->form_validation->set_rules('nama', 'nama obat', 'required|trim|xss_clean|is_unique[barang.nama]');
		$this->form_validation->set_rules('merk', 'merek', 'required|trim|xss_clean');
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

	public function search_barang($katakunci)
	{
		$res = $this->m_gudangbarang->search_barang($katakunci);

		header('Content-Type: application/json');
	 	echo json_encode($res);
	}

}
