<?php

class Mod_Badword extends CI_Model{

    function get_badword(){
        $this->db->select('badword');
        $this->db->from('badword');
        $query = $this->db->get();
        return $query->result();
    }

}