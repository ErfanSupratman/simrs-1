<?php
class m_homeicu extends CI_Model{
	public function search_pasien($search){
			$sql = "SELECT *, IFNULL(mt.nama_dept,'Admisi') as dept_asal FROM pasien p inner join visit v on v.rm_id = p.rm_id 
					inner join visit_ri ri on ri.visit_id = v.visit_id 
					inner join visit_inap_kamar vk on vk.ri_id = ri.ri_id 
					inner join (select dept_id from master_dept where nama_dept = 'ICU') m 
					on m.dept_id = ri.unit_tujuan left join (select * from master_dept) mt 
					on mt.dept_id = ri.unit_asal
					where ri.waktu_keluar IS NULL
					AND (v.status_visit = 'REGISTRASI INAP' OR v.status_visit LIKE 'PINDAH') 
					AND (p.nama LIKE '%$search%' OR p.rm_id LIKE '%$search%')";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}

	public function get_antrian_pasien(){
			$sql = "SELECT *, IFNULL(mt.nama_dept,'Admisi') as dept_asal FROM pasien p inner join visit v on v.rm_id = p.rm_id 
					inner join visit_ri ri on ri.visit_id = v.visit_id 
					inner join visit_inap_kamar vk on vk.ri_id = ri.ri_id 
					inner join (select dept_id from master_dept where nama_dept = 'ICU') m 
					on m.dept_id = ri.unit_tujuan left join (select * from master_dept) mt 
					on mt.dept_id = ri.unit_asal
					where ri.waktu_keluar IS NULL
					AND (v.status_visit = 'REGISTRASI INAP' OR v.status_visit LIKE 'PINDAH') ORDER BY ri.waktu_masuk DESC limit 25";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
}
?>