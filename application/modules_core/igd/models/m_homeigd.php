<?php

class m_homeigd extends CI_Model {

// function __construct() {
//         // Call the Model constructor
//         parent::__construct();
//     }
    public function search_pasien($search){
        $sql = "SELECT * FROM pasien p, visit v, visit_igd r WHERE p.rm_id = v.rm_id AND v.visit_id = r.visit_id AND v.status_visit = 'REGISTRASI' AND r.waktu_keluar is NULL AND (p.nama LIKE '%$search%' OR p.rm_id LIKE '%$search%')";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function get_antrian_pasien(){
        $sql = "SELECT * FROM pasien p, visit v, visit_igd r WHERE p.rm_id = v.rm_id AND v.visit_id = r.visit_id AND v.status_visit = 'REGISTRASI' AND r.waktu_keluar is NULL ORDER BY r.waktu_masuk ASC";
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
}

?>