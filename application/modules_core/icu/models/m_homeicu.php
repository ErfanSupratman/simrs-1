<?php
class m_homeicu extends CI_Model{
	public function get_search_pasien($query){
		$sql = "SELECT * FROM pasien p, visit v, visit_ri vr, master_dept d 
					WHERE p.rm_id = v.rm_id AND v.visit_id = vr.visit_id 
					AND v.dept_id = d.dept_id AND v.dept_id = 18 
					AND vr.waktu_keluar IS NULL 
					AND p.nama LIKE '%$query%' 
					OR p.rm_id LIKE '%$query%'"; //18 adalah dept_id icu
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_filter_pasien($query, $start, $end){
		$sql = "SELECT * FROM pasien p, visit v, visit_ri vr, master_dept d 
					WHERE p.rm_id = v.rm_id AND v.visit_id = vr.visit_id 
					AND v.dept_id = d.dept_id AND v.dept_id = 18 
					AND vr.waktu_keluar IS NULL 
					AND vr.waktu_masuk BETWEEN '$start' AND '$end'
					AND p.nama LIKE '%$query%' 
					OR p.rm_id LIKE '%$query%'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}
}
?>