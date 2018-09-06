<?php

class Mod_Cron extends CI_Model{

    function cron_insert($data){
        $this->db->insert('t_cron',$data);
    }

}