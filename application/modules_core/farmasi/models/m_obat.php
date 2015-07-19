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

		public function get_obat($value){
			$sql = "SELECT * 
					FROM obat o left join obat_detail od on od.obat_id = o.obat_id
					left join obat_dept ot on ot.obat_detail_id = od.obat_detail_id
					left join obat_satuan os on os.satuan_id = o.satuan_id					 
			 		WHERE nama LIKE '%$value%' and ot.dept_id = '21'
			 		group by o.obat_id";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_obat_per_tgl_kadaluarsa($obat_id, $tgl_kadaluarsa, $no_batch)
		{
			$sql = "SELECT obat_dept_id
					FROM obat_detail od left join obat_dept ot on ot.obat_detail_id = od.obat_detail_id
			 		WHERE od.tgl_kadaluarsa = '$tgl_kadaluarsa' and ot.dept_id = '21' and od.no_batch = '$no_batch'
			 		group by od.obat_id";
			$result = $this->db->query($sql);
			if($result)
				return $result->row_array();
			else
				return false;
		}		

		/*detail obat*/
		public function search_obat($search='') //ubah sesuai dept
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
				FROM obat_detail od, obat_dept ot, obat_dept_stok ods, obat oo, 
				(select total_stok from obat_dept_stok order by tanggal desc limit 1) v
				WHERE od.obat_id = oo.obat_id
				AND od.obat_detail_id = ot.obat_detail_id
				AND ot.dept_id =  '21'
				AND ods.obat_dept_id = v.obat_dept_id
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
			$sql = "SELECT * from obat_detail o 
					left join obat_dept od on o.obat_detail_id = od.obat_detail_id 
					left join (select * from obat_dept_stok order by obat_dept_stok_id desc) v on v.obat_dept_id = od.obat_dept_id 
					where o.obat_id = '$value' group by v.obat_dept_id"; //detail obat berdasarkan obat_id
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
 				return true;
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
				(SELECT oo.obat_id, SUM( v.total_stok ) AS jlh
					FROM obat_detail od, obat_dept ot, obat oo,
						(select a.obat_dept_id, a.total_stok from 
							(select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) a, 
							obat_dept_stok o group by a.obat_dept_id order by obat_dept_stok_id desc) v
					WHERE od.obat_id = oo.obat_id
					AND od.obat_detail_id = ot.obat_detail_id
					AND ot.dept_id =  '21'
					AND v.obat_dept_id = ot.obat_dept_id
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
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where ot.dept_id = '21' AND os.satuan_id = $satuan
					AND o.is_generik = $is_generik
					group by ods.obat_dept_id";
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
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where o.nama LIKE '%$nama%' AND ot.dept_id = '21' AND os.satuan_id = $satuan
					AND o.is_generik = $is_generik
					group by ods.obat_dept_id";
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
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where jo.jenis_obat LIKE '%$jenis%' AND ot.dept_id = '21' AND os.satuan_id = $satuan
					AND o.is_generik = $is_generik
					group by ods.obat_dept_id";
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
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where om.nama_merk LIKE '%$merk%' AND ot.dept_id = '21' AND os.satuan_id = $satuan
					AND o.is_generik = $is_generik
					group by ods.obat_dept_id";
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
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where mp.nama_penyedia LIKE '%$penyedia%' AND ot.dept_id = '21' AND os.satuan_id = $satuan
					AND o.is_generik = $is_generik
					group by ods.obat_dept_id";
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
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where od.sumber_dana LIKE '%$sumber%' AND ot.dept_id = '21' AND os.satuan_id = $satuan
					AND o.is_generik = $is_generik
					group by ods.obat_dept_id";
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
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where ot.dept_id = '21' 
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
					//AND TIMESTAMPDIFF(MONTH, od.tgl_kadaluarsa ,'$now') <= '$end' AND TIMESTAMPDIFF(MONTH, od.tgl_kadaluarsa ,'$now') > ('$end' - 3)
					//(CAST(DATEDIFF(od.tgl_kadaluarsa ,'$now') as DECIMAL)/30)
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
		public function get_all_obat_opname(){ //ga kepake
			$sql = "SELECT * FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id 
					left join obat_dept_stok ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_opname op on op.obat_dept_id = ot.obat_dept_id
					left join obat_merk om on om.merk_id = o.merk_id";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_alpha_obat_opname($alpha){
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join (select * from obat_opname order by tgl_opname desc) op on op.obat_dept_id = ot.obat_dept_id
					left join obat_merk om on om.merk_id = o.merk_id where ot.dept_id = '21' AND o.nama LIKE '$alpha%'
					group by ods.obat_dept_id";

			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_opname_by_name($value){
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join (select * from obat_opname order by tgl_opname desc) op on op.obat_dept_id = ot.obat_dept_id
					left join obat_merk om on om.merk_id = o.merk_id where ot.dept_id = '21' AND o.nama LIKE '%$value%'
					group by ods.obat_dept_id";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_obat_deptstok_history($obat_dept_id)
		{
			$sql = "SELECT total_stok from obat_dept_stok op where op.obat_dept_id = '$obat_dept_id' order by obat_dept_stok_id desc";	
			$query = $this->db->query($sql);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function get_last_stok($obat_dept_id, $tanggal)
		{
			$sql = "SELECT total_stok from obat_dept_stok op 
					where op.obat_dept_id = '$obat_dept_id' 
					AND tanggal <= '$tanggal' order by tanggal desc";	
			$query = $this->db->query($sql);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function update_history_after_opname($obat_dept_id, $tanggal, $selisih, $type)
		{
			if ($type === 'IN') {
				$sql = "UPDATE obat_dept_stok SET total_stok = ($selisih + total_stok)
						WHERE obat_dept_id = '$obat_dept_id' AND tanggal >= '$tanggal'";
			}else{
				$sql = "UPDATE obat_dept_stok SET total_stok = (total_stok - $selisih)
						WHERE obat_dept_id = '$obat_dept_id' AND tanggal >= '$tanggal'";
			}

			$query = $this->db->query($sql);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}

		public function insert_opname_history($params)
		{
			$result = $this->db->insert('obat_opname', $params);
			if ($result) {
				return true;
			}else{
				return false;
			}
		}

		public function insert_new_obat_history($insert)
		{
			$result = $this->db->insert('obat_dept_stok', $insert);
			if ($result) {
				return true;
			}else{
				return false;
			}
		}
		/*akhir stok opname*/

		/*perencanaan pengadaan*/
		public function get_obat_detail_pengadaan($obat_id){
			$sql = "SELECT * FROM obat o
					LEFT JOIN obat_detail od ON o.obat_id = od.obat_id
					left join obat_dept ot on ot.obat_detail_id = od.obat_detail_id
					LEFT JOIN master_penyedia mp ON mp.penyedia_id = o.penyedia_id
					INNER JOIN obat_satuan os ON o.satuan_id = os.satuan_id
					WHERE o.obat_id = $obat_id GROUP BY o.nama and ot.dept_id = '21'";
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
			$sql = "SELECT p.nama_petugas 
					FROM obat_rencana_pengadaan o, petugas p 
					WHERE o.petugas_input = p.petugas_id AND o.petugas_input = '$value'";
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

		public function add_detail_rencana($rencana)
		{
			$query = $this->db->insert('obat_rencana_pengadaan_detail', $rencana);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}

		public function get_detail_rencana($value)
		{
			$sql = "SELECT * 
					FROM obat_rencana_pengadaan op 
					inner join obat_rencana_pengadaan_detail od on op.obat_rencana_id = od.obat_rencana_id 
					left join obat o on o.obat_id = od.obat_id left join obat_satuan os on os.satuan_id = o.satuan_id
					left join master_penyedia mp on mp.penyedia_id  =  od.penyedia_id
					where op.obat_rencana_id = '$value'";

			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;	
		}
		/*akhir perencanaan pengadaan*/

		/*penerimaan obat*/		
		public function add_penerimaan($params)
		{
			$query = $this->db->insert('obat_penerimaan', $params);
			if ($query) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function add_detail_penerimaan($params)
		{
			$query = $this->db->insert('obat_penerimaan_detail', $params);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}

		public function get_riwayat_penerimaan($dept_id)
		{
			$sql = "SELECT * 
					FROM obat_penerimaan op inner join obat_penerimaan_detail od on op.obat_penerimaan_id = od.obat_penerimaan_id 
					left join obat o on o.obat_id = od.obat_id left join obat_satuan os on os.satuan_id = o.satuan_id
					left join master_penyedia mp on mp.penyedia_id  =  op.penyedia_id";

			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}
		/*akhir penerimaan*/

		/*persetujuan permintaan*/
		public function get_persetujuan()
		{
			$sql = "SELECT * FROM 
					obat_permintaan op left join master_dept mp on mp.dept_id = op.dept_id 
					left join petugas p on p.petugas_id = op.petugas_request 
					where is_responded = '0'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_detail_permintaan($id)
		{
			$sql = "SELECT * 
					FROM obat_permintaan op left join obat_permintaan_detail opd on op.obat_permintaan_id = opd.obat_permintaan_id 
					left join obat o on o.obat_id = opd.obat_id 
					left join 
						(select u.dept_id as departement, u.obat_detail_id, z.total_stok as total 
							from obat_detail t left join obat_dept u on t.obat_detail_id = u.obat_detail_id 
							left join 
								(select c.obat_dept_id, c.total_stok from 
									(select obat_dept_id , total_stok from obat_dept_stok order by obat_dept_stok_id desc ) c group by c.obat_dept_id) z 
						on z.obat_dept_id = u.obat_dept_id) v 
					on v.obat_detail_id = opd.obat_detail_id
					left join obat_satuan os on os.satuan_id = o.satuan_id 
					left join obat_merk om on om.merk_id = o.merk_id 
					where v.departement = 21 and opd.obat_permintaan_id =  '$id'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function update_persetujuan_permintaan($permintaan_id, $insert)
		{
			$this->db->where('obat_permintaan_id', $permintaan_id);
			$result = $this->db->update('obat_permintaan', $insert);
			if ($result) {
				return true;	
			}else{
				return false;
			}
		}

		public function update_detail_persetujuan($permintaan_id, $obat_detail_id, $approved)
		{
			$sql = "UPDATE obat_permintaan_detail SET jumlah_approved = '$approved' 
					where obat_permintaan_id = '$permintaan_id' AND obat_detail_id = '$obat_detail_id'";
			$result = $this->db->query($sql);
			if ($result) {
				return true;	
			}else{
				return false;
			}
		}

		public function get_riwayat_permintaan()
		{
			$sql = "SELECT * FROM 
					obat_permintaan op left join master_dept mp on mp.dept_id = op.dept_id 
					left join petugas p on p.petugas_id = op.petugas_respond
					where is_responded = '1'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_detail_riwayat_persetujuan($id)
		{
			$sql = "SELECT * 
					FROM obat_permintaan op left join obat_permintaan_detail opd on op.obat_permintaan_id = opd.obat_permintaan_id 
					left join obat o on o.obat_id = opd.obat_id 
					left join 
						(select u.dept_id as departement, u.obat_detail_id, z.total_stok as total 
							from obat_detail t left join obat_dept u on t.obat_detail_id = u.obat_detail_id 
							left join 
								(select c.obat_dept_id, c.total_stok from 
									(select obat_dept_id , total_stok from obat_dept_stok order by obat_dept_stok_id desc ) c group by c.obat_dept_id) z 
						on z.obat_dept_id = u.obat_dept_id) v 
					on v.obat_detail_id = opd.obat_detail_id
					left join obat_satuan os on os.satuan_id = o.satuan_id 
					left join obat_merk om on om.merk_id = o.merk_id 
					where v.departement = 21 and opd.obat_permintaan_id =  '$id'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}
		/*akhir persetujuan permintaan*/

	}
?>	