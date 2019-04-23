<?php
class Sub_kategori_model extends CI_Model
{
    public function getSubKategoriByKategori($no_kategori)
    {
        $this->db->where('no_kategori', $no_kategori);
        $que = $this->db->get('sub_kategori');
        return $que->result_array();
    }
    public function getSubKategoriByNoSubKategori($no_sub_kategori)
    {
        $this->db->where('no_sub_kategori', $no_sub_kategori);
        $que = $this->db->get('sub_kategori');
        return $que->result_array();
    }
}
?>