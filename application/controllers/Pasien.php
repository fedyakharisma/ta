<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }   
        $this->load->model('mPasien');
    }

    public function index()
    {
        $data['title'] = "Data Pasien";
        $data['pasien'] = $this->mPasien->view();
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('pasien/v_tablePasien', $data);
        $this->load->view('template/foot');
    }

    function simpan_barang(){
        $kode_barang=$this->input->post('kode_barang');
        $nama_barang=$this->input->post('nama_barang');
        $satuan=$this->input->post('satuan');
        $harga=$this->input->post('harga');
        $this->m_barang->simpan_barang($kode_barang,$nama_barang,$satuan,$harga);
        redirect('barang');
    }
    
    public function form()
    {
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('pasien/v_formPasien');
        $this->load->view('template/foot');
    }
}
