<?php  
	/**
	* 
	*/
	class m_bersalin extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
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

		/*overview klinik*/
		public function search_diagnosa($value){
	        $sql = "SELECT * FROM master_diagnosa WHERE diagnosis_nama LIKE '%$value%'";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
	    }

	    public function search_dokter($search){
	        $sql = "SELECT * FROM petugas WHERE nama_petugas LIKE '%$search%' AND jabatan = 'Dokter'";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
	    }

	     public function search_perawat($search){
	        $sql = "SELECT * FROM petugas WHERE nama_petugas LIKE '%$search%' AND jabatan = 'Perawat'";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
	    }

	    public function get_overview_id($visit_id){
	        $sql = "SELECT SUBSTR(id, 11, 54)'id' FROM overview_klinik 
	                WHERE visit_id = '$visit_id'
	                ORDER by id DESC
	                LIMIT 1";
	        $query = $this->db->query($sql);
	        if ($query->num_rows() > 0) {
	            $o_id = $query->row_array();
	            $o_id = intval($o_id['id']) + 1;

	            if (strlen($o_id) == '1') {
	                $o_id = '0' . $o_id;
	            } else {
	                $o_id = $o_id;
	            }
	            return $visit_id . $o_id;
	        }else{
	            return $visit_id . '01';
	        }
	    }

	    public function insert_overview($value)
	    {
	        //insert ke overview
	        $query = $this->db->insert('overview_klinik',$value);
	        if ($query) {
	            return true;
	        }else{
	            return false;
	        }
	    }

	    public function get_overview_history($v_id, $ri_id)
	    {
	        $sql = "SELECT * FROM overview_klinik v left join petugas p on v.dokter = p.petugas_id 
	        		where v.visit_id = '$v_id' and v.rj_id = '$ri_id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->result_array();
	        }else{
	            return false;
	        }
	    }

	    public function get_detail_overview_klinis($id)
	    {
	    	$sql = "SELECT * FROM overview_klinik v left join petugas p on v.dokter = p.petugas_id 
	    			left join (select diagnosis_id as diag_u, diagnosis_nama as diagnosa_utama from master_diagnosa) a on v.diagnosa1 = a.diag_u
	    			left join (select diagnosis_id as diag_1, diagnosis_nama as diagnosa_1 from master_diagnosa) b on v.diagnosa2 = b.diag_1
	    			left join (select diagnosis_id as diag_2, diagnosis_nama as diagnosa_2 from master_diagnosa) c on v.diagnosa3 = c.diag_2
	    			left join (select diagnosis_id as diag_3, diagnosis_nama as diagnosa_3 from master_diagnosa) d on v.diagnosa4 = d.diag_3
	    			left join (select diagnosis_id as diag_4, diagnosis_nama as diagnosa_4 from master_diagnosa) e on v.diagnosa5 = e.diag_4
	        		where v.id = '$id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->row_array();
	        }else{
	            return false;
	        }
	    }

	    /*overview IGD*/
	    public function insert_overview_igd($params)
	    {
	    	$query = $this->db->insert('overview_igd',$params);
	        if ($query) {
	            return true;
	        }else{
	            return false;
	        }
	    }

	    public function get_overviewigd_id($visit_id){
	        $sql = "SELECT SUBSTR(id, 11, 54)'id' FROM overview_igd 
	                WHERE visit_id = '$visit_id'
	                ORDER by id DESC
	                LIMIT 1";
	        $query = $this->db->query($sql);
	        if ($query->num_rows() > 0) {
	            $o_id = $query->row_array();
	            $o_id = intval($o_id['id']) + 1;

	            if (strlen($o_id) == '1') {
	                $o_id = '0' . $o_id;
	            } else {
	                $o_id = $o_id;
	            }
	            return $visit_id . $o_id;
	        }else{
	            return $visit_id . '01';
	        }
	    }

	    public function get_overviewigd_history($v_id, $ri_id)
	    {
	        $sql = "SELECT * FROM overview_igd v
	        		left join (select petugas_id, nama_petugas as dokter_jaga from petugas) p on v.dokter = p.petugas_id
	    			left join (select petugas_id, nama_petugas as perawat_jaga from petugas) z on v.perawat = z.petugas_id
	        		where v.visit_id = '$v_id' and v.igd_id = '$ri_id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->result_array();
	        }else{
	            return false;
	        }
	    }

	    public function get_detail_overview_igd($id)
	    {
	    	$sql = "SELECT * FROM overview_igd v 
	    			left join (select petugas_id, nama_petugas as dokter from petugas) p on v.dokter = p.petugas_id
	    			left join (select petugas_id, nama_petugas as perawat from petugas) z on v.perawat = z.petugas_id
	    			left join (select diagnosis_id as diag_u, diagnosis_nama as diagnosa_utama from master_diagnosa) a on v.diagnosa1 = a.diag_u
	    			left join (select diagnosis_id as diag_1, diagnosis_nama as diagnosa_1 from master_diagnosa) b on v.diagnosa2 = b.diag_1
	    			left join (select diagnosis_id as diag_2, diagnosis_nama as diagnosa_2 from master_diagnosa) c on v.diagnosa3 = c.diag_2
	    			left join (select diagnosis_id as diag_3, diagnosis_nama as diagnosa_3 from master_diagnosa) d on v.diagnosa4 = d.diag_3
	    			left join (select diagnosis_id as diag_4, diagnosis_nama as diagnosa_4 from master_diagnosa) e on v.diagnosa5 = e.diag_4
	        		where v.id = '$id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->row_array();
	        }else{
	            return false;
	        }
	    }
	    /*akhir overview igd*/

	    /*overview ibu*/
	    public function get_overviewibu($visit_id){
	        $sql = "SELECT SUBSTR(id, 11, 54)'id' FROM overview_ibu_hamil 
	                WHERE visit_id = '$visit_id'
	                ORDER by id DESC
	                LIMIT 1";
	        $query = $this->db->query($sql);
	        if ($query->num_rows() > 0) {
	            $o_id = $query->row_array();
	            $o_id = intval($o_id['id']) + 1;

	            if (strlen($o_id) == '1') {
	                $o_id = '0' . $o_id;
	            } else {
	                $o_id = $o_id;
	            }
	            return $visit_id . $o_id;
	        }else{
	            return $visit_id . '01';
	        }
	    }

	    public function insert_overviewibu($params)
	    {
	    	$query = $this->db->insert('overview_ibu_hamil',$params);
	        if ($query) {
	            return true;
	        }else{
	            return false;
	        }
	    }

	    public function get_overviewhamil_history($v_id, $ri_id)
	    {
	        $sql = "SELECT * FROM overview_ibu_hamil v
	        		where v.visit_id = '$v_id' and v.ri_hamil_id = '$ri_id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->result_array();
	        }else{
	            return false;
	        }
	    }

	    public function get_detail_overview_hamil($id)
	    {
	    	$sql = "SELECT * FROM overview_ibu_hamil v 
	        		where v.id = '$id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->row_array();
	        }else{
	            return false;
	        }
	    }

	    public function insert_pemeriksaan_fisikibu($params)
	    {
	    	$query = $this->db->insert('pemeriksaan_fisik_ibu',$params);
	        if ($query) {
	            return true;
	        }else{
	            return false;
	        }
	    }

	    public function get_pemeriksaan_fisikibu($id)
	    {
	    	$sql = "SELECT v.*, e.diagnosis_nama, p.nama_petugas FROM pemeriksaan_fisik_ibu v 
	    			left join master_diagnosa e on e.diagnosis_id = v.diagnosa_kerja
	    			left join petugas p on p.petugas_id = v.dokter_periksa
	        		where v.ri_id_overview = '$id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->result_array();
	        }else{
	            return false;
	        }
	    }

	    public function get_detail_fisik_ibu($id='')
	    {
	    	$sql = "SELECT v.*, e.diagnosis_nama, p.nama_petugas FROM pemeriksaan_fisik_ibu v 
	    			left join master_diagnosa e on e.diagnosis_id = v.diagnosa_kerja
	    			left join petugas p on p.petugas_id = v.dokter_periksa
	        		where v.prime_id = '$id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->row_array();
	        }else{
	            return false;
	        }
	    }

	    /*akhir overview ibu*/

	    /*kunjungan dokter*/
	    public function get_kunjungan_id($visit_id){
	        $sql = "SELECT SUBSTR(kunjungan_dok_id, 11, 54)'id' FROM kunjungan_perawatan_dokter 
	                WHERE visit_id = '$visit_id'
	                ORDER by id DESC
	                LIMIT 1";
	        $query = $this->db->query($sql);
	        if ($query->num_rows() > 0) {
	            $o_id = $query->row_array();
	            $o_id = intval($o_id['id']) + 1;

	            if (strlen($o_id) == '1') {
	                $o_id = '0' . $o_id;
	            } else {
	                $o_id = $o_id;
	            }
	            return $visit_id . $o_id;
	        }else{
	            return $visit_id . '01';
	        }
	    }

	    public function insert_kunjungan_dokter($params)
	    {
	    	$query = $this->db->insert('kunjungan_perawatan_dokter',$params);
	        if ($query) {
	            return true;
	        }else{
	            return false;
	        }
	    }

	    public function getinfo_kunjungan_dokter($visit_id, $ri_id)
	    {
	    	$sql = "SELECT * FROM kunjungan_perawatan_dokter v 
	    			left join (select petugas_id, nama_petugas as dokter from petugas) p on v.dokter_visit = p.petugas_id
	    			left join (select diagnosis_id as diag_u, diagnosis_nama as diagnosa_utama from master_diagnosa) a on v.diagnosa_utama = a.diag_u
	    			where v.visit_id = '$visit_id' and v.ri_id = '$ri_id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->result_array();
	        }else{
	            return false;
	        }
	    }

	    public function get_detail_over_perawatan($id)
	    {
	    	$sql = "SELECT * FROM kunjungan_perawatan_dokter v 
	    			left join (select petugas_id, nama_petugas as dokter from petugas) p on v.dokter_visit = p.petugas_id
	    			left join (select diagnosis_id as diag_u, diagnosis_nama as diagnosa_utama from master_diagnosa) a on v.diagnosa_utama = a.diag_u
	    			left join (select diagnosis_id as diag_1, diagnosis_nama as diagnosa_1 from master_diagnosa) b on v.sekunder1 = b.diag_1
	    			left join (select diagnosis_id as diag_2, diagnosis_nama as diagnosa_2 from master_diagnosa) c on v.sekunder2 = c.diag_2
	    			left join (select diagnosis_id as diag_3, diagnosis_nama as diagnosa_3 from master_diagnosa) d on v.sekunder3 = d.diag_3
	    			left join (select diagnosis_id as diag_4, diagnosis_nama as diagnosa_4 from master_diagnosa) e on v.sekunder4 = e.diag_4
	    			where v.kunjungan_dok_id = '$id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->row_array();
	        }else{
	            return false;
	        }
	    }

	    //asuhan keperawatan
	    public function get_asuhan_id($visit_id)
	    {
	    	$sql = "SELECT SUBSTR(asuhan_id, 11, 54)'id' FROM asuhan_keperawatan 
	                WHERE visit_id = '$visit_id'
	                ORDER by id DESC
	                LIMIT 1";
	        $query = $this->db->query($sql);
	        if ($query->num_rows() > 0) {
	            $o_id = $query->row_array();
	            $o_id = intval($o_id['id']) + 1;

	            if (strlen($o_id) == '1') {
	                $o_id = '0' . $o_id;
	            } else {
	                $o_id = $o_id;
	            }
	            return $visit_id . $o_id;
	        }else{
	            return $visit_id . '01';
	        }
	    }

	    public function insert_asuhan($params)
	    {
	    	$query = $this->db->insert('asuhan_keperawatan',$params);
	        if ($query) {
	            return true;
	        }else{
	            return false;
	        }
	    }

	    public function get_asuhan_dokter($visit_id, $ri_id)
	    {
	    	$sql = "SELECT * FROM asuhan_keperawatan v 
	    			left join (select petugas_id, nama_petugas as perawat1 from petugas) p on v.perawat1 = p.petugas_id
	    			left join (select petugas_id, nama_petugas as perawat2 from petugas) z on v.perawat2 = z.petugas_id
	    			where v.visit_id = '$visit_id' and v.ri_id = '$ri_id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->result_array();
	        }else{
	            return false;
	        }
	    }
	    /*akhir kunjungan dokter*/

	    /*visit kegiatan bersalin*/
	    public function get_dept_rujukan()
	    {
	    	$sql = "SELECT * from master_dept m where m.dept_id != 19 and (m.jenis like '%INAP%' or m.jenis like '%PENUNJANG%')";
	    	$query = $this->db->query($sql);
	    	if($query){
	    		return $query->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_last_kegiatan_bersalin($datas)
	    {
	    	$sql = "SELECT MAX(SUBSTR(bersalin_id, 9, 4 ))'id' FROM visit_kegiatan_bersalin";
	        $query = $this->db->query($sql);

	        $y = SUBSTR($datas['waktu'], 2, 2);	
	        $m = SUBSTR($datas['waktu'], 5, 2);
	        $d = SUBSTR($datas['waktu'], 8, 2);
	        if ($datas['dirujuk_ke'] == "-") {
	            	$datas['dirujuk_ke'] = "19"; //bersalin
	            }
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
	            return $datas['dirujuk_ke']. $y. $m. $d. $id;
	        } else {
	            return $datas['dirujuk_ke']. $y. $m. $d.'0001';
	        }
	    }

	    public function insert_kegiatan_bersalin($value='')
	    {
	    	$result = $this->db->insert('visit_kegiatan_bersalin', $value);
	    	if ($result) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_kegiatan_bersalin($visit_id, $ri_id)
	    {
	    	$sql = "SELECT * from visit_kegiatan_bersalin v
	    			left join master_dept m on v.dirujuk_ke = m.dept_id
	    			left join (select petugas_id, nama_petugas as dokter from petugas) p on v.dokter = p.petugas_id
	    			left join (select petugas_id, nama_petugas as asisten from petugas) z on v.asisten = z.petugas_id
	    			where v.visit_id = '$visit_id' and v.ri_id = '$ri_id'";
	    	$query = $this->db->query($sql);
	    	if($query){
	    		return $query->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_asisten($kata)
	    {
	    	$sql = "SELECT * from petugas where nama_petugas LIKE '%$kata%' and (jabatan = 'Perawat' or jabatan = 'Bidan')";
	    	$query = $this->db->query($sql);
	    	if($query){
	    		return $query->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function hapus_kegiatan_bersalin($id)
	    {
	    	$this->db->where('bersalin_id', $id);
	    	$res = $this->db->delete('visit_kegiatan_bersalin');
	    	if($res){
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }
	    /*akhir visit bersalin*/

	}
?>