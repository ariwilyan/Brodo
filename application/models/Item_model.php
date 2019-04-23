<?php
class Item_model extends CI_Model {
    public function getItemByKategori($no_sub_kategori){
        $this->db->where('no_sub_kategori',$no_sub_kategori);
        $que = $this->db->get('item');
        return $que->result_array();
        
    }
}

?>