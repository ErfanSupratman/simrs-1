<?php
class m_homeicu extends CI_Model{
	public function search_pasien($search){
		$sql = "SELECT * FROM pasien p, visit v, visit_ri r, (SELECT dept_id FROM master_dept WHERE nama_dept = 'ICU') m WHERE p.rm_id = v.rm_id AND m.dept_id = r.unit_tujuan AND v.visit_id = r.visit_id AND v.status_visit = 'REGISTRASI INAP' AND (p.nama LIKE '%$search%' OR p.rm_id LIKE '%$search%')";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_antrian_pasien(){
		$sql = "SELECT * FROM pasien p, visit v, visit_ri r, (SELECT dept_id FROM master_dept WHERE nama_dept = 'ICU') m WHERE p.rm_id = v.rm_id AND m.dept_id = r.unit_tujuan AND v.visit_id = r.visit_id AND v.status_visit = 'REGISTRASI INAP' ORDER BY r.waktu_masuk DESC";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}
}
?>