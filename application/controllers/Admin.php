<?php

class Admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url_helper');
		
    }


	// public function index()
	// {
	// 	$data['title'] = "halaman utama";
	// 	$data['kategori'] = $this->kategori_model->getAllKategori();
	// 	$this->load->view('templates/header',$data);
	// 	$this->load->view('halaman_utama',$data);
	// 	$this->load->view('templates/footer');
    // }
    
    public function landing_brodo(){
        $data['title'] = "BRODO - Masuk ke Admin";
        $this->load->view('templates/header_admin',$data);
        $this->load->view('login_admin');
        $this->load->view('templates/footer_admin');
		}

		public function landing_admin(){
			$data['title'] = "BRODO - Beranda Admin";
			$this->load->view('templates/header_admin',$data);
			$this->load->view('home_admin');
			$this->load->view('templates/footer');
	}

	// public function logout()
	// {
	// 	$this->session->unset_userdata('login');
	// 	$this->session->sess_destroy();
	// 	redirect("user");
	// }
}
