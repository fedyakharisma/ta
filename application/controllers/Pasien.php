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

    public function tambahPasien()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal= date("Y-m-d H:i:s");
            
        $data = array(
            'tanggal_daftar'=> $tanggal,
            'nama' => $this->input->post('namapasien'),
            'no_bpjs' => $this->input->post('nobpjs'),
            'tempat' => $this->input->post('tempat'),
            'tanggal_lahir' => $this->input->post('tanggallahir'),
            'jenis_kelamin' => $this->input->post('jk'),
            'alamat' => $this->input->post('alamat'),
            'nip_ktp_nrp' => $this->input->post('nipktpnrp'),
            'keterangan' => $this->input->post('keterangan')
            
        );
        $this->mPasien->input_data($data, 'pasien');
        redirect('Pasien/');
    }

    public function editPasien()
    {
        $tanggaldaftar = $this->input->post('tanggaldaftar');
        $norm = $this->input->post('norm');
        $namapasien = $this->input->post('namapasien');
        $nobpjs = $this->input->post('nobpjs');
        $tempat = $this->input->post('tempat');
        $tanggallahir = $this->input->post('tanggallahir');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $nipktpnrp = $this->input->post('nipktpnrp');
        $keterangan = $this->input->post('keterangan');
        $this->mPasien->updatePasien($tanggaldaftar, $norm,$namapasien, $nobpjs, $tempat, $tanggallahir, $jk, $alamat, $nipktpnrp, $keterangan);
        redirect('Pasien/');
    }

    public function hapusPasien($no_rm)
    {
        $this->mPasien->delete($no_rm);
        redirect('Pasien/');
    }
    
    public function form()
    {
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('pasien/v_formPasien');
        $this->load->view('template/foot');
    }
}
