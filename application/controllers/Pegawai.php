<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }
        $this->load->model('mPegawai');
        $this->load->model('mRole');
    }

    // public function formEditPegawai()
    public function table_data_pegawai()
    {
        $data['menu'] = "Pegawai Medis";
        $data['title'] = "Data pegawai";
        $this->load->view('template/head');
        $this->load->view('template/menu', $data);
        $this->load->view('data_pegawai/pegawai_medis/pegawai_ajax', $data);
        $this->load->view('template/foot');
    }

    public function iklan()
    {
        $this->load->view('data_pegawai/pegawai_medis/iklan');
    }

    public function data_pegawai()
    {
        $data = $this->mPegawai->pegawai_list();
        echo json_encode($data);
    }

    public function resetPassword()
    {
        $data['title'] = 'Edit data pegawai';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('data_pegawai/pegawai_medis/v_formEditPegawai');
        $this->load->view('template/foot');
    }

    public function hapusPegawai($pgw_nip)
    {
        $this->mPegawai->delete($pgw_nip);
        redirect('Pegawai/');
    }

    public function index()
    {
        $data['menu'] = "Pegawai Medis";
        $data['title'] = "Data pegawai";
        $data['pegawai'] = $this->mPegawai->view();
        $this->load->view('template/head');
        $this->load->view('template/menu', $data);
        $this->load->view('data_pegawai/pegawai_medis/index', $data);
        $this->load->view('template/foot');
    }

    public function formTambahPegawai()
    {
        $data['role'] = $this->mRole->view();
        $data['title'] = 'Tambah data pegawai';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('data_pegawai/pegawai_medis/v_formPegawai', $data);
        $this->load->view('template/foot');
    }

    public function tambahPegawai()
    {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama_lengkap');
        $alamat = $this->input->post('alamat');
        $notelp = $this->input->post('notelp');
        $tgllhr = $this->input->post('tgllhr');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $role = $this->input->post('role');
        $data = array(
            'pgw_nip' => $nip,
            'pgw_nama' => $nama,
            'pgw_alamat' => $alamat,
            'pgw_telp' => $notelp,
            'pgw_tgl_lhr' => $tgllhr,
            'pgw_jenis_kelamin' => $jenis_kelamin,
            'role' => $role
        );
        $this->mPegawai->insert_data($data, 'tb_pegawai');
        redirect('Pegawai/');
    }

    public function editAksesPegawai()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $pgw_nip = $this->input->post('pgw_nip');
        $this->mPegawai->updateAksesPegawai($username, $password, $pgw_nip);
        redirect('Pegawai/');
    }
}
        
    /* End of file  Pegawai.php */
