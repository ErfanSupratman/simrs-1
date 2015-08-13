<?php  
	/**
	* 
	*/
	class m_returobat extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function get_all_returpasien($dept_id)
		{
			$sql = "SELECT ap.*, v.sub_visit, p.*, md.nama_dept as dept_asal, md.dept_id as dept_id_asal 
					FROM apotek_penjualan ap left join visit_resep v on v.resep_id = ap.resep_id 
					left join visit vs on vs.visit_id = v.visit_id 
					left join pasien p on p.rm_id = vs.rm_id 
					left join master_dept md on md.dept_id = substr(v.sub_visit,1,2) 
					WHERE substr(ap.no_nota,1,2) = '$dept_id' limit 25";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();	
			}else{
				return false;
			}
		}

		public function get_search_returpasien($search,$dept_id)
		{
			$sql = "SELECT ap.*, v.sub_visit, p.*, md.nama_dept as dept_asal, md.dept_id as dept_id_asal 
					FROM apotek_penjualan ap left join visit_resep v on v.resep_id = ap.resep_id 
					left join visit vs on vs.visit_id = v.visit_id 
					left join pasien p on p.rm_id = vs.rm_id 
					left join master_dept md on md.dept_id = substr(v.sub_visit,1,2) 
					WHERE substr(ap.no_nota,1,2) = '$dept_id' and
					(p.rm_id = '$search' or ap.no_nota='$search' or p.nama LIKE '%$search%') and ap.is_paid = 'yes'";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();	
			}else{
				return false;
			}
		}

		public function get_nota($no_nota)
		{
			$sql = "SELECT * from apotek_penjualan where no_nota = '$no_nota'";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return true;	
			}else{
				return false;
			}
		}

		public function get_info_nota($no_nota)
		{
			$sql = "SELECT * from apotek_penjualan ap left join visit_resep vr on vr.visit_id = ap.visit_id
					left join visit v on v.visit_id = vr.visit_id left join pasien p on  p.rm_id = v.rm_id
					left join (select petugas_id as id_dokter, nama_petugas as dokter from petugas) a on a.id_dokter = ap.dokter_id
	    			left join (select petugas_id as id_apoteker, nama_petugas as apoteker from petugas) b on b.id_apoteker = ap.apoteker_id
	    			left join (select petugas_id as id_kasir, nama_petugas as kasir from petugas) c on c.id_kasir = ap.petugas_kasir
					where ap.no_nota = '$no_nota'";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->row_array();	
			}else{
				return false;
			}
		}

		public function search_nota_retur($no_nota)
		{
			$sql = "SELECT ad.*, os.*,o.nama as nama_obat,o.obat_id,o.harga_jual from 
					apotek_penjualan_detail ad 
					left join obat_dept ot on ot.obat_dept_id = ad.obat_dept_id
					left join obat_detail ol on ol.obat_detail_id = ot.obat_detail_id
					left join obat o on o.obat_id = ol.obat_id
					left join obat_satuan os on os.satuan_id = ad.resep_satuan
					where ad.no_nota = '$no_nota' and ad.tipe_obat like 'Non-Racikan'";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();	
			}else{
				return false;
			}
		}

		public function get_obatinfo($obat_dept_id)
	    {
	    	$sql = "SELECT o.harga_jual, o.hps from apotek_penjualan_detail_temp ad
	    			left join obat_dept od on ad.obat_dept_id = ad.obat_dept_id
	    			left join obat_detail ol on ol.obat_detail_id = od.obat_detail_id
	    			left join obat o on ol.obat_id = o.obat_id where od.obat_dept_id = '$obat_dept_id'";
	        $query = $this->db->query($sql);
	        if ($query) {
	            return $query->row_array();
	        }else{
	            return false;
	        }
	    }

		public function update_info_resep($apd_id, $arr)
		{
			$this->db->where('apd_id', $apd_id);
	    	$this->db->update('apotek_penjualan_detail', $arr);
		}

		public function get_last_id()
		{
			$sql = "SELECT max(no_retur_pasien) as value from apotek_retur_pasien";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->row_array();	
			}else{
				return false;
			}
		}

		public function get_last_stok($id)
		{
			$sql = "SELECT * from obat_dept_stok where obat_dept_id = '$id' order by obat_dept_stok_id desc";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->row_array();	
			}else{
				return false;
			}
		}

		public function insert_retur_pasien($params)
		{
			$this->db->insert('apotek_retur_pasien', $params);
			return $this->db->insert_id();
		}

		public function insert_detail_retur_pasien($params)
		{
			$this->db->insert('apotek_retur_pasien_detail', $params);
			return $this->db->insert_id();
		}

		public function insert_detail_stok($params)
		{
			$this->db->insert('obat_dept_stok', $params);
			return $this->db->insert_id();
		}
	}
?>