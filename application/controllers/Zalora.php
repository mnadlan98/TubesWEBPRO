<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zalora extends CI_Controller {

    public function __construct()
    {
        parent::__construct	();
        $this->load->model('akun_model');
        $this->load->model('katalog_model');
        $this->load->library('form_validation');
     }

    public function index()
    {
        $this->load->view('Index_men');
    }

    public function women()
    {
        $this->load->view('Index_women');
    }

    public function akun()
    {
        $data_akun = $this->akun_model->getAllAkun();
        $this->load->view('Akun/Akun',['data'=>$data_akun]);
    }

    public function editakun()
    {
        $data_akun = $this->akun_model->getAllAkun();
        $this->load->view('Akun/UbahData',['data'=>$data_akun]);
    }

    public function dbeditakun()
    {    
        $cek = $this->akun_model->update();
        if($cek) {
            $this->session->set_flashdata('info','Data Berhasil Diupdate');
        }else{ 
            $this->session->set_flashdata('info','Data Gagal Terupdate');
        }
		redirect('akun');
    }

    public function wishlist()
    {
        $this->load->view('Akun/Whislist');
    }

    public function keranjang()
    {
        $this->load->view('Keranjang');
    }
    public function kaos()
    {
        $this->load->view('catalog/Kaos_pria');
    }
    public function login()
    {
        $this->load->view('Login');
    }
    public function register()
    {
        $this->load->view('register');
    }
    public function Open_batik_allproduk()
    {
        $this->load->view('catalog/Batik_allproduct');
    }

}