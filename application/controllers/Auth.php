<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }
        $this->load->model('mLogin');
    }

    public function index()
    {
        $data['menu'] = 'Home';
        $this->load->view('template/head');
        $this->load->view('template/menu', $data);
        $this->load->view('index');
        $this->load->view('template/foot');
    }

    public function table()
    {
        $data['menu'] = 'Home';
        $this->load->view('template/head');
        $this->load->view('template/menu', $data);
        $this->load->view('template/dataTable');
        $this->load->view('template/foot');
    }

    public function form()
    {
        $data['menu'] = 'Home';
        $this->load->view('template/head');
        $this->load->view('template/menu', $data);
        $this->load->view('template/form');
        $this->load->view('template/foot');
    }
}
