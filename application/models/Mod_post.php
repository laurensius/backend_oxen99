<?php

class Mod_Post extends CI_Model{

    function insert_post($the_post){
        $this->db->insert('t_post',$the_post);
        return $this->db->affected_rows();
    }

    function get_all_post(){
        $this->db->select('*');
        $this->db->from('t_post');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        return $query->result();
    }

    function get_latest_post($limit){
        $this->db->select('*');
        $this->db->from('t_post');
        $this->db->order_by('id','desc');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }

    function get_post_by_slug($slug){
        $this->db->select('*');
        $this->db->from('t_post');
        $this->db->where('post_slug=',$slug);
        $query = $this->db->get();
        return $query->result();
    }

    function delete_post($the_post){
        $this->db->delete('t_post', $the_post);  
        return $this->db->affected_rows();
    }

}