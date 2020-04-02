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

        $cek['login'] = $this->mLogin->cekLogin("v_data_pegawai", $where)->num_rows();

        if ($cek > 0) {
            $query = $this->db->query("SELECT * FROM `v_data_pegawai` WHERE username = '$username'");
            $row = $query->row_array();
            if (isset($row)) {
                $row['nama_lengkap'];
            }
            $data_session = array(
                'nama' => $row['nama_lengkap'],
                'nip' => $row['nip'],
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
