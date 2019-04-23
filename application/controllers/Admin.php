<?php

class Admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
		}
		
		public function login_admin(){
			$cek = $this->Admin_model->login_checkAdmin();
			if ($cek>0) {
				$login = [
					"Username"=>$this->input->post("username",true)
				];
				$this->session->set_userdata("login", $login);
				redirect("admin/landing_home");
			} else {
				redirect("admin/landing_brodo");
			}
		}

		// public function index()
		// {

		// 	$data['judul'] = 'Daftar Mahasiswa';
		// 	$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		// 	if ($this->input->post('keyword')) {
		// 		$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		// 	}
		// 	$this->load->view('templates/header', $data);
		// 	$this->load->view('mahasiswa/index', $data);
		// 	$this->load->view('templates/footer');
		// }

    public function landing_brodo(){
				if ($this->session->login) {
					redirect('admin/landing_home');
				}else {
					$data['title'] = "BRODO - Masuk ke Admin";
					$this->load->view('templates/header_admin',$data);
					$this->load->view('login_admin');
					$this->load->view('templates/footer_admin');
				}
		}

		public function index(){
			$data['title'] = "BRODO - DAFTAR ADMIN";
			$data['admin'] = $this->Admin_model->getAllUser();
			if ($this->input->post('keyword')) {
				$data['admin'] = $this->Admin_model->cariDataAdmin();
			}
			$this->load->view('templates/header_admin',$data);
			$this->load->view('halaman_admin', $data);
			$this->load->view('templates/footer');
		}

		public function landing_home(){
			$data['title'] = "BRODO - Beranda Admin";
			$this->load->view('templates/header_admin',$data);
			$this->load->view('home_admin');
			$this->load->view('templates/footer');
		}

		public function tambah()
		{
			$data['title'] = "Form Tambah Data Admin";

			$this->form_validation->set_rules("nama","Nama","required");
			$this->form_validation->set_rules("username","Username","required");
			$this->form_validation->set_rules("password","Password","required");
			$this->form_validation->set_rules("nohp","No HP","required");
			$this->form_validation->set_rules("alamat","Alamat","required");

			if ($this->form_validation->run()){
				$this->Admin_model->tambahDataAdmin();
				$this->session->set_flashdata('success', 'Ditambahkan');
				redirect('admin/index');
			}
			$this->load->view('templates/header_admin',$data);
			$this->load->view('tambah_admin');
			$this->load->view('templates/footer_admin');
		}

		public function hapus($id)
		{
			$this->db->delete('admin', array('ID_admin' => $id));
			$this->session->set_flashdata('success', 'Dihapus');
			redirect('admin/index');	
		}

		public function ubah($id)
		{
			$data['title'] = 'Form Ubah Data Admin';
			
			if(!isset($id)) redirect('admin/index');
			$this->form_validation->set_rules("nama","Nama","required");
			$this->form_validation->set_rules("username","Username","required");
			$this->form_validation->set_rules("password","Password","required");
			$this->form_validation->set_rules("nohp","No HP","required");
			$this->form_validation->set_rules("alamat","Alamat","required");

			$data['admin'] = $this->Admin_model->getAdminById($id);
			if ($this->form_validation->run()){
				$this->Admin_model->ubahDataAdmin($id);
				$this->session->set_flashdata('success', 'Diubah');
				redirect('admin/index');
			}else{
				$this->load->view('templates/header_admin',$data);
				$this->load->view('ubah_admin',$data);
				$this->load->view('templates/footer_admin');
			}
		}

	public function logout()
	{
		$this->session->unset_userdata('login');
		$this->session->sess_destroy();
		redirect("admin/landing_brodo");
	}
}
