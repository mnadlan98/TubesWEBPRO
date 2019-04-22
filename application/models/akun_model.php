<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class akun_model extends CI_model
{

	private $_table = "pembeli";

    public $id_pembeli;
    public $nama;
    public $email;
    public $gender;
	public $alamat;
	public $tgllahir;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],
			
			['field' => 'gender',
            'label' => 'Gender',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
            
            ['field' => 'Email',
            'label' => 'email',
            'rules' => 'required']
        ];
    }

    public function getAllAkun()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getAkunById($id)
    {
        return $this->db->get_where($this->_table, ["id_pembeli" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pembeli = uniqid();
        $this->nama = $post["nama"];
		$this->gender = $post["gender"];
		$this->alamat = $post["alamat"];
        $this->email = $post["email"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pembeli = $post["id_pembeli"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
		$this->gender = $post["gender"];
		$this->alamat = $post["alamat"];
        $this->tgllahir = $post["tgllahir"];
        return $this->db->update($this->_table, $this, array('id_pembeli' => $post['id_pembeli']));
    }
}
	

