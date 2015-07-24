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