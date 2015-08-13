<?php

class m_daftarpasien extends CI_Model {

// function __construct() {
//         // Call the Model constructor
//         parent::__construct();
//     }

	public function add_pasien_baru($input){
		$insert = $this->db->insert('pasien',$input);
		if ($insert) {
			// return $this->db->insert_id();
			return true;//$input['rm_id'];
		} else {
			return false;
		}
	}

	public function add_visit($input){
		$insert = $this->db->insert('visit',$input);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}

	public function add_visit_rj($input){
		$insert = $this->db->insert('visit_rj',$input);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}	

	public function add_visit_igd($input){
		$insert = $this->db->insert('visit_igd',$input);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}

	public function add_visit_ri($input){
		$insert = $this->db->insert('visit_ri',$input);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}	

	public function add_visit_inap_kamar($input){
		$insert = $this->db->insert('visit_inap_kamar',$input);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}	

	public function get_dept_rj(){
		$sql = "SELECT * FROM master_dept WHERE jenis = 'POLIKLINIK'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_dept(){
		$sql = "SELECT * FROM master_dept WHERE nama_dept='BERSALIN' OR nama_dept = 'NICU'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_dept_id($v_id){
		$sql = "SELECT dept_id FROM visit WHERE visit_id = '$v_id'";
		$query = $this->db->query($sql);
		$result = $query->row_array();
		return $result;
	}

	public function get_provinsi() {
		$sql = "SELECT * FROM master_provinsi";
		$query = $this->db->query($sql);
		
		$result = $query->result_array();
		return $result;
	}

	public function get_kabupaten_prov($prov) {
		$sql = "SELECT * FROM master_kabupaten WHERE prov_id = '".$prov."'";
		$query = $this->db->query($sql);
		
		$result = $query->result_array();
		return $result;
	}

	public function get_Kecamatan_kab($kab) {
		$sql = "SELECT * FROM master_kecamatan WHERE kab_id = '".$kab."'";
		$query = $this->db->query($sql);
		
		$result = $query->result_array();
		return $result;
	}

	public function get_kelurahan_kec($kec) {
		$sql = "SELECT * FROM master_desa WHERE kec_id = '".$kec."'";
		$query = $this->db->query($sql);
		
		$result = $query->result_array();
		return $result;
	}

	public function get_nama_kamar() {
		$sql = "SELECT * FROM master_kamar GROUP BY nama_kamar";
		$query = $this->db->query($sql);
		
		$result = $query->result_array();
		return $result;
	}

	public function get_kelas_kamar($nama_kamar){
		$sql = "SELECT * FROM master_kamar WHERE nama_kamar = '$nama_kamar'";
		$query = $this->db->query($sql);

		$result = $query->result_array();
		return $result;
	}

	public function get_kamar_dept_id($nama_kamar, $kelas){
		$sql = "SELECT `dept_id` FROM master_kamar WHERE nama_kamar = '$nama_kamar' AND kelas_kamar = '$kelas' LIMIT 1";
		$query = $this->db->query($sql);

		$result = $query->row_array();
		return $result["dept_id"] . "";	
	}

