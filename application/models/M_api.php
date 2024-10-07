<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_api extends CI_Model {
 public function Get_user_by_id($tbl_name,$clm_name,$user_id) {
    return $this->db->get_where($tbl_name, array($clm_name => $user_id))->row();
}

public function Get_All_byid($tbl_name,$clm_name,$user_id) {
    return $this->db->get_where($tbl_name, array($clm_name => $user_id))->result_array();
}
public function insert_All($tblnya,$data)
{
    return $this->db->insert($tblnya, $data);
}
public function get_All_data($tbl_name){
    $query = $this->db->query('SELECT * FROM `'.$tbl_name.'`')->result_array();
    return $query;
}

}