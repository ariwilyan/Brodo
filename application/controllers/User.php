<?php

class User extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('kategori_model');
		$this->load->model('sub_kategori_model');
		$this->load->model('Item_model');
    }


	public function index()
	{
		$data['title'] = "BRODO";
		$data['kategori'] = $this->kategori_model->getAllKategori();
		$this->load->view('templates/header',$data);
		$this->load->view('halaman_utama',$data);
		$this->load->view('templates/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('login');
		$this->session->sess_destroy();
		redirect("login/index");
	}
	public function item($no_sub_kategori)
	{
		$data['title'] = "Item";
		$data['kategori'] = $this->kategori_model->getAllKategori();
		$data['sub_kategori'] = $this->sub_kategori_model->getSubKategoriByNoSubKategori($no_sub_kategori);
		$data['item'] = $this->Item_model->getItemByKategori($no_sub_kategori);
		$this->load->view('templates/header',$data);
		$this->load->view('halaman_kategori',$data);
		$this->load->view('templates/footer');	
	}
}
