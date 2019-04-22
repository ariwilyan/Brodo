<?php

class User extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('kategori_model');
		$this->load->model('sub_kategori_model');
    }


	public function index()
	{
		$data['title'] = "halaman utama";
		$data['kategori'] = $this->kategori_model->getAllKategori();
		$this->load->view('templates/header',$data);
		$this->load->view('halaman_utama',$data);
		$this->load->view('templates/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('login');
		$this->session->sess_destroy();
		redirect("user");
	}
}
