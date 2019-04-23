<?php
class Admin_model extends CI_model
{
	private $admin = 'admin';
	public $id;

	public function login_checkAdmin()
	{
		$data = [
			"Username" => $this->input->post('username',true),
			"Password" => $this->input->post('password',true),
		];
		$this->db->where('Username',$data['Username']);
		$this->db->where('Password',$data['Password']);
		$que = $this->db->get("admin");
		return $que->num_rows();
	}

	public function getAllUser()
	{
		//use query builder to get data table "admin"
		$data = $this->db->get('admin');
		return $data->result_array();
	}

	// public function rules()
	// {
	// 	return [
	// 		['field' => 'Nama_admin',
	// 		'label' => 'nama',
	// 		'rules' => 'required'],

	// 		['field' => 'Username',
	// 		'label' => 'username',
	// 		'rules' => 'required'],

    //         ['field' => 'Password',
	// 		'label' => 'password',
    //         'rules' => 'required'],
                        
    //         ['field' => 'No_hp',
	// 		'label' => 'nohp',
    //         'rules' => 'required'],
            
    //         ['field' => 'Alamat',
	// 		'label' => 'alamat',
	// 		'rules' => 'required']	
	// 	];
	// }

	public function tambahDataAdmin()
	{
		$data = [
			"Nama_admin" => $this->input->post('nama', true),
			"Username" => $this->input->post('username', true),
			"Password" => $this->input->post('password', true),
            "No_hp" => $this->input->post('nohp', true),
            "Alamat" => $this->input->post('alamat', true),
		];

		//use query builder to insert $data to table "admin"
		$this->db->insert($this->admin, $data);
	}

	public function hapusDataAdmin($id)
	{
		//use query builder to delete data based on id 
		return $this->db->get($id);
	}

	public function getAdminById($id)
	{
		//get data admin based on id 
		return $this->db->get_where($this->admin, ['ID_Admin' => $id])->row();
	}

	public function ubahDataAdmin($id)
	{
		$data = [
			"Nama_admin" => $this->input->post('nama', true),
			"Username" => $this->input->post('username', true),
			"Password" => $this->input->post('password', true),
			"No_hp" => $this->input->post('nohp', true),
			"Alamat" => $this->input->post('alamat', true),
		];
		//use query builder class to update data admin based on id
		$this->db->where('ID_admin',$id);
		$this->db->update('admin',$data);
	}

	public function cariDataAdmin()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data admin based on keyword "Nama_admin" or "Username" or "Password" or "No_hp" or "Alamat"
		$this->db->select('*');
		$this->db->from('admin');
		if (!empty($keyword)){
			$this->db->like('Nama_admin', $keyword);
			$this->db->or_like('Username', $keyword);
			$this->db->or_like('Password', $keyword);
			$this->db->or_like('No_hp', $keyword);
			$this->db->or_like('Alamat', $keyword);
		}
		$this->db->order_by('Nama_admin');
		$this->db->order_by('Username');
		$this->db->order_by('Password');
		$this->db->order_by('No_hp');
		$this->db->order_by('Alamat');
		$getData = $this->db->get('');
		return $getData->result_array();
		//return data admin that has been searched
	}
}