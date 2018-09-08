<?php

class Mod_Keyword extends CI_Model{

    function insert_keyword($data){
        $this->db->insert('t_keyword',$data);
        return $this->db->affected_rows();
    }

    function get_keyword_status($data_where){
        $this->db->select('*');
        $this->db->from('t_keyword');
        $this->db->where($data_where);
        $query = $this->db->get();
        return $query->result();
    }

    function count_keyword(){
        $this->db->select('count(*) as total_keyword');
        $this->db->from('t_keyword');
        $query = $this->db->get();
        return $query->result();
    }


}