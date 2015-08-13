<?php
class m_homerawatjalan extends CI_Model{
	public function get_search_pasien($query){
		$sql = "SELECT * FROM pasien p, visit v, visit_rj vr, master_dept d 
					WHERE p.rm_id = v.rm_id AND v.visit_id = vr.visit_id 
					AND v.dept_id = d.dept_id AND v.dept_id = 10
					AND vr.waktu_keluar IS NULL AND v.status_visit = 'REGISTRASI'
					AND p.nama LIKE '%$query%' 
					OR p.rm_id LIKE '%$query%'"; //10 adalah dept_id poli umum
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_filter_pasien($query, $start, $end){
		$sql = "SELECT * FROM pasien p, visit v, visit_rj vr, master_dept d 
					WHERE p.rm_id = v.rm_id AND v.visit_id = vr.visit_id 
					AND v.dept_id = d.dept_id AND v.dept_id = 10
					AND vr.waktu_keluar IS NULL 
					AND vr.waktu_masuk BETWEEN '$start' AND '$end'
					AND p.nama LIKE '%$query%' 
					OR p.rm_id LIKE '%$query%'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function daftar_pasien(){
		$sql = "SELECT * FROM pasien p, visit v, visit_rj vr, master_dept d 
			WHERE p.rm_id = v.rm_id AND v.visit_id = vr.visit_id 
			AND v.dept_id = d.dept_id AND vr.unit_tujuan = 10
			AND vr.waktu_keluar IS NULL AND v.status_visit = 'REGISTRASI'
			ORDER BY vr.waktu_masuk ASC"; //10 adalah dept_id poli umum

			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
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
}
?>