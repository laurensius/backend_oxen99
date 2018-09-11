<?php

class Mod_Post extends CI_Model{

    function insert_post_article($the_article){
        $this->db->insert('t_post_article',$the_article);
        return $this->db->affected_rows();
    }

    function insert_post_image($the_image){
        $this->db->insert('t_post_image',$the_image);
        return $this->db->affected_rows();
    }

    function get_all_post(){
        $this->db->select('*');
        $this->db->from('t_post_article');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        return $query->result();
    }

    function get_latest_post($limit){
        $this->db->select('*');
        $this->db->from('t_post_article');
        $this->db->order_by('id','desc');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }

    function get_post_by_slug($slug){
        $this->db->select('*');
        $this->db->from('t_post_article');
        $this->db->where('post_slug=',$slug);
        $query = $this->db->get();
        return $query->result();
    }

    function get_images($xuid){
        $this->db->select('*');
        $this->db->from('t_post_image');
        $this->db->where('xuid=',$xuid);
        $query = $this->db->get();
        return $query->result();
    }



    function delete_post($the_post){
        $this->db->delete('t_post_article', $the_post);  
        return $this->db->affected_rows();
    }

}