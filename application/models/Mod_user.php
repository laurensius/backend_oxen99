<?php

class Mod_User extends CI_Model{

    function get_raw_user($fn,$ln){
        $query = $this->db->query("SELECT t_fake_user.first_name, (select t_fake_user.last_name from t_fake_user WHERE id='" . $fn . "') as last_name  from t_fake_user WHERE id='" . $ln . "'");
        return $query->result(); 
    }

}