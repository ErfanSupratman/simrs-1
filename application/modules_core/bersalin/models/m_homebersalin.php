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
		public function get_obat_unit()
		{
			$sql = "SELECT z.nama,z.obat_id,z.harga_jual,a.no_batch,a.tgl_kadaluarsa, e.total_stok, a.obat_detail_id, om.nama_merk, os.satuan,
					om.merk_id, os.satuan_id, e.obat_dept_id, z.jenis_obat_id
					FROM obat z left join obat_detail a on z.obat_id = a.obat_id left join obat_dept b on a.obat_detail_id = b.obat_detail_id 
					left join (select c.obat_dept_id, d.total_stok from obat_dept_stok c 
					left join (select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) d 
					on c.obat_dept_id = d.obat_dept_id group by c.obat_dept_id) e on e.obat_dept_id = b.obat_dept_id
					left join obat_merk om on om.merk_id = z.merk_id left join obat_satuan os on os.satuan_id = z.satuan_id
					where b.dept_id = '19'";		
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function filter_farmasi_expired($filterby,$now)
		{
			$end = $filterby;
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where ot.dept_id = '19' 
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

		public function get_obat_farmasi($q, $dept_id)
		{
			$sql = "SELECT z.nama,z.obat_id,a.tgl_kadaluarsa, e.total_stok, a.obat_detail_id, om.nama_merk, os.satuan
					FROM obat z left join obat_detail a on z.obat_id = a.obat_id left join obat_dept b on a.obat_detail_id = b.obat_detail_id 
					left join (select c.obat_dept_id, d.total_stok from obat_dept_stok c 
					left join (select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) d 
					on c.obat_dept_id = d.obat_dept_id group by c.obat_dept_id) e on e.obat_dept_id = b.obat_dept_id
					left join obat_merk om on om.merk_id = z.merk_id left join obat_satuan os on os.satuan_id = z.satuan_id
					where b.dept_id = '$dept_id' and z.nama LIKE '%$q%'";
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
	}
?>