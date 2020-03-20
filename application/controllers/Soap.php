<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Soap extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Lembar SOAP";
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('soap/index');
        $this->load->view('template/foot');
    }
}
        
    /* End of file  Soap.php */
