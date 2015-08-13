<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once( APPPATH . 'modules_core/base/controllers/application_base.php' );
require_once( APPPATH . 'modules_core/base/controllers/operator_base.php' );

class Homepenjualanobat extends Operator_base {
	protected $dept_id;
	function __construct(){
		parent:: __construct();
		$this->load->model("m_jualobat");
		$this->load->model("m_apotekumum");
		$data['page_title'] = "Penjualan Obat";
		$this->session->set_userdata($data);
		$this->dept_id = $this->m_apotekumum->get_dept_id('APOTEK UMUM')['dept_id'];
	}

	public function index($page = 0)
	{
		/*$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		// load template
		$data['content'] = 'penjualanobat/home';
		$data['javascript'] = 'penjualanobat/j_jualobat';
		$this->load->view('base/operator/template', $data);*/
	}

	public function prosesresep($resep_id)
	{
		$this->cek_resep_exist($resep_id);
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		// load template
		$data['content'] = 'penjualanobat/home';
		$data['javascript'] = 'penjualanobat/j_jualobat';

		$data['inforesep'] = $this->m_jualobat->get_informasi_resep($resep_id);
		$p_id = $this->session->userdata('session_operator')['petugas_id'];
		$data['kasir'] = $this->m_jualobat->get_nama_petugas($p_id);
		$this->load->view('base/operator/template', $data);
	}

