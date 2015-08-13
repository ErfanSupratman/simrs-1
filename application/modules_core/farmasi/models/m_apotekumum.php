<?php  
	/**
	* 
	*/
	class M_Apotekumum extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function get_dept_id($nama)
		{
			$sql = "SELECT dept_id from master_dept where nama_dept LIKE '$nama'";
			$res = $this->db->query($sql);
			if ($res) {
				return $res->row_array();
			}else{
				return false;
			}
		}

		public function filter_obat($value='')
		{
			$nama = $value['nama'];
			$satuan_id = $value['satuan_id'];
			$is_generik = $value['is_generik'];

			$sql = "SELECT o.*,om.*,IFNULL(fak.jumlah, 0) as jlh, jo.*,os.*,mp.*,mo.* 
					from obat o left join obat_stok_minimal om on om.obat_id = o.obat_id 
					left join (select z.obat_id,sum(y.total_stok) as jumlah from obat_detail z 
						left join (select a.obat_detail_id, a.obat_dept_id, b.total_stok from obat_dept a 
							left join (select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) b on a.obat_dept_id = b.obat_dept_id 
							where a.dept_id = '25' group by a.obat_dept_id) y on y.obat_detail_id = z.obat_detail_id group by z.obat_id) fak on fak.obat_id = o.obat_id 
					left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id 
					left join obat_satuan os on os.satuan_id = o.satuan_id 
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id 
					left join obat_merk mo on mo.merk_id = o.merk_id where om.dept_id = '25' and o.nama LIKE '%$nama%' and o.is_hidden = '0'";

			if ($satuan_id == '' && $is_generik == '') {
				//$sql .= "group by o.obat_id";
			}else if ($satuan_id != '' && $is_generik == '') {
				$sql .= "AND os.satuan_id = '$satuan_id'";
			}else if ($satuan_id == '' && $is_generik != '') {
				$sql .= "AND o.is_generik = '$is_generik'";
			}else {
				$sql .= "AND os.satuan_id = '$satuan_id' AND o.is_generik = '$is_generik'";
			}
			
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function filter_stok($dept_id='')
		{
			$sql = "SELECT o.*,om.*,IFNULL(fak.jumlah, 0) as jlh, jo.*,os.*,mp.*,mo.* 
					from obat o left join obat_stok_minimal om on om.obat_id = o.obat_id 
					left join (select z.obat_id,sum(y.total_stok) as jumlah from obat_detail z 
						left join (select a.obat_detail_id, a.obat_dept_id, b.total_stok from obat_dept a 
							left join (select obat_dept_id, total_stok from obat_dept_stok order by obat_dept_stok_id desc) b on a.obat_dept_id = b.obat_dept_id 
							where a.dept_id = '25' group by a.obat_dept_id) y on y.obat_detail_id = z.obat_detail_id group by z.obat_id) fak on fak.obat_id = o.obat_id 
					left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id 
					left join obat_satuan os on os.satuan_id = o.satuan_id 
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id 
					left join obat_merk mo on mo.merk_id = o.merk_id where om.dept_id = '25' AND om.stok_minimal >= IFNULL(fak.jumlah, 0) and o.is_hidden = '0'";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function edit_stock_dept($obat_id, $dept_id, $stok)
		{
			$sql = "UPDATE obat_stok_minimal set stok_minimal = $stok where obat_id = '$obat_id' and dept_id = '$dept_id'";
			$res = $this->db->query($sql);
			if ($res) {
				return true;
			}else{
				return false;
			}
		}

		public function get_obat_all($search)
		{
			$sql = "SELECT * FROM obat o, obat_satuan jo, obat_merk om, obat_stok_minimal os 
					WHERE o.nama LIKE '%$search%' AND o.satuan_id = jo.satuan_id and os.obat_id = o.obat_id
					AND o.merk_id = om.merk_id and os.dept_id = '25' and o.is_hidden = '0'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}

		public function get_detail_obat($value='')
		{
			$sql = "SELECT * from obat_detail o 
					left join obat_dept od on o.obat_detail_id = od.obat_detail_id 
					left join (select * from obat_dept_stok order by obat_dept_stok_id desc) v on v.obat_dept_id = od.obat_dept_id 
					where o.obat_id = '$value' and od.dept_id = '25' group by v.obat_dept_id"; //detail obat berdasarkan obat_id
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		/*inventori*/
		public function get_filter_nofilter($value='', $dept_id)
		{
			$satuan = $value['satuan'];
			$is_generik = $value['is_generik'];
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where ot.dept_id = '$dept_id' and o.is_hidden = '0'";
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

		public function get_filter_nama($value='', $dept_id)
		{
			$satuan = $value['satuan'];
			$is_generik = $value['is_generik'];
			$nama = $value['filterBy'];
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
						left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
						(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
						left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
						left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
						left join obat_satuan os on os.satuan_id = o.satuan_id
						where o.nama LIKE '%$nama%' AND ot.dept_id = '$dept_id' and o.is_hidden = '0'";
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
		public function get_filter_jenis($value='', $dept_id)
		{
			$satuan = $value['satuan'];
			$is_generik = $value['is_generik'];
			$jenis = $value['filterBy'];
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where jo.jenis_obat LIKE '%$jenis%' AND ot.dept_id = '$dept_id' and o.is_hidden = '0'";
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
		public function get_filter_merk($value='', $dept_id)
		{
			$satuan = $value['satuan'];
			$is_generik = $value['is_generik'];
			$merk = $value['filterBy'];
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where om.nama_merk LIKE '%$merk%' AND ot.dept_id = '$dept_id' and o.is_hidden = '0'";
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
		public function get_filter_penyedia($value='', $dept_id)
		{
			$satuan = $value['satuan'];
			$is_generik = $value['is_generik'];
			$penyedia = $value['filterBy'];
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where mp.nama_penyedia LIKE '%$penyedia%' AND ot.dept_id = '$dept_id' and o.is_hidden = '0'";
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
		public function get_filter_sumber($value='', $dept_id)
		{
			$satuan = $value['satuan'];
			$is_generik = $value['is_generik'];
			$sumber = $value['filterBy'];
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where od.sumber_dana LIKE '%$sumber%' AND ot.dept_id = '$dept_id' and o.is_hidden = '0'";
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
		public function get_filter_tgl($value='', $dept_id)
		{
			$now = $value['now'];
			$end = $value['end'];
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join obat_merk om on om.merk_id = o.merk_id left join jenis_obat jo on jo.jenis_obat_id = o.jenis_obat_id
					left join master_penyedia mp on mp.penyedia_id = o.penyedia_id
					left join obat_satuan os on os.satuan_id = o.satuan_id
					where ot.dept_id = '$dept_id' and o.is_hidden = '0'
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
		/*inventori akhir*/

		/*opname*/
		public function get_opname_by_name($value,$dept_id){
			$sql = "SELECT *  FROM obat o left join obat_detail od on o.obat_id = od.obat_id 
					left join obat_dept ot on od.obat_detail_id = ot.obat_detail_id left join 
					(select * , obat_dept_id as obat_process from obat_dept_stok order by obat_dept_stok_id desc) ods on ot.obat_dept_id = ods.obat_dept_id 
					left join (select * from obat_opname order by tgl_opname desc) op on op.obat_dept_id = ot.obat_dept_id
					left join obat_merk om on om.merk_id = o.merk_id where ot.dept_id = '$dept_id' AND o.nama LIKE '%$value%'
					group by ods.obat_dept_id";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}
		/*akhir opname*/

		/*jasa resep*/
		public function get_jasa_resep($dept_id)
		{
			$sql = "SELECT *, md.nama_dept as dept_resep, sum(apd.management) as management, sum(apd.remunisasi) as remunisasi,
					sum(apd.apotek) as apotek, sum(apd.jasadokter) as jasadokter
					FROM apotek_penjualan ap left join apotek_penjualan_detail apd on apd.no_nota = ap.no_nota
					left join visit_resep vr on vr.resep_id = ap.resep_id
					left join visit v on v.visit_id = vr.visit_id 
					left join pasien p on p.rm_id = v.rm_id
					left join petugas pe on pe.petugas_id = ap.dokter_id
					left join master_dept md on md.dept_id = substr(vr.sub_visit, 1,2)
					where substr(ap.no_nota, 1,2) = '$dept_id' group by ap.no_nota";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_filter_jasa_resep($insert, $dept_id)
		{
			$start = $insert['start'];
			$end = $insert['end'];
			$cara_bayar =  $insert['cara_bayar'];
			$unit = $insert['unit'];
			$paramedis = $insert['paramedis'];
			$sql = "SELECT *, md.nama_dept as dept_resep, sum(apd.management) as management, sum(apd.remunisasi) as remunisasi,
					sum(apd.apotek) as apotek, sum(apd.jasadokter) as jasadokter
					FROM apotek_penjualan ap left join apotek_penjualan_detail apd on apd.no_nota = ap.no_nota
					left join visit_resep vr on vr.resep_id = ap.resep_id
					left join visit v on v.visit_id = vr.visit_id 
					left join pasien p on p.rm_id = v.rm_id
					left join petugas pe on pe.petugas_id = ap.dokter_id
					left join master_dept md on md.dept_id = substr(vr.sub_visit, 1,2)
					where substr(ap.no_nota, 1,2) = '$dept_id' ";
			if($start == '' and $end == '' and $cara_bayar == '' and $unit == '' and $paramedis==''){

			}else if ($start != '') {
				if ($end == '') {
					$end = $insert['now'];
				}

				$sql .= "and ap.waktu_penjualan > '$start' and ap.waktu_penjualan < '$end' group by ap.no_nota";
			}else if ($cara_bayar != '') {
				$sql .= "and ap.cara_bayar LIKE '$cara_bayar' group by ap.no_nota";
			}else if ($unit != '') {
				$sql .= "and substr(vr.sub_visit, 1,2) = '$unit' group by ap.no_nota";
			}else if ($paramedis != '') {
				$sql .= "and ap.dokter_id = '$paramedis' group by ap.no_nota";
			}

			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_dokter($key)
		{
			$sql = "SELECT * from petugas where nama_petugas like '%$key%'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}

		public function get_unit($key)
		{
			$sql = "SELECT * from master_dept where nama_dept like '%$key%'";
			$result = $this->db->query($sql);
			if($result)
				return $result->result_array();
			else
				return false;
		}
		/*akhir jasa resep*/

		/*laporan*/
		public function get_filter_penjualan($filter, $dept_id)
		{
			# code...
		}
		/*akhir laporan*/
	}
?>