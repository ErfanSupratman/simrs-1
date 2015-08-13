<?php
class m_pilihkamar extends CI_Model{

	public function get_data_pasien(){
		$sql = "SELECT p.rm_id, p.nama, p.jenis_kelamin, p.tanggal_lahir, p.alamat_skr, p.jenis_id, v.visit_id, vr.ri_id, vr.cara_bayar FROM pasien p, visit v, visit_ri vr
		WHERE p.rm_id = v.rm_id AND v.visit_id = vr.visit_id AND v.status_visit = 'REGIS RUJUK INAP' ORDER BY vr.waktu_masuk ASC";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_search_pasien($keyword){
		$sql = "SELECT * FROM pasien p, visit v, visit_inap_kamar vik
		WHERE  (p.nama LIKE '%$keyword%' OR p.rm_id LIKE '%$keyword%')
		AND vik.visit_id = v.visit_id 
		AND p.rm_id = v.rm_id
		AND vik.waktu_masuk is NULL";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_dept(){
		$sql = "SELECT * FROM master_dept WHERE jenis = 'RAWAT INAP'";
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

	public function get_kelas_kamar($insert){
		$sql = "SELECT * FROM master_kamar WHERE nama_kamar = '$insert'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function submit_pilih_kamar($item, $inap_id){
		$this->db->where('inap_id', $inap_id);
		$update = $this->db->update('visit_inap_kamar',$item);
		if($update){
			return true;
		}else{
			return false;
		}
	}

	public function get_bed($inap_id){
		$sql="SELECT bed_id FROM master_bed WHERE kamar_id = $inap_id ORDER BY nama_bed ASC LIMIT 1";
		$query = $this->db->query($sql);
		$result = $query->row_array();
		return $result;
	}

	public function check_bed($query){
		$sql="SELECT * FROM master_bed WHERE kamar_id = $query";
		$query = $this->db->query($sql);
		$result = $query->row_array();
		return $result;
	}
}
?>