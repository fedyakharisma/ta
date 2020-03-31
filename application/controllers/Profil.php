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
            'username' => $this->session->userdata("nama")
        );
        $data['profil'] = $this->mProfil->getWhere($where, 'v_pegawai')->result();
        $data['title'] = 'Profil';
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
}
        
    /* End of file  profil.php */
