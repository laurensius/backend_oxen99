<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mod_config');
		$this->load->model('mod_post');
		$this->site_config = $this->mod_config->get_config();
		$this->theme = $this->site_config[0]->site_theme;
	}

	public function index(){
		$data["config"] = $this->site_config;
		$data["latest_post"] = $this->mod_post->get_latest_post($this->site_config[0]->post_homepage);
		$this->load->view($this->theme.'/template',$data);
	}

	public function detail($slug){
		$data["config"] = $this->site_config;
		$data["latest_post"] = $this->mod_post->get_latest_post($this->site_config[0]->post_homepage);
		$data["detail"] = $this->mod_post->get_post_by_slug($slug);
		$data["images"] = $this->mod_post->get_images($data["detail"][0]->xuid);
		$this->load->view($this->theme.'/singlepost',$data);
	}


	public function copyright(){
		echo "Copyright";
	}

	public function privacy_policy(){
		echo "Privacy Policy";
	}

	public function toc(){
		echo "Terms and Conditions";
	}

	public function contact_us(){
		echo "Contact Us";
	}

	public function sitemap(){
		header("Content-Type: text/xml;charset=iso-8859-1");
		$data["posts"] = $this->mod_post->get_all_post();
		$this->load->view($this->theme.'/sitemap',$data);	
	}


	
}
