<?php  
	/**
	* model obat
	*/
	class M_obat extends CI_Model
	{
		
		function __construct(){}

		public function get_jenis_obat()
		{
			$sql= "SELECT * from jenis_obat";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function get_satuan_obat()
		{
			$sql= "SELECT * from obat_satuan";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function get_merk()
		{
			$sql= "SELECT * from obat_merk";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function search_merk($search='')
		{
			$sql = "SELECT * FROM obat_merk WHERE nama_merk LIKE '%$search%'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}

		

		/*detail obat*/
		public function search_obat($search='')
		{
			$sql = "SELECT * FROM obat o, obat_satuan jo, obat_merk om WHERE o.nama LIKE '%$search%' AND o.satuan_id = jo.satuan_id
					AND o.merk_id = om.merk_id";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}

		public function search_penyedia($search='')
		{
			$sql = "SELECT * FROM master_penyedia WHERE nama_penyedia LIKE '%$search%'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		/*akhir detail obat*/

		/*master obat*/
		// insert obat
		public function insert_obat($obat='')
		{
			$result = $this->db->insert('obat', $obat);
			if ($result) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function insert_stock_dept($stok='')
		{
			$result = $this->db->insert('obat_stok_minimal', $stok);
			if ($result) {
				return true;
			}else{
				return false;
			}
		}

		// akhir insert obat

		public function get_all_obat($dept_id)		
		{
			$query = "SELECT * from obat o, obat_stok_minimal os, jenis_obat jo, obat_merk mo, obat_satuan ost, master_penyedia mp,
				(SELECT oo.obat_id, SUM( ods.total_stok ) AS jlh
				FROM obat_detail od, obat_dept ot, obat_dept_stok ods, obat oo
				WHERE od.obat_id = oo.obat_id
				AND od.obat_detail_id = ot.obat_detail_id
				AND ot.dept_id =  '21'
				AND ods.obat_dept_id = ot.obat_dept_id
				GROUP BY oo.obat_id) AS jumlah 
				where o.obat_id = jumlah.obat_id AND o.obat_id = os.obat_id AND os.dept_id = '21' AND jo.jenis_obat_id = o.jenis_obat_id 
				AND mo.merk_id = o.merk_id AND ost.satuan_id =  o.satuan_id AND mp.penyedia_id = o.penyedia_id";
			$result = $this->db->query($query);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
			// jumlah.obat_id = o.obat_id AND
		}

		public function insert_detail_obat($detail)
		{
			$res = $this->db->insert('obat_detail',$detail);
			if ($res) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function insert_obat_dept($dept)
		{
			$res = $this->db->insert('obat_dept', $dept);
			if ($res) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function insert_dept_stok($stok)
		{
			/*$obat_dept_id = $stok['obat_dept_id'];
			$query = "SELECT total_stok from obat_dept_stok where obat_dept_id = '$obat_dept_id'";
			$hasil = $this->db->query($query);
			$r = $hasil->row_array();
			//return $r;
			$stok['total_stok'] = $stok['total_stok'] + $r['total_stok'];*/ //perlu ga sih?
			$res = $this->db->insert('obat_dept_stok', $stok);
			if ($res) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function get_detail_obat($value='')
		{
			$sql = "SELECT * from obat_detail o, obat_dept od, obat_dept_stok os 
					where o.obat_detail_id =  od.obat_detail_id AND os.obat_dept_id = od.obat_dept_id 
					AND o.obat_id = '$value'"; //detail obat berdasarkan obat_id
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function edit_obat($value='')
		{
			$this->db->where('obat_id', $value['obat_id']);
 			$result = $this->db->update('obat', $value);
 			if ($result) {
 				return true;
 			}else{
 				return false;
 			}
		}

		public function edit_stock_dept($value='')
		{
			$this->db->where('obat_id', $value['obat_id']);
 			$result = $this->db->update('obat_stok_minimal', $value);
 			if ($result) {
 				return true;
 			}else{
 				return false;
 			}
		}

		public function edit_detail_obat($value='')
		{
			$this->db->where('obat_detail_id', $value['obat_detail_id']);
 			$result = $this->db->update('obat_detail', $value);
 			if ($result) {
 				$det = $value['obat_detail_id'];
 				$sql = "SELECT * from obat_detail o, obat_dept od, obat_dept_stok os 
					where o.obat_detail_id =  od.obat_detail_id AND os.obat_dept_id = od.obat_dept_id 
					AND o.obat_detail_id = '$det'"; //detail obat berdasarkan obat_id
				$result = $this->db->query($sql);
				if ($result) {
					return $result->row_array();
				}else{
					return false;
				}
 			}else{
 				return false;
 			}
		}

		public function filter_stok($value='')
		{
			$query = "SELECT * from obat o, obat_stok_minimal os, jenis_obat jo, obat_merk mo, obat_satuan ost, master_penyedia mp,
				(SELECT oo.obat_id, SUM( ods.total_stok ) AS jlh
				FROM obat_detail od, obat_dept ot, obat_dept_stok ods, obat oo
				WHERE od.obat_id = oo.obat_id
				AND od.obat_detail_id = ot.obat_detail_id
				AND ot.dept_id =  '21'
				AND ods.obat_dept_id = ot.obat_dept_id
				GROUP BY oo.obat_id) AS jumlah 
				where o.obat_id = jumlah.obat_id AND o.obat_id = os.obat_id AND os.dept_id = '21' AND jo.jenis_obat_id = o.jenis_obat_id 
				AND mo.merk_id = o.merk_id AND ost.satuan_id =  o.satuan_id AND mp.penyedia_id = o.penyedia_id 
				AND os.stok_minimal >= jumlah.jlh";
			$result = $this->db->query($query);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function filter_obat($value='')
		{
			$nama = $value['nama'];
			$satuan_id = $value['satuan_id'];
			$is_generik = $value['is_generik'];
			$query = "SELECT * from obat o, obat_stok_minimal os, jenis_obat jo, obat_merk mo, obat_satuan ost, master_penyedia mp,
				(SELECT oo.obat_id, SUM( ods.total_stok ) AS jlh
				FROM obat_detail od, obat_dept ot, obat_dept_stok ods, obat oo
				WHERE od.obat_id = oo.obat_id
				AND od.obat_detail_id = ot.obat_detail_id
				AND ot.dept_id =  '21'
				AND ods.obat_dept_id = ot.obat_dept_id
				GROUP BY oo.obat_id) AS jumlah 
				where o.obat_id = jumlah.obat_id AND o.obat_id = os.obat_id AND os.dept_id = '21' AND jo.jenis_obat_id = o.jenis_obat_id 
				AND mo.merk_id = o.merk_id AND ost.satuan_id =  o.satuan_id AND mp.penyedia_id = o.penyedia_id
				AND o.nama LIKE '%$nama%' AND ost.satuan_id = '$satuan_id' AND o.is_generik = '$is_generik'";
			$result = $this->db->query($query);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function filter_obat_opname($value='')
		{
			$nama = $value['nama'];
			//ambil di stok opname;
			// $query = "";
			$result = $this->db->query($query);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}



		/*akhir master obat*/

		/*inventori*/
		public function get_inventori($value='')
		{
			$sql = "SELECT *
					FROM obat_detail od, obat_dept ot, obat_dept_stok ods, obat oo, obat_merk om,
					obat_satuan os, obat_stok_minimal osm, jenis_obat jo 
					WHERE od.obat_id = oo.obat_id
					AND od.obat_detail_id = ot.obat_detail_id
					AND ot.dept_id =  '21'
					AND ods.obat_dept_id = ot.obat_dept_id
					AND oo.obat_id = osm.obat_id 
					AND om.merk_id = oo.merk_id
					AND os.satuan_id = oo.satuan_id
					AND jo.jenis_obat_id  = oo.jenis_obat_id";

			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function get_filter_nofilter($value='')
		{
			$satuan = $value['satuan'];
			$is_generik = $value['is_generik'];
			$sql = "SELECT *
					FROM obat_detail od, obat_dept ot, obat_dept_stok ods, obat oo, obat_merk om,
					obat_satuan os, obat_stok_minimal osm, jenis_obat jo, master_penyedia mp 
					WHERE 
					od.obat_id = oo.obat_id
					AND od.obat_detail_id = ot.obat_detail_id
					AND ot.dept_id =  '21'
					AND ods.obat_dept_id = ot.obat_dept_id
					AND oo.obat_id = osm.obat_id 
					AND om.merk_id = oo.merk_id
					AND os.satuan_id = oo.satuan_id
					AND jo.jenis_obat_id  = oo.jenis_obat_id
					AND oo.penyedia_id = mp.penyedia_id
					AND os.satuan_id = '$satuan'
					AND oo.is_generik = '$is_generik'";
			$hasil = $this->db->query($sql);
			if ($hasil) {
				return $hasil->result_array();
			}else{
				return false;
			}
		}

		public function get_filter_nama($value='')
		{
			$satuan = $value['satuan'];
			$is_generik = $value['is_generik'];
			$nama = $value['nama'];			
			$sql = "SELECT *
					FROM obat_detail od, obat_dept ot, obat_dept_stok ods, obat oo, obat_merk om,
					obat_satuan os, obat_stok_minimal osm, jenis_obat jo, master_penyedia mp 
					WHERE 
					oo.nama LIKE '%$nama%' AND
					od.obat_id = oo.obat_id
					AND od.obat_detail_id = ot.obat_detail_id
					AND ot.dept_id =  '21'
					AND ods.obat_dept_id = ot.obat_dept_id
					AND oo.obat_id = osm.obat_id 
					AND om.merk_id = oo.merk_id
					AND os.satuan_id = oo.satuan_id
					AND jo.jenis_obat_id  = oo.jenis_obat_id
					AND oo.penyedia_id = mp.penyedia_id
					AND os.satuan_id = '$satuan'
					AND oo.is_generik = '$is_generik'";
			$hasil = $this->db->query($sql);
			if ($hasil) {
				return $hasil->result_array();
			}else{
				return false;
			}
		}
		public function get_filter_jenis($value='')
		{
			$satuan = $value['satuan'];
			$is_generik = $value['is_generik'];
			$jenis = $value['jenis'];
			$sql = "SELECT *
					FROM obat_detail od, obat_dept ot, obat_dept_stok ods, obat oo, obat_merk om,
					obat_satuan os, obat_stok_minimal osm, jenis_obat jo, master_penyedia mp 
					WHERE 
					jo.jenis_obat LIKE '%$jenis%' AND
					od.obat_id = oo.obat_id
					AND od.obat_detail_id = ot.obat_detail_id
					AND ot.dept_id =  '21'
					AND ods.obat_dept_id = ot.obat_dept_id
					AND oo.obat_id = osm.obat_id 
					AND om.merk_id = oo.merk_id
					AND os.satuan_id = oo.satuan_id
					AND jo.jenis_obat_id  = oo.jenis_obat_id
					AND oo.penyedia_id = mp.penyedia_id
					AND os.satuan_id = '$satuan'
					AND oo.is_generik = '$is_generik'";
			$hasil = $this->db->query($sql);
			if ($hasil) {
				return $hasil->result_array();
			}else{
				return false;
			}
		}
		public function get_filter_merk($value='')
		{
			$satuan = $value['satuan'];
			$is_generik = $value['is_generik'];
			$merk = $value['merk'];
			$sql = "SELECT *
					FROM obat_detail od, obat_dept ot, obat_dept_stok ods, obat oo, obat_merk om,
					obat_satuan os, obat_stok_minimal osm, jenis_obat jo, master_penyedia mp 
					WHERE 
					om.nama_merk LIKE '%$merk%' AND
					od.obat_id = oo.obat_id
					AND od.obat_detail_id = ot.obat_detail_id
					AND ot.dept_id =  '21'
					AND ods.obat_dept_id = ot.obat_dept_id
					AND oo.obat_id = osm.obat_id 
					AND om.merk_id = oo.merk_id
					AND os.satuan_id = oo.satuan_id
					AND jo.jenis_obat_id  = oo.jenis_obat_id
					AND oo.penyedia_id = mp.penyedia_id
					AND os.satuan_id = '$satuan'
					AND oo.is_generik = '$is_generik'";
			$hasil = $this->db->query($sql);
			if ($hasil) {
				return $hasil->result_array();
			}else{
				return false;
			}
		}
		public function get_filter_penyedia($value='')
		{
			$satuan = $value['satuan'];
			$is_generik = $value['is_generik'];
			$penyedia = $value['penyedia'];
			$sql = "SELECT *
					FROM obat_detail od, obat_dept ot, obat_dept_stok ods, obat oo, obat_merk om,
					obat_satuan os, obat_stok_minimal osm, jenis_obat jo, master_penyedia mp 
					WHERE 
					mp.nama_penyedia LIKE '%$penyedia%' AND
					od.obat_id = oo.obat_id
					AND od.obat_detail_id = ot.obat_detail_id
					AND ot.dept_id =  '21'
					AND ods.obat_dept_id = ot.obat_dept_id
					AND oo.obat_id = osm.obat_id 
					AND om.merk_id = oo.merk_id
					AND os.satuan_id = oo.satuan_id
					AND jo.jenis_obat_id  = oo.jenis_obat_id
					AND oo.penyedia_id = mp.penyedia_id
					AND os.satuan_id = '$satuan'
					AND oo.is_generik = '$is_generik'";
			$hasil = $this->db->query($sql);
			if ($hasil) {
				return $hasil->result_array();
			}else{
				return false;
			}
		}
		public function get_filter_sumber($value='')
		{
			$satuan = $value['satuan'];
			$is_generik = $value['is_generik'];
			$sumber = $value['sumber'];
			$sql = "SELECT *
					FROM obat_detail od, obat_dept ot, obat_dept_stok ods, obat oo, obat_merk om,
					obat_satuan os, obat_stok_minimal osm, jenis_obat jo, master_penyedia mp 
					WHERE 
					od.sumber_dana LIKE '%$sumber%' AND
					od.obat_id = oo.obat_id
					AND od.obat_detail_id = ot.obat_detail_id
					AND ot.dept_id =  '21'
					AND ods.obat_dept_id = ot.obat_dept_id
					AND oo.obat_id = osm.obat_id 
					AND om.merk_id = oo.merk_id
					AND os.satuan_id = oo.satuan_id
					AND jo.jenis_obat_id  = oo.jenis_obat_id
					AND oo.penyedia_id = mp.penyedia_id
					AND os.satuan_id = '$satuan'
					AND oo.is_generik = '$is_generik'";
			$hasil = $this->db->query($sql);
			if ($hasil) {
				return $hasil->result_array();
			}else{
				return false;
			}
		}
		public function get_filter_tgl($value='')
		{
			$now = $value['now'];
			$end = $value['end'];
			$sql = "SELECT *
					FROM obat_detail od, obat_dept ot, obat_dept_stok ods, obat oo, obat_merk om,
					obat_satuan os, obat_stok_minimal osm, jenis_obat jo, master_penyedia mp 
					WHERE 
					od.obat_id = oo.obat_id
					AND od.obat_detail_id = ot.obat_detail_id
					AND ot.dept_id =  '21'
					AND ods.obat_dept_id = ot.obat_dept_id
					AND oo.obat_id = osm.obat_id 
					AND om.merk_id = oo.merk_id
					AND os.satuan_id = oo.satuan_id
					AND jo.jenis_obat_id  = oo.jenis_obat_id
					AND oo.penyedia_id = mp.penyedia_id
					AND FLOOR(DATEDIFF(od.tgl_kadaluarsa ,'$now')/30) <= '$end' AND FLOOR(DATEDIFF(od.tgl_kadaluarsa ,'$now')/30) > ('$end' - 3)";
			$hasil = $this->db->query($sql);
			if ($hasil) {
				return $hasil->result_array();
			}else{
				return false;
			}
		}

		public function input_in_out($value='')
		{
			$result =  $this->db->insert('obat_in_out', $value);
			if ($result) {
				return true;	
			}else{
				return false;
			}
		}

		public function input_riwayat_out($value='')
		{
			$result =  $this->db->insert('obat_dept_stok', $value);
			if ($result) {
				return true;	
			}else{
				return false;
			}
		}
		/*akhir inventori*/

		/*obat opname */
		public function get_all_obat_opname(){
			$sql = "SELECT * FROM obat_opname ob, obat o, obat_detail od, obat_dept op, obat_merk om WHERE ob.obat_dept_id = op.obat_dept_id AND od.obat_id = o.obat_id AND op.obat_detail_id = od.obat_detail_id AND om.merk_id = o.merk_id";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_alpha_obat_opname($alpha){
			$sql = "SELECT * FROM obat_opname ob, obat o, obat_detail od, obat_dept op, obat_merk om WHERE ob.obat_dept_id = op.obat_dept_id AND od.obat_id = o.obat_id AND op.obat_detail_id = od.obat_detail_id AND om.merk_id = o.merk_id AND o.nama LIKE '$alpha%'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_opname_by_name($value){
			$sql = "SELECT * FROM obat_opname ob, obat o, obat_detail od, obat_dept op, obat_merk om WHERE ob.obat_dept_id = op.obat_dept_id AND od.obat_id = o.obat_id AND op.obat_detail_id = od.obat_detail_id AND om.merk_id = o.merk_id AND o.nama LIKE '%$value%'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}
		/*akhir stok opname*/
		public function get_obat($value){
			$sql = "SELECT * FROM obat WHERE nama LIKE '%$value%'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_obat_detail_pengadaan($obat_id){
			$sql = "SELECT * FROM obat o
					LEFT JOIN obat_detail od ON o.obat_id = od.obat_id
					LEFT JOIN master_penyedia mp ON mp.penyedia_id = o.penyedia_id
					INNER JOIN obat_satuan os ON o.satuan_id = os.satuan_id
					WHERE o.obat_id = $obat_id GROUP BY o.nama";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;	
		}

		public function add_pengadaan($data){
			$res = $this->db->insert('obat_rencana_pengadaan',$data);
			if ($res) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function get_riwayat_pengadaan(){
			$sql = "SELECT * FROM obat_rencana_pengadaan o, petugas p WHERE o.petugas_input = p.petugas_id";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;	
		}

		public function get_nama_petugas($value){
			$sql = "SELECT p.nama_petugas FROM obat_rencana_pengadaan o, petugas p WHERE o.petugas_input = p.petugas_id AND o.no_pengadaan = '$value'";
			$result = $this->db->query($sql);
			if($result)
				return $result->row_array();
			else
				return false;	
		}

		public function get_petugas($value){
			$sql = "SELECT * FROM petugas WHERE nama_petugas LIKE '%$value%' ";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}
		/*perencanaan pengadaan*/

		/*akhir perencanaan pengadaan*/
	}
?>