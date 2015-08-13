<?php  
	/**
	* 
	*/
	class m_jualobat extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function get_nama_petugas($p_id)
		{
			$sql = "SELECT * from petugas where petugas_id = '$p_id'";
			$res = $this->db->query($sql);
			return $res->row_array();
		}

		public function cek_resep_exist($resep_id)
		{
			$sql = "SELECT * from visit_resep where resep_id = '$resep_id'";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return true;
			}else{
				return false;
			}
		}

		public function get_informasi_resep($resepid)
		{
			$sql = "SELECT vr.*, p.nama_petugas,p.petugas_id, ri.cara_bayar as bayar_ri, rj.cara_bayar as bayar_rj, ps.* 
					from visit_resep vr
					left join visit_ri ri on ri.ri_id = vr.sub_visit left join visit_rj rj on rj.rj_id = vr.sub_visit
					left join visit v on vr.visit_id = v.visit_id left join pasien ps on v.rm_id = ps.rm_id 
					left join petugas p on vr.dokter = p.petugas_id where vr.resep_id = '$resepid'";
			$res = $this->db->query($sql);
			return $res->row_array();
		}

		public function search_apoteker($search){
	        $sql = "SELECT * FROM petugas WHERE nama_petugas LIKE '%$search%' AND jabatan = 'Apoteker'";
	        $query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
	    }

	    public function search_obat($katakunci, $dept_id)
	    {
	    	$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
						left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
						(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
						left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
						left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
						left join obat_satuan os on os.satuan_id = o.satuan_id
						where o.nama LIKE '%$katakunci%' AND ot.dept_id = '$dept_id' group by ods.obat_dept_id";
			$query = $this->db->query($sql);
	        $result = $query->result_array();
	        return $result;
	    }

	    public function get_last_nota_id()
	    {
	    	$sql = "SELECT max(no_nota) as value from apotek_penjualan";
	        $query = $this->db->query($sql);
	        if ($query) {
	            return $query->row_array();
	        }else{
	            return false;
	        }
	    }

	    public function update_status_resep($resepid)
	    {
	    	$sql = "UPDATE visit_resep set status_bayar = 'PROSES' where resep_id = '$resepid'";
	        $query = $this->db->query($sql);
	        if ($query) {
	            return true;
	        }else{
	            return false;
	        }
	    }

		public function insert_penjualan($insert)
	    {
	    	$res = $this->db->insert('apotek_penjualan', $insert);
	    	return $res;
	    }	   

	    public function insert_detail_penjualan_temp($params)
	     {
	     	$res = $this->db->insert('apotek_penjualan_detail_temp', $params);
	    	return $this->db->insert_id();
	     } 

	    public function insert_detail_racik_temp($prm)
	    {
	    	$res = $this->db->insert('apotek_penjualan_detail_racikan_temp', $prm);
	    	return $this->db->insert_id();
	    }

	    public function get_informasi_resep_bayar($resep_id)
	    {
	    	$sql = "SELECT * from visit_resep vr 
	    			left join apotek_penjualan ap on vr.resep_id = ap.resep_id 
	    			left join visit v on vr.visit_id = v.visit_id 
	    			left join pasien p on p.rm_id = v.rm_id
	    			left join (select petugas_id as id_dokter, nama_petugas as dokter from petugas) a on a.id_dokter = ap.dokter_id
	    			left join (select petugas_id as id_apoteker, nama_petugas as apoteker from petugas) b on b.id_apoteker = ap.apoteker_id
	    			left join (select petugas_id as id_kasir, nama_petugas as kasir from petugas) c on c.id_kasir = ap.petugas_kasir
	    			where vr.resep_id ='$resep_id'";
	        $query = $this->db->query($sql);
	        if ($query) {
	            return $query->row_array();
	        }else{
	            return false;
	        }
	    }

	    public function get_informasi_resep_bayar_detail($no_nota)
	    {
	    	$sql = "SELECT * from  
	    			apotek_penjualan_detail_temp at where at.no_nota = '$no_nota'";
	        $query = $this->db->query($sql);
	        if ($query) {
	            return $query->result_array();
	        }else{
	            return false;
	        }
	    }

	    public function get_informasi_resep_detail_nonracik($no_nota)
	    {
	    	$sql = "SELECT *, o.nama as nama_obat,o.harga_jual as h_jual from 
	    			apotek_penjualan_detail_temp ar 
	    			left join obat_dept od on od.obat_dept_id = ar.obat_dept_id
	    			left join obat_detail oe on oe.obat_detail_id = od.obat_detail_id
	    			left join obat o on o.obat_id = oe.obat_id
	    			left join obat_satuan a on a.satuan_id = ar.resep_satuan
	    			where ar.no_nota ='$no_nota' and ar.tipe_obat LIKE 'Non%'";
	        $query = $this->db->query($sql);
	        //left join obat_dept_stok os on os.obat_dept_stok_id = ar.obat_dept_stok_id
	        if ($query) {
	            return $query->result_array();
	        }else{
	            return false;
	        }
	    }
	    public function get_informasi_resep_detail_racik($no_nota)
	    {
	    	$sql = "SELECT *, o.nama as nama_obat, at.jumlah as jumlah_resep from apotek_penjualan_detail_temp at
	    			left join apotek_penjualan_detail_racikan_temp ar on ar.apd_id = at.temp_id 
	    			left join obat_dept od on od.obat_dept_id = ar.obat_dept_id
	    			left join obat_detail oe on oe.obat_detail_id = od.obat_detail_id
	    			left join obat o on o.obat_id = oe.obat_id
	    			where at.no_nota ='$no_nota' and tipe_obat NOT LIKE 'Non%'";
	        $query = $this->db->query($sql);
	        //left join obat_dept_stok os on os.obat_dept_stok_id = ar.obat_dept_stok_id
	        if ($query) {
	            return $query->result_array();
	        }else{
	            return false;
	        }
	    }

	    /*bayar*/
	    public function update_nota($nota,$insert)
	    {
	    	$this->db->where('no_nota', $nota);
	    	$this->db->update('apotek_penjualan', $insert);
	    }

	    public function update_detail($nota,$insert)
	    {
	    	$this->db->where('apd_id', $nota);
	    	$this->db->update('apotek_penjualan_detail', $insert);
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

	    public function insert_detail_penjualan($params)
	    {
	    	$res = $this->db->insert('apotek_penjualan_detail', $params);
	    	return $this->db->insert_id();
	    }
	    public function insert_detail_racik($prm)
	    {
	    	$res = $this->db->insert('apotek_penjualan_detail_racikan', $prm);
	    	return $this->db->insert_id();
	    }

	    public function update_status_resep_bayar($resepid)
	    {
	    	$sql = "UPDATE visit_resep set status_bayar = 'SUDAH', status_ambil = 'SUDAH' where resep_id = '$resepid'";
	        $query = $this->db->query($sql);
	        if ($query) {
	            return true;
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

		public function insert_detail_stok($params)
		{
			$this->db->insert('obat_dept_stok', $params);
			return $this->db->insert_id();
		}

	}
?>