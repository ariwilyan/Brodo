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
}
?>