<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
<<<<<<< HEAD
        }   
        $this->load->model('mCount');
=======
        }
        $this->load->model('mLogin');
>>>>>>> 1e0a6ec831046be2c046241bd3c33d30561df3a9
    }

    public function index()
    {
<<<<<<< HEAD
        $data['graph']=$this->mCount->get_data_stok();
        $data['pasienbaru'] = $this->mCount->countpasienbaru();
        $data['pasienlama'] = $this->mCount->countpasienlama();
        $data['pasienantri'] = $this->mCount->countpasienantri();
        $data['pasienselesai'] = $this->mCount->countpasienselesai();
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('index',$data);
=======
        $data['menu'] = 'Home';
        $this->load->view('template/head');
        $this->load->view('template/menu', $data);
        $this->load->view('index');
>>>>>>> 1e0a6ec831046be2c046241bd3c33d30561df3a9
        $this->load->view('template/foot');
    }

    public function table()
    {
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('template/dataTable');
        $this->load->view('template/foot');
    }

    public function form()
    {
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('template/form');
        $this->load->view('template/foot');
    }
}
