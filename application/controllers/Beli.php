<?php

class Beli extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
    }


	public function index()
	 {
	 	$data['title'] = "BRODO - Hasil pencarian untuk";
	 	$this->load->view('templates/header',$data);
	 	$this->load->view('hasilPencarian',$data);
	 	$this->load->view('templates/footer');
    }
    
}
