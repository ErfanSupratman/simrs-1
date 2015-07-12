<?php

class m_icudetail extends CI_Model{

	public function get_pasien_icu($rm_id)
	{
		$sql = "SELECT * FROM pasien WHERE rm_id = '$rm_id' LIMIT 1";
		$query = $this->db->query($sql);
		if ($query) {
			$result = $query->row_array();
			$res = $result;
			$res['prov_skr'] = $this->get_prov($result['prov_id_skr']);
			$res['kab_skr'] = $this->get_kab($result['kab_id_skr']);
			$res['kec_skr'] = $this->get_kec($result['kec_id_skr']);
			$res['kel_skr'] = $this->get_kel($result['kel_id_skr']);
			$res['prov_ktp'] = $this->get_prov($result['prov_id']);
			$res['kab_ktp'] = $this->get_kab($result['kab_id']);
			$res['kec_ktp'] = $this->get_kec($result['kec_id']);
			$res['kel_ktp'] = $this->get_kel($result['kel_id']);

			return $res;
		}else{
			return false;
		}
	}

	public function get_prov($prov_id)
	{
		$sql = "SELECT nama_prov from master_provinsi WHERE prov_id = '$prov_id'";
		$query = $this->db->query($sql);
		if ($query) {
			$res = $query->row_array();
			return $res['nama_prov'];
		}
	}

	public function get_kab($kab_id)
	{
		$sql = "SELECT nama_kab from master_kabupaten WHERE kab_id = '$kab_id'";
		$query = $this->db->query($sql);
		if ($query) {
			$res = $query->row_array();
			return $res['nama_kab'];
		}
	}
	public function get_kec($kec_id)
	{
		$sql = "SELECT nama_kec from master_kecamatan WHERE kec_id = '$kec_id'";
		$query = $this->db->query($sql);
		if ($query) {
			$res = $query->row_array();
			return $res['nama_kec'];
		}
	}
	public function get_kel($kel_id)
	{
		$sql = "SELECT nama_kel from master_desa WHERE kel_id = '$kel_id'";
		$query = $this->db->query($sql);
		if ($query) {
			$res = $query->row_array();
			return $res['nama_kel'];
		}
	}

	public function get_identitas_pasien($rm_id){
		$sql = "SELECT * FROM pasien WHERE rm_id = '$rm_id' LIMIT 1";
		$query = $this->db->query($sql);
		if ($query) {
			$result = $query->row_array();
			return $result;
		}else{
			return false;
		}
		
	}

