<?php

class Login extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('User_model');
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
        $data['title'] = "daftar";
        $this->load->view('templates/header',$data);
        $this->load->view('halaman_register');
        $this->load->view('templates/footer');
    }

    
}
