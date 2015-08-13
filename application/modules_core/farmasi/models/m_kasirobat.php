<?php  
	/**
	* 
	*/
	class m_kasirobat extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function search_resep($params)
		{
			$rm_id = $params['rm_id'];
			$resep_id = $params['resep_id'];
			$nama_pasien = $params['nama_pasien'];
			$tanggal_resep = $params['tanggal_resep'];

			$sql = "SELECT vr.*,v.tipe_kunjungan, md.nama_dept, p.rm_id, p.nama 
						FROM (select *, SUBSTR(sub_visit, 1, 2)'dept' from visit_resep where status_bayar LIKE 'BELUM') vr 
						left join visit v on v.visit_id = vr.visit_id left join pasien p on p.rm_id = v.rm_id 
						left join master_dept md on md.dept_id = vr.dept";

			if ($rm_id == '' and $resep_id == '' and $nama_pasien == '' and $tanggal_resep == '') {
				
			}else if ($rm_id != '') {
				$sql .= " where p.rm_id = '$rm_id'";
			}else if ($nama_pasien != '') {
				$sql .= " where p.nama LIKE '%$nama_pasien%'";
			}else if ($tanggal_resep != '') {		
				$sql .= " where vr.tanggal LIKE'$tanggal_resep'";
			}else if ($resep_id != '') {
				$sql .= " where vr.resep_id = '$resep_id'";
			}

			$query = $this->db->query($sql);
        	$result = $query->result_array();
        	return $result;
		}

		public function search_resep_bayar($params)
		{
			$rm_id = $params['rm_id'];
			$resep_id = $params['resep_id'];
			$nama_pasien = $params['nama_pasien'];
			$tanggal_resep = $params['tanggal_resep'];

			$sql = "SELECT vr.*,v.tipe_kunjungan, md.nama_dept, p.rm_id, p.nama 
						FROM (select *, SUBSTR(sub_visit, 1, 2)'dept' from visit_resep where status_bayar LIKE 'PROSES') vr 
						left join visit v on v.visit_id = vr.visit_id left join pasien p on p.rm_id = v.rm_id 
						left join master_dept md on md.dept_id = vr.dept";

			if ($rm_id == '' and $resep_id == '' and $nama_pasien == '' and $tanggal_resep == '') {
				
			}else if ($rm_id != '') {
				$sql .= " where p.rm_id = '$rm_id'";
			}else if ($nama_pasien != '') {
				$sql .= " where p.nama LIKE '%$nama_pasien%'";
			}else if ($tanggal_resep != '') {		
				$sql .= " where vr.tanggal LIKE'$tanggal_resep'";
			}else if ($resep_id != '') {
				$sql .= " where vr.resep_id = '$resep_id'";
			}

			$query = $this->db->query($sql);
        	$result = $query->result_array();
        	return $result;
		}
	}
?>