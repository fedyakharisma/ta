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

    public function form()
    {
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('pasien/v_formPasien');
        $this->load->view('template/foot');
    }
}
