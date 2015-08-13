<?php  
	/**
	* 
	*/
	class m_homebersalin extends CI_Model
	{
		function __construct()
		{
			parent:: __construct();
		}

		/*farmasi besalin*/
		public function get_obat_unit($dept_id)
		{
			/*$sql = "SELECT z.nama,z.obat_id,z.harga_jual,a.no_batch,a.tgl_kadaluarsa, e.total_stok, a.obat_detail_id, om.nama_merk, os.satuan,
					om.merk_id, os.satuan_id, e.obat_dept_id, z.jenis_obat_id
					FROM obat z left join obat_detail a on z.obat_id = a.obat_id left join obat_dept b on a.obat_detail_id = b.obat_detail_id 
					left join (select c.obat_dept_id, d.total_stok from obat_dept_stok c 
					left join (select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) d 
					on c.obat_dept_id = d.obat_dept_id group by c.obat_dept_id) e on e.obat_dept_id = b.obat_dept_id
					left join obat_merk om on om.merk_id = z.merk_id left join obat_satuan os on os.satuan_id = z.satuan_id
					where b.dept_id = '$dept_id'";	*/	
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where ot.dept_id = '$dept_id' group by ods.obat_dept_id";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function filter_farmasi_expired($filterby,$now,$dept_id)
		{
			$end = $filterby;
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where ot.dept_id = '$dept_id' 
					AND TIMESTAMPDIFF(MONTH, '$now', od.tgl_kadaluarsa) +
						  DATEDIFF(
						    od.tgl_kadaluarsa,
						    '$now' + INTERVAL
						      TIMESTAMPDIFF(MONTH, '$now', od.tgl_kadaluarsa)
						    MONTH
						  ) /
						  DATEDIFF(
						    '$now' + INTERVAL
						      TIMESTAMPDIFF(MONTH, '$now', od.tgl_kadaluarsa) + 1
						    MONTH,
						    '$now' + INTERVAL
						      TIMESTAMPDIFF(MONTH, '$now', od.tgl_kadaluarsa)
						    MONTH
						  ) <= '$end'
					AND TIMESTAMPDIFF(MONTH, '$now', od.tgl_kadaluarsa) +
						  DATEDIFF(
						    od.tgl_kadaluarsa,
						    '$now' + INTERVAL
						      TIMESTAMPDIFF(MONTH, '$now', od.tgl_kadaluarsa)
						    MONTH
						  ) /
						  DATEDIFF(
						    '$now' + INTERVAL
						      TIMESTAMPDIFF(MONTH, '$now', od.tgl_kadaluarsa) + 1
						    MONTH,
						    '$now' + INTERVAL
						      TIMESTAMPDIFF(MONTH, '$now', od.tgl_kadaluarsa)
						    MONTH
						  ) >  ('$end' - 3)
					group by ods.obat_dept_id";
			$hasil = $this->db->query($sql);
			if ($hasil) {
				return $hasil->result_array();
			}else{
				return false;
			}
		}

		public function filter_farmasi($filterby,$filterval,$dept_id)
		{
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where ot.dept_id = '$dept_id'";
			if ($filterby == 'jenis') {
				$sql .= " AND jo.jenis_obat LIKE '%$filterval%' ";
			}else if ($filterby == 'nama') {
				$sql .= " AND o.nama LIKE '%$filterval%' ";
			}else if ($filterby == 'merek') {
				$sql .= " AND om.nama_merk LIKE '%$filterval%' ";
			}
			$sql .= "group by ods.obat_dept_id";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_obat_farmasi($q, $dept_id, $gudang)
		{
			/*SELECT z.nama,z.obat_id,a.tgl_kadaluarsa, e.total_stok, a.obat_detail_id, om.nama_merk, os.satuan
					FROM obat z left join obat_detail a on z.obat_id = a.obat_id left join obat_dept b on a.obat_detail_id = b.obat_detail_id 
					left join (select c.obat_dept_id, d.total_stok from obat_dept_stok c 
						left join (select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) d 
						on c.obat_dept_id = d.obat_dept_id group by c.obat_dept_id) e on e.obat_dept_id = b.obat_dept_id
					left join obat_merk om on om.merk_id = z.merk_id left join obat_satuan os on os.satuan_id = z.satuan_id
					where b.dept_id = '$dept_id' and z.nama LIKE '%$q%'*/
			$sql = "SELECT z.nama,z.obat_id,a.tgl_kadaluarsa, IFNULL(e.stok_gudang,0) as stok_gudang, IFNULL(f.stok_unit, 0) as stok_unit, a.obat_detail_id, om.nama_merk, os.satuan
					FROM obat z left join obat_detail a on z.obat_id = a.obat_id left join (select d.*, b.obat_detail_id from obat_dept b 
					left join (select obat_dept_id, total_stok as stok_gudang from obat_dept_stok order by obat_dept_stok_id desc) d 
						on b.obat_dept_id = d.obat_dept_id where b.dept_id = '$gudang' group by b.obat_dept_id) e on e.obat_detail_id = a.obat_detail_id
                    left join (select d.*, b.obat_detail_id from obat_dept b 
					left join (select obat_dept_id, total_stok as stok_unit from obat_dept_stok order by obat_dept_stok_id desc) d 
						on b.obat_dept_id = d.obat_dept_id where b.dept_id = '$dept_id' group by b.obat_dept_id) f on f.obat_detail_id = e.obat_detail_id
					left join obat_merk om on om.merk_id = z.merk_id left join obat_satuan os on os.satuan_id = z.satuan_id
					where z.nama LIKE '%$q%' and z.is_hidden ='0'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_stok_unit($tgl_kadaluarsa, $dept_id)
		{
			$sql = "SELECT e.total_stok
					FROM obat_detail a left join obat_dept b on a.obat_detail_id = b.obat_detail_id 
					left join (select c.obat_dept_id, d.total_stok from obat_dept_stok c 
					left join (select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) d 
					on c.obat_dept_id = d.obat_dept_id group by c.obat_dept_id) e on e.obat_dept_id = b.obat_dept_id
					where a.tgl_kadaluarsa = '$tgl_kadaluarsa' and b.dept_id = '$dept_id' ";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_obat_farmasi_unit($q, $dept_id)
		{
			/*SELECT z.nama,z.obat_id,a.tgl_kadaluarsa, d.total_stok, a.obat_detail_id, om.nama_merk, os.satuan
					FROM obat z left join obat_detail a on z.obat_id = a.obat_id left join obat_dept b on a.obat_detail_id = b.obat_detail_id 
					left join (select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) d 
						 on d.osbat_dept_id = b.obat_dept_id
					left join obat_merk om on om.merk_id = z.merk_id left join obat_satuan os on os.satuan_id = z.satuan_id
					where b.dept_id = '$dept_id' and z.nama LIKE '%$q%' and z.is_hidden = '0' group by b.obat_dept_id*/
			$sql = "SELECT * FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where ot.dept_id = '$dept_id' and o.nama LIKE '%$q%' group by ods.obat_dept_id";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function insert_permintaan($insert)
		{
			$result = $this->db->insert('obat_permintaan', $insert);
			if ($result) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function insert_detail_permintaan($ins)
		{
			$result = $this->db->insert('obat_permintaan_detail', $ins);
			if ($result) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		//retur
		public function submit_retur_dept($insert)
		{
			$result = $this->db->insert('obat_retur_dept', $insert);
			if ($result) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function insert_detail_returdept($ins)
		{
			$result = $this->db->insert('obat_retur_dept_detail', $ins);
			if ($result) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}
		/*akhir farmasi bersalin*/

		/*logistik bersalin*/
		public function get_barang_gudang($katakunci, $dept_id, $gudang) //liat lagi salah ini
		{
			$sql = "SELECT *, IFNULL(h.stok_gudang,0) as stok_gudang, IFNULL(g.stok_unit,0) as stok_unit from 
					barang z  left join  (select c.*,a.barang_id, a.tahun_pengadaan from  barang_detail a  left join (select r.*,r.stok as stok_gudang from barang_stok r where dept_id = '$gudang' order by barang_stok_id desc) c  on c.barang_detail_id = a.barang_detail_id) h on z.barang_id = h.barang_id
                    left join (select c.*,a.barang_id from  barang_detail a left join (select w.*,w.stok as stok_unit from barang_stok w where dept_id = '$dept_id' order by barang_stok_id desc) c 
					on c.barang_detail_id = a.barang_detail_id) g on z.barang_id = g.barang_id
					left join barang_merk x on x.merk_id = z.merk
					left join barang_satuan y on y.satuan_id = z.satuan_id where z.nama LIKE '%$katakunci%' group by g.barang_detail_id";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function get_barang_unit($dept_id)
		{
			# code...
		}
		public function insert_permintaanbarang($insert)
		{
			$result = $this->db->insert('barang_permintaan', $insert);
			if ($result) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function insert_detail_permintaanbarang($insert)
		{
			$result = $this->db->insert('barang_permintaan_detail', $insert);
			if ($result) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}
		/*logistik bersalin*/

		/*pindah pasien*/
	    public function get_all_departemen_ri()
	    {
	    	$sql = "SELECT * from master_dept where jenis LIKE 'RAWAT INAP'";
            $query = $this->db->query($sql);
            if ($query) {
                return $query->result_array();
            }else{
                return false;
            }
	    }

	    public function create_visit_ri_id($id, $year,$month,$date) {
	        $sql = "SELECT SUBSTR(ri_id, 9, 54)'ri_id' FROM visit_ri
	        			WHERE SUBSTR(ri_id, 1, 2) = '$id'  
	        			AND SUBSTR(ri_id, 3, 2) = '$year' 
	        			AND SUBSTR(ri_id, 5, 2) = '$month' 
	                    AND SUBSTR(ri_id, 7, 2) = '$date'
	        			ORDER BY ri_id 
	        			DESC LIMIT 1";
	        $query = $this->db->query($sql);

	        if ($query->num_rows() > 0) {
	            $ri_id = $query->row_array();
	            $ri_id = intval($ri_id['ri_id']) + 1;

	            if (strlen($ri_id) == '1') {
	                $ri_id = '000' . $ri_id;
	            } elseif (strlen($ri_id) == '2') {
	                $ri_id = '00' . $ri_id;
	            } elseif (strlen($ri_id) == '3') {
	                $ri_id = '0' . $ri_id;
	            } else {
	                $ri_id = strlen($ri_id);
	            }
	            return $id . $year . $month . $date . $ri_id;
	        } else {
	            return $id . $year . $month . $date .'0001';
	        }
		}

		public function create_inap_id($year,$month,$date) {
	        $sql = "SELECT SUBSTR(inap_id, 9, 54)'inap_id' FROM visit_inap_kamar
	        			WHERE SUBSTR(inap_id, 3, 2) = '$year' 
	        			AND SUBSTR(inap_id, 5, 2) = '$month' 
	                    AND SUBSTR(inap_id, 7, 2) = '$date'
	        			ORDER BY inap_id 
	        			DESC LIMIT 1";
	        $query = $this->db->query($sql);

	        if ($query->num_rows() > 0) {
	            $inap_id = $query->row_array();
	            $inap_id = intval($inap_id['inap_id']) + 1;

	            if (strlen($inap_id) == '1') {
	                $inap_id = '000' . $inap_id;
	            } elseif (strlen($inap_id) == '2') {
	                $inap_id = '00' . $inap_id;
	            } elseif (strlen($inap_id) == '3') {
	                $inap_id = '0' . $inap_id;
	            } else {
	                $inap_id = strlen($inap_id);
	            }	
	            return "KM" . $year . $month . $date . $inap_id;
	        } else {
	            return "KM" . $year . $month . $date .'0001';
	        }
		}

		public function update_bed($bed_id,$params)
		{
			$this->db->where('bed_id', $bed_id);
			$result = $this->db->update('master_bed', $params);
			return $result;
		}

		public function update_visit($visit_id, $params)
		{
			$this->db->where('visit_id', $visit_id);
			$result = $this->db->update('visit', $params);
			return $result;
		}

		public function update_visit_ri($visit_id, $visit_ri, $params)
		{
			$wk = $params['waktu_keluar'];$alasan = $params['alasan_keluar'];
			$sql = "UPDATE visit_ri SET waktu_keluar = '$wk', alasan_keluar = '$alasan' where visit_id = '$visit_id' and ri_id = '$visit_ri'";
            $query = $this->db->query($sql, $params);
            if ($query) {
                return true;
            }else{
                return false;
            }
		}

		public function update_visit_kamar($ri_id, $params)
		{
			$this->db->where('ri_id', $ri_id);
			$result = $this->db->update('visit_inap_kamar', $params);
			return $result;
		}

		public function insert_new_visit($params)
		{
			$result = $this->db->insert('visit_ri', $params);
			return $result;
		}

		public function insert_new_kamar($params)
		{
			$result = $this->db->insert('visit_inap_kamar', $params);
			return $result;
		}
	    /*akhir pindah pasien*/

	    /*data kamar*/
	    public function get_all_kamar_unit($dept_id)
	    {
	    	$sql = "SELECT * FROM master_kamar mk, master_bed mb, 
	    			(SELECT kamar_id ,count(kamar_id) as jumlah FROM master_bed GROUP BY kamar_id) v, 
	    			(SELECT kamar_id ,sum(is_dipakai) as terpakai FROM master_bed GROUP BY kamar_id) x 
	    			WHERE mk.kamar_id = v.kamar_id AND mk.kamar_id = x.kamar_id AND mb.kamar_id = mk.kamar_id 
	    			AND mk.dept_id = $dept_id group by mk.kamar_id";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
	    }

	    public function get_detail_kamar($kamar_id)
	    {
	    	$sql = "SELECT mb.*,IFNULL(p.nama,'') as nama_pasien, IF(mb.is_dipakai = '1', 'dipakai', 'tidak dipakai') as status 
	    			FROM master_bed mb left join visit_inap_kamar vk on mb.bed_id = vk.bed_id 
	    			left join visit_ri vr on vr.ri_id = vk.ri_id left join visit v on v.visit_id = vr.visit_id
	    			left join pasien p on p.rm_id = v.rm_id where mb.kamar_id = '$kamar_id' and vk.waktu_keluar is NULL";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
	    }
	    /*akhir data kamar*/

	    /*jaspel*/
	    public function get_jaspel($dept_id)
	    {
	    	$sql = "SELECT *, substr(vc.waktu_tindakan, 1,10) as tanggal from (select *, count(tindakan_id) as jlh_tindakan, 
	    						sum(jp) as total from visit_care group by paramedis, tindakan_id) vc
	    			left join master_tindakan mt on mt.tindakan_id = vc.tindakan_id 
	    			left join (select ri_id,cara_bayar from visit_ri) ri on ri.ri_id = vc.sub_visit
					left join petugas p on p.petugas_id = vc.paramedis where p.dept_id = '$dept_id'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
	    }
	    /*akhir jaspel*/
	}
?>