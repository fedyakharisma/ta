<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Antrian extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }
        $this->load->model('mAntrian');
        $this->load->model('mKunjungan');
        $this->load->model('mPasien');
        $this->load->model('mPoliklinik');
    }

    public function tambahAntrian()
    {
        $no_rm = $this->input->post('ktb');
        $this->mKunjungan->updateStatusKunjunganA($no_rm);
        $b = $this->input->post('poli');
        $u= $this->mKunjungan->hitungJumlahAssetU();
        $g = $this->mKunjungan->hitungJumlahAssetG();
        $k = $this->mKunjungan->hitungJumlahAssetK();
         

        if ($b == "PL003") {
            $data = array(
            'no_rm' => $this->input->post('ktb'),
            'id_kunjungan' => $this->input->post('idkunjungan'),
            'no_antrian' => $this->input->post('noantrian')+$u,
        );
        $this->mAntrian->input_dataPoliUmum($data, 'antrian');
        }else if ($b=="PL004") {
            $data = array(
            'no_rm' => $this->input->post('ktb'),
            'id_kunjungan' => $this->input->post('idkunjungan'),
            'no_antrian' => $this->input->post('noantrian')+$g,
        );
        $this->mAntrian->input_dataPoliGigi($data, 'antrian');
        }else if($b=="PL005"){
            $data = array(
            'no_rm' => $this->input->post('ktb'),
            'id_kunjungan' => $this->input->post('idkunjungan'),
            'no_antrian' => $this->input->post('noantrian')+$k,
        );
        $this->mAntrian->input_dataPoliKia($data, 'antrian');
        }
       
        redirect('Antrian/');
    }

    public function index()
    {
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

        $data['pasien'] = $this->mAntrian->viewpasien();
        $data['poliklinik'] = $this->mPoliklinik->view();
        $data['title'] = 'Data Antrian';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('antrian/v_antrian', $data);
        $this->load->view('template/foot');
    }

    public function next(){
        
        if($this->input->post('btnNext')){
            $id_kunjungan = $this->input->post('idkunjunganumums');
            $this->mKunjungan->updateStatusKunjungannext($id_kunjungan);
        }elseif($this->input->post('btnBack')){
            $id_kunjungan = $this->input->post('idkunjunganumumd');
            $this->mKunjungan->updateStatusKunjunganback($id_kunjungan);
        }

        redirect('Antrian/');
    }

    // public function back(){
        
    //     if($this->input->post('btnBack')){
    //         $idkunjungan = $this->input->post('id_kunjungan');
            
    //     }
        
    //     $this->mKunjungan->updateStatusKunjunganback($idkunjungan);
        
    //     redirect('Antrian/');
    // }
    

    
    public function hapusKunjungan($no_rm)
    {
        $this->mKunjungan->delete($no_rm);
        redirect('Kunjungan/');
    }
}
        
    /* End of file  Kunjungan.php */
