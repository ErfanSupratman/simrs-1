<?php  
	/**
	* created by jemsnaban 
	*/
	class m_bersalin extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function get_all_petugas()
		{
			$sql = "SELECT petugas_id, nama_petugas from petugas";
			if ($query = $this->db->query($sql)) {
				return $query->result_array();
			}else{
				return false;
			}
		}

		/*pasien mulai dari sini*/
		public function get_pasien_by_dept($dept_id='')
		{
			$sql = "SELECT * 
				  FROM pasien p, visit v, master_dept d
				  WHERE p.rm_id = v.rm_id AND v.dept_id = d.dept_id AND d.dept_id = ?";
			$query = $this->db->query($sql, $dept_id);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
		}

		public function get_pasien($visit_id, $ri_id)
		{
			$sql = "SELECT vr.cara_bayar,vr.ri_id, vr.visit_id, mp.nama_prov,mk.nama_kab, mkc.nama_kec, md.nama_kel, p.*
					FROM visit_ri vr left join visit v on v.visit_id = vr.visit_id
					left join pasien p on v.rm_id = p.rm_id 
					left join (select * from master_provinsi) mp on mp.prov_id = p.prov_id_skr
					left join (select * from master_kabupaten) mk on mk.kab_id = p.kab_id_skr
					left join (SELECT * from master_kecamatan) mkc on mkc.kec_id = p.kec_id_skr
					left join (select * from master_desa) md on md.kel_id = p.kel_id_skr
					where v.visit_id = '$visit_id' and vr.ri_id = '$ri_id'";
			//$this->db->where($rm_id);
			$query = $this->db->query($sql);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function get_prov($prov)
		{
			$sql = "SELECT * FROM master_provinsi where prov_id = ?";
			//$this->db->where($rm_id);
			$query = $this->db->query($sql,$prov);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function get_kab($prov)
		{
			$sql = "SELECT * FROM master_kabupaten where kab_id = ?";
			//$this->db->where($rm_id);
			$query = $this->db->query($sql,$prov);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}
		public function get_kec($prov)
		{
			$sql = "SELECT * FROM master_kecamatan where kec_id = ?";
			//$this->db->where($rm_id);
			$query = $this->db->query($sql,$prov);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}
		public function get_kel($prov)
		{
			$sql = "SELECT * FROM master_desa where kel_id = ?";
			//$this->db->where($rm_id);
			$query = $this->db->query($sql,$prov);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}
		/*akhir data pasien*/

		/*mulai overview klinik*/
		public function insert_overview($value)
		{
			//insert ke overview
			$query = $this->db->insert('visit_overview',$value);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}

		public function get_overview_history($v_id)
		{
			$sql = "SELECT * FROM visit_overview v where v.visit_id = '$v_id'";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}
		/*akhir overview*/

		/*tindakan mulai dari sini*/
		public function get_master_tindakan($value='')
		{
			$sql = "SELECT * from master_tindakan";
			$query = $this->db->query($sql);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
		}

		public function get_tindakan($id)
		{
			$sql = "SELECT * from master_tindakan where tindakan_id = ?";
			$query = $this->db->query($sql, $id);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function get_tindakan_kategori()
		{
			$sql = "SELECT * from master_tindakan_kategori";
			$query = $this->db->query($sql);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
		}

		public function save_tindakan($value='')
		{
			$query = $this->db->insert('visit_care',$value);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}
		/*akhir tindakan*/

		/*visit care mulai di sini*/
		public function get_visit_care($value='')
		{
			$sql = "SELECT * from visit_care v, petugas b, master_tindakan t,
					master_tindakan_kategori m, visit vb 
					where 
					v.visit_id = vb.visit_id AND v.paramedis = b.petugas_id
					AND v.tindakan_id = t.tindakan_id AND v.kat_id = m.kat_id AND
					v.visit_id = ?";
			$query = $this->db->query($sql, $value);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
		}

		public function get_last_visit_care()
		{
			$sql = "SELECT max(care_id) as value from visit_care";
			$query = $this->db->query($sql);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function get_inserted_visit_care($value='')
		{
			$sql = "SELECT * from visit_care v, petugas b, master_tindakan t,
					master_tindakan_kategori m, visit vb 
					where 
					v.visit_id = vb.visit_id AND v.paramedis = b.petugas_id
					AND v.tindakan_id = t.tindakan_id AND v.kat_id = m.kat_id AND
					v.care_id = ?";
			$query = $this->db->query($sql, $value);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}
		/*akhir visit care*/

		/*visit resep mulai di sini*/
		public function get_visit_resep($value='')
		{
			$sql = "SELECT *
			FROM visit_resep v
			inner JOIN petugas p ON v.dokter = p.petugas_id AND v.visit_id = ?";
			$query = $this->db->query($sql, $value);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
		}

		public function get_last_visit_resep()
		{
			$sql = "SELECT max(resep_id) as value from visit_resep";
			$query = $this->db->query($sql);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function save_visit_resep($value='')
		{
			$query = $this->db->insert('visit_resep',$value);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}

		public function get_inserted_visit_resep($value='')
		{
			$sql = "SELECT *
			FROM visit_resep v
			inner JOIN petugas p ON v.dokter = p.petugas_id AND v.resep_id = ?";
			$query = $this->db->query($sql, $value);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function delete_resep($value='')
		{
			$sql = "delete from visit_resep where resep_id = ?";
			$query = $this->db->query($sql, $value);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}
		/*akhir resep*/

		/*untuk visit gizi di sini*/
		public function get_last_visit_gizi()
		{
			$sql = "SELECT max(gizi_id) as value from visit_gizi";
			$query = $this->db->query($sql);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function save_visit_gizi($value='')
		{
			$query = $this->db->insert('visit_gizi',$value);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}

		public function get_inserted_visit_gizi($value='')
		{
			$sql = "SELECT *
			FROM visit_gizi v
			inner JOIN petugas p ON v.konsultan = p.petugas_id AND v.gizi_id = ?";
			$query = $this->db->query($sql, $value);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function get_visit_gizi($value='')
		{
			$sql = "SELECT *
			FROM visit_gizi v
			inner JOIN petugas p ON v.konsultan = p.petugas_id AND v.visit_id = ?";
			$query = $this->db->query($sql, $value);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
		}

		public function delete_gizi($value='')
		{
			$sql = "delete from visit_gizi where gizi_id = ?";
			$query = $this->db->query($sql, $value);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}
		/*akhir visit gizi*/

		/*order kamar operasi*/
		public function get_department_operasi()
		{
			
		}

		public function get_last_order_operasi()
		{
			$sql = "SELECT max(order_operasi_id) as value from order_operasi";
			$query = $this->db->query($sql);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function get_inserted_order_operasi($order_id='')
		{
			$sql = "SELECT *
			FROM order_operasi o
			inner JOIN petugas p ON o.pengirim = p.petugas_id AND o.order_operasi_id = ?";
			$query = $this->db->query($sql, $order_id);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function get_order_operasi($visit_id='')
		{
			$sql = "SELECT * from order_operasi o, petugas b, master_dept t
					where 
					o.pengirim = b.petugas_id
					AND o.dept_id = '18' AND t.dept_id = o.dept_tujuan AND
					o.visit_id = ?";
			$query = $this->db->query($sql, $visit_id);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
		}

		public function save_order_operasi($value='')
		{
			$query = $this->db->insert('order_operasi', $value);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}

		public function delete_order($value='')
		{
			$sql = "delete from order_operasi where order_operasi_id = ?";
			$query = $this->db->query($sql, $value);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}

		/*akhir order kamar operasi*/

		// ------------------------------- Daftar Permintaan Makan ---------------------------------//
		public function get_identitas_pasien($rm_id){
		$sql = "SELECT * FROM pasien WHERE rm_id = $rm_id LIMIT 1";
		$query = $this->db->query($sql);

		$result = $query->result_array();
		return $result;
	}

	public function get_ruang($visit_id){
		$sql = "SELECT * FROM visit_inap_kamar vik, master_kamar mk, master_bed mb 
					WHERE vik.kamar_id = mk.kamar_id 
					AND vik.bed_id = mb.bed_id 
					AND vik.visit_id = '$visit_id' LIMIT 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;

	}

	public function get_paket_makan(){
		$sql = "SELECT * FROM master_paket_makan";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function search_paket_makan($search){
		$sql = "SELECT * FROM master_paket_makan WHERE nama_paket LIKE '%$search%'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function add_permintaan_makan($input){
		$insert = $this->db->insert('permintaan_makan',$input);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}

	public function get_permintaan_makan($id){
		$sql = "SELECT * FROM permintaan_makan pm, master_paket_makan m WHERE pm.paket_id = m.paket_id AND  id = '$id'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_permintaan_awal($visit_id){
		$sql = "SELECT * FROM permintaan_makan pm, master_paket_makan m WHERE pm.paket_id = m.paket_id AND  visit_id = '$visit_id'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function create_permintaan_makan($visit_id){
		$sql = "SELECT SUBSTR(id, 13, 4)'id' FROM permintaan_makan 
					WHERE SUBSTR(id, 3, 10) = '$visit_id' 
					ORDER BY id 
					DESC LIMIT 1";
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0) {
			$id = $query->row_array();
			$id = intval($id['id']) + 1;

			if (strlen($id) == '1') {
				$id = '000' . $id;
			} elseif (strlen($id) == '2') {
				$id = '00' . $id;
			} elseif (strlen($id) == '3') {
				$id = '0' . $id;
			} else {
				$id = $id;
			}	
			return "MA" . $visit_id . $id;
		} else {
			return "MA" . $visit_id .'0001';
		}
	}

	public function search_pasien($search){
		$sql = "SELECT * FROM pasien p, visit v, visit_ri r, (SELECT dept_id FROM master_dept WHERE nama_dept = 'BERSALIN') m WHERE p.rm_id = v.rm_id AND m.dept_id = r.unit_tujuan AND v.visit_id = r.visit_id AND v.status_visit = 'REGISTRASI INAP' AND (p.nama LIKE '%$search%' OR p.rm_id LIKE '%$search%')";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_antrian_pasien(){
		$sql = "SELECT * FROM pasien p, visit v, visit_ri r, (SELECT dept_id FROM master_dept WHERE nama_dept = 'BERSALIN') m WHERE p.rm_id = v.rm_id AND m.dept_id = r.unit_tujuan AND v.visit_id = r.visit_id AND v.status_visit = 'REGISTRASI INAP' ORDER BY r.waktu_masuk DESC";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function search_diagnosa($value){
        $sql = "SELECT * FROM master_diagnosa WHERE diagnosis_nama LIKE '%$value%'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

	}
?>