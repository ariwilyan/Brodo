<?php
class Item_model extends CI_Model {
    public function getItemByKategori($no_sub_kategori){
        $this->db->where('no_sub_kategori',$no_sub_kategori);
        $que = $this->db->get('item');
        return $que->result_array();
        
    }
    public function getAllItem()
    {
        $que = $this->db->query("SELECT i.ID_item,i.Nama_item, i.Harga_item, i.Deskripsi_item, i.Foto, k.nama_sub_kategori,k.no_sub_kategori FROM item i JOIN sub_kategori k ON i.no_sub_kategori = k.no_sub_kategori;");
        return $que->result_array();
    }

    public function getItemById($id_item)
    {
        $que = $this->db->query("SELECT i.ID_item,i.Nama_item, i.Harga_item, i.Deskripsi_item, i.Foto, k.nama_sub_kategori,k.no_sub_kategori FROM item i JOIN sub_kategori k ON i.no_sub_kategori = k.no_sub_kategori WHERE ID_item = $id_item");
        return $que->result_array();
    }
    public function findItemByKey($key)
    {
        $que = $this->db->query("SELECT i.ID_item,i.Nama_item, i.Harga_item, i.Deskripsi_item, i.Foto, k.nama_sub_kategori,k.no_sub_kategori FROM item i JOIN sub_kategori k ON i.no_sub_kategori = k.no_sub_kategori WHERE i.Nama_item LIKE '%$key%' OR i.Harga_item LIKE '%$key%' OR i.Deskripsi_item LIKE '%$key%' OR k.nama_sub_kategori LIKE '%$key%'");
        return $que->result_array();
    }

    public function tambahItem()
    {
        $config['upload_path']          =  './assets/gambar/'; //isi dengan nama folder tempat menyimpan gambar
        $config['allowed_types']        =  'gif|jpg|png|jpeg'; //isi dengan format/tipe gambar yang diterima
        
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('foto'))
        {
            $data=[
                "Nama_item" => $this->input->post('nama',true),
                "Harga_item" => $this->input->post('harga', true),
                "Deskripsi_item" => $this->input->post('deskripsi',true),
                "no_sub_kategori" => $this->input->post('subkategori', true)
            ];
            $this->db->insert('item',$data);
        }
        else
        {
            $data=[
                "Nama_item" => $this->input->post('nama',true),
                "Harga_item" => $this->input->post('harga', true),
                "Deskripsi_item" => $this->input->post('deskripsi',true),
                "Foto" => $this->upload->data('file_name'),
                "no_sub_kategori" => $this->input->post('subkategori', true)
            ];
            $this->db->insert('item',$data);
        }
        redirect('produk/halaman_produk');
    }

    public function ubahItem($id)
    {
        $config['upload_path']          =  './assets/gambar/'; //isi dengan nama folder tempat menyimpan gambar
        $config['allowed_types']        =  'gif|jpg|png|jpeg'; //isi dengan format/tipe gambar yang diterima
        
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('foto'))
        {
            $data=[
                "Nama_item" => $this->input->post('nama',true),
                "Harga_item" => $this->input->post('harga', true),
                "Deskripsi_item" => $this->input->post('deskripsi',true),
                "no_sub_kategori" => $this->input->post('subkategori', true)
            ];
            $this->db->where('ID_item',$id);
            $this->db->update('item',$data);
        }
        else
        {
            $data=[
                "Nama_item" => $this->input->post('nama',true),
                "Harga_item" => $this->input->post('harga', true),
                "Deskripsi_item" => $this->input->post('deskripsi',true),
                "Foto" => $this->upload->data('file_name'),
                "no_sub_kategori" => $this->input->post('subkategori', true)
            ];
            $this->db->where('ID_item',$id);
            $this->db->update('item',$data);
            if ($this->input->post('foto_lama')!="Default_item.png") {
                unlink('assets/gambar/'.$this->input->post('foto_lama'));    
            }
        }
        redirect('produk/halaman_produk');
    }

    public function hapusItem($id,$file)
	{
		//use query builder to delete data based on id 
        $this->db->where('ID_item',$id);
        $this->db->delete('item');
        if ($file != "Default_item.png") {
            unlink('assets/gambar/'.$file);
        } 
        
    }


    
    
}

?>