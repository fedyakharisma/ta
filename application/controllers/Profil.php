<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Profil';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('profil/index.php', $data);
        $this->load->view('template/foot');
    }
}
        
    /* End of file  profil.php */