	public function get_kamar_id($nama_kamar, $kelas){
		$sql = "SELECT `kamar_id` FROM master_kamar WHERE nama_kamar = '$nama_kamar' AND kelas_kamar = '$kelas' LIMIT 1";
		$query = $this->db->query($sql);

		$result = $query->row_array();
		return $result["kamar_id"] . "";	
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

	public function create_visit_rj_id($id, $year,$month,$date) {
        $sql = "SELECT SUBSTR(rj_id, 9, 54)'rj_id' FROM visit_rj
        			WHERE SUBSTR(rj_id, 1, 2) = '$id'  
        			AND SUBSTR(rj_id, 3, 2) = '$year' 
        			AND SUBSTR(rj_id, 5, 2) = '$month' 
                    AND SUBSTR(rj_id, 7, 2) = '$date'
        			ORDER BY rj_id 
        			DESC LIMIT 1";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $rj_id = $query->row_array();
            $rj_id = intval($rj_id['rj_id']) + 1;

            if (strlen($rj_id) == '1') {
                $rj_id = '000' . $rj_id;
            } elseif (strlen($rj_id) == '2') {
                $rj_id = '00' . $rj_id;
            } elseif (strlen($rj_id) == '3') {
                $rj_id = '0' . $rj_id;
            } else {
                $rj_id = strlen($rj_id);
            }
            if($id == 9)
            	return '0' . $id . $year . $month . $date . $rj_id;
            else
            	return $id . $year . $month . $date . $rj_id;
        } else {
        	if($id == 9)
            	return '0' . $id . $year . $month . $date .'0001';
            else
            	return $id . $year . $month . $date .'0001';
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

	public function get_search_pasien($search){
		$sql = "SELECT * FROM pasien WHERE nama LIKE '%$search%' OR rm_id LIKE '%$search%'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_kamar($dept_id){
		$sql = "SELECT * FROM master_kamar mk, master_bed mb, (SELECT kamar_id ,count(kamar_id) as jumlah FROM master_bed GROUP BY kamar_id) v, (SELECT kamar_id ,sum(is_dipakai) as terpakai FROM master_bed GROUP BY kamar_id) x WHERE mk.kamar_id = v.kamar_id AND mk.kamar_id = x.kamar_id AND mb.kamar_id = mk.kamar_id AND mk.dept_id = $dept_id";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_bed($query){
		$sql = "SELECT * FROM master_bed WHERE kamar_id = $query";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function update_bed($id_bed, $data){
		$this->db->where('bed_id', $id_bed);
		$update = $this->db->update('master_bed', $data);

		if($update)
			return true;
		else
			return false;
		
	}

	public function get_pasien_rujuk(){
		$sql = "SELECT *, md1.nama_dept as nama_asal, md2.nama_dept as nama_rujuk 
				FROM pasien p, visit v, petugas pt, master_dept md1, master_dept md2, (SELECT r1.* FROM visit_rj r1 LEFT JOIN visit_rj r2
					ON (r1.visit_id = r2.visit_id AND r1.rj_id < r2.rj_id)
					WHERE r2.visit_id IS NULL AND r1.waktu_keluar IS NOT NULL) r 
				WHERE p.rm_id = v.rm_id AND v.visit_id = r.visit_id AND pt.petugas_id = r.dokter_rujuk AND md1.dept_id = r.unit_tujuan AND md2.dept_id = r.unit_rujukan AND status_visit='RUJUK RJ'
				ORDER BY waktu_keluar ASC";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_pasien_rujukan($rj_id){
		$sql = "SELECT *, md1.nama_dept as nama_asal, md2.nama_dept as nama_rujuk 
				FROM pasien p, visit v, petugas pt, master_dept md1, master_dept md2, (SELECT * FROM visit_rj WHERE rj_id = '$rj_id') r 
				WHERE p.rm_id = v.rm_id AND v.visit_id = r.visit_id AND pt.petugas_id = r.dokter_rujuk AND md1.dept_id = r.unit_tujuan AND md2.dept_id = r.unit_rujukan AND status_visit='RUJUK RJ'
				ORDER BY waktu_keluar ASC";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_search_rujukan($value){
		$sql = "SELECT *, md1.nama_dept as nama_asal, md2.nama_dept as nama_rujuk 
				FROM pasien p, visit v, petugas pt, master_dept md1, master_dept md2, (SELECT r1.* FROM visit_rj r1 LEFT JOIN visit_rj r2
					ON (r1.visit_id = r2.visit_id AND r1.rj_id < r2.rj_id)
					WHERE r2.visit_id IS NULL AND r1.waktu_keluar IS NOT NULL) r 
				WHERE p.rm_id = v.rm_id AND v.visit_id = r.visit_id AND pt.petugas_id = r.dokter_rujuk AND md1.dept_id = r.unit_tujuan AND md2.dept_id = r.unit_rujukan AND status_visit='RUJUK RJ' AND (p.nama LIKE '%$value%' OR p.rm_id LIKE '%$value%')
				ORDER BY waktu_keluar ASC";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_pasien_kunjungan(){
		$sql = "SELECT p.rm_id, p.nama, asal.nama_dept as dasal, pt.nama_petugas, p.tanggal_lahir, p.alamat_skr, p.jenis_kelamin, v.tanggal_visit FROM pasien p, visit v, visit_rj vr, master_dept d, visit_overview vo, petugas pt, master_dept asal
				WHERE p.rm_id = v.rm_id	AND v.dept_id = d.dept_id AND v.visit_id = vo.visit_id AND vo.id_pemeriksa = pt.petugas_id
                AND v.dept_id = asal.dept_id AND v.visit_id = vr.visit_id AND v.status_visit = 'REGISTRASI'
				ORDER BY vr.waktu_keluar";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	//Rawat Inap
	public function get_pasien_rujuk_ri(){
		$sql = "SELECT * FROM pasien p, visit v, master_dept d
		WHERE p.rm_id = v.rm_id AND v.dept_id = d.dept_id AND v.status_visit = 'RUJUK INAP'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	 public function update_visit($id, $data){
        $this->db->where('visit_id', $id);
        $update = $this->db->update('visit', $data);

        if($update)
            return true;
        else
            return false;   
    }

}