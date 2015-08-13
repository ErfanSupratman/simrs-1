<?php

class m_daftarpasien extends CI_Model {

	public function get_identitas_pasien($rm_id){
		$sql = "SELECT * FROM pasien WHERE rm_id = '$rm_id' LIMIT 1";
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

    public function get_carabayar($visit_id){
    	$sql = "SELECT `cara_bayar` FROM visit WHERE visit_id = '$visit_id'";
		$query = $this->db->query($sql);
		$result = $query->row_array();
		return $result;    
	}

    public function get_prov($prov)
    {
    	$sql = "SELECT * FROM master_provinsi where prov_id = ?";
    	//$this->db->where($rm_id);
    	$query = $this->db->query($sql,$prov);
    	if ($query) {
    		return $query->row_array();
    	}else{
    		return false;
    	}
    }

    public function get_kab($prov)
    {
    	$sql = "SELECT * FROM master_kabupaten where kab_id = ?";
    	//$this->db->where($rm_id);
    	$query = $this->db->query($sql,$prov);
    	if ($query) {
    		return $query->row_array();
    	}else{
    		return false;
    	}
    }

    public function get_kec($prov)
    {
    	$sql = "SELECT * FROM master_kecamatan where kec_id = ?";
    	//$this->db->where($rm_id);
    	$query = $this->db->query($sql,$prov);
    	if ($query) {
    		return $query->row_array();
    	}else{
    		return false;
    	}
    }

    public function get_kel($prov)
    {
    	$sql = "SELECT * FROM master_desa where kel_id = ?";
    	//$this->db->where($rm_id);
    	$query = $this->db->query($sql,$prov);
    	if ($query) {
    		return $query->row_array();
    	}else{
    		return false;
    	}
    }

    public function get_last_visit_resep()
    {
    	$sql = "SELECT max(resep_id) as value from visit_resep";
    	$query = $this->db->query($sql);
    	if ($query) {
    		return $query->row_array();
    	}else{
    		return false;
    	}
    }

    public function save_visit_resep($value='')
    {
    	$query = $this->db->insert('visit_resep',$value);
    	if ($query) {
    		return true;
    	}else{
    		return false;
    	}
    }

    public function get_inserted_visit_resep($value='')
    {
    	$sql = "SELECT *
		FROM visit_resep v
		inner JOIN petugas p ON v.dokter = p.petugas_id AND v.resep_id = ?";
    	$query = $this->db->query($sql, $value);
    	if ($query) {
    		return $query->row_array();
    	}else{
    		return false;
    	}
    }

    public function get_visit_resep($value='')
    {
    	$sql = "SELECT *
		FROM visit_resep v
		inner JOIN petugas p ON v.dokter = p.petugas_id AND v.visit_id = ?";
		$query = $this->db->query($sql, $value);
		if ($query) {
			return $query->result_array();
		}else{
			return false;
		}
    }

    public function get_dokter(){
    	$sql = "SELECT * FROM petugas WHERE jabatan = 'Dokter'";
    	$query = $this->db->query($sql);
    	$result = $query->result_array();
    	return $result;
    }

    public function get_overview_history($v_id)
    {
        $sql = "SELECT * FROM visit_overview v where v.visit_id = '$v_id'";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->result_array();
        }else{
            return false;
        }
    }

    public function insert_overview($value)
    {
        //insert ke overview
        $query = $this->db->insert('visit_overview',$value);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    public function save_tindakan($value='')
    {
        $query = $this->db->insert('visit_care',$value);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }

    public function get_inserted_visit_care($value='')
    {
        $sql = "SELECT * from visit_care v, petugas b, master_tindakan t,
                master_tindakan_kategori m, visit vb 
                where 
                v.visit_id = vb.visit_id AND v.paramedis = b.petugas_id
                AND v.tindakan_id = t.tindakan_id AND v.kat_id = m.kat_id AND
                v.care_id = ?";
        $query = $this->db->query($sql, $value);
        if ($query) {
            return $query->row_array();
        }else{
            return false;
        }
    }

    public function get_last_visit_care($visit_id)
    {
        $sql = "SELECT max(care_id) as value from visit_care WHERE visit_id = '$visit_id'";
        $query = $this->db->query($sql);
        if ($query) {
            return $query->row_array();
        }else{
            return false;
        }
    }

    public function get_overview_id($visit_id){
        $sql = "SELECT SUBSTR(overview_id, 11, 54)'overview_id' FROM visit_overview 
                WHERE visit_id = '$visit_id'
                ORDER bY overview_id DESC
                LIMIT 1";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $o_id = $query->row_array();
            $o_id = intval($o_id['overview_id']) + 1;

            if (strlen($o_id) == '1') {
                $o_id = '0' . $o_id;
            } else {
                $o_id = $o_id;
            }
            return $visit_id . $o_id;
        }else{
            return $visit_id . '01';
        }
    }

    public function get_visit_care($value=''){
        $sql = "SELECT * FROM visit_care v, petugas b, master_tindakan t,
                master_tindakan_kategori m, visit vb 
                WHERE 
                v.visit_id = vb.visit_id AND v.paramedis = b.petugas_id
                AND v.tindakan_id = t.tindakan_id AND v.kat_id = m.kat_id AND
                v.visit_id = ?";
        $query = $this->db->query($sql, $value);
        if ($query) {
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function get_master_tindakan($value='')
        {
            $sql = "SELECT * from master_tindakan";
            $query = $this->db->query($sql);
            if ($query) {
                return $query->result_array();
            }else{
                return false;
            }
        }

    public function get_tindakan_kategori()
    {
        $sql = "SELECT * from master_tindakan_kategori";
        $query = $this->db->query($sql);
        if ($query) {
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function get_tindakan($id)
        {
            $sql = "SELECT * from master_tindakan where tindakan_id = ?";
            $query = $this->db->query($sql, $id);
            if ($query) {
                return $query->row_array();
            }else{
                return false;
            }
        }

    public function search_dokter($search){
        $sql = "SELECT * FROM petugas WHERE nama_petugas LIKE '%$search%' AND jabatan = 'Dokter'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }


}
