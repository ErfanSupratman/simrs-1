<?php  
	/**
	* 
	*/
	class m_olahpasien extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function get_all_pasien_active()
		{
			$sql = "SELECT p.*, v.tanggal_visit FROM pasien p inner join (select * from visit order by tanggal_visit desc) v 
					on p.rm_id = v.rm_id where p.status_pasien LIKE 'active' group by p.rm_id";
			$result = $this->db->query($sql);
			if ($result->num_rows() > 0) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function get_all_pasien_inactive()
		{
			$sql = "SELECT p.*, v.tanggal_visit FROM pasien p inner join (select * from visit order by tanggal_visit desc) v 
					on p.rm_id = v.rm_id where p.status_pasien LIKE 'inactive' group by p.rm_id";
			$result = $this->db->query($sql);
			if ($result->num_rows() > 0) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function get_all_pasien_meninggal()
		{
			$sql = "SELECT * FROM pasien p inner join (select * from visit order by tanggal_visit desc) v 
					on p.rm_id = v.rm_id where p.status_pasien LIKE 'meninggal' group by p.rm_id";
			$result = $this->db->query($sql);
			if ($result->num_rows() > 0) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function search_active_pasien($key='')
		{
			$sql = "SELECT p.*, v.tanggal_visit FROM pasien p inner join (select * from visit order by tanggal_visit desc) v 
					on p.rm_id = v.rm_id where p.status_pasien LIKE 'active' and p.nama LIKE '%$key%' group by p.rm_id";
			$result = $this->db->query($sql);
			if ($result->num_rows() > 0) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function search_inactive_pasien($key='')
		{
			$sql = "SELECT p.*, v.tanggal_visit FROM pasien p inner join (select * from visit order by tanggal_visit desc) v 
					on p.rm_id = v.rm_id where p.status_pasien LIKE 'inactive' and p.nama LIKE '%$key%' group by p.rm_id";
			$result = $this->db->query($sql);
			if ($result->num_rows() > 0) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function search_died_pasien($key='')
		{
			$sql = "SELECT * FROM pasien p inner join (select * from visit order by tanggal_visit desc) v 
					on p.rm_id = v.rm_id where p.status_pasien LIKE 'meninggal' and p.nama LIKE '%$key%' group by p.rm_id";
			$result = $this->db->query($sql);
			if ($result->num_rows() > 0) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function get_detail_pasien($rm_id)
		{
			$sql = "SELECT *
					FROM pasien p /*left join (select * from master_provinsi) mp on mp.prov_id = p.prov_id_skr
					left join (select * from master_kabupaten) mk on mk.kab_id = p.kab_id_skr
					left join (SELECT * from master_kecamatan) mkc on mkc.kec_id = p.kec_id_skr
					left join (select * from master_desa) md on md.kel_id = p.kel_id_skr*/
					where p.rm_id = '$rm_id'";
			//$this->db->where($rm_id);
			$query = $this->db->query($sql);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function get_detail_pasienmeninggal($rm_id)
		{
			$sql = "SELECT *
					FROM pasien p left join (select *, nama_prov as prov_skr  from master_provinsi) mp on mp.prov_id = p.prov_id_skr
					left join (select *, nama_kab as kab_skr from master_kabupaten) mk on mk.kab_id = p.kab_id_skr
					left join (SELECT *, nama_kec as kec_skr from master_kecamatan) mkc on mkc.kec_id = p.kec_id_skr
					left join (select *, nama_kel as kel_skr from master_desa) md on md.kel_id = p.kel_id_skr
					left join (select *, nama_prov as prov  from master_provinsi) mpa on mpa.prov_id = p.prov_id
					left join (select *, nama_kab as kab from master_kabupaten) mka on mka.kab_id = p.kab_id
					left join (SELECT *, nama_kec as kec from master_kecamatan) mkca on mkca.kec_id = p.kec_id
					left join (select *, nama_kel as kel from master_desa) mda on mda.kel_id = p.kel_id
					where p.rm_id = '$rm_id'";
			//$this->db->where($rm_id);
			$query = $this->db->query($sql);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function update_info_pasien($insert, $rm_id)
		{
			$this->db->where('rm_id', $rm_id);
			$result = $this->db->update('pasien', $insert);
			return $result;
		}

		public function get_kab($id='')
		{
			$sql = "SELECT * from master_kabupaten
					where prov_id = '$id'";
			//$this->db->where($rm_id);
			$query = $this->db->query($sql);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
		}

		public function get_kec($id='')
		{
			$sql = "SELECT * from master_kecamatan
					where kab_id = '$id'";
			//$this->db->where($rm_id);
			$query = $this->db->query($sql);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
		}

		public function get_kel($id='')
		{
			$sql = "SELECT * from master_desa
					where kec_id = '$id'";
			//$this->db->where($rm_id);
			$query = $this->db->query($sql);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
		}

		public function inactive_pasien($rm_id, $params)
		{
			$this->db->where('rm_id', $rm_id);
			$result = $this->db->update('pasien', $params);
			return $result;
		}

		public function delete_pasien($rm_id='')
		{
			$this->db->where('rm_id', $rm_id);
			$result = $this->db->delete('pasien');
			return $result;
		}

		public function get_all_pasien_rj()
		{
			$sql = "SELECT * from visit_rj vr inner join visit v on v.visit_id = vr.visit_id 
					inner join pasien p on p.rm_id = v.rm_id 
					left join master_dept mp on mp.dept_id = vr.unit_tujuan where vr.waktu_keluar IS NULL";
			
			$query = $this->db->query($sql);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}	
		}
		
		public function get_all_pasien_ri()
		{
			$sql = "SELECT * from pasien p left join visit v on p.rm_id = v.rm_id 
					inner join visit_ri vr on v.visit_id = vr.visit_id 
					left join master_dept mp on mp.dept_id = vr.unit_tujuan where vr.waktu_keluar IS NULL";
			
			$query = $this->db->query($sql);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}	
		}

		public function get_riwayatklinik($rm_id)
		{
			$sql = "SELECT * FROM visit vd 
					inner join visit_rj vr on vd.visit_id = vr.visit_id inner join overview_klinik o on o.rj_id = vr.rj_id
					left join master_dept m on m.dept_id = vr.unit_tujuan left join petugas p on o.dokter = p.petugas_id
					where vd.rm_id = '$rm_id'
					ORDER BY o.waktu DESC";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
		}

		public function get_riwayatigd($rm_id)
		{
			$sql = "SELECT * FROM visit vd
					inner join visit_igd vr on vd.visit_id = vr.visit_id inner join overview_igd o on o.sub_visit = vr.igd_id
					left join master_dept m on m.dept_id = vr.unit_tujuan left join (select *, nama_petugas as r_dokter from petugas ) p on o.dokter = p.petugas_id
					left join (select *, nama_petugas as rperawat from petugas ) pe on o.perawat = pe.petugas_id
					where vd.rm_id = '$rm_id'
					ORDER BY o.waktu DESC";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
		}

		public function get_riwayatri($rm_id)
		{	
			 $sql = "SELECT * FROM visit vd
					inner join visit_ri vr on vd.visit_id = vr.visit_id inner join visit_perawatan_dokter o on o.sub_visit = vr.ri_id
					left join master_dept m on m.dept_id = vr.unit_tujuan left join petugas p on o.dokter_visit = p.petugas_id
					left join (select diagnosis_id, diagnosis_nama as diag_utama from master_diagnosa ) ma on ma.diagnosis_id = o.diagnosa_utama
					left join (select diagnosis_id, diagnosis_nama as diag_sek from master_diagnosa ) mb on mb.diagnosis_id = o.sekunder1
					where vd.rm_id = '$rm_id'
					ORDER BY o.waktu_visit DESC";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
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

	    public function get_detail_over_perawatan($id)
	    {
	    	$sql = "SELECT * FROM visit_perawatan_dokter v 
	    			left join (select petugas_id, nama_petugas as dokter from petugas) p on v.dokter_visit = p.petugas_id
	    			left join (select diagnosis_id as diag_u, diagnosis_nama as diagnosa_u from master_diagnosa) a on v.diagnosa_utama = a.diag_u
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

	    /*rekap*/
	    public function get_all_poli()
	    {
	    	$sql = "SELECT dept_id, nama_dept from master_dept where jenis LIKE 'POLIKLINIK'";
	    	$res = $this->db->query($sql);
	    	return $res->result_array();
	    }

	    public function get_jlh_per_poli($date)
	    {
	    	$sql = "SELECT dept_id, nama_dept from master_dept where jenis LIKE 'POLIKLINIK'";
	    	$res = $this->db->query($sql);
	    	$i = 0;
	    	foreach ($res->result_array() as $poli) {
	    		$id = $poli['dept_id'];
	    		$sql = "SELECT count(unit_tujuan) as jlh from visit_rj where unit_tujuan = $id and waktu_masuk = '$date'";
	    		$r = $this->db->query($sql);
	    		$result[$i] = $r->row_array();
	    		$i++;
	    	}

	    	return $result;
	    }
	   /*akhir rekap*/
	}
?>