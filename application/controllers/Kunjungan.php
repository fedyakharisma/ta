<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kunjungan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }
        $this->load->model('mKunjungan');
        $this->load->model('mPasien');
        $this->load->model('mPoliklinik');
    }

    public function tambahKunjungan()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal= date("Y-m-d H:i:s");
        $data = array(
            'no_rm' => $this->input->post('ktb'),
            'poli_kode' => $this->input->post('poli'),
            'waktu' => $tanggal,
            'keluhan' => $this->input->post('keluhan'),
            'status' => 'Belum diperiksa'
        );
        $this->mKunjungan->input_data($data, 'kunjungan');
        redirect('Kunjungan/');
    }

    public function index()
    {
        $data['kunjungan'] = $this->mKunjungan->view();
        $data['pasien'] = $this->mPasien->view();
        $data['poliklinik'] = $this->mPoliklinik->view();
        $data['title'] = 'Data Kunjungan';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('kunjungan/v_kunjungan', $data);
        $this->load->view('template/foot');
    }

    public function formKunjungan()
    {
        $data['pasien'] = $this->mPasien->view();
        $data['poliklinik'] = $this->mPoliklinik->view();
        $data['title'] = 'Form kunjungan';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('kunjungan/v_formKunjungan', $data);
        $this->load->view('template/foot');
    }
}
        
    /* End of file  Kunjungan.php */
