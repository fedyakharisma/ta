<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Poliklinik extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }
        $this->load->model('mPoliklinik');
    }

    public function edit($poli_kode)
    {
        $where = array('poli_kode' => $poli_kode);
        $data['bantuan'] = $this->mPoliklinik->editData($where, 'poli')->result();
        $data['title'] = 'Poliklinik';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('poliklinik/v_edit_poliklinik', $data);
        $this->load->view('template/foot');
    }

    public function editPoliklinik()
    {
        $poli_kode = $this->input->post('poli_kode');
        $poli_nama = $this->input->post('poli_nama');
        $this->mPoliklinik->updatePoliklinik($poli_kode, $poli_nama);
        redirect('Poliklinik/');
    }

    public function hapusPoliklinik($kode)
    {
        $this->mPoliklinik->delete($kode);
        redirect('poliklinik/');
    }

    public function index()
    {
        // START AUTOGENERATE NMBR
        $dariDB = $this->mPoliklinik->cekKodePoli();
        $nourut = substr($dariDB, 3, 4);
        $kodePoliNow = $nourut + 1;
        $data = array('poli_kode' => $kodePoliNow);
        $data['poliklinik'] = $this->mPoliklinik->view();

        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('poliklinik/v_poliklinik', $data);
        $this->load->view('template/foot');
    }

    public function aksi_tambahPoli()
    {
        $data = array(
            'poli_kode' => $this->input->post('kode_poli'),
            'poli' => $this->input->post('nama_poli')
        );
        $this->mPoliklinik->input_data($data, 'poli');
        redirect('Poliklinik/');
    }
}
