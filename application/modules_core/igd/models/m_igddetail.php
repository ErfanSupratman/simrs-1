<?php

class m_igddetail extends CI_Model {

// function __construct() {
//         // Call the Model constructor
//         parent::__construct();
//     }
    public function get_dept_id($unit){
        $sql = "SELECT * FROM master_dept WHERE nama_dept = '$unit'";
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result;
    }

	public function search_pasien($search){
		$sql = "SELECT * FROM pasien p, visit v, visit_ri r, (SELECT dept_id FROM master_dept WHERE nama_dept = 'IGD') m WHERE p.rm_id = v.rm_id AND m.dept_id = r.unit_tujuan AND v.visit_id = r.visit_id AND v.status_visit = 'REGISTRASI' AND (p.nama LIKE '%$search%' OR p.rm_id LIKE '%$search%')";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_antrian_pasien(){
		$sql = "SELECT * FROM pasien p, visit v, visit_ri r, (SELECT dept_id FROM master_dept WHERE nama_dept = 'IGD') m WHERE p.rm_id = v.rm_id AND m.dept_id = r.unit_tujuan AND v.visit_id = r.visit_id AND v.status_visit = 'REGISTRASI' ORDER BY r.waktu_masuk DESC";
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

    public function get_order_kamar_operasi($select){
        $sql = "SELECT * FROM order_operasi o, petugas p WHERE o.pengirim = p.petugas_id AND sub_visit = '$select'";
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

    public function get_carabayar($visit_id){
        $sql = "SELECT `cara_bayar` FROM visit_igd WHERE igd_id = '$visit_id'";
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

    public function search_diagnosa($value){
        $sql = "SELECT * FROM master_diagnosa WHERE diagnosis_nama LIKE '%$value%'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
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

    public function get_overview_igd_id($visit_id){
        $sql = "SELECT SUBSTR(id, 11, 54)'id' FROM overview_igd 
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

    public function insert_overview_igd($insert){
        $query = $this->db->insert('overview_igd',$insert);
        if ($query) {
            return true;
        }else{
            return false;
        }   
    }

    public function get_overview_history($r_id)
    {
        $sql = "SELECT * FROM overview_klinik v, petugas p where v.dokter = p.petugas_id AND v.rj_id = '$r_id'";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->result_array();
        }else{
            return false;
        }
    }

    public function get_igd_overview_history($id)
    {
        $sql = "SELECT *, d.nama_petugas as nama_dokter, p.nama_petugas as nama_perawat  FROM overview_igd v, petugas d, petugas p where v.dokter = d.petugas_id AND v.perawat = p.petugas_id AND v.sub_visit = '$id'";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->result_array();
        }else{
            return false;
        }
    }

    public function get_unit($id){
        $sql = "SELECT * FROM master_dept WHERE nama_dept LIKE '%IGD%'";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->row_array();
        }else{
            return false;
        }
    }

    public function get_detail_over($value){
        $sql = "SELECT * FROM overview_klinik v, petugas p, master_diagnosa m
                WHERE v.dokter = p.petugas_id AND v.diagnosa1 = m.diagnosis_id AND v.id = '$value'";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->row_array();
        }else{
            return false;
        }
    }

    public function get_detail_over_igd($value){
        $sql = "SELECT * FROM overview_igd v, petugas p, master_diagnosa m
                WHERE v.dokter = p.petugas_id AND v.diagnosa1 = m.diagnosis_id AND v.id = '$value'";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->row_array();
        }else{
            return false;
        }
    }

    public function get_diag_name($value){
        $sql = "SELECT * FROM master_diagnosa WHERE diagnosis_id = '$value'";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->row_array();
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

    public function get_visit_care($value='')
    {
        $sql = "SELECT *, v.js as j_sarana, v.jp as j_pelayanan, v.bakhp as bakhp_this from visit_care v, petugas b, visit vb, master_tindakan t,
                (SELECT dept_id FROM master_dept WHERE jenis = 'POLIKLINIK' AND nama_dept NOT LIKE 'IGD') p
                WHERE v.visit_id = vb.visit_id AND v.paramedis = b.petugas_id AND t.tindakan_id = v.tindakan_id AND p.dept_id = v.dept_id AND
                v.visit_id = ?";
        $query = $this->db->query($sql, $value);
        if ($query) {
            return $query->result_array();
        }else{
            return false;
        }
    }
    
    public function get_visit_care_igd($id, $dept)
    {
        $sql = "SELECT *, v.js as j_sarana, v.jp as j_pelayanan, v.bakhp as bakhp_this from visit_care v, petugas b, visit vb, master_tindakan t
                WHERE v.visit_id = vb.visit_id AND v.paramedis = b.petugas_id AND t.tindakan_id = v.tindakan_id AND
                v.sub_visit = '$id' AND v.dept_id = '$dept'";
        $query = $this->db->query($sql);
        if ($query) {
            return $query->result_array();
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

    public function hapus_tindakan($id){
        $result = $this->db->delete('visit_care',array('care_id'=>$id));
        return $result;
    }

    public function search_perawat($data){
        $sql = "SELECT * FROM petugas WHERE jabatan = 'Perawat' AND nama_petugas LIKE '%$data%'";
        $query = $this->db->query($sql);
        if ($query) {
            return $query->result_array();
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
        inner JOIN petugas p ON v.dokter = p.petugas_id AND v.sub_visit = ?";
        $query = $this->db->query($sql, $value);
        if ($query) {
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function hapus_resep($id){
        $result = $this->db->delete('visit_resep',array('resep_id'=>$id));
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

    public function save_order_operasi($value=''){
        $query = $this->db->insert('order_operasi',$value);
        if ($query) {
            return true;
        }else{
            return false;
        }
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

     public function hapus_order_operasi($id){
        $result = $this->db->delete('order_operasi',array('order_operasi_id'=>$id));
        return $result;
    }

    public function get_visit_gizi($value){
        $sql = "SELECT * FROM visit_gizi v, petugas p where v.konsultan = p.petugas_id AND v.sub_visit = '$value'";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->result_array();
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

    public function save_gizi($value){
        $query = $this->db->insert('visit_gizi',$value);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    public function hapus_gizi($id){
        $result = $this->db->delete('visit_gizi',array('gizi_id'=>$id));
        return $result;
    }

    public function get_riwayat_klinik($r_id){
        $sql = "SELECT * FROM (SELECT visit_id FROM visit WHERE rm_id = '$r_id') vd, overview_klinik o, visit_rj vr, master_dept m, petugas p
                WHERE vd.visit_id = o.visit_id AND o.rj_id = vr.rj_id AND m.dept_id = vr.unit_tujuan 
                AND vd.visit_id = vr.visit_id AND o.dokter = p.petugas_id ORDER BY o.waktu DESC";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function get_riwayat_igd($r_id){
        $sql = "SELECT *, p.nama_petugas as rdokter, pe.nama_petugas as rperawat
                FROM (SELECT visit_id FROM visit WHERE rm_id = '$r_id') vd, overview_igd o, visit_igd vr, master_dept m, petugas p, petugas pe
                WHERE vd.visit_id = o.visit_id AND o.sub_visit = vr.igd_id AND m.dept_id = vr.unit_tujuan AND vd.visit_id = vr.visit_id 
                AND o.dokter = p.petugas_id AND o.perawat = pe.petugas_id ORDER BY o.waktu DESC";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function search_sebab($search){
        $sql = "SELECT * FROM master_golongan_sebab_penyakit WHERE sebab_penyakit LIKE '%$search%' OR kode_sebab LIKE '%$search%'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;   
    }

    public function save_resume($id, $data){
        $this->db->where('igd_id', $id);
        $update = $this->db->update('visit_igd', $data);

        if($update)
            return true;
        else
            return false;
    }

}

?>