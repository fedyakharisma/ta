<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HasilPemeriksaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }
        $this->load->model('mAsessmenUmum');
        $this->load->model('mAsessmenKiaKb');
        $this->load->model('mAsessmenGigiMulut');
    }

    public function pemeriksaanGigiMulut()
    {
        $data['title'] = 'Hasil Pemeriksaan Gigi dan Mulut';
        $data['date_now'] = date('Y-m-d');
        $data['pemeriksaan'] = $this->mAsessmenGigiMulut->viewGetWhereUmum();
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('hasil_pemeriksaan/gigi_mulut/index', $data);
        $this->load->view('template/foot');
    }

    public function pemeriksaanKiaKb()
    {
        $data['title'] = 'Hasil Pemeriksaan Kia dan Kb';
        $data['date_now'] = date('Y-m-d');
        $data['pemeriksaan'] = $this->mAsessmenKiaKb->viewGetWhereUmum();
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('hasil_pemeriksaan/kia_kb/index', $data);
        $this->load->view('template/foot');
    }

    public function pemeriksaanUmum()
    {
        $data['title'] = 'Hasil Pemeriksaan Umum';
        $data['date_now'] = date('Y-m-d');
        $data['pemeriksaan'] = $this->mAsessmenUmum->viewGetWhereUmum();
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('hasil_pemeriksaan/umum/index', $data);
        $this->load->view('template/foot');
    }

    public function cekGigiMulut($id_asessmen_gigi_mulut)
    {
        $where = array('id_asessmen_gigi_mulut' => $id_asessmen_gigi_mulut);
        $data['asessmenGigiMulut'] = $this->mAsessmenGigiMulut->getWhere($where, 'asessmen_gigi_mulut')->result();
        $data['title'] = 'Hasil Asessmen Awal Ruang Pemeriksaan Gigi dan Mulut';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('hasil_pemeriksaan/gigi_mulut/cek_hasil', $data);
        $this->load->view('template/foot');
    }

    public function cekKiaKb($id_pemeriksaan)
    {
        $where = array('id_pemeriksaan' => $id_pemeriksaan);
        $data['asessmenKiaKb'] = $this->mAsessmenKiaKb->getWhere($where, 'asessmen_kia_kb')->result();
        $data['title'] = 'Hasil Asessmen Awal Ruang Pemeriksaan Kia dan Kb';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('hasil_pemeriksaan/kia_kb/cek_hasil', $data);
        $this->load->view('template/foot');
    }

    public function cekUmum($id_pemeriksaan)
    {
        $where = array('id_pemeriksaan' => $id_pemeriksaan);
        $data['asessmenUmum'] = $this->mAsessmenUmum->getWhere($where, 'asessmen_umum')->result();
        $data['title'] = 'Hasil Asessmen Awal Ruang Pemeriksaan Umum';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('hasil_pemeriksaan/umum/cek_hasil', $data);
        $this->load->view('template/foot');
    }
}
        
    /* End of file  HasilPemeriksaan.php */
