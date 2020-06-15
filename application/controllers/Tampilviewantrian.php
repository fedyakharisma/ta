<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampilviewantrian extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }   
        $this->load->model('mAntrian');
        
    }

    public function index()
    {
        $data['title'] = "Data Pasien";
        $data['pasien'] = $this->mAntrian->viewpasien();
        //POLI UMUM
        $data['noantriumumm'] = $this->mAntrian->viewnoantriumumm();
        $data['noantriumums'] = $this->mAntrian->viewnoantriumums();
        $data['noantriumumd'] = $this->mAntrian->viewnoantriumumd();
        $data['antrianUMUM'] = $this->mAntrian->viewPUMUM();
        //POLI UMUM

        //POLI GIGI
        $data['noantrigigim'] = $this->mAntrian->viewnoantrigigim();
        $data['noantrigigis'] = $this->mAntrian->viewnoantrigigis();
        $data['noantrigigid'] = $this->mAntrian->viewnoantrigigid();
        $data['antrianGIGI'] = $this->mAntrian->viewPGIGI();
        //POLI GIGI

        //POLI KIA
        $data['noantrikiam'] = $this->mAntrian->viewnoantrikiam();
        $data['noantrikias'] = $this->mAntrian->viewnoantrikias();
        $data['noantrikiad'] = $this->mAntrian->viewnoantrikiad();
        $data['antrianKIA'] = $this->mAntrian->viewPKIA();
        //POLI KIA
        
        
        $this->load->view('tampil_antrian', $data);

        
    }
}
