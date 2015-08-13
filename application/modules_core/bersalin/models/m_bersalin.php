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

		public function get_dept_id($unit){
	        $sql = "SELECT * FROM master_dept WHERE nama_dept = '$unit'";
	        $query = $this->db->query($sql);
	        $result = $query->row_array();
	        return $result;
	    }

		public function get_pasien($visit_id, $ri_id)
		{
			$sql = "SELECT vr.*, mp.nama_prov,mk.nama_kab, mkc.nama_kec, md.nama_kel, p.*,
					mb.*, mr.*
					FROM visit_ri vr left join visit_inap_kamar vi on vi.ri_id =  vr.ri_id
					left join master_kamar mr on mr.kamar_id = vi.kamar_id 
					left join master_bed mb on mb.bed_id = vi.bed_id
					left join visit v on v.visit_id = vr.visit_id
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
			$sql = "SELECT *, IFNULL(mt.nama_dept,'Admisi') as dept_asal FROM pasien p inner join visit v on v.rm_id = p.rm_id 
					inner join visit_ri ri on ri.visit_id = v.visit_id 
					inner join visit_inap_kamar vk on vk.ri_id = ri.ri_id 
					inner join (select dept_id from master_dept where nama_dept = 'BERSALIN') m 
					on m.dept_id = ri.unit_tujuan left join (select * from master_dept) mt 
					on mt.dept_id = ri.unit_asal
					where ri.waktu_keluar IS NULL
					AND (v.status_visit = 'REGISTRASI INAP' OR v.status_visit LIKE 'PINDAH') 
					AND (p.nama LIKE '%$search%' OR p.rm_id LIKE '%$search%')";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		/*SELECT * FROM pasien p left join visit v on v.rm_id = p.rm_id
					left join (select * from visit_ri order by waktu_masuk desc) vr on vr.visit_id = v.visit_id left join visit_inap_kamar vk on vk.ri_id = vr.ri_id
					left join (SELECT dept_id FROM master_dept WHERE nama_dept = 'BERSALIN') m on m.dept_id = vr.unit_tujuan
					left join master_bed mb on mb.bed_id = vk.bed_id where (v.status_visit LIKE 'REGISTRASI INAP' or v.status_visit LIKE 'PINDAH')
					and (p.nama LIKE '%$search%' OR p.rm_id LIKE '$search')*/
		/**/
		/*SELECT * FROM pasien p left join visit v on v.rm_id = p.rm_id
					left join (select * from visit_ri order by waktu_masuk) vr on vr.visit_id = v.visit_id left join visit_inap_kamar vk on vk.ri_id = vr.ri_id
					left join (SELECT dept_id FROM master_dept WHERE nama_dept = 'BERSALIN') m on m.dept_id = vr.unit_tujuan
					left join master_bed mb on mb.bed_id = vk.bed_id where (v.status_visit LIKE 'REGISTRASI INAP' or v.status_visit LIKE 'PINDAH')
					order by vr.waktu_masuk desc limit 25*/
		/**/
		public function get_antrian_pasien(){
			$sql = "SELECT *,IFNULL(mt.nama_dept,'Admisi') as dept_asal FROM pasien p inner join visit v on v.rm_id = p.rm_id 
					inner join visit_ri ri on ri.visit_id = v.visit_id 
					inner join visit_inap_kamar vk on vk.ri_id = ri.ri_id 
					inner join (select dept_id from master_dept where nama_dept = 'BERSALIN') m 
					on m.dept_id = ri.unit_tujuan left join (select * from master_dept) mt 
					on mt.dept_id = ri.unit_asal
					where ri.waktu_keluar IS NULL
					AND (v.status_visit = 'REGISTRASI INAP' OR v.status_visit LIKE 'PINDAH') ORDER BY ri.waktu_masuk DESC limit 25";
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

	    public function get_dokter(){
	        $sql = "SELECT * FROM petugas WHERE jabatan = 'Dokter'";
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

	    public function get_overview_history($v_id)
	    {
	        $sql = "SELECT * FROM overview_klinik v left join petugas p on v.dokter = p.petugas_id 
	        		left join master_dept md on md.dept_id = substr(v.rj_id,1,2)
	        		where v.visit_id = '$v_id'";
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

	    public function get_overviewigd_history($v_id)
	    {
	       	$sql = "SELECT *, p.nama_petugas as rdokter, pe.nama_petugas as rperawat
                FROM (SELECT visit_id FROM visit WHERE visit_id = '$v_id') vd, overview_igd o, visit_igd vr, master_dept m, petugas p, petugas pe
                WHERE vd.visit_id = o.visit_id AND o.sub_visit = vr.igd_id AND m.dept_id = vr.unit_tujuan AND vd.visit_id = vr.visit_id 
                AND o.dokter = p.petugas_id AND o.perawat = pe.petugas_id ORDER BY o.waktu DESC";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
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

	    public function get_overviewhamil_history($v_id)
	    {
	        $sql = "SELECT * FROM overview_ibu_hamil v
	        		where v.visit_id = '$v_id'";
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
	        $sql = "SELECT SUBSTR(kunjungan_dok_id, 11, 54)'id' FROM visit_perawatan_dokter 
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
	    	$query = $this->db->insert('visit_perawatan_dokter',$params);
	        if ($query) {
	            return true;
	        }else{
	            return false;
	        }
	    }

	    public function getinfo_kunjungan_dokter($visit_id)
	    {
	    	$sql = "SELECT * FROM visit_perawatan_dokter v 
	    			left join (select petugas_id, nama_petugas as dokter from petugas) p on v.dokter_visit = p.petugas_id
	    			left join (select diagnosis_id as diag_u, diagnosis_nama as diagnosa_utama from master_diagnosa) a on v.diagnosa_utama = a.diag_u
	    			left join master_dept mp on mp.dept_id = substr(v.sub_visit,1,2)
	    			where v.visit_id = '$visit_id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->result_array();
	        }else{
	            return false;
	        }
	    }

	    public function get_detail_over_perawatan($id)
	    {
	    	$sql = "SELECT * FROM visit_perawatan_dokter v 
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

	    public function get_asuhan_dokter($visit_id)
	    {
	    	$sql = "SELECT * FROM asuhan_keperawatan v 
	    			left join (select petugas_id, nama_petugas as perawat1 from petugas) p on v.perawat1 = p.petugas_id
	    			left join (select petugas_id, nama_petugas as perawat2 from petugas) z on v.perawat2 = z.petugas_id
	    			left join master_dept mp on mp.dept_id = substr(v.sub_visit,1,2)
	    			where v.visit_id = '$visit_id'";
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

	    public function get_kegiatan_bersalin($visit_id)
	    {
	    	$sql = "SELECT * from visit_kegiatan_bersalin v
	    			left join master_dept m on v.dirujuk_ke = m.dept_id
	    			left join (select petugas_id, nama_petugas as dokter from petugas) p on v.dokter = p.petugas_id
	    			left join (select petugas_id, nama_petugas as asisten from petugas) z on v.asisten = z.petugas_id
	    			where v.visit_id = '$visit_id'";
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

	    /*visit resep*/
	    public function get_visit_resep($visit_id='')
	    {
	        $sql = "SELECT *
			        FROM visit_resep v
			        left JOIN petugas p ON v.dokter = p.petugas_id 
			        where v.visit_id = '$visit_id'";
	        $query = $this->db->query($sql);
	        if ($query) {
	            return $query->result_array();
	        }else{
	            return false;
	        }
	    }

	    public function get_last_visit_resep($visit_id)
	    {
	        $sql = "SELECT max(resep_id) as value from visit_resep where visit_id='$visit_id'";
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


	    public function hapus_resep($id){
	        $result = $this->db->delete('visit_resep',array('resep_id'=>$id));
	        return $result;
	    }
	    /*akhir visit resep*/

	    /*order operasi*/
	    public function get_order_operasi($visit_id)
	    {
	    	$sql = "SELECT * FROM order_operasi o left join petugas p on o.pengirim = p.petugas_id 
	    			where o.visit_id = '$visit_id'";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
	    }

	    public function get_last_order_operasi($visit_id)
	    {
	        $sql = "SELECT max(order_operasi_id) as value from order_operasi WHERE visit_id = '$visit_id'";
	        $query = $this->db->query($sql);
	        if ($query) {
	            return $query->row_array();
	        }else{
	            return false;
	        }
	    }

	    public function save_order_operasi($value=''){
	        $query = $this->db->insert('order_operasi',$value);
	        if ($query) {
	            return true;
	        }else{
	            return false;
	        }
	    }

	    public function get_inserted_order_operasi($select){
	        $sql = "SELECT * FROM order_operasi o, petugas p WHERE o.pengirim = p.petugas_id AND order_operasi_id = '$select' LIMIT 1";
	        $query = $this->db->query($sql);
	        if ($query) {
	            return $query->row_array();
	        }else{
	            return false;
	        }        
	    }

	    public function hapus_order_operasi($id){
	        $result = $this->db->delete('order_operasi',array('order_operasi_id'=>$id));
	        return $result;
	    }

	    /*akhir order operasi*/

	    /*visit gizi*/
	    public function get_visit_gizi($visit_id){
	        $sql = "SELECT * FROM visit_gizi v left join petugas p on v.konsultan = p.petugas_id 
	        		where v.visit_id  = '$visit_id'";
	        $result = $this->db->query($sql);
	        if ($result) {
	            return $result->result_array();
	        }else{
	            return false;
	        }
	    }

	    public function get_last_visit_gizi($visit_id)
	    {
	        $sql = "SELECT max(gizi_id) as value from visit_gizi WHERE visit_id = '$visit_id'";
	        $query = $this->db->query($sql);
	        if ($query) {
	            return $query->row_array();
	        }else{
	            return false;
	        }
	    }

	    public function save_gizi($value){
	        $query = $this->db->insert('visit_gizi',$value);
	        if ($query) {
	            return true;
	        }else{
	            return false;
	        }
	    }

	    public function hapus_gizi($id){
	        $result = $this->db->delete('visit_gizi',array('gizi_id'=>$id));
	        return $result;
	    }
	    /*akhir visit gizi*/

	    /*permintaan makan*/
	    public function get_tipe_diet()
	    {
	    	$sql = "SELECT * FROM master_tipe_diet";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
	    }

	    public function get_paket_makan($id)
	    {
	    	$sql = "SELECT * FROM gizi_paket_makan where tipe_diet = '$id'";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
	    }

	    public function submit_permintaan_makan($insert)
	    {
	    	$query = $this->db->insert('visit_permintaan_makan',$insert);
	        if ($query) {
	            return $this->db->insert_id();
	        }else{
	            return false;
	        }
	    }

	    public function get_permintaan_makan($vid)
	    {
	    	$sql = "SELECT a.*,c.nama_paket, b.tipe_diet as nama_diet FROM visit_permintaan_makan a
	    			left join master_tipe_diet b on a.tipe_diet = b.id
	    			left join gizi_paket_makan c on c.id = a.paket_makan
	    			where a.visit_id = '$vid'";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
	    }

	    public function edit_permintaan_makan($id,$insert)
	    {
	    	$this->db->where('makan_id', $id);
	        $update = $this->db->update('visit_permintaan_makan', $insert);
	        if($update)
	            return true;
	        else
	            return false;
	    }

	    public function hapus_permintaan_makan($id)
	    {
	    	$this->db->where('makan_id', $id);
	        $update = $this->db->delete('visit_permintaan_makan');
	        if($update)
	            return true;
	        else
	            return false;
	    }
	    /*akhir permintaan makan*/

	    public function get_riwayat_klinik($r_id){
	        $sql = "SELECT * FROM (SELECT visit_id FROM visit WHERE rm_id = '$r_id') vd, overview_klinik o, visit_rj vr, master_dept m, petugas p
	                WHERE vd.visit_id = o.visit_id AND o.rj_id = vr.rj_id AND m.dept_id = vr.unit_tujuan 
	                AND vd.visit_id = vr.visit_id AND o.dokter = p.petugas_id ORDER BY o.waktu DESC";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
	    }

	    public function get_riwayat_igd($r_id){
	        $sql = "SELECT *, p.nama_petugas as rdokter, pe.nama_petugas as rperawat
	                FROM (SELECT visit_id FROM visit WHERE rm_id = '$r_id') vd, overview_igd o, visit_igd vr, master_dept m, petugas p, petugas pe
	                WHERE vd.visit_id = o.visit_id AND o.sub_visit = vr.igd_id AND m.dept_id = vr.unit_tujuan AND vd.visit_id = vr.visit_id 
	                AND o.dokter = p.petugas_id AND o.perawat = pe.petugas_id ORDER BY o.waktu DESC";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
	    }

	     public function get_riwayat_perawatan($r_id){
	        $sql = "SELECT *, p.nama_petugas as rdokter, ma.diagnosis_nama as diagnosa_utama
	                FROM (SELECT visit_id FROM visit WHERE rm_id = '$r_id') vd, visit_perawatan_dokter o, visit_ri vr, master_dept m, petugas p,master_diagnosa ma
	                WHERE vd.visit_id = o.visit_id AND o.sub_visit = vr.ri_id AND m.dept_id = vr.unit_tujuan AND vd.visit_id = vr.visit_id 
	                AND o.dokter_visit = p.petugas_id AND ma.diagnosis_id = o.diagnosa_utama ORDER BY o.waktu_visit DESC";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
	    }

	    public function search_sebab($search){
	        $sql = "SELECT * FROM master_golongan_sebab_penyakit WHERE sebab_penyakit LIKE '%$search%' OR kode_sebab LIKE '%$search%'";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;   
	    }

	    public function save_resume($id, $data){
	        $this->db->where('ri_id', $id);
	        $update = $this->db->update('visit_ri', $data);

	        if($update)
	            return true;
	        else
	            return false;
	    }
	     public function update_visit($id, $data){
	        $this->db->where('visit_id', $id);
	        $update = $this->db->update('visit', $data);

	        if($update)
	            return true;
	        else
	            return false;   
	    }

	    public function update_bed($bed_id)
	    {
	    	$this->db->where('bed_id', $bed_id);
	        $update = $this->db->update('master_bed', array('is_dipakai' => '0'));

	        if($update)
	            return true;
	        else
	            return false;
	    }

	    /*tindakan*/
	    public function get_visit_care_unit($visit_id, $dept)
	    {
	    	$sql = "SELECT *, v.js as j_sarana, v.jp as j_pelayanan, v.bakhp as bakhp_this from visit_care v, petugas b, visit vb, master_tindakan t
	                WHERE v.visit_id = vb.visit_id AND v.paramedis = b.petugas_id AND t.tindakan_id = v.tindakan_id AND
	                v.visit_id = '$visit_id' AND v.dept_id = '$dept'";
	        $query = $this->db->query($sql);
	        if ($query) {
	            return $query->result_array();
	        }else{
	            return false;
	        }
	    }

	    public function get_visit_care_klinik($visit_id='')
	    {
	        $sql = "SELECT *, v.js as j_sarana, v.jp as j_pelayanan, v.bakhp as bakhp_this from visit_care v, petugas b, visit vb, master_tindakan t,
	                (SELECT dept_id FROM master_dept WHERE jenis = 'POLIKLINIK' AND nama_dept NOT LIKE 'IGD') p
	                WHERE v.visit_id = vb.visit_id AND v.paramedis = b.petugas_id AND t.tindakan_id = v.tindakan_id AND p.dept_id = v.dept_id AND
	                v.visit_id = $visit_id";
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
	    /*akhir tindakan*/

	}
?>