<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Antrianpoliumum extends CI_Controller
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

    

    public function index()
    {
        //POLI UMUM
        $data['noantriumumm'] = $this->mAntrian->viewnoantriumumm();
        $data['noantriumums'] = $this->mAntrian->viewnoantriumums();
        $data['noantriumumd'] = $this->mAntrian->viewnoantriumumd();
        $data['antrianUMUM'] = $this->mAntrian->viewPUMUM();
        //POLI UMUM

        $data['pasien'] = $this->mAntrian->viewpasien();
        $data['poliklinik'] = $this->mPoliklinik->view();
        $data['title'] = 'Data Antrian';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('antrian/v_antrianpoliumum', $data);
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

        // require_once(APPATH.'views/vendor/autoload.php');
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            '8cf463b119a9af6cadec', //ganti dengan App_key pusher Anda
            'de8d6e2a7c66c4ea4699', //ganti dengan App_secret pusher Anda
            '992164', //ganti dengan App_key pusher Anda
            $options
        );
 
        $data['message'] = 'success';
        $pusher->trigger('my-channel', 'my-event', $data);
        redirect('Antrianpoliumum/');
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
