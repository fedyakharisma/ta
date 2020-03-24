<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Soap extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }
        $this->load->model('mSoap');
    }

    public function tambah()
    {
        $data['title'] = 'SOAP';
        $data['date_now'] = date('Y-m-d');
        $data['time_now'] = date("H:i:s");
        $data['icd10'] = $this->mSoap->getIcd10();
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('soap/v_formSoap', $data);
        $this->load->view('template/foot');
    }

    public function detail($id_soap)
    {
        $data['title'] = 'Detail Soap';
        $where = array('id_soap' => $id_soap);
        $data['soap'] = $this->mSoap->getWhere($where, 'v_soap')->result();
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('soap/detail', $data);
        $this->load->view('template/foot');
    }

    public function index()
    {
        $data['soap'] = $this->mSoap->view();

        $data['title'] = "SOAP";
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('soap/index', $data);
        $this->load->view('template/foot');
    }
}
        
    /* End of file  Soap.php */
