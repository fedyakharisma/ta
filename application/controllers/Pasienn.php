<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasienn extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }   
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('mPasienn');
    }

    public function update(){
        if ($this->input->is_ajax_request()) {
            if ($posts = $this->mPasienn->get_pasien()) {
                $data = array('responce' => 'success', 'posts' => $posts);
            }else{
                $data = array('responce' => 'error', 'message' => 'Failed to fetch');
            }
            echo json_encode($data);
        }else{
            echo "error";
        }
    }
    public function fetch(){
        if ($this->input->is_ajax_request()) {
            if ($posts = $this->mPasienn->get_pasien()) {
                $data = array('responce' => 'success', 'posts' => $posts);
            }else{
                $data = array('responce' => 'error', 'message' => 'Failed to fetch');
            }
            echo json_encode($data);
        }else{
            echo "error";
        }
    }

    public function insert(){
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('tanggal_daftar', 'tanggaldaftar');
            $this->form_validation->set_rules('nama', 'Namapasien', 'required');
            $this->form_validation->set_rules('no_bpjs', 'Nobpjs', 'required');
            $this->form_validation->set_rules('tempat', 'Tempat', 'required');
            $this->form_validation->set_rules('tanggal_lahir', 'Tanggallahir', 'required');
            $this->form_validation->set_rules('jenis_kelamin', 'Jk', 'required');
            $this->form_validation->set_rules('nip_ktp_nrp', 'Nipktpnrp', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $data = array('responce' => 'error', 'message' => validation_errors());
            }
            else
            {
                $ajax_data = $this->input->post();
                if ($this->mPasienn->insert_data($ajax_data)) {
                    $data = array('responce' => 'success', 'message' => 'Record added Successfully');
                }else{
                    $data = array('responce' => 'error', 'message' => 'failed');
                }
                
            }
            echo json_encode($data);
        }else{
            echo " error";
        }
    }

    public function index(){
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('pasienn/v_tablePasienn');
        $this->load->view('template/foot');
    }

    public function get_pasienn(){
        $data = $this->mPasienn->get_pasienn()->result();
        echo json_encode($data);
    }

    public function create(){
        date_default_timezone_set('Asia/Jakarta');
        $tanggal= date("Y-m-d H:i:s");
            
        $data = array(
            'tanggal_daftar'=> $tanggal,
            'nama' => $this->input->post('namapasien'),
            'no_bpjs' => $this->input->post('nobpjs'),
            'tempat' => $this->input->post('tempat'),
            'tanggal_lahir' => $this->input->post('tanggallahir'),
            'jenis_kelamin' => $this->input->post('jk'),
            'alamat' => $this->input->post('alamat'),
            'nip_ktp_nrp' => $this->input->post('nipktpnrp'),
            'keterangan' => $this->input->post('keterangan')
            
        );
        $this->mPasienn->input_data($data, 'pasien');
 
        // require_once(APPPATH.'vendor/autoload.php');
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
        redirect('Pasienn/');
    }

    
    // public function index()
    // {
    //     $data['title'] = "Data Pasien";
    //     $data['pasien'] = $this->mPasienn->view();
    //     $this->load->view('template/head');
    //     $this->load->view('template/menu');
    //     $this->load->view('pasienn/v_tablePasienn', $data);
    //     $this->load->view('template/foot');
    // }

    // public function tambahPasien()
    // {
    //     date_default_timezone_set('Asia/Jakarta');
    //     $tanggal= date("Y-m-d H:i:s");
            
    //     $data = array(
    //         'tanggal_daftar'=> $tanggal,
    //         'nama' => $this->input->post('namapasien'),
    //         'no_bpjs' => $this->input->post('nobpjs'),
    //         'tempat' => $this->input->post('tempat'),
    //         'tanggal_lahir' => $this->input->post('tanggallahir'),
    //         'jenis_kelamin' => $this->input->post('jk'),
    //         'alamat' => $this->input->post('alamat'),
    //         'nip_ktp_nrp' => $this->input->post('nipktpnrp'),
    //         'keterangan' => $this->input->post('keterangan')
            
    //     );
    //     $this->mPasien->input_data($data, 'pasien');
    //     redirect('Pasien/');
    // }

    // public function editPasien()
    // {
    //     $tanggaldaftar = $this->input->post('tanggaldaftar');
    //     $norm = $this->input->post('norm');
    //     $namapasien = $this->input->post('namapasien');
    //     $nobpjs = $this->input->post('nobpjs');
    //     $tempat = $this->input->post('tempat');
    //     $tanggallahir = $this->input->post('tanggallahir');
    //     $jk = $this->input->post('jk');
    //     $alamat = $this->input->post('alamat');
    //     $nipktpnrp = $this->input->post('nipktpnrp');
    //     $keterangan = $this->input->post('keterangan');
    //     $this->mPasien->updatePasien($tanggaldaftar, $norm,$namapasien, $nobpjs, $tempat, $tanggallahir, $jk, $alamat, $nipktpnrp, $keterangan);
    //     redirect('Pasien/');
    // }

    // public function hapusPasien($no_rm)
    // {
    //     $this->mPasien->delete($no_rm);
    //     redirect('Pasien/');
    // }
    
    // public function form()
    // {
    //     $this->load->view('template/head');
    //     $this->load->view('template/menu');
    //     $this->load->view('pasien/v_formPasien');
    //     $this->load->view('template/foot');
    // }
}
