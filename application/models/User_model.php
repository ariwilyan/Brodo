<?php
class User_model extends CI_Model
{
    public function login_check()
    {
        $data = [
            "email" => $this->input->post('email',true),
            "password" => $this->input->post('password', true)
        ];
        $this->db->where('email', $data["email"]);
        $que = $this->db->get("user");
        return $que->num_rows();
    }
    public function tambahUser(){
        $data = [
            "Nama_user" => $this->input->post('Nama_user', true),
            "email" => $this->input->post('email', true),
            "Password" => $this->input->post('password', true),
        ];
        return $this->db->insert('user', $data);
    }
    public function cekEmail($email){
        $this->db->where('email', $email);
        return $this->db->get('user')->num_rows();
    }
}
?>