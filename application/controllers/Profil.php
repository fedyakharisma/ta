<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }
        $this->load->model('mProfil');
    }

    public function index()
    {
        $where = array(
            'nip' => $this->session->userdata("nip")
        );
        $data['profil'] = $this->mProfil->getWhere($where, 'v_data_pegawai')->result();
        $data['title'] = 'Ubah Profil';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('profil/index.php', $data);
        $this->load->view('template/foot');
    }

    public function ubahPassword()
    {
        $data['title'] = 'Ubah Password';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('profil/ubahPassword', $data);
        $this->load->view('template/foot');
    }

    public function ubahDataProfil()
    {
        $nip = $this->input->post('nip');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');

        $this->mProfil->update($nip, $nama_lengkap, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $no_telp);
        redirect('Profil/');
    }
}
        
    /* End of file  profil.php */
