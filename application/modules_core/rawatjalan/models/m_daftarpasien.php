<?php

class m_daftarpasien extends CI_Model {

	public function get_identitas_pasien($rm_id){
		$sql = "SELECT * FROM pasien WHERE rm_id = '$rm_id' LIMIT 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_pasien($rm_id)
    {
    	$sql = "SELECT * FROM pasien where rm_id = ?";
    	//$this->db->where($rm_id);
    	$query = $this->db->query($sql,$rm_id);
    	if ($query) {
    		return $query->row_array();
    	}else{
    		return false;
    	}
    }

    public function get_ri_id($visit_id){
        $sql = "SELECT * FROM visit_rj WHERE visit_id = '$visit_id' AND waktu_keluar is NULL ORDER BY waktu_masuk DESC LIMIT 1";
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result;
    }

    public function get_carabayar($visit_id){
    	$sql = "SELECT `cara_bayar` FROM visit_rj WHERE visit_id = '$visit_id'";
		$query = $this->db->query($sql);
		$result = $query->row_array();
		return $result;    
	}

    public function get_prov($prov)
    {
    	$sql = "SELECT * FROM master_provinsi where prov_id = ?";
    	//$this->db->where($rm_id);
    	$query = $this->db->query($sql,$prov);
    	if ($query) {
    		return $query->row_array();
    	}else{
    		return false;
    	}
    }

    public function get_kab($prov)
    {
    	$sql = "SELECT * FROM master_kabupaten where kab_id = ?";
    	//$this->db->where($rm_id);
    	$query = $this->db->query($sql,$prov);
    	if ($query) {
    		return $query->row_array();
    	}else{
    		return false;
    	}
    }

    public function get_kec($prov)
    {
    	$sql = "SELECT * FROM master_kecamatan where kec_id = ?";
    	//$this->db->where($rm_id);
    	$query = $this->db->query($sql,$prov);
    	if ($query) {
    		return $query->row_array();
    	}else{
    		return false;
    	}
    }

    public function get_kel($prov)
    {
    	$sql = "SELECT * FROM master_desa where kel_id = ?";
    	//$this->db->where($rm_id);
    	$query = $this->db->query($sql,$prov);
    	if ($query) {
    		return $query->row_array();
    	}else{
    		return false;
    	}
    }

    public function get_last_visit_resep()
    {
    	$sql = "SELECT max(resep_id) as value from visit_resep";
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

    public function get_dokter(){
    	$sql = "SELECT * FROM petugas WHERE jabatan = 'Dokter'";
    	$query = $this->db->query($sql);
    	$result = $query->result_array();
    	return $result;
    }

    public function get_overview_history($v_id, $rj_id)
    {
        $sql = "SELECT * FROM overview_klinik v, petugas p where v.dokter = p.petugas_id AND v.visit_id = '$v_id' AND v.rj_id = '$rj_id'";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->result_array();
        }else{
            return false;
        }
    }

    public function insert_overview($value)
    {
        //insert ke overview
        $query = $this->db->insert('overview_klinik',$value);
        if ($query) {
            return true;
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

    public function get_inserted_visit_care($value='')
    {
        $sql = "SELECT *, v.js as j_sarana, v.jp as j_pelayanan, v.bakhp as bakhp_this from visit_care v, petugas b, visit vb, master_tindakan t
                WHERE v.visit_id = vb.visit_id AND v.paramedis = b.petugas_id AND t.tindakan_id = v.tindakan_id AND
                v.care_id = ?";
        $query = $this->db->query($sql, $value);
        if ($query) {
            return $query->row_array();
        }else{
            return false;
        }
    }

    public function get_last_visit_care($visit_id)
    {
        $sql = "SELECT max(care_id) as value from visit_care WHERE visit_id = '$visit_id'";
        $query = $this->db->query($sql);
        if ($query) {
            return $query->row_array();
        }else{
            return false;
        }
    }

    public function get_overview_id($visit_id){
        $sql = "SELECT SUBSTR(id, 11, 54)'id' FROM overview_klinik 
                WHERE visit_id = '$visit_id'
                ORDER bY id DESC
                LIMIT 1";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $o_id = $query->row_array();
            $o_id = intval($o_id['id']) + 1;

            if (strlen($o_id) == '1') {
                $o_id = '0' . $o_id;
            } else {
                $o_id = $o_id;
            }
            return $visit_id . $o_id;
        }else{
            return $visit_id . '01';
        }
    }

    public function get_visit_care($value=''){
        $sql = "SELECT * FROM visit_care v, petugas b, master_tindakan t,
                master_tindakan_kategori m, visit vb 
                WHERE 
                v.visit_id = vb.visit_id AND v.paramedis = b.petugas_id
                AND v.tindakan_id = t.tindakan_id AND t.kat_id = m.kat_id AND
                v.visit_id = ?";
        $query = $this->db->query($sql, $value);
        if ($query) {
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function get_master_tindakan()
    {
        $sql = "SELECT * from master_tindakan";
        $query = $this->db->query($sql);
        if ($query) {
            return $query->result_array();
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

    public function search_dokter($search){
        $sql = "SELECT * FROM petugas WHERE nama_petugas LIKE '%$search%' AND jabatan = 'Dokter'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }


    public function save_order_operasi($value=''){
        $query = $this->db->insert('order_operasi',$value);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    public function get_order_kamar_operasi($select){
        $sql = "SELECT * FROM order_operasi o, petugas p WHERE o.pengirim = p.petugas_id AND visit_id = '$select'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function get_last_order_operasi($visit_id)
    {
        $sql = "SELECT max(order_operasi_id) as value from order_operasi WHERE visit_id = '$visit_id'";
        $query = $this->db->query($sql);
        if ($query) {
            return $query->row_array();
        }else{
            return false;
        }
    }

    public function get_dept_id($select){
        $sql = "SELECT dept_id FROM master_dept WHERE nama_dept = '$select' LIMIT 1";
        $query = $this->db->query($sql);
        if ($query) {
            return $query->row_array();
        }else{
            return false;
        }        
    }   

    public function hapus_order_operasi($id){
        $result = $this->db->delete('order_operasi',array('order_operasi_id'=>$id));
        return $result;
    }

    public function hapus_tindakan($id){
        $result = $this->db->delete('visit_care',array('care_id'=>$id));
        return $result;
    }

    public function hapus_gizi($id){
        $result = $this->db->delete('visit_gizi',array('gizi_id'=>$id));
        return $result;
    }

    public function hapus_resep($id){
        $result = $this->db->delete('visit_resep',array('resep_id'=>$id));
        return $result;
    }

    public function get_inserted_order_operasi($select){
        $sql = "SELECT * FROM order_operasi o, petugas p WHERE o.pengirim = p.petugas_id AND order_operasi_id = '$select' LIMIT 1";
        $query = $this->db->query($sql);
        if ($query) {
            return $query->row_array();
        }else{
            return false;
        }        
    }

    public function search_diagnosa($value){
        $sql = "SELECT * FROM master_diagnosa WHERE diagnosis_nama LIKE '%$value%'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function get_detail_over($value){
        $sql = "SELECT * FROM overview_klinik v, petugas p, master_diagnosa m where v.dokter = p.petugas_id AND v.diagnosa1 = m.diagnosis_id AND v.id = '$value'";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->row_array();
        }else{
            return false;
        }
    }

    public function get_visit_gizi($value){
        $sql = "SELECT * FROM visit_gizi v, petugas p where v.konsultan = p.petugas_id AND v.visit_id = '$value'";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->result_array();
        }else{
            return false;
        }
    }

    public function save_gizi($value){
        $query = $this->db->insert('visit_gizi',$value);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    public function get_last_visit_gizi($visit_id)
    {
        $sql = "SELECT max(gizi_id) as value from visit_gizi WHERE visit_id = '$visit_id'";
        $query = $this->db->query($sql);
        if ($query) {
            return $query->row_array();
        }else{
            return false;
        }
    }

    public function save_resume($id, $data){
        $this->db->where('rj_id', $id);
        $update = $this->db->update('visit_rj', $data);

        if($update)
            return true;
        else
            return false;
    }

    public function update_visit($id, $data){
        $this->db->where('visit_id', $id);
        $update = $this->db->update('visit', $data);

        if($update)
            return true;
        else
            return false;   
    }

    public function get_dept_rj(){
        $sql = "SELECT * FROM master_dept WHERE jenis = 'POLIKLINIK'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function get_riwayat_klinik($r_id){
        $sql = "SELECT * FROM (SELECT visit_id FROM visit WHERE rm_id = '$r_id') vd, overview_klinik o, visit_rj vr, master_dept m, petugas p
                WHERE vd.visit_id = o.visit_id AND o.rj_id = vr.rj_id AND m.dept_id = vr.unit_tujuan AND vd.visit_id = vr.visit_id AND o.dokter = p.petugas_id ORDER BY o.waktu DESC";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function get_rm_id($visit){
        $sql = "SELECT rm_id FROM visit WHERE visit_id = '$visit'";
        $query = $this->db->query($sql);
        if ($query) {
            return $query->row_array();
        }else{
            return false;
        }   
    }

}
