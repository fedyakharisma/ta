<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('mLogin');
    }

    public function masuk()
    {
        redirect('Auth/');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password' => md5($password)
        );

        $cek = $this->mLogin->cekLogin("user", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => 'login'
            );

            $this->session->set_userdata($data_session);

            redirect(site_url('Auth/'));
        } else {
            echo $where['password'];
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('Login'));
    }
}
