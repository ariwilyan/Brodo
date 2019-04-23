<?php
 // write your name and student id here
// Ari Wilyan Ramadhelza (1301164708)
class Customer_model extends CI_model
{
	private $user = 'user';
	public $id;

	public function getAllUser()
	{
		//use query builder to get data table "user"
		$data = $this->db->get('user');
		return $data->result_array();
	}

	public function rules()
	{
		return [
			['field' => 'Nama_admin',
			'label' => 'Nama',
			'rules' => 'required'],

			['field' => 'Username',
			'label' => 'Username',
			'rules' => 'required'],

            ['field' => 'Password',
			'label' => 'Password',
            'rules' => 'required'],
                        
            ['field' => 'No_hp',
			'label' => 'NoHP',
            'rules' => 'required'],
            
            ['field' => 'Alamat',
			'label' => 'Alamat',
			'rules' => 'required']	
		];
	}

	public function tambahDataAdmin()
	{
		$data = [
			"Nama_admin" => $this->input->post('nama', true),
			"Username" => $this->input->post('nim', true),
			"Password" => $this->input->post('email', true),
            "No_hp" => $this->input->post('jurusan', true),
            "Alamat" => $this->input->post('jurusan', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert($this->mahasiswa, $data);
	}

	public function hapusDataMahasiswa($id)
	{
		//use query builder to delete data based on id 
		return $this->db->get($id);
	}

	public function getMahasiswaById($id)
	{
		//get data mahasiswa based on id 
		return $this->db->get_where($this->mahasiswa, ['id' => $id])->row();
	}

	public function ubahDataMahasiswa()
	{
		$data = [
			"id" => $this->input->post('id', true),
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];
		//use query builder class to update data mahasiswa based on id
		$this->db->update($this->mahasiswa, $data, array('id' => $data['id']));
	}

	public function cariDataMahasiswa()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		$this->db->select('*');
		$this->db->from('mahasiswa');
		if (!empty($keyword)){
			$this->db->like('nama', $keyword);
			$this->db->or_like('nim', $keyword);
			$this->db->or_like('email', $keyword);
			$this->db->or_like('jurusan', $keyword);
		}
		$this->db->order_by('nama');
		$this->db->order_by('nim');
		$this->db->order_by('email');
		$this->db->order_by('jurusan');
		$getData = $this->db->get('');
		return $getData->result_array();
		//return data mahasiswa that has been searched
	}
}