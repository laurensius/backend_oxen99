<?php

class Mod_Config extends CI_Model{

    function get_config(){
        $this->db->select('*');
        $this->db->from('t_config');
        $query = $this->db->get();
        return $query->result();
    }

}