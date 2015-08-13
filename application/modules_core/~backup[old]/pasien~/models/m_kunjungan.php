<?php

class m_daftarpasien extends CI_Model {

// function __construct() {
//         // Call the Model constructor
//         parent::__construct();
//     

	public function get_search_kunjungan($search){
		$sql = "SELECT * from `visit` v, `pasien` p 
					WHERE v.rm_id = p.rm_id 
					AND v.dept_id=1 OR v.dept_id=2 
					AND nama LIKE '%".$search."%' 
					OR p.rm_id LIKE '%".$search."%'"; //1 dan 2 pada dept_id adalah rawat inap dan rawat jalan
		$query = $this->db->query($sql);

		$result = $query->result_array();
		return $result;
	}
	
}