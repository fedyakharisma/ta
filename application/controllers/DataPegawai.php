<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DataPegawai extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }
        $this->load->model('mDokter');
    }

    public function data_dokter()
    {
        $data['dokter'] = $this->mDokter->view();
        $data['title'] = "Data Dokter";
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('data_pegawai/dokter/index', $data);
        $this->load->view('template/foot');
    }
}
        
    /* End of file  DataPegawai.php */
