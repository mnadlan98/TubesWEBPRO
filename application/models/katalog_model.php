<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class katalog_model extends CI_model
{

    private $produk = "produk";
    private $pembeli = "pembeli";
    private $membeli = "membeli";
    public $id_produk;
    public $id_pembeli;
    public $no_trx;
    public $stok;


    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],
            
            ['field' => 'stok',
            'label' => 'Stok',
			'rules' => 'required'],
			
			['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    public function addtoKeranjang()
    {
        $post = $this->input->post();
        $this->id_produk = $post["id_produk"];
        $this->id_pembeli = $post["id_pembeli"];
        $this->no_trx = "id_pembeli"."id_produk";
        $this->db->insert($this->_table, $this);
    }
}
	

