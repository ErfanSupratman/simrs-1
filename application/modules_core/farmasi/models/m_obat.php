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

		public function get_obat_penyedia($katakunci, $penyedia_id)
		{
			$sql = "SELECT z.*,os.satuan
					FROM obat z 
					left join obat_satuan os on z.satuan_id = os.satuan_id
					where z.nama LIKE '%$katakunci%' and z.penyedia_id = '$penyedia_id'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_penyedia_by_id($id)
		{
			$sql= "SELECT * from master_penyedia where penyedia_id = '$id'";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->row_array();
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

		public function addnewmerk($value)
		{
			$res = $this->db->insert('obat_merk', $value);
			if ($res) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function addnewpenyedia($value)
		{
			$res = $this->db->insert('master_penyedia', $value);
			if ($res) {
				return $this->db->insert_id();
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
					left join obat_merk om on om.merk_id = o.merk_id					 
			 		WHERE nama LIKE '%$value%' and ot.dept_id = '21'
			 		group by o.obat_id";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_obat_per_tgl_kadaluarsa($obat_id, $tgl_kadaluarsa) //benar
		{
			$sql = "SELECT obat_dept_id
					FROM obat_detail od left join obat_dept ot on ot.obat_detail_id = od.obat_detail_id
			 		WHERE od.tgl_kadaluarsa = '$tgl_kadaluarsa' and ot.dept_id = '21' and od.obat_id = '$obat_id'
			 		group by od.obat_id";
			$result = $this->db->query($sql);
			if($result)
				return $result->row_array();
			else
				return false;
		}

		public function get_kartustok($obat_id, $dept_id)
		{
			$sql = "SELECT a.nama, b.tgl_kadaluarsa, d.* , md.nama_dept, os.satuan 
					from obat a left join obat_detail b on a.obat_id = b.obat_id
					left join obat_satuan os on os.satuan_id = a.satuan_id
					left join obat_dept c on b.obat_detail_id = c.obat_detail_id
					left join master_dept md on md.dept_id = c.dept_id 
					left join obat_dept_stok d on d.obat_dept_id = c.obat_dept_id
					where a.obat_id = '$obat_id' and c.dept_id = '$dept_id'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}		

		/*detail obat*/
		public function search_obat($search='') //ubah sesuai dept
		{
			$sql = "SELECT * 
					from obat a left join obat_detail b on a.obat_id = b.obat_id 
					left join obat_dept c on c.obat_detail_id = b.obat_detail_id 
					left join obat_merk d on d.merk_id = a.merk_id 
					left join obat_satuan e on e.satuan_id = a.satuan_id where c.dept_id = '21' group by a.obat_id";

			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}

		public function get_obat_all($search)
		{
			$sql = "SELECT * FROM obat o, obat_satuan jo, obat_merk om, obat_stok_minimal os 
					WHERE o.nama LIKE '%$search%' AND o.satuan_id = jo.satuan_id and os.obat_id = o.obat_id
					AND o.merk_id = om.merk_id and os.dept_id = '21'";
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

		public function get_stok_min($dept_id, $obat_id)
		{
			$sql = "SELECT * from obat_stok_minimal where dept_id = '$dept_id' and obat_id = '$obat_id'";
			$result = $this->db->query($sql);
			if ($result->num_rows() > 0) {
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

		public function cek_detail_obat($obat_id, $tgl_kadaluarsa)
		{
			$sql = "SELECT * from obat_detail where obat_id = '$obat_id' and tgl_kadaluarsa = '$tgl_kadaluarsa'";
			$result = $this->db->query($sql);
			if ($result->num_rows() > 0) {
				return true;
			}else{
				return false;
			}
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
					where o.obat_id = '$value' and od.dept_id = '21' group by v.obat_dept_id"; //detail obat berdasarkan obat_id
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function get_detail_obat_bydeptid($obat_dept_id)
		{
			$sql = "SELECT * from obat_dept_stok where obat_dept_id = '$obat_dept_id'"; //detail obat berdasarkan obat_id
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
			$sql = "SELECT * from obat o 
						left join (select * from obat_stok_minimal  where dept_id = '21') b on o.obat_id = b.obat_id 
						left join obat_detail c on c.obat_id = o.obat_id 
						left join obat_dept d on c.obat_detail_id = d.obat_detail_id 
						left join
						(SELECT oo.obat_id, IFNULL(SUM(v.total_stok),'0')AS jlh
							FROM obat_detail od 
							left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id 
							left join obat oo on od.obat_id = oo.obat_id 
							left join 
								(select a.obat_dept_id, a.total_stok from 
									(select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) a, 
									obat_dept_stok o group by a.obat_dept_id order by obat_dept_stok_id desc) v 
							on v.obat_dept_id = ot.obat_dept_id
							WHERE ot.dept_id =  '21'
							GROUP BY oo.obat_id) jumlah 
						on jumlah.obat_id = o.obat_id 
						left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id 
						left join obat_satuan os on os.satuan_id = o.satuan_id 
						left join master_penyedia mp on mp.penyedia_id = o.penyedia_id 
						left join obat_merk mo on mo.merk_id = o.merk_id 
						where d.dept_id = '21' AND o.nama LIKE '%$nama%'";
			if ($satuan_id == '' && $is_generik == '') {
				$sql .= "group by o.obat_id";
			}else if ($satuan_id != '' && $is_generik == '') {
				$sql .= "AND os.satuan_id = '$satuan_id' group by o.obat_id";
			}else if ($satuan_id == '' && $is_generik != '') {
				$sql .= "AND o.is_generik = '$is_generik' group by o.obat_id ";
			}else {
				$sql .= "AND os.satuan_id = '$satuan_id' AND o.is_generik = '$is_generik'
						group by o.obat_id";
			}
			
			$result = $this->db->query($sql);
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
					where ot.dept_id = '21'";
			if ($satuan == '' && $is_generik == '') {
					$sql .= "group by ods.obat_dept_id";
			}else if($satuan == '' && $is_generik != ''){
				$sql .=  
					"AND o.is_generik = $is_generik
					group by ods.obat_dept_id";
			}else if($satuan != '' && $is_generik == ''){
				$sql .= "AND os.satuan_id = $satuan
					group by ods.obat_dept_id";
			}
			else{
				$sql .= "AND os.satuan_id = $satuan
					AND o.is_generik = $is_generik
					group by ods.obat_dept_id";
			}
			
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
						where o.nama LIKE '%$nama%' AND ot.dept_id = '21'";
			if ($satuan == '' && $is_generik == '') {			
			 	$sql .= "group by ods.obat_dept_id";
			}else if($satuan != '' && $is_generik == ''){
				$sql .= "AND os.satuan_id = $satuan
					group by ods.obat_dept_id";
			}else if($satuan == '' && $is_generik != ''){
				$sql .= "AND os.satuan_id = $satuan
						group by ods.obat_dept_id";
			}else{
				$sql .= "AND os.satuan_id = $satuan
						AND o.is_generik = $is_generik
						group by ods.obat_dept_id";
			}
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
					where jo.jenis_obat LIKE '%$jenis%' AND ot.dept_id = '21'";
			if ($satuan == '' && $is_generik == '') {			
			 	$sql .= "group by ods.obat_dept_id";
			}else if($satuan != '' && $is_generik == ''){
				$sql .= "AND os.satuan_id = $satuan
					group by ods.obat_dept_id";
			}else if($satuan == '' && $is_generik != ''){
				$sql .= "AND os.satuan_id = $satuan
						group by ods.obat_dept_id";
			}else{
				$sql .= "AND os.satuan_id = $satuan
						AND o.is_generik = $is_generik
						group by ods.obat_dept_id";
			}
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
					where om.nama_merk LIKE '%$merk%' AND ot.dept_id = '21'";
			if ($satuan == '' && $is_generik == '') {			
			 	$sql .= "group by ods.obat_dept_id";
			}else if($satuan != '' && $is_generik == ''){
				$sql .= "AND os.satuan_id = $satuan
					group by ods.obat_dept_id";
			}else if($satuan == '' && $is_generik != ''){
				$sql .= "AND os.satuan_id = $satuan
						group by ods.obat_dept_id";
			}else{
				$sql .= "AND os.satuan_id = $satuan
						AND o.is_generik = $is_generik
						group by ods.obat_dept_id";
			}
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
					where mp.nama_penyedia LIKE '%$penyedia%' AND ot.dept_id = '21'";
			if ($satuan == '' && $is_generik == '') {			
			 	$sql .= "group by ods.obat_dept_id";
			}else if($satuan != '' && $is_generik == ''){
				$sql .= "AND os.satuan_id = $satuan
					group by ods.obat_dept_id";
			}else if($satuan == '' && $is_generik != ''){
				$sql .= "AND os.satuan_id = $satuan
						group by ods.obat_dept_id";
			}else{
				$sql .= "AND os.satuan_id = $satuan
						AND o.is_generik = $is_generik
						group by ods.obat_dept_id";
			}
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
					where od.sumber_dana LIKE '%$sumber%' AND ot.dept_id = '21'";
			if ($satuan == '' && $is_generik == '') {			
			 	$sql .= "group by ods.obat_dept_id";
			}else if($satuan != '' && $is_generik == ''){
				$sql .= "AND os.satuan_id = $satuan
					group by ods.obat_dept_id";
			}else if($satuan == '' && $is_generik != ''){
				$sql .= "AND os.satuan_id = $satuan
						group by ods.obat_dept_id";
			}else{
				$sql .= "AND os.satuan_id = $satuan
						AND o.is_generik = $is_generik
						group by ods.obat_dept_id";
			}
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

		public function get_alpha_obat_opname($alpha, $dept_id){
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * , obat_dept_id as obat_process from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join (select * from obat_opname order by tgl_opname desc) op on op.obat_dept_id = ot.obat_dept_id
					left join obat_merk om on om.merk_id = o.merk_id where ot.dept_id = '$dept_id' AND o.nama LIKE '$alpha%'
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
					(select * , obat_dept_id as obat_process from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
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

		public function get_last_stokopname($obat_dept_id)
		{
			$sql = "SELECT stok_fisik from obat_opname op 
					where op.obat_dept_id = '$obat_dept_id' 
					order by obat_opname_id desc";	
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
			$sql = "SELECT * FROM obat_rencana_pengadaan o left join petugas p on o.petugas_input = p.petugas_id
					where o.status LIKE 'Menunggu'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;	
		}

		public function get_nama_petugas($value){
			$sql = "SELECT p.nama_petugas 
					FROM petugas p 
					WHERE p.petugas_id = '$value'";
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
			$sql = "SELECT op.*,mp.*, p.nama_petugas, p.petugas_id FROM 
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
					left join obat o on o.obat_id = opd.obat_id left join (select * from obat_stok_minimal where dept_id = 21) os on os.obat_id = o.obat_id
					left join 
						(select u.dept_id as departement, u.obat_detail_id, z.total_stok as total, t.tgl_kadaluarsa 
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

		/*retur obat dari departemen*/
		public function get_returdepartment()
		{
			$sql = "SELECT a.dept_id, a.retur_dept_id, a.waktu, a.keterangan, b.nama_dept, c.nama_petugas 
					FROM obat_retur_dept a left join master_dept b on a.dept_id = b.dept_id 
					left join petugas c on a.petugas_input = c.petugas_id where a.tanggal_confirm IS NULL";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_detail_returdepartment($retur_id)
		{
			$sql = "SELECT a.retur_dept_id, c.nama, d.nama_merk, b.tgl_kadaluarsa, b.obat_detail_id, a.jumlah, e.satuan 
					FROM obat_retur_dept_detail a left join obat_detail b on a.obat_detail_id = b.obat_detail_id 
					left join obat c on c.obat_id = b.obat_id 
					left join obat_merk d on d.merk_id = c.merk_id 
					left join obat_satuan e on e.satuan_id = c.satuan_id where a.retur_dept_id = '$retur_id'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function update_returdepartemen($returid, $insert)
		{
			$this->db->where('retur_dept_id', $returid);
			$result = $this->db->update('obat_retur_dept', $insert);
			if ($result) {
				return true;	
			}else{
				return false;
			}
		}

		public function get_last_stok_by_tgl($tgl_kadaluarsa, $dept_id)//tambah obat id coeg
		{
			$sql = "SELECT e.total_stok, e.obat_dept_id
					FROM obat_detail a left join obat_dept b on a.obat_detail_id = b.obat_detail_id 
					left join (select c.obat_dept_id, d.total_stok from obat_dept_stok c 
						left join (select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) d 
						on c.obat_dept_id = d.obat_dept_id group by c.obat_dept_id) e on e.obat_dept_id = b.obat_dept_id 
					where a.tgl_kadaluarsa = '$tgl_kadaluarsa' and b.dept_id = '$dept_id'";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->row_array();	
			}else{
				return false;
			}
		}

		public function get_last_stok_by_detail($obat_detail_id, $dept_id)
		{
			$sql = "SELECT e.total_stok, e.obat_dept_id
					FROM obat_detail a left join obat_dept b on a.obat_detail_id = b.obat_detail_id 
					left join (select c.obat_dept_id, d.total_stok from obat_dept_stok c 
						left join (select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) d 
						on c.obat_dept_id = d.obat_dept_id group by c.obat_dept_id) e on e.obat_dept_id = b.obat_dept_id 
					where a.obat_detail_id = '$obat_detail_id' and b.dept_id = '$dept_id'";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->row_array();	
			}else{
				return false;
			}
		}

		public function update_stok_returdepartemen($params)
		{
			$query = $this->db->insert('obat_dept_stok', $params);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}

		public function get_riwayat_returdepartemen()
		{
			$sql = "SELECT a.*, b.nama_dept, c.nama_petugas 
					FROM obat_retur_dept a left join master_dept b on a.dept_id = b.dept_id 
					left join petugas c on a.penerima_retur = c.petugas_id where a.status like 'diterima'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_detail_riwayat_returdepartemen()
		{
			//sama dengan ambil detail :D
		}

		/*akhir retur obat departement*/

		/*retur obat distributor*/
		public function get_obat_bypenyedia($katakunci, $penyedia_id)
		{
			$sql = "SELECT z.*,os.satuan, om.nama_merk, a.tgl_kadaluarsa, e.total_stok, e.obat_dept_id, a.obat_detail_id
					FROM obat z left join obat_detail a on z.obat_id = a.obat_id left join obat_dept b on a.obat_detail_id = b.obat_detail_id 
					left join (select c.obat_dept_id, d.total_stok from obat_dept_stok c 
					left join (select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) d 
					on c.obat_dept_id = d.obat_dept_id group by c.obat_dept_id) e on e.obat_dept_id = b.obat_dept_id 
					left join obat_satuan os on z.satuan_id = os.satuan_id
					left join obat_merk om on om.merk_id = z.merk_id
					where z.nama LIKE '%$katakunci%' and b.dept_id = '21' and z.penyedia_id = '$penyedia_id'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function insert_returdist_detail($params)
		{
			$query = $this->db->insert('obat_retur_distributor_detail', $params);
			if ($query) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function add_obat_retur_distributor($params)
		{
			$query = $this->db->insert('obat_retur_distributor', $params);
			if ($query) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function get_riwayat_returdistributor()
		{
			$sql = "SELECT * FROM obat_retur_distributor a 
					left join obat_retur_distributor_detail b on b.retur_distributor_id = a.retur_distributor_id
					left join master_penyedia mp on a.penyedia_id = mp.penyedia_id 
					left join obat_detail c on c.obat_detail_id = b.obat_detail_id 
					left join obat d on d.obat_id = c.obat_id 
					left join obat_dept e on e.obat_detail_id = c.obat_detail_id
					left join petugas p on p.petugas_id = a.petugas_input 
					left join 
						(select f.obat_dept_id, f.total_stok from obat_dept_stok f 
							left join (select * from obat_dept_stok order by obat_dept_stok_id desc) v 
								on v.obat_dept_id = f.obat_dept_id group by f.obat_dept_id) g 
					on g.obat_dept_id = e.obat_dept_id group by a.retur_distributor_id";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function getdetailreturdistributor($retur_id)
		{
			$sql = "SELECT *, d.nama FROM obat_retur_distributor a 
					left join obat_retur_distributor_detail b on b.retur_distributor_id = a.retur_distributor_id
					left join master_penyedia mp on a.penyedia_id = mp.penyedia_id 
					left join obat_detail c on c.obat_detail_id = b.obat_detail_id 
					left join obat d on d.obat_id = c.obat_id 
					left join obat_dept e on e.obat_detail_id = c.obat_detail_id
					left join petugas p on p.petugas_id = a.petugas_input 
					left join obat_merk om on d.merk_id = om.merk_id
					left join obat_satuan os on os.satuan_id = d.satuan_id
					left join 
						(select f.obat_dept_id, f.total_stok from obat_dept_stok f 
							left join (select * from obat_dept_stok order by obat_dept_stok_id desc) v 
								on v.obat_dept_id = f.obat_dept_id group by f.obat_dept_id) g 
					on g.obat_dept_id = e.obat_dept_id where a.retur_distributor_id = '$retur_id'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}
		/*akhir retur ke distributor*/

		/*laporan*/
		public function get_all_dept()
		{
			$sql = "select * from master_dept";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_dept($dept_id)
		{
			$sql = "select * from master_dept where dept_id =  '$dept_id'";
			$result = $this->db->query($sql);
			if($result)
				return $result->row_array();
			else
				return false;
		}

		public function get_laporan_permintaan($dept, $awal, $akhir)
		{
			if ($dept == '') {
				$sql = "SELECT * 
						FROM obat_permintaan op left join obat_permintaan_detail opd on op.obat_permintaan_id = opd.obat_permintaan_id 
						left join obat o on o.obat_id = opd.obat_id 
						left join obat_detail c on c.obat_detail_id = opd.obat_detail_id left join (select petugas_id, nama_petugas as 'peminta' from petugas) v on v.petugas_id = op.petugas_request left join (select petugas_id, nama_petugas as 'responder' from petugas) d on d.petugas_id = op.petugas_respond
						left join master_dept md on md.dept_id = op.dept_id
						where op.tanggal_request > '$awal' and op.tanggal_request < '$akhir' order by op.dept_id";
			}else{
				$sql = "SELECT * 
						FROM obat_permintaan op left join obat_permintaan_detail opd on op.obat_permintaan_id = opd.obat_permintaan_id 
						left join obat o on o.obat_id = opd.obat_id 
						left join obat_detail c on c.obat_detail_id = opd.obat_detail_id left join (select petugas_id, nama_petugas as 'peminta' from petugas) v on v.petugas_id = op.petugas_request left join (select petugas_id, nama_petugas as 'responder' from petugas) d on d.petugas_id = op.petugas_respond
						left join master_dept md on md.dept_id = op.dept_id
						where op.tanggal_request >= '$awal' and op.tanggal_request <= '$akhir' and op.dept_id = '$dept'";
			}
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_laporan_returdept($dept, $awal, $akhir)
		{
			if ($dept == '') {
				$sql = "SELECT * from obat_retur_dept a 
						left join obat_retur_dept_detail b on a.retur_dept_id = b.retur_dept_id 
						left join master_dept c on c.dept_id = a.dept_id 
						left join obat_detail d on d.obat_detail_id = b.obat_detail_id left join obat e on e.obat_id = d.obat_id 
						left join (select petugas_id, nama_petugas as 'ptgs_input' from petugas) v on v.petugas_id = a.petugas_input 
						left join (select petugas_id, nama_petugas as 'ptgs_confirm' from petugas) z on z.petugas_id = a.penerima_retur
						where a.waktu >= '$awal' AND a.waktu <= '$akhir' order by a.dept_id";
			}else{
				$sql = "SELECT * from obat_retur_dept a 
					left join obat_retur_dept_detail b on a.retur_dept_id = b.retur_dept_id 
					left join master_dept c on c.dept_id = a.dept_id 
					left join obat_detail d on d.obat_detail_id = b.obat_detail_id left join obat e on e.obat_id = d.obat_id 
					left join (select petugas_id, nama_petugas as 'ptgs_input' from petugas) v on v.petugas_id = a.petugas_input 
					left join (select petugas_id, nama_petugas as 'ptgs_confirm' from petugas) z on z.petugas_id = a.penerima_retur
					where a.waktu >= '$awal' AND a.waktu <= '$akhir' AND a.dept_id = '$dept'";
			}

			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_laporan_returdist($dist, $awal, $akhir)
		{
			if ($dist == '-1') {//semua distributor
				$sql = "SELECT c.nama_penyedia, a.no_retur, a.waktu, d.nama_petugas,f.nama,e.tgl_kadaluarsa, b.jumlah, a.keterangan 
						from obat_retur_distributor a 
						left join obat_retur_distributor_detail b on a.retur_distributor_id = b.retur_distributor_id 
						left join master_penyedia c on c.penyedia_id = a.penyedia_id  
						left join petugas d on d.petugas_id = a.petugas_input 
						left join obat_detail e on e.obat_detail_id = b.obat_detail_id 
						left join obat f on f.obat_id = e.obat_id 
						where a.waktu >= '$awal' AND a.waktu <='$akhir'";
			}else{
				$sql = "SELECT c.nama_penyedia, a.no_retur, a.waktu, d.nama_petugas,f.nama,e.tgl_kadaluarsa, b.jumlah, a.keterangan
						from obat_retur_distributor a 
						left join obat_retur_distributor_detail b on a.retur_distributor_id = b.retur_distributor_id 
						left join master_penyedia c on c.penyedia_id = a.penyedia_id  
						left join petugas d on d.petugas_id = a.petugas_input 
						left join obat_detail e on e.obat_detail_id = b.obat_detail_id 
						left join obat f on f.obat_id = e.obat_id 
						where a.waktu >= '$awal' AND a.waktu <='$akhir' AND a.penyedia_id = '$dist'";
			}

			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_laporan_stokopname($awal, $akhir, $dept_id)
		{
			$sql = "SELECT a.*, mp.nama_dept, c.tgl_kadaluarsa, d.nama
					FROM obat_opname a left join obat_dept b on a.obat_dept_id = b.obat_dept_id 
					left join obat_detail c on c.obat_detail_id = b.obat_detail_id 
					left join obat d on d.obat_id = c.obat_id 
					left join master_dept mp on mp.dept_id = b.dept_id
					where b.dept_id = '$dept_id'";

			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}
		public function get_nama_dept($id)
		{
			$sql = "SELECT * from master_dept
					where dept_id = '$id'";

			$result = $this->db->query($sql);
			if($result)
				return $result->row_array();
			else
				return false;
		}
		/*akhir laporan*/

		/*persetujuan permintaan*/
		
		/*akhir persetujuan permintaan*/

	}
?>	