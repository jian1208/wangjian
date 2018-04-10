<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{


	 public function __construct()
    {
        parent::__construct();
       

    }
    public function index(){
    	$this->load->view('index');
    }

	public function about(){
		$this->load->view('about');
	}
	public function map(){
		$this->load->view('map');
	}
	public function lifang(){
		$this->load->view('lifang');
	}
	public function picture(){
		$this->load->view('picture');
	}
	public function portfolio(){
		$this->load->view('portfolio');
	}
	public function resume(){
		$this->load->view('resume');
	}
	public function shop(){
		$this->load->view('shop');
	}
	public function testimonials(){
		$this->load->view('testimonials');
	}
	public function xuan(){
		$this->load->view('xuan');
	}

}






?>