<?php

class Produk extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
    }
    
    public function index(){
	 	$data['title'] = "BRODO";
	 	$this->load->view('templates/header',$data);
	 	$this->load->view('produk/index',$data);
	 	$this->load->view('templates/footer');
    }
}
