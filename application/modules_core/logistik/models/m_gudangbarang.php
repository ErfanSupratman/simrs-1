<?php  
	/**
	* 
	*/
	class M_gudangbarang extends CI_Model
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
		public function addnewmerk($value)
		{
			$res = $this->db->insert('barang_merk', $value);
			if ($res) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function addnewpenyedia($value)
		{
			$res = $this->db->insert('barang_penyedia', $value);
			if ($res) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function insert_new_barang($insert)
		{
			$res = $this->db->insert('barang_merk', $insert);
			if ($res) {
				return true;
			}else{
				return false;
			}
		}

		public function get_satuan_barang()
		{
			$sql= "SELECT * from barang_satuan";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function search_penyediabarang($katakunci)
		{
			$sql = "SELECT nama_penyedia, penyedia_id from barang_penyedia where nama_penyedia LIKE '%$katakunci%'";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function search_merkbarang($katakunci)
		{
			$sql = "SELECT nama_merk, merk_id from barang_merk where nama_merk LIKE '%$katakunci%'";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function filter_barangstok()
		{
			$sql = "SELECT z.barang_id, z.barang_detail_id, sum(y.stok) from barang_detail z 
					left join (select a.barang_stok_id as id, a.barang_detail_id, a.stok from barang_stok a 
						left join (select * from barang_stok order by barang_stok_id desc) b 
						on a.barang_detail_id = b.barang_detail_id 
						group by b.barang_detail_id) y on z.barang_detail_id = y.barang_detail_id 	
					group by z.barang_id";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function get_allbarang()
		{
			//pake grup?
			$sql = "SELECT v.*, bm.*, bs.*, bp.*, z.barang_id, z.barang_detail_id, sum(y.stok) as jlh from barang v left join barang_detail z 
					on v.barang_id =  z.barang_id left join barang_satuan bs on bs.satuan_id = v.satuan_id
					left join barang_merk bm on bm.merk_id = v.merk left join barang_penyedia bp on bp.penyedia_id = v.penyedia_id
					left join (select a.barang_stok_id as id, a.barang_detail_id, b.stok,a.dept_id as dept from barang_stok a 
						left join (select * from barang_stok where dept_id = '24' order by barang_stok_id desc) b 
						on a.barang_detail_id = b.barang_detail_id 
						 group by b.barang_detail_id) y on z.barang_detail_id = y.barang_detail_id 	
					group by z.barang_id ";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function edit_new_barang($barang_id, $insert)
		{
			$this->db->where('barang_id', $barang_id);
			$res = $this->db->update('barang', $insert);
			if ($res) {
				return true;
			}else{
				return false;
			}
		}

		public function search_barang($katakunci)
		{
			$sql = "SELECT a.*, b.satuan, c.nama_merk, d.* from barang a
					left join barang_satuan b on b.satuan_id = a.satuan_id
					left join barang_merk c on c.merk_id = a.merk
					left join barang_penyedia d on d.penyedia_id = a.penyedia_id
					where a.nama LIKE '%$katakunci%'";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function searchdetailbarang($barangid, $dept_id) //salah asuuuuuu
		{
			$sql = "SELECT * from 
					(select * from barang_stok order by barang_stok_id desc) c 
					left join barang_detail a on c.barang_detail_id = a.barang_detail_id 
					where a.barang_id = $barangid and c.dept_id = '$dept_id' group by c.barang_detail_id";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function getdetailbarang($katakunci, $dept_id) //salah asuuuuuu
		{
			$sql = "SELECT * from 
					(select * from barang_stok order by barang_stok_id desc) c 
					left join barang_detail a on c.barang_detail_id = a.barang_detail_id 
					left join barang z on z.barang_id = a.barang_id
					left join barang_merk x on x.merk_id = z.merk
					left join barang_satuan y on y.satuan_id = z.satuan_id
					where z.nama LIKE '%$katakunci%' and c.dept_id = '$dept_id' group by c.barang_detail_id";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function add_detail_barang($params)
		{
			$res = $this->db->insert('barang_detail', $params);
			if ($res) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		public function update_detail_barang($barang_detail_id, $params)
		{
			$this->db->where('barang_detail_id', $barang_detail_id);
			$res = $this->db->update('barang_detail', $params);
			if ($res) {
				return true;
			}else{
				return false;
			}
		}

		public function add_stok_barang($params)
		{
			$res = $this->db->insert('barang_stok', $params);
			if ($res) {
				return $this->db->insert_id();
			}else{
				return false;
			}
		}

		/*inventori*/
		public function get_inventori_barang($dept_id)
		{
			$sql = "SELECT * from barang a left join barang_detail b on a.barang_id = b.barang_id
					left join (select * from barang_stok order by barang_stok_id desc) c on b.barang_detail_id = c.barang_detail_id
					left join barang_merk d on d.merk_id =  a.merk left join barang_satuan e
					on e.satuan_id = a.satuan_id 
					where c.dept_id = '$dept_id' group by b.barang_detail_id";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function input_in_out($value='')
		{
			$result =  $this->db->insert('barang_in_out', $value);
			if ($result) {
				return true;	
			}else{
				return false;
			}
		}

		public function input_riwayat_out($value='')
		{
			$result =  $this->db->insert('barang_stok', $value);
			if ($result) {
				return true;	
			}else{
				return false;
			}
		}

		public function get_detail_inventori($id, $dept_id)
		{
			$sql = "SELECT * from barang_in_out where barang_detail_id = '$id' and barang_dept_id = '$dept_id'";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();	
			}else{
				return false;
			}
		}
		/*inventori*/

		/*rencana pengadaan*/	
		public function insert_rencana_pengadaan($insert)
		{
			$result =  $this->db->insert('barang_rencana_pengadaan', $insert);
			if ($result) {
				return $this->db->insert_id();	
			}else{
				return false;
			}
		}

		public function insert_detailrencana_pengadaan($insert)
		{
			$result =  $this->db->insert('barang_rencana_pengadaan_detail', $insert);
			if ($result) {
				return $this->db->insert_id();	
			}else{
				return false;
			}
		}
		public function get_riwayatpengadaan()
		{
			$sql = "SELECT * from barang_rencana_pengadaan a 
					left join petugas p on a.petugas_input = p.petugas_id";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();	
			}else{
				return false;
			}
		}

		public function get_detail_riwayatpengadaan($rencana_id)
		{
			$sql = "SELECT * from barang_rencana_pengadaan_detail a
					left join barang b on b.barang_id = a.barang_id
					left join barang_penyedia c on c.penyedia_id = a.penyedia_id
					left join barang_satuan d on d.satuan_id = b.satuan_id
					where a.barang_rencana_id = '$rencana_id'";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();	
			}else{
				return false;
			}

		}
		/*akhir rencana pengdadaan*/

		/*penerimaan barang*/
		public function search_barangbypenyedia($katakunci, $penyedia_id)
		{
			$sql = "SELECT a.*, a.barang_id as brg_id, b.satuan, c.nama_merk, d.*, z.* from barang a
					left join barang_detail z on z.barang_id = a.barang_id
					left join barang_satuan b on b.satuan_id = a.satuan_id
					left join barang_merk c on c.merk_id = a.merk
					left join barang_penyedia d on d.penyedia_id = a.penyedia_id
					where a.nama LIKE '%$katakunci%' and d.penyedia_id = '$penyedia_id' group by a.barang_id";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function insert_penerimaanbarang($insert)
		{
			$result =  $this->db->insert('barang_penerimaan', $insert);
			if ($result) {
				return $this->db->insert_id();	
			}else{
				return false;
			}
		}

		public function insert_penerimaanbarangdetail($insert)
		{
			$result =  $this->db->insert('barang_penerimaan_detail', $insert);
			if ($result) {
				return $this->db->insert_id();	
			}else{
				return false;
			}
		}

		//dipake pas insert detail juga
		public function get_last_stokbarang($barang_id,$thn,$jns, $dept_id)
		{
			$sql = "SELECT * from barang a left join barang_detail b on a.barang_id = b.barang_id
					left join (select * from barang_stok order by barang_stok_id desc) c on b.barang_detail_id = c.barang_detail_id
					left join barang_merk d on d.merk_id =  a.merk left join barang_satuan e
					on e.satuan_id = a.satuan_id 
					where c.dept_id = '$dept_id' and b.tahun_pengadaan = '$thn' 
					and a.barang_id= '$barang_id' and b.sumber_dana = '$jns' group by b.barang_detail_id";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->row_array();
			}else{
				return false;
			}
		}

		public function getriwayatpenerimaan()
		{
			$sql = "SELECT * from barang_penerimaan a left join barang_penerimaan_detail b
					on a.barang_penerimaan_id = b.barang_penerimaan_id left join barang c on c.barang_id = b.barang_id
					left join barang_satuan fak on fak.satuan_id = c.satuan_id";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		/*akhir penerimaan barang*/

		/*persetujuan permintaan*/
		public function get_permintaan()
		{
			$sql = "SELECT a.*, p.nama_petugas, b.nama_dept from barang_permintaan a left join master_dept b
					on b.dept_id = a.dept_id left join petugas p on p.petugas_id = a.petugas_request where a.is_responded = '0'";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function get_detailpersetujuan($id)
		{
			$sql = "SELECT * from barang_permintaan_detail a left join (select * from barang_stok order by barang_stok_id desc) b on b.barang_stok_id = a.barang_stok_id
					left join barang c on c.barang_id = a.barang_id 
					left join barang_satuan bs on bs.satuan_id = c.satuan_id
					left join barang_merk bm on bm.merk_id = c.merk
					where a.barang_permintaan_id = '$id'";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function get_riwayatpermintaan()
		{
			$sql = "SELECT a.*, p.nama_petugas, b.nama_dept from barang_permintaan a left join master_dept b
					on b.dept_id = a.dept_id left join petugas p on p.petugas_id = a.petugas_respond where a.is_responded = '1'";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function update_persetujuan($id, $update)
		{
			$this->db->where('barang_permintaan_id', $id);
			$res = $this->db->update('barang_permintaan', $update);
			if ($res) {
				return true;
			}else{
				return false;
			}
		}

		public function update_detail_persetujuan($bgr_permintaan_id, $brg_stokid, $jlh)
		{
			$sql = "UPDATE barang_permintaan_detail a SET jumlah_approved = '$jlh' 
					where a.barang_permintaan_id = '$bgr_permintaan_id' and a.barang_stok_id = '$brg_stokid'";
			$res = $this->db->query($sql);
			if ($res) {
				return true;
			}else{
				return false;
			}
		}

		public function get_last_stokbarangbyid($detailid, $dept_id)
		{
			$sql = "SELECT * from barang_stok where barang_detail_id = '$detailid' and dept_id = '$dept_id' order by barang_stok_id desc";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->row_array();
			}else{
				return false;
			}
		}

		/*akhir persetujuan permintaan*/

		/*opname barang*/
		public function search_barang_opnamealpha($key)
		{
			$sql = "SELECT *, a.harga as harga_jual, z.nama_merk from barang a left join barang_detail b on a.barang_id = b.barang_id 
					left join 
						(select *, barang_detail_id as barang_process from barang_stok order by barang_stok_id desc) c on c.barang_detail_id = b.barang_detail_id 
					left join 
						(select * from barang_opname order by barang_opname_id desc) d on d.barang_detail_id = c.barang_process
					left join barang_merk z on z.merk_id = a.merk 
					where c.dept_id = '24' and a.nama LIKE '$key%' group by c.barang_detail_id";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function search_barang_opnamebyname($key)
		{
			$sql = "SELECT *, a.harga as harga_jual from barang a left join barang_detail b on a.barang_id = b.barang_id 
					left join 
						(select *, barang_detail_id as barang_process from barang_stok order by barang_stok_id desc) c on c.barang_detail_id = b.barang_detail_id 
					left join 
						(select * from barang_opname order by barang_opname_id desc) d on d.barang_detail_id = c.barang_process
					left join barang_merk z on z.merk_id = a.merk 
					where c.dept_id = '24' and a.nama LIKE '%$key%' group by c.barang_detail_id";
			$res = $this->db->query($sql);
			if ($res->num_rows() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}

		public function get_last_stokopname($barang_detail_id)
		{
			$sql = "SELECT stok_fisik from barang_opname op 
					where op.barang_detail_id = '$barang_detail_id' 
					order by barang_opname_id desc";	
			$query = $this->db->query($sql);
			if ($query) {
				return $query->row_array();
			}else{
				return false;
			}
		}

		public function insert_opname_history($params)
		{
			$result =  $this->db->insert('barang_opname', $params);
			if ($result) {
				return $this->db->insert_id();	
			}else{
				return false;
			}
		}

		public function update_history_after_opname($barang_detail_id, $tanggal, $selisih, $type)
		{
			if ($type === 'IN') {
				$sql = "UPDATE barang_stok SET stok = ($selisih + stok)
						WHERE barang_detail_id = '$barang_detail_id' AND tanggal_stok >= '$tanggal'";
			}else{
				$sql = "UPDATE barang_stok SET stok = (stok - $selisih)
						WHERE barang_detail_id = '$barang_detail_id' AND tanggal_stok >= '$tanggal'";
			}

			$query = $this->db->query($sql);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}
		/*akhir opname barang*/

	}
?>