<?php

class Login extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url_helper');
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['title'] = "login";
        $this->load->view('templates/header',$data);
        $this->load->view('halaman_login');
        $this->load->view('templates/footer');
    }

	public function log_in()
	{
        $cek = $this->User_model->login_check();
        if ($cek>0) {
            $login = [
                "email"=>$this->input->post("email",true)
            ];
            $this->session->set_userdata("login", $login);
            redirect("user");
        } else {
            redirect("user");
        }
        
    }
    
    public function register()
    {
        $this->form_validation->set_rules('Nama_user','Nama Lengkap Brothers', 'required');
        $this->form_validation->set_rules('email','Email Brothers', 'required');
        $this->form_validation->set_rules('password','Kata Sandi', 'required');
        if ($this->form_validation->run() == FALSE){
            $data['title'] = "register";
            $this->load->view('templates/header',$data);
            $this->load->view('halaman_register');
            $this->load->view('templates/footer');
        }else{
            $e = $this->User_model->cekEmail($this->input->post('email', true));
            if($e > 0){
                $this->session->set_flashdata('flashemail', 'Email sudah terdaftar, silakan login');
                redirect('login/register');
            }
            $login = [
                "email" => $this->input->post('email', true),
                "Password" => $this->input->post('password', true),
            ];
            $this->session->set_userdata('login', $login);
            $this->User_model->tambahUser();
            redirect('user');
        }
    }

    
}
