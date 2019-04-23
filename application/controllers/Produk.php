<?php

class Produk extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
        $this->load->model('Sub_kategori_model');
        $this->load->helper('url_helper');
        $this->load->library('form_validation');
    }

    public function halaman_produk(){
        $data['title'] = "DAFTAR ITEM PRODUK";
        $data['item'] = $this->Item_model->getAllItem();
        $this->load->view('templates/header_admin',$data);
        $this->load->view('halaman_produk',$data);
        $this->load->view('templates/footer_admin');
    }

    public function do_upload()
    {

        $config['upload_path']          =  './assets/gambar/'; //isi dengan nama folder temoat menyimpan gambar
        $config['allowed_types']        =  'gif|jpg|png'; //isi dengan format/tipe gambar yang diterima

        $this->load->library('upload', $config);

        //lengkapi kondisi berikut
        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('V_Upload_form', $error);        
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('V_Upload_success', $data);
        }
    }

    public function tambah()
	{
        $data['title'] = "Form Tambah Data Produk";

        $this->form_validation->set_rules("nama","Nama Item","required");
        $this->form_validation->set_rules("harga","Harga","required");
        $this->form_validation->set_rules("deskripsi","Deskripsi","required");
        $this->form_validation->set_rules("foto","Foto");
        $this->form_validation->set_rules("subkategori","Sub Kategori","required");

        if ($this->form_validation->run()){
            $this->session->set_flashdata('berhasil', 'Ditambahkan');
            $this->Item_model->tambahItem();
            redirect('produk/halaman_produk');
        }
        else{
            $data['sub_kategori'] = $this->Sub_kategori_model->getAllSubKategori();
            $this->load->view('templates/header_admin',$data);
            $this->load->view('tambah_produk',$data);
            $this->load->view('templates/footer_admin');
        }
    }
    
    public function hapus($id)
	{
        $this->Item_model->hapusItem($id, $this->input->get("foto",true));
        $this->session->set_flashdata('berhasil', 'Dihapus');
        redirect("produk/halaman_produk");
    }

    public function ubah($id){
        $data['title'] = "Form Ubah Data Produk";
        $this->form_validation->set_rules("nama","Nama Item","required");
        $this->form_validation->set_rules("harga","Harga","required");
        $this->form_validation->set_rules("deskripsi","Deskripsi","required");
        $this->form_validation->set_rules("foto","Foto");
        $this->form_validation->set_rules("subkategori","Sub Kategori","required");

        $data['item'] = $this->Item_model->getItemById($id);
        if ($this->form_validation->run()){
            $this->session->set_flashdata('berhasil', 'Diubah');
            $this->Item_model->ubahItem($this->input->post('id',true));
            redirect('produk/halaman_produk');
        }
        else{
            $data['sub_kategori'] = $this->Sub_kategori_model->getAllSubKategori();
            $this->load->view('templates/header_admin',$data);
            $this->load->view('ubah_produk',$data);
            $this->load->view('templates/footer_admin');
        }
    }

}