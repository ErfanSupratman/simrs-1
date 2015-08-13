<?php  
	/**
	* created by jemsnaban 
	*/
	class m_bersalin extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}


		public function get_search_pasien($query){
			$sql = "SELECT * FROM pasien p, visit v, visit_ri vr, master_dept d 
						WHERE p.rm_id = v.rm_id AND v.visit_id = vr.visit_id 
						AND v.dept_id = d.dept_id AND v.dept_id = 19 
						AND vr.waktu_keluar IS NULL 
						AND p.nama LIKE '%$query%' 
						OR p.rm_id LIKE '$query'"; //19 adalah dept_id bersalin
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;

			/*select * from 
			(select * from visit v where tipe_kunjungan = 'RAWAT INAP' and visit_id = '1505240002') v 
			left join visit_ri vr on v.visit_id = vr.visit_id left 
			join visit_inap_kamar vk on vk.visit_id = vr.visit_id 
			left join master_kamar mk on mk.kamar_id = vk.kamar_id 
			left join master_bed mb on mb.bed_id = vk.bed_id*/
		}

		public function get_all_petugas()
	    {
	    	$sql = "SELECT petugas_id, nama_petugas from petugas";
	    	if ($query = $this->db->query($sql)) {
	    		return $query->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_all_department_ri()
	    {
	    	$sql = "SELECT * from master_dept where jenis LIKE 'RAWAT INAP' AND dept_id != '19'";
	    	if ($query = $this->db->query($sql)) {
	    		return $query->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function visit_ri_info($visit_id)
	    {
	    	$sql = "SELECT * from visit_ri where visit_id = '$visit_id'";
	    	if ($query = $this->db->query($sql)) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_pasien_on_bed($visit_id)
	    {
	    	$sql = "SELECT * from visit_inap_kamar vk 
	    		left join master_kamar mk on vk.kamar_id = mk.kamar_id 
	    		left join master_bed mb on vk.bed_id = mb.bed_id 
	    		where vk.visit_id = '$visit_id' ";
    		if ($query = $this->db->query($sql)) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    /*pasien mulai dari sini*/
		public function get_pasien_by_dept($dept_id='')
		{
			$sql = "SELECT * 
                  FROM pasien p, visit v, master_dept d, visit_ri vr
                  WHERE p.rm_id = v.rm_id AND v.dept_id = d.dept_id 
                  AND v.visit_id = vr.visit_id  
                  AND vr.waktu_keluar IS NULL 
                  AND d.dept_id = ?";
        	$query = $this->db->query($sql, $dept_id);
	        if ($query) {
	            return $query->result_array();
	        }else{
	            return false;
	        }
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
	    /*akhir data pasien*/

	    /*mulai overview*/
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
	    /*akhir overview*/

	    /*tindakan mulai dari sini*/
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

	    public function save_tindakan($value='')
	    {
	    	$query = $this->db->insert('visit_care',$value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }
	    /*akhir tindakan*/

	    /*visit care mulai di sini*/
	    public function get_visit_care($value='')
	    {
	    	$sql = "SELECT * from visit_care v, petugas b, master_tindakan t,
	    			master_tindakan_kategori m, visit vb 
	    			where 
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

	    public function get_last_visit_care($visit_id)
	    {
	    	$sql = "SELECT max(care_id) as value from visit_care where  visit_id ='$visit_id'";
	    	$query = $this->db->query($sql);
	    	if ($query) {
	    		return $query->row_array();
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
	    /*akhir visit care*/

	    /*visit resep mulai di sini*/
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

	    public function get_last_visit_resep($visit_id)
	    {
	    	$sql = "SELECT max(resep_id) as value from visit_resep where visit_id='$visit_id'";
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

	    public function delete_resep($value='')
	    {
	    	$sql = "delete from visit_resep where resep_id = ?";
	    	$query = $this->db->query($sql, $value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }
	    /*akhir resep*/

	    /*untuk visit gizi di sini*/
	    public function get_last_visit_gizi($visit_id)
	    {
	    	$sql = "SELECT max(gizi_id) as value from visit_gizi where visit_id='$visit_id'";
	    	$query = $this->db->query($sql);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function save_visit_gizi($value='')
	    {
	    	$query = $this->db->insert('visit_gizi',$value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_inserted_visit_gizi($value='')
	    {
	    	$sql = "SELECT *
			FROM visit_gizi v
			inner JOIN petugas p ON v.konsultan = p.petugas_id AND v.gizi_id = ?";
	    	$query = $this->db->query($sql, $value);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_visit_gizi($value='')
	    {
	    	$sql = "SELECT *
			FROM visit_gizi v
			inner JOIN petugas p ON v.konsultan = p.petugas_id AND v.visit_id = ?";
			$query = $this->db->query($sql, $value);
			if ($query) {
				return $query->result_array();
			}else{
				return false;
			}
	    }

	    public function delete_gizi($value='')
	    {
	    	$sql = "delete from visit_gizi where gizi_id = ?";
	    	$query = $this->db->query($sql, $value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }
	    /*akhir visit gizi*/

	    /*order kamar operasi*/
	    public function get_department_operasi()
	    {
	    	
	    }

	    public function get_last_order_operasi($visit_id)
	    {
	    	$sql = "SELECT max(order_operasi_id) as value from order_operasi where visit_id='$visit_id'";
	    	$query = $this->db->query($sql);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_inserted_order_operasi($order_id='')
	    {
	    	$sql = "SELECT *
			FROM order_operasi o
			inner JOIN petugas p ON o.pengirim = p.petugas_id inner join master_dept t on o.dept_tujuan = t.dept_id
			AND o.order_operasi_id = ?";
	    	$query = $this->db->query($sql, $order_id);
	    	if ($query) {
	    		return $query->row_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_order_operasi($visit_id='')
	    {
	    	$sql = "SELECT * from order_operasi o, petugas b, master_dept t
	    			where 
	    			o.pengirim = b.petugas_id
	    			AND o.dept_id = '19' AND t.dept_id = o.dept_tujuan AND
	    			o.visit_id = ?";
	    	$query = $this->db->query($sql, $visit_id);
	    	if ($query) {
	    		return $query->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function save_order_operasi($value='')
	    {
	    	$query = $this->db->insert('order_operasi', $value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function delete_order($value='')
	    {
	    	$sql = "delete from order_operasi where order_operasi_id = ?";
	    	$query = $this->db->query($sql, $value);
	    	if ($query) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    /*akhir order kamar operasi*/


	    /*permintaan makan*/
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
			$sql = "SELECT * FROM permintaan_makan pm, master_paket_makan m WHERE pm.paket_id = m.paket_id AND  pm.id = '$id'";
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
	        			ORDER BY SUBSTR(id, 13, 4) 
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

		public function delete_permintaan_makan($value='')
		{
			$sql = "DELETE from permintaan_makan where id = '$value'";
			$query = $this->db->query($sql);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}

	    /*akhir permintaan makan*/

	    /*visit kegiatan bersalin*/
	    public function get_dept_rujukan()
	    {
	    	$sql = "SELECT * from master_dept m where m.dept_id != 19 and m.jenis like '%INAP%' or m.jenis like '%PENUNJANG%'";
	    	$query = $this->db->query($sql);
	    	if($query){
	    		return $query->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function get_last_kegiatan_bersalin($datas)
	    {
	    	$sql = "SELECT MAX(SUBSTR(bersalin_id, 9, 4 ))'id' FROM visit_kegiatan_bersalin";
	        $query = $this->db->query($sql);

	        $y = SUBSTR($datas['waktu'], 2, 2);	
	        $m = SUBSTR($datas['waktu'], 5, 2);
	        $d = SUBSTR($datas['waktu'], 8, 2);
	        if ($datas['dirujuk_ke'] == "-") {
	            	$datas['dirujuk_ke'] = "19";
	            }
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
	            return $datas['dirujuk_ke']. $y. $m. $d. $id;
	        } else {
	            return $datas['dirujuk_ke']. $y. $m. $d.'0001';
	        }
	    }
	    public function insert_kegiatan_bersalin($value='')
	    {
	    	$result = $this->db->insert('visit_kegiatan_bersalin', $value);
	    	if ($result) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }
	    /*akhir visit kegiatan bersalin*/

    	/*riwayat penyakit*/
		public function get_all_medical_record($rm_id= '')
		{
			$sql = "SELECT * FROM visit v 
					LEFT JOIN master_dept rd ON rd.dept_id = v.dept_id
					WHERE v.rm_id = '$rm_id' group by v.visit_id";
					//LEFT JOIN petugas p ON p.petugas_id = vst.petugas_id

			$result = $this->db->query($sql);
			if ($result) {		
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function get_riwayat($visit_id)
		{
			$sql = "SELECT * FROM visit v 
					LEFT JOIN master_dept rd ON rd.dept_id = v.dept_id
	                Left join visit_overview vo ON v.visit_id = vo.visit_id
					LEFT JOIN petugas p ON p.petugas_id = vo.id_pemeriksa
	                WHERE v.visit_id = '$visit_id' group by v.visit_id";

			$result = $this->db->query($sql);
			if ($result) {		
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function get_therapy_riwayat($visit_id){

		}

		public function get_resep_riwayat($visit_id){
			$sql = "SELECT vr.* FROM visit v 
					LEFT JOIN master_dept rd ON rd.dept_id = v.dept_id
	                Left join visit_resep vr ON v.visit_id = vr.visit_id
					LEFT JOIN petugas p ON p.petugas_id = vr.dokter
	                WHERE v.visit_id = '$visit_id' group by v.visit_id";

			$result = $this->db->query($sql);
			if ($result) {		
				return $result->result_array();
			}else{
				return false;
			}
		}

		public function get_penunjang_riwayat($visit_id){

		}

		/*akhir riwayat penyakit*/

		/*checkout*/
		public function update_rawat_info($params, $visit_id)
		{
			$this->db->where('visit_id', $visit_id);
			$update = $this->db->update('visit_ri',$params);
			if ($update) {
				return true;
			} else {
				return false;
			}
		}

		public function update_visit_kamar($params, $inap_id)
		{
			$this->db->where('inap_id', $inap_id);
			$update = $this->db->update('visit_inap_kamar',$params);
			if ($update) {
				return true;
			} else {
				return false;
			}
		}

		public function update_kamar_info($params, $bed_id)
		{
			$this->db->where('bed_id', $bed_id);
			$update = $this->db->update('master_bed',$params);
			if ($update) {
				return true;
			} else {
				return false;
			}
		}

		//kurang pemberian biaya dan checkout ke department lain di rumah sakit

		/*checkout akhir*/

		/**/

		/**/

	}
?>