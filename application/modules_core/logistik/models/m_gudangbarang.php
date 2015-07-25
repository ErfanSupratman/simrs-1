<?php  
	/**
	* 
	*/
	class M_gudangbarang extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function insert_new_barang($insert)
		{
			$res = $this->db->insert('barang', $insert);
			if ($res) {
				return true;
			}else{
				return false;
			}
		}

		public function search_barang($katakunci)
		{
			$sql = "SELECT nama, barang_id from barang";
			$res = $this->db->query($sql);
			if ($res->num_row() > 0) {
				return $res->result_array();
			}else{
				return false;
			}
		}
	}
?>