	public function get_all_petugas()
	{
		$sql = "SELECT petugas_id, nama_petugas from petugas";
		if ($query = $this->db->query($sql)) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	/*permintaan makan*/
	public function get_ruang($visit_id){
		$sql = "SELECT * FROM visit_inap_kamar vik, master_kamar mk, master_bed mb 
					WHERE vik.kamar_id = mk.kamar_id 
					AND vik.bed_id = mb.bed_id 
					AND vik.visit_id = '$visit_id' LIMIT 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_paket_makan(){
		$sql = "SELECT * FROM master_paket_makan";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function search_paket_makan($search){
		$sql = "SELECT * FROM master_paket_makan WHERE nama_paket LIKE '%$search%'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function add_permintaan_makan($input){
		$insert = $this->db->insert('permintaan_makan',$input);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}

	public function get_permintaan_makan($id){
		$sql = "SELECT * FROM permintaan_makan pm, master_paket_makan m WHERE pm.paket_id = m.paket_id AND  pm.id = '$id'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_permintaan_awal($visit_id){
		$sql = "SELECT * FROM permintaan_makan pm, master_paket_makan m WHERE pm.paket_id = m.paket_id AND  visit_id = '$visit_id'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function create_permintaan_makan($visit_id){
		$sql = "SELECT max(SUBSTR(id, 13, 4))'id' FROM permintaan_makan 
        			WHERE SUBSTR(id, 3, 10) = '$visit_id' 
        			ORDER BY visit_id 
        			DESC LIMIT 1";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $id = $query->row_array();
            $id = intval($id['id']) + 1;

            if (strlen($id) == '1') {
                $id = '000' . $id;
            } elseif (strlen($id) == '2') {
                $id = '00' . $id;
            } elseif (strlen($id) == '3') {
                $id = '0' . $id;
            } else {
                $id = $id;
            }	
            return "MA" . $visit_id . $id;
        } else {
            return "MA" . $visit_id .'0001';
        }
	}

	public function delete_permintaan_makan($value='')
		{
			$sql = "DELETE from permintaan_makan where id = '$value'";
			$query = $this->db->query($sql);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}
	/*akhir permintaan makan*/

	/*tindakan mulai dari sini*/
	    public function get_master_tindakan($value='')
	    {
	    	$sql = "SELECT * from master_tindakan";
	    	$query = $this->db->query($sql);
	    	if ($query) {
	    		return $query->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_tindakan($id)
	    {
	    	$sql = "SELECT * from master_tindakan where tindakan_id = ?";
	    	$query = $this->db->query($sql, $id);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_tindakan_kategori()
	    {
	    	$sql = "SELECT * from master_tindakan_kategori";
	    	$query = $this->db->query($sql);
	    	if ($query) {
	    		return $query->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function save_tindakan($value='')
	    {
	    	$query = $this->db->insert('visit_care',$value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }
	/*akhir tindakan*/

	/*visit care mulai di sini*/
	    public function get_visit_care($value='')
	    {
	    	$sql = "SELECT * from visit_care v, petugas b, master_tindakan t,
	    			master_tindakan_kategori m, visit vb 
	    			where 
	    			v.visit_id = vb.visit_id AND v.paramedis = b.petugas_id
	    			AND v.tindakan_id = t.tindakan_id AND v.kat_id = m.kat_id AND
	    			v.visit_id = ?";
	    	$query = $this->db->query($sql, $value);
	    	if ($query) {
	    		return $query->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_last_visit_care($visit_id)
	    {
	    	$sql = "SELECT max(care_id) as value from visit_care where visit_id='$visit_id'";
	    	$query = $this->db->query($sql);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_inserted_visit_care($value='')
	    {
	    	$sql = "SELECT * from visit_care v, petugas b, master_tindakan t,
	    			master_tindakan_kategori m, visit vb 
	    			where 
	    			v.visit_id = vb.visit_id AND v.paramedis = b.petugas_id
	    			AND v.tindakan_id = t.tindakan_id AND v.kat_id = m.kat_id AND
	    			v.care_id = ?";
	    	$query = $this->db->query($sql, $value);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }
	/*akhir visit care*/

	/*overview*/
		public function get_overview($v_id)
	    {
	    	$sql = "SELECT * FROM visit_overview v where v.visit_id = '$v_id'";
	    	$result = $this->db->query($sql);
	    	if ($result) {
	    		return $result->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_last_visit_overview($visit_id)
	    {
	    	$sql = "SELECT max(overview_id) as value FROM visit_overview v where v.visit_id = '$visit_id'";
	    	$result = $this->db->query($sql);
	    	if ($result) {
	    		return $result->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function save_overview($value)
	    {
	    	//insert ke overview
	    	$query = $this->db->insert('visit_overview',$value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_inserted_visit_overview($overview_id)
	    {
	    	$sql = "SELECT * FROM visit_overview v where v.overview_id = '$overview_id'";
	    	$result = $this->db->query($sql);
	    	if ($result) {
	    		return $result->row_array();
	    	}else{
	    		return false;
	    	}
	    }
	/*akhir overview*/

	/*visit resep mulai di sini*/
	    public function get_visit_resep($value='')
	    {
	    	$sql = "SELECT *
			FROM visit_resep v
			inner JOIN petugas p ON v.dokter = p.petugas_id AND v.visit_id = ?";
			$query = $this->db->query($sql, $value);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
	    }

	    public function get_last_visit_resep($visit_id)
	    {
	    	$sql = "SELECT max(resep_id) as value from visit_resep where visit_id='$visit_id'";
	    	$query = $this->db->query($sql);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function save_visit_resep($value='')
	    {
	    	$query = $this->db->insert('visit_resep',$value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_inserted_visit_resep($value='')
	    {
	    	$sql = "SELECT *
			FROM visit_resep v
			inner JOIN petugas p ON v.dokter = p.petugas_id AND v.resep_id = ?";
	    	$query = $this->db->query($sql, $value);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function delete_resep($value='')
	    {
	    	$sql = "delete from visit_resep where resep_id = ?";
	    	$query = $this->db->query($sql, $value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }
	/*akhir visit resep*/

	/*order operasi*/
	    public function get_last_order_operasi($visit_id)
	    {
	    	$sql = "SELECT max(order_operasi_id) as value from order_operasi where visit_id='$visit_id'";
	    	$query = $this->db->query($sql);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_inserted_order_operasi($order_id='')
	    {
	    	$sql = "SELECT *
			FROM order_operasi o
			inner JOIN petugas p ON o.pengirim = p.petugas_id inner join master_dept t on o.dept_tujuan = t.dept_id
			AND o.order_operasi_id = ?";
	    	$query = $this->db->query($sql, $order_id);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_order_operasi($visit_id='')
	    {
	    	$sql = "SELECT * from order_operasi o, petugas b, master_dept t
	    			where 
	    			o.pengirim = b.petugas_id
	    			AND o.dept_id = '18' AND t.dept_id = o.dept_tujuan AND
	    			o.visit_id = ?";
	    	$query = $this->db->query($sql, $visit_id);
	    	if ($query) {
	    		return $query->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function save_order_operasi($value='')
	    {
	    	$query = $this->db->insert('order_operasi', $value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function delete_order($value='')
	    {
	    	$sql = "delete from order_operasi where order_operasi_id = ?";
	    	$query = $this->db->query($sql, $value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }
	/*akhir order operasi*/

	/*konsultasi gizi*/
	    public function get_last_visit_gizi($visit_id)
	    {
	    	$sql = "SELECT max(gizi_id) as value from visit_gizi where visit_id='$visit_id'";
	    	$query = $this->db->query($sql);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function save_visit_gizi($value='')
	    {
	    	$query = $this->db->insert('visit_gizi',$value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_inserted_visit_gizi($value='')
	    {
	    	$sql = "SELECT *
			FROM visit_gizi v
			inner JOIN petugas p ON v.konsultan = p.petugas_id AND v.gizi_id = ?";
	    	$query = $this->db->query($sql, $value);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_visit_gizi($value='')
	    {
	    	$sql = "SELECT *
			FROM visit_gizi v
			inner JOIN petugas p ON v.konsultan = p.petugas_id AND v.visit_id = ?";
			$query = $this->db->query($sql, $value);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
	    }

	    public function delete_gizi($value='')
	    {
	    	$sql = "delete from visit_gizi where gizi_id = ?";
	    	$query = $this->db->query($sql, $value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }
	/*akhir konsultasi gizi*/

	/*riwayat penyakit*/
	public function get_all_medical_record($rm_id= '')
	{
		$sql = "SELECT * FROM visit v 
				LEFT JOIN master_dept rd ON rd.dept_id = v.dept_id
				WHERE v.rm_id = '$rm_id' group by v.visit_id";
				//LEFT JOIN petugas p ON p.petugas_id = vst.petugas_id

		$result = $this->db->query($sql);
		if ($result) {		
			return $result->result_array();
		}else{
			return false;
		}
	}

	public function get_riwayat($visit_id)
	{
		$sql = "SELECT * FROM visit v 
				LEFT JOIN master_dept rd ON rd.dept_id = v.dept_id
                Left join visit_overview vo ON v.visit_id = vo.visit_id
				LEFT JOIN petugas p ON p.petugas_id = vo.id_pemeriksa
                WHERE v.visit_id = '$visit_id' group by v.visit_id";

		$result = $this->db->query($sql);
		if ($result) {		
			return $result->result_array();
		}else{
			return false;
		}
	}

	public function get_therapy_riwayat($visit_id){

	}

	public function get_resep_riwayat($visit_id){
		$sql = "SELECT vr.* FROM visit v 
				LEFT JOIN master_dept rd ON rd.dept_id = v.dept_id
                Left join visit_resep vr ON v.visit_id = vr.visit_id
				LEFT JOIN petugas p ON p.petugas_id = vr.dokter
                WHERE v.visit_id = '$visit_id' group by v.visit_id";

		$result = $this->db->query($sql);
		if ($result) {		
			return $result->result_array();
		}else{
			return false;
		}
	}

	public function get_penunjang_riwayat($visit_id){

	}

	/*akhir riwayat penyakit*/
}

?>