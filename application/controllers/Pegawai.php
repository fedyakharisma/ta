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

    public function resetPassword()
    {
        $id_data_pegawai = $this->input->post('id');
        $username = $this->input->post('username');
        $password = md5($username);
        $this->mPegawai->updatePass($id_data_pegawai, $password);
        redirect('Pegawai/');
    }

    public function editPegawai()
    {
        $nip = $this->input->post('nipEdit');
        $id_data_pegawai = $this->input->post('idEdit');
        $nama_lengkap = $this->input->post('nama_lengkapEdit');
        $no_telp = $this->input->post('no_telpEdit');
        $jenis_kelamin = $this->input->post('jenis_kelaminEdit');
        $tempat_lahir = $this->input->post('tempat_lahirEdit');
        $tanggal_lahir = $this->input->post('tanggal_lahirEdit');
        $alamat = $this->input->post('alamatEdit');
        $jabatan = $this->input->post('jabatanEdit');

        $this->mPegawai->update($id_data_pegawai, $nip, $nama_lengkap, $tempat_lahir, $tanggal_lahir, $alamat, $jenis_kelamin, $no_telp, $jabatan);
        redirect('Pegawai/');
    }

    public function hapusPegawai($id_data_pegawai)
    {
        $this->mPegawai->delete($id_data_pegawai);
        redirect('Pegawai/');
    }

    public function index()
    {
        $data['title'] = "Data pegawai";
        $data['role'] = $this->mRole->getAll();
        $data['pegawai'] = $this->mPegawai->view();
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('data_pegawai/pegawai_medis/index', $data);
        $this->load->view('data_pegawai/pegawai_medis/v_formPegawai', $data);
        $this->load->view('template/foot');
    }

    public function tambahPegawai()
    {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama_lengkap');
        $alamat = $this->input->post('alamat');
        $notelp = $this->input->post('notelp');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $role = $this->input->post('role');
        $username = $this->input->post('username');
        $password = md5($username);

        $data = array(
            'nip' => $nip,
            'nama_lengkap' => $nama,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'no_telp' => $notelp,
            'password' => $tanggal_lahir,
            'username' => $username,
            'password' => $password,
            'id_role' => $role
        );
        $this->mPegawai->insert_data($data, 'data_pegawai');
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
