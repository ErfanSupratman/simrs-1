<?php  
	/**
	* 
	*/
	class m_homenicu extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function search_pasien($search){
			/*SELECT * FROM pasien p, visit v, visit_ri r, master_bed mb, visit_inap_kamar vk, 
					(SELECT dept_id FROM master_dept WHERE nama_dept = 'NICU') m
					WHERE p.rm_id = v.rm_id AND m.dept_id = r.unit_tujuan AND v.visit_id = r.visit_id
					AND vk.ri_id = r.ri_id AND mb.bed_id = vk.bed_id and r.waktu_keluar IS NULL
					AND (v.status_visit = 'REGISTRASI INAP' OR v.status_visit LIKE 'PINDAH') 
					AND (p.nama LIKE '%$search%' OR p.rm_id LIKE '%$search%')*/
			$sql = "SELECT *, IFNULL(mt.nama_dept,'Admisi') as dept_asal FROM pasien p inner join visit v on v.rm_id = p.rm_id 
					inner join visit_ri ri on ri.visit_id = v.visit_id 
					inner join visit_inap_kamar vk on vk.ri_id = ri.ri_id 
					inner join (select dept_id from master_dept where nama_dept = 'NICU') m 
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
			/*SELECT * FROM pasien p, visit v, visit_ri r, master_bed mb, visit_inap_kamar vk,
					(SELECT dept_id FROM master_dept WHERE nama_dept = 'NICU') m
					WHERE p.rm_id = v.rm_id AND m.dept_id = r.unit_tujuan AND v.visit_id = r.visit_id 
					AND (v.status_visit = 'REGISTRASI INAP' OR v.status_visit LIKE 'PINDAH') 
					AND vk.ri_id = r.ri_id AND mb.bed_id = vk.bed_id and r.waktu_keluar IS NULL
					ORDER BY r.waktu_masuk DESC limit 25*/
			$sql = "SELECT *, IFNULL(mt.nama_dept,'Admisi') as dept_asal FROM pasien p inner join visit v on v.rm_id = p.rm_id 
					inner join visit_ri ri on ri.visit_id = v.visit_id 
					inner join visit_inap_kamar vk on vk.ri_id = ri.ri_id 
					inner join (select dept_id from master_dept where nama_dept = 'NICU') m 
					on m.dept_id = ri.unit_tujuan left join (select * from master_dept) mt 
					on mt.dept_id = ri.unit_asal
					where ri.waktu_keluar IS NULL
					AND (v.status_visit = 'REGISTRASI INAP' OR v.status_visit LIKE 'PINDAH') ORDER BY ri.waktu_masuk DESC limit 25";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}

		public function create_rm_id($year,$month) {
	        $sql = "SELECT SUBSTR(rm_id, 5, 54)'rm_id' FROM pasien 
	        			WHERE SUBSTR(rm_id, 1, 2) = '$year' 
	        			AND SUBSTR(rm_id, 3, 2) = '$month' 
	        			ORDER BY rm_id 
	        			DESC LIMIT 1";
	        $query = $this->db->query($sql);
	        if ($query->num_rows() > 0) {
	            $rm_id = $query->row_array();
	            $rm_id = intval($rm_id['rm_id']) + 1;

	            if (strlen($rm_id) == '1') {
	                $rm_id = '000' . $rm_id;
	            } elseif (strlen($rm_id) == '2') {
	                $rm_id = '00' . $rm_id;
	            } elseif (strlen($rm_id) == '3') {
	                $rm_id = '0' . $rm_id;
	            } else {
	                $rm_id = strlen($rm_id);
	            }
	            return $year . $month . $rm_id;
	        } else {
	            return $year . $month . '0001';
	        }
		}

		public function create_visit_id($year,$month,$date) {
	        $sql = "SELECT SUBSTR(visit_id, 7, 54)'visit_id' FROM visit 
	        			WHERE SUBSTR(visit_id, 1, 2) = '$year' 
	        			AND SUBSTR(visit_id, 3, 2) = '$month' 
	                    AND SUBSTR(visit_id, 5, 2) = '$date'
	        			ORDER BY visit_id 
	        			DESC LIMIT 1";
	        $query = $this->db->query($sql);

	        if ($query->num_rows() > 0) {
	            $v_id = $query->row_array();
	            $v_id = intval($v_id['visit_id']) + 1;

	            if (strlen($v_id) == '1') {
	                $v_id = '000' . $v_id;
	            } elseif (strlen($v_id) == '2') {
	                $v_id = '00' . $v_id;
	            } elseif (strlen($v_id) == '3') {
	                $v_id = '0' . $v_id;
	            } else {
	                $v_id = strlen($v_id);
	            }	
	            return $year . $month . $date . $v_id;
	        } else {
	            return $year . $month . $date .'0001';
	        }
		}

		public function create_visit_ri_id($id, $year,$month,$date) {
	        $sql = "SELECT SUBSTR(ri_id, 9, 54)'ri_id' FROM visit_ri
	        			WHERE SUBSTR(ri_id, 1, 2) = '$id'  
	        			AND SUBSTR(ri_id, 3, 2) = '$year' 
	        			AND SUBSTR(ri_id, 5, 2) = '$month' 
	                    AND SUBSTR(ri_id, 7, 2) = '$date'
	        			ORDER BY ri_id 
	        			DESC LIMIT 1";
	        $query = $this->db->query($sql);

	        if ($query->num_rows() > 0) {
	            $ri_id = $query->row_array();
	            $ri_id = intval($ri_id['ri_id']) + 1;

	            if (strlen($ri_id) == '1') {
	                $ri_id = '000' . $ri_id;
	            } elseif (strlen($ri_id) == '2') {
	                $ri_id = '00' . $ri_id;
	            } elseif (strlen($ri_id) == '3') {
	                $ri_id = '0' . $ri_id;
	            } else {
	                $ri_id = strlen($ri_id);
	            }
	            return $id . $year . $month . $date . $ri_id;
	        } else {
	            return $id . $year . $month . $date .'0001';
	        }
		}

		public function create_inap_id($year,$month,$date) {
	        $sql = "SELECT SUBSTR(inap_id, 9, 54)'inap_id' FROM visit_inap_kamar
	        			WHERE SUBSTR(inap_id, 3, 2) = '$year' 
	        			AND SUBSTR(inap_id, 5, 2) = '$month' 
	                    AND SUBSTR(inap_id, 7, 2) = '$date'
	        			ORDER BY inap_id 
	        			DESC LIMIT 1";
	        $query = $this->db->query($sql);

	        if ($query->num_rows() > 0) {
	            $inap_id = $query->row_array();
	            $inap_id = intval($inap_id['inap_id']) + 1;

	            if (strlen($inap_id) == '1') {
	                $inap_id = '000' . $inap_id;
	            } elseif (strlen($inap_id) == '2') {
	                $inap_id = '00' . $inap_id;
	            } elseif (strlen($inap_id) == '3') {
	                $inap_id = '0' . $inap_id;
	            } else {
	                $inap_id = strlen($inap_id);
	            }	
	            return "KM" . $year . $month . $date . $inap_id;
	        } else {
	            return "KM" . $year . $month . $date .'0001';
	        }
		}

		public function insert_kelahiran_baru($params)
		{
			$insert = $this->db->insert('pasien', $params);
			if ($insert) {
				return true;
			} else {
				return false;
			}
		}

		public function add_kelahiran($save) {
			$insert = $this->db->insert('visit_kelahiran',$save);
			if ($insert) {
				return true;
			} else {
				return false;
			}
		}

		public function get_patient_on_bed($search)
		{
			$sql = "SELECT * from visit_ri ri left join visit_inap_kamar vk on vk.ri_id = ri.ri_id 
					left join visit v on v.visit_id = ri.visit_id left join pasien p on p.rm_id = v.rm_id 
					left join (select * from master_kecamatan) kc on kc.kec_id = p.kec_id_skr 
					left join (select * from master_kabupaten) kb on kb.kab_id = kab_id_skr 
					left join (select * from master_desa) md on md.kel_id = p.kel_id_skr 
					where substr(ri.ri_id,1,2) = (select dept_id from master_dept where nama_dept LIKE 'BERSALIN') 
					and ri.waktu_keluar is NULL and p.nama LIKE '%$search'";
			$result = $this->db->query($sql);
			if ($result) {
				return $result->result_array();
			} else {
				return false;
			}
		}

		public function add_new_visit($params)
		{
			$result = $this->db->insert('visit', $params);
			return $result;
		}

		public function add_new_visit_ri($params)
		{
			$result = $this->db->insert('visit_ri', $params);
			return $result;
		}

		public function add_new_visit_kamar($params)
		{
			$result = $this->db->insert('visit_inap_kamar', $params);
			return $result;
		}

		public function update_bed_status($id)
		{
			$this->db->where('bed_id', $id);
			$result = $this->db->update('master_bed', array('is_dipakai' => '1'));
			return $result;
		}
	}
?>