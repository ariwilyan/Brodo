<?php
class Kategori_model extends CI_Model
{
    public function getAllKategori()
    {
        $que = $this->db->get('kategori');
        return $que->result_array();
    }
}
?>