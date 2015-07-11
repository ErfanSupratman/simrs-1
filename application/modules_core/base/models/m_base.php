<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_base extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_menu($user){
        $sql = "SELECT * FROM master_menu WHERE jabatan = '$user'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    function get_menu_admin(){
        $sql = "SELECT * FROM master_menu WHERE parent_id=0";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;   
    }

    function get_child_menu($parent){
        $sql = "SELECT * FROM master_menu WHERE parent_id = $parent";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
}
