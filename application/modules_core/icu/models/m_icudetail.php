<?php

class m_icudetail extends CI_Model{

	public function get_identitas_pasien($rm_id){
		$sql = "SELECT * FROM pasien WHERE rm_id = $rm_id LIMIT 1";
		$query = $this->db->query($sql);

		$result = $query->result_array();
		return $result;
	}

	public function get_ruang($visit_id){
		$sql = "SELECT * FROM visit_inap_kamar vik, master_kamar mk, master_bed mb 
					WHERE vik.kamar_id = mk.kamar_id 
					AND vik.bed_id = mb.bed_id 
					AND vik.visit_id = '$visit_id' LIMIT 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;

	}

	public function get_paket_makan(){
		$sql = "SELECT * FROM master_paket_makan";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function search_paket_makan($search){
		$sql = "SELECT * FROM master_paket_makan WHERE nama_paket LIKE '%$search%'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function add_permintaan_makan($input){
		$insert = $this->db->insert('permintaan_makan',$input);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}

	public function get_permintaan_makan($id){
		$sql = "SELECT * FROM permintaan_makan pm, master_paket_makan m WHERE pm.paket_id = m.paket_id AND  id = '$id'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function get_permintaan_awal($visit_id){
		$sql = "SELECT * FROM permintaan_makan pm, master_paket_makan m WHERE pm.paket_id = m.paket_id AND  visit_id = '$visit_id'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function create_permintaan_makan($visit_id){
		$sql = "SELECT SUBSTR(id, 13, 4)'id' FROM permintaan_makan 
        			WHERE SUBSTR(id, 3, 10) = '$visit_id' 
        			ORDER BY visit_id 
        			DESC LIMIT 1";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $id = $query->row_array();
            $id = intval($id['id']) + 1;

            if (strlen($id) == '1') {
                $id = '000' . $id;
            } elseif (strlen($id) == '2') {
                $id = '00' . $id;
            } elseif (strlen($id) == '3') {
                $id = '0' . $id;
            } else {
                $id = $id;
            }	
            return "MA" . $visit_id . $id;
        } else {
            return "MA" . $visit_id .'0001';
        }
	}

	public function hapus_permintaan($id){
		$result = $this->db->delete('permintaan_makan',array('id'=>$id));
		return $result;
	}
}

?>