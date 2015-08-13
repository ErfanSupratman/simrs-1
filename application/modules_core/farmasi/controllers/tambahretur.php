<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Tambahretur extends Operator_base {
	function __construct(){
		parent:: __construct();
		$this->load->model("m_returobat");
		$data['page_title'] = "Retur Obat Detail";
		$this->session->set_userdata($data);
	}

	public function index($page = 0)
	{
		
	}

	public function tambah($no_nota)
	{
		$this->check_nota_exist($no_nota);

		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		
		// load template
		$data['content'] = 'returobat/tambah';
		$data['javascript'] = 'returobat/j_retur';
		$data['infonota'] = $this->m_returobat->get_info_nota($no_nota);
		$data['daftarobat'] = $this->m_returobat->search_nota_retur($no_nota);
		$this->load->view('base/operator/template', $data);
	}

	public function check_nota_exist($no_nota)
	{
		$res = $this->m_returobat->get_nota($no_nota);
		if ($res == false) {
			redirect('farmasi/homereturobat');
		}
	}

	public function search_nota_retur($no_nota)
	{
		$result = $this->m_returobat->search_nota_retur($no_nota);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function submit_retur_pasien()
	{
		$insert['no_nota'] = $_POST['no_nota'];
		$insert['total_retur'] = $_POST['total_retur'];
		$insert['waktu'] = date('Y-m-d H:i:s');
		$insert['petugas_input'] = $this->session->userdata('session_operator')['petugas_id'];

		$retur_id = $this->m_returobat->get_last_id();
		$center = date('y')."".date('m')."".date('d');		
		if($retur_id){
			$vir = intval(substr($retur_id['value'], strlen($center) + 2)) + 1;
			if (strlen($vir) == "1") {
				$vir = '000'. $vir;
			}else if(strlen($vir) == "2"){
				$vir = '00' . $vir;
			}else if (strlen($vir) == "3") {
				$vir = '0' . $vir;
			}
			$insert['no_retur_pasien'] = "RP".$center."".($vir);
		}else{
			$insert['no_retur_pasien'] = "RP".$center."0001";
		}
		$id = $this->m_returobat->insert_retur_pasien($insert);
		if ($id) {
			$detail = $_POST['data'];
			foreach ($detail as $value) {
				$params = array(
					'no_retur_pasien' => $insert['no_retur_pasien'],
					'obat_dept_id' => $value[6],
					'qty' => $value[9],
					'harga' => $value[4],
					);
				$this->m_returobat->insert_detail_retur_pasien($params);
				//ubah stok
				$obat = $this->m_returobat->get_last_stok($value[6]);
				$arr = array(
					'obat_dept_id' => $obat['obat_dept_id'], 
					'tanggal' => date('Y-m-d H:i:s'),
					'masuk' => $value[9],
					'total_stok' => ($obat['total_stok'] + $value[9]),
					'keterangan' => 'RETUR DARI PASIEN'
					);
				$this->m_returobat->insert_detail_stok($arr);
				//update di resep blum
				$baru = intval($value[1]) - intval($value[9]);
				$remunisasi = 0; $dokter = 0; $management = 0; $apotek = 0;
				$obat = $this->m_returobat->get_obatinfo($obat['obat_dept_id']);
				$uang_margin = intval($obat['harga_jual']) - intval($obat['hps']);
				$management += (0.6 * intval($uang_margin) * $baru);
				$sisa = $uang_margin - (0.6 * $uang_margin);
				$dokter += (0.15 * intval($sisa) * $baru);
				$remunisasi += (0.15 * intval($sisa) * $baru);
				$apotek += (0.7 * intval($sisa) * $baru);

				$data['management'] = $management;
				$data['jasadokter'] = $dokter;
				$data['remunisasi'] = $remunisasi;
				$data['apotek'] = $apotek;
				$data['jumlah'] = $baru;
				$this->m_returobat->update_info_resep($value[7], $data);
				$result = "berhasil ditambahkan";
			}
		}else{
			$result = "gagal";
		}


		header('Content-Type: application/json');
		echo json_encode($result);
	}

}