	public function search_apoteker()
	{
		$katakunci = $_POST['katakunci'];
		$result = $this->m_jualobat->search_apoteker($katakunci);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function search_obat()
	{
		$katakunci = $_POST['katakunci'];
		$result = $this->m_jualobat->search_obat($katakunci, $this->dept_id);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function submit_penjualan_obat()
	{
		$insert['visit_id'] = $_POST['visit_id'];
		$insert['resep_id'] = $_POST['resep_id'];
		$insert['petugas_kasir'] = $_POST['kasir_id'];
		$insert['dokter_id'] = $_POST['dokter_id'];
		$insert['cara_bayar'] = $_POST['cara_bayar'];
		$insert['apoteker_id'] = $_POST['apoteker_id'];
		$insert['subtotal'] = $_POST['subtotal'];
		$insert['diskon'] = $_POST['diskon'];
		$insert['ppn'] = $_POST['ppn'];
		$insert['jenis_diskon'] = $_POST['jenis_diskon'];
		$insert['grand_total'] = $_POST['grand_total'];
		$insert['waktu_penjualan'] = date('Y-m-d H:i:s');
		$insert['is_paid'] = 'no';

		$this->m_jualobat->update_status_resep($insert['resep_id']);
		$nota_id = $this->m_jualobat->get_last_nota_id();
		$center = date('y')."".date('m')."".date('d');
		if($nota_id){
			$vir = intval(substr($nota_id['value'], strlen($center) + 2)) + 1;
			if (strlen($vir) == "1") {
				$vir = '000'. $vir;
			}else if(strlen($vir) == "2"){
				$vir = '00' . $vir;
			}else if (strlen($vir) == "3") {
				$vir = '0' . $vir;
			}
			$insert['no_nota'] = $this->dept_id."".$center."".($vir);
		}else{
			$insert['no_nota'] = $this->dept_id."".$center."0001";
		}
		//masukkan data umum
		$res = $this->m_jualobat->insert_penjualan($insert);

		$item = $_POST['data'];
		foreach ($item as $resep) {
			//manual aja, fak
			$temp = $resep[10];
			if (strpos($resep[10], ',') !== false) {
				$temp = '';
			}

			$params = array(
				'no_nota' => $insert['no_nota'],
				'tipe_obat' => $resep[0],
				'resep_satuan' => $resep[14],
				'obat_dept_id' => $temp,
				'jumlah' => $resep[2],
				'emblase' => $resep[5],
				'onfaktur' => $resep[7],
				'jasa_farmasi' => $resep[6],
				'total' => $resep[8]
				);
			$apd_id = $this->m_jualobat->insert_detail_penjualan_temp($params);
			if (substr($resep[0], 0,3) !== 'Non') {
				$id_s = explode(',', $resep[10]);
				$jlh_s = explode(',', $resep[11]);
				$jlh_a = explode(',', $resep[13]);

				for ($i=0; $i < count($id_s) - 1; $i++) { 
					$prm = array(
						'apd_id' => $apd_id, 
						'obat_dept_id' => $id_s[$i],
						'jumlah_obat' => $jlh_s[$i],
						'harga' => $jlh_a[$i]
						);
					$this->m_jualobat->insert_detail_racik_temp($prm);
				}

			}
		}

		header('Content-Type: application/json');
		echo json_encode($prm);
	}

	public function bayar_resep($resep_id)
	{
		$this->cek_resep_exist($resep_id);
		$this->check_auth('R');
		$data['menu_view'] = $this->menu();
		$data['user'] = $this->user;
		// load template
		$data['content'] = 'penjualanobat/bayar';
		$data['javascript'] = 'penjualanobat/j_bayarobat';

		$data['inforesep'] = $this->m_jualobat->get_informasi_resep_bayar($resep_id);
		$data['all_info'] = $this->m_jualobat->get_informasi_resep_bayar_detail($data['inforesep']['no_nota']);

		$i = 0;
		foreach ($data['all_info'] as $value) {
			if ($value['tipe_obat'] == 'Non-Racikan') {
				$data['non_racik'] = $this->m_jualobat->get_informasi_resep_detail_nonracik($value['no_nota']);
			}else{
				$data['racik'][$i] = $this->m_jualobat->get_informasi_resep_detail_racik($value['no_nota']);
			}
		}

		$p_id = $this->session->userdata('session_operator')['petugas_id'];
		$data['kasir'] = $this->m_jualobat->get_nama_petugas($p_id);
		$this->load->view('base/operator/template', $data);
	}

	/*bayar*/
	public function bayar_penjualan_obat()
	{
		$nota = $_POST['no_nota'];
		$resep_id = $_POST['resep_id'];
		$insert['subtotal'] = $_POST['subtotal'];
		$insert['diskon'] = $_POST['diskon'];
		$insert['grand_total'] = $_POST['grand_total'];
		$insert['ppn'] = $_POST['ppn'];
		$insert['jenis_diskon'] = $_POST['jenis_diskon'];
		$insert['is_paid'] = 'yes';

		$this->m_jualobat->update_status_resep_bayar($resep_id);
		//update nota
		$this->m_jualobat->update_nota($nota,$insert);

		$item = $_POST['data'];
		
		foreach ($item as $resep) {
			//manual aja, fak
			$temp = $resep[10];
			if (strpos($resep[10], ',') !== false) { //klo obatnya lebih dari 1, berarti racikan
				$temp = '';
			}

			$params = array(
				'no_nota' => $nota,
				'tipe_obat' => $resep[0],
				'resep_satuan' => $resep[14],
				'obat_dept_id' => $temp, //id
				'jumlah' => $resep[2],
				'emblase' => $resep[5],
				'onfaktur' => $resep[7],
				'jasa_farmasi' => $resep[6],
				'total' => $resep[8]
				);
			$apd_id = $this->m_jualobat->insert_detail_penjualan($params);
			//kurangi obat
			/*--------------sini fakkkkk*/
			//hitung
			if ($temp != '') {
				$remunisasi = 0; $dokter = 0; $management = 0; $apotek = 0;
				$ob = $this->m_jualobat->get_last_stok($temp);
				$arr = array(
					'obat_dept_id' => $ob['obat_dept_id'], 
					'tanggal' => date('Y-m-d H:i:s'),
					'keluar' => $resep[2],
					'total_stok' => ($ob['total_stok'] - $resep[2]),
					'keterangan' => 'PENJUALAN'
					);
				$this->m_jualobat->insert_detail_stok($arr);

				$obat = $this->m_jualobat->get_obatinfo($temp);
				$uang_margin = intval($obat['harga_jual']) - intval($obat['hps']);
				$management += (0.6 * intval($uang_margin) * $resep[2]);
				$sisa = $uang_margin - (0.6 * $uang_margin);
				$dokter += (0.15 * intval($sisa) * $resep[2]);
				$remunisasi += (0.15 * intval($sisa) * $resep[2]);
				$apotek += (0.7 * intval($sisa) * $resep[2]);

				$data['management'] = $management;
				$data['jasadokter'] = $dokter;
				$data['remunisasi'] = $remunisasi;
				$data['apotek'] = $apotek;
				//update, masukkan remunisasi dsb
				$this->m_jualobat->update_detail($apd_id,$data);
			}

			
			if (substr($resep[0], 0,3) !== 'Non') {
				$id_s = explode(',', $resep[10]);
				$jlh_s = explode(',', $resep[11]);
				$jlh_a = explode(',', $resep[13]);

				for ($i=0; $i < count($id_s) - 1; $i++) {
					$remunisasi = 0; $dokter = 0; $management = 0; $apotek = 0; 
					$prm = array(
						'apd_id' => $apd_id, 
						'obat_dept_id' => $id_s[$i],
						'jumlah_obat' => $jlh_s[$i],
						'harga' => $jlh_a[$i]
						);
					$this->m_jualobat->insert_detail_racik($prm);
					//kurangi obat
					/*----*/
					$ob = $this->m_jualobat->get_last_stok($id_s[$i]);
					$arr = array(
						'obat_dept_id' => $ob['obat_dept_id'], 
						'tanggal' => date('Y-m-d H:i:s'),
						'keluar' => $jlh_s[$i],
						'total_stok' => ($ob['total_stok'] - $jlh_s[$i]),
						'keterangan' => 'PENJUALAN'
						);
					$this->m_jualobat->insert_detail_stok($arr);

					$obat = $this->m_jualobat->get_obatinfo($id_s[$i]);
					$uang_margin = intval($obat['harga_jual']) - intval($obat['hps']);
					$management += (0.6 * intval($uang_margin) * $jlh_s[$i]);
					$sisa = $uang_margin - (0.6 * $uang_margin);
					$dokter += (0.15 * intval($sisa) * $jlh_s[$i]);
					$remunisasi += (0.15 * intval($sisa) * $jlh_s[$i]);
					$apotek += (0.7 * intval($sisa) * $jlh_s[$i]);

					$data['management'] = $management;
					$data['jasadokter'] = $dokter;
					$data['remunisasi'] = $remunisasi;
					$data['apotek'] = $apotek;
					//update, masukkan remunisasi dsb
					$this->m_jualobat->update_detail($apd_id,$data);
				}
			}
		}
		

		header('Content-Type: application/json');
		echo json_encode($data);
	}

	public function cek_resep_exist($resep_id)
	{
		$res = $this->m_jualobat->cek_resep_exist($resep_id);
		if ($res == false) {
			redirect('farmasi/homekasirobat');
		}
	}

	public function get_resep_all($resep_id)
	{
		$all = $this->m_jualobat->get_informasi_resep_bayar_detail($resep_id);
		header('Content-Type: application/json');
		echo json_encode($all);
	}

}
