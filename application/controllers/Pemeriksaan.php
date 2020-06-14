<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }
        $this->load->model('mKunjungan');
    }

    public function asessmenUmum($no_rm)
    {
        // $where = array('no_rm' => $no_rm);
        $where = array(
            'no_rm' => $no_rm,
            'id_kunjungan' => $this->input->post('id_kunjungan'),
            'status' => 'Belum diperiksa'
        );
        $data['asessmenUmum'] = $this->mKunjungan->getByid($where, 'v_kunjungan')->result();
        $data['date_now'] = date('Y-m-d');
        $data['time_now'] = date("H:i:s");
        date_default_timezone_set('Asia/Jakarta');
        $data['title'] = 'ASESSMEN AWAL RUANG PEMERIKSAAN UMUM';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('asessmen/umum/index', $data);
        $this->load->view('template/foot');
    }

    public function asessmenKiaKb($no_rm)
    {
        $where = array('no_rm' => $no_rm);
        $data['asessmenKiaKb'] = $this->mKunjungan->getByid($where, 'v_kunjungan')->result();
        $data['date_now'] = date('Y-m-d');
        $data['time_now'] = date("H:i:s");
        date_default_timezone_set('Asia/Jakarta');
        $data['title'] = 'ASESSMEN AWAL RUANG PEMERIKSAAN KIA dan KB';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('asessmen/kia_kb/index', $data);
        $this->load->view('template/foot');
    }

    public function asessmenGigiMulut($no_rm)
    {
        $where = array('no_rm' => $no_rm);
        $data['asessmenGigiMulut'] = $this->mKunjungan->getByid($where, 'v_kunjungan')->result();
        $data['date_now'] = date('Y-m-d');
        $data['time_now'] = date("H:i:s");
        date_default_timezone_set('Asia/Jakarta');
        $data['title'] = 'ASESSMEN AWAL RUANG PEMERIKSAAN Gigi dan Mulut';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('asessmen/gigi_mulut/index', $data);
        $this->load->view('template/foot');
    }

    public function pemeriksaanUmum()
    {
        $data['menu'] = 'Pemeriksaan';
        $data['title'] = 'Data Pemeriksaan Poli Umum';
        $data['date_now'] = date('Y-m-d');
        $data['pemeriksaan'] = $this->mKunjungan->viewGetWhereUmum();
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('pemeriksaan/index', $data);
        $this->load->view('template/foot');
    }

    public function pemeriksaanKiaKb()
    {
        $data['menu'] = 'Pemeriksaan';
        $data['title'] = 'Data Pemeriksaan Poli KIA / KB';
        $data['date_now'] = date('Y-m-d');
        $data['pemeriksaan'] = $this->mKunjungan->viewGetWhereKiaKb();
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('pemeriksaan/index', $data);
        $this->load->view('template/foot');
    }

    public function pemeriksaanGigiMulut()
    {
        $data['menu'] = 'Pemeriksaan';
        $data['title'] = 'Data Pemeriksaan Poli Gigi dan Mulut';
        $data['date_now'] = date('Y-m-d');
        $data['pemeriksaan'] = $this->mKunjungan->viewGetWhereGigiMulut();
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('pemeriksaan/index', $data);
        $this->load->view('template/foot');
    }
}
        
    /* End of file  Pemeriksaan.php */
