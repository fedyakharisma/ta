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
        $this->load->model('mAsessmenUmum');
        $this->load->model('mAsessmenKiaKb');
        $this->load->model('mAsessmenGigiMulut');
    }

    public function revisiSoap()
    {
        // SET TITLE
        $data['title'] = 'Soap Baru Revisi';

        // TAMPILKAN DATA DARI TABLE ASSESSMEN
        $data['data_asessmen'] = $this->mAsessmenUmum->getWhere('id_pemeriksaan=117', 'asessmen_umum')->result();

        // DATA ICD
        $data['icd10'] = $this->mSoap->getIcd10();

        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('soap/revisi_soap', $data);
        $this->load->view('template/foot');
    }

    public function cekPemeriksaanGigi($no_rm)
    {
        $where = array('no_rm' => $no_rm);
        $data['asessmenGigiMulut'] = $this->mAsessmenGigiMulut->getWhere($where, 'asessmen_gigi_mulut')->result();
        $data['title'] = 'Hasil Asessmen Awal Ruang Pemeriksaan Gigi dan Mulut dari soap';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('soap/pemeriksaan/gigi_mulut/cek_hasil', $data);
        $this->load->view('template/foot');
    }

    public function dataSoap($no_rm)
    {
        $data['title'] =  $no_rm;

        $where = array('no_rm' => $no_rm);

        // TAMPILKAN DATA PEMERIKSAAN PADA TIAP POLI
        // $data['PemeriksaanUmum'] = $this->mAsessmenUmum->getWhere($where, 'asessmen_umum')->num_rows();
        // $data['PemeriksaanKiaKb'] = $this->mAsessmenKiaKb->getWhere($where, 'asessmen_kia_kb')->num_rows();
        $data['PemeriksaanGigiMulut'] = $this->mAsessmenGigiMulut->getWhere($where, 'asessmen_gigi_mulut')->result();

        // CEK DATA TERSEBUT ADA / TIDAK
        // if ($data['PemeriksaanUmum'] > 0) {
        //     echo 'ada data umum';
        // } elseif ($data['PemeriksaanKiaKb'] > 0) {
        //     echo 'ada data kia kb';
        // } elseif ($data['PemeriksaanGigiMulut'] > 0) {
        //     echo 'gigi : ' . $data['PemeriksaanGigiMulut'];
        // } else {
        //     echo 'tidak ada data sama sekali';
        // }

        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('soap/data_soap', $data);
        $this->load->view('template/foot');
    }

    public function tambahSoapGigiMulut()
    {
        // CEK JENIS KELAMIN SDH DI ISI / BLM
        if ($this->input->post('jenis_kelamin') == '') {
            $this->session->set_flashdata('jenisKelaminKosong', '<div class="form-group row"><label class="col-sm-12 control-label" style="color: red;">Mohon pilih jenis kelamin terlebih dahulu!</label></div>');
            redirect('Soap/formGigiMulut/' . $this->input->post('id_pemeriksaan'));
        } else {

            // TAMPUNG DATA INPUTAN DI DLM $
            $no_rm = $this->input->post('no_rm');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tgllahir = $this->input->post('tgllahir');
            $alamat = $this->input->post('alamat');
            $tgl_jam_pengkajian = $this->input->post('tgl_jam_pengkajian');
            $tgljam = $this->input->post('tgl_jam');
            $anamnesa_dan_pemeriksaan = $this->input->post('anamnesa_dan_pemeriksaan');
            $diagnosa_therapy_paraf_dokter = $this->input->post('diagnosa_therapy_dan_paraf_dokter');
            $icd10 = $this->input->post('icd10');

            // TAMPUNG KE DLM ARRAY UTK DI SIMPAN KE DB
            $data = array();
            $index = 0;
            foreach ($anamnesa_dan_pemeriksaan as $data_anamnesa_dan_pemeriksaan) {
                array_push($data, array(
                    'poli_kode' => 'PL004',
                    'no_rm' => $no_rm,
                    'nama_lengkap' => $nama_lengkap,
                    'jenis_kelamin' => $jenis_kelamin,
                    'tanggal_lahir' => $tgllahir,
                    'alamat' => $alamat,
                    'tgl_jam_periksa' => $tgl_jam_pengkajian,
                    'tgl_jam' => $tgljam,
                    'anamnesa_pemeriksaan' => $data_anamnesa_dan_pemeriksaan,
                    'diagnosa_therapy_paraf' => $diagnosa_therapy_paraf_dokter[$index],
                    'id_icd' => $icd10
                ));
                $index++;
            }

            // SIMPAN DATA SOAP DAN UPDATE FIELD SOAP DR 0 KE 1 DI TABLE ASSESMEN GIGI DN MULUT
            $simpanSoap = $this->mSoap->save_batch($data);
            if ($simpanSoap) {

                // PROSES UPDATE FIELD SOAP DI ASESSMEN
                $whereFieldSoap = array('no_rm' => $no_rm);
                $dataFieldSoap = array('soap' => '1');
                $this->mSoap->updateData($whereFieldSoap, $dataFieldSoap, 'asessmen_gigi_mulut');

                // TAMPILKAN NOTIF
                $this->session->set_flashdata('tambahData', 'berhasil');
                redirect('HasilPemeriksaan/pemeriksaanGigiMulut');
            } else {
                redirect('Kesalahan');
            }
        }
    }

    public function tambahSoapKiaKb()
    {
        // CEK JENIS KELAMIN SDH DI ISI / BLM
        if ($this->input->post('jenis_kelamin') == '') {
            $this->session->set_flashdata('jenisKelaminKosong', '<div class="form-group row"><label class="col-sm-12 control-label" style="color: red;">Mohon pilih jenis kelamin terlebih dahulu!</label></div>');
            redirect('Soap/formKiaKb/' . $this->input->post('id_pemeriksaan'));
        } else {

            // TAMPUNG DATA INPUTAN DI DLM $
            $no_rm = $this->input->post('no_rm');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tgllahir = $this->input->post('tgllahir');
            $alamat = $this->input->post('alamat');
            $tgl_jam_pengkajian = $this->input->post('tgl_jam_pengkajian');
            $tgljam = $this->input->post('tgl_jam');
            $anamnesa_dan_pemeriksaan = $this->input->post('anamnesa_dan_pemeriksaan');
            $diagnosa_therapy_paraf_dokter = $this->input->post('diagnosa_therapy_dan_paraf_dokter');
            $icd10 = $this->input->post('icd10');

            // TAMPUNG KE DLM ARRAY UTK DI SIMPAN KE DB
            $data = array();
            $index = 0;
            foreach ($anamnesa_dan_pemeriksaan as $data_anamnesa_dan_pemeriksaan) {
                array_push($data, array(
                    'poli_kode' => 'PL005',
                    'no_rm' => $no_rm,
                    'nama_lengkap' => $nama_lengkap,
                    'jenis_kelamin' => $jenis_kelamin,
                    'tanggal_lahir' => $tgllahir,
                    'alamat' => $alamat,
                    'tgl_jam_periksa' => $tgl_jam_pengkajian,
                    'tgl_jam' => $tgljam,
                    'anamnesa_pemeriksaan' => $data_anamnesa_dan_pemeriksaan,
                    'diagnosa_therapy_paraf' => $diagnosa_therapy_paraf_dokter[$index],
                    'id_icd' => $icd10
                ));
                $index++;
            }
            $simpanSoap = $this->mSoap->save_batch($data);
            if ($simpanSoap) {

                // HAPUS DATA ID INI DI PEMERIKSAAN DAN NOTIF BERHASIL
                // $this->mAsessmenKiaKb->delete($this->input->post('id_pemeriksaan'));
                $this->session->set_flashdata('tambahData', 'berhasil');
                redirect('HasilPemeriksaan/pemeriksaanKiaKb');
            } else {

                // TAMPILKAN ERROR QUERY
                $this->load->view('template/head');
                $this->load->view('template/menu');
                $this->load->view('errors/aksi/error_query');
                $this->load->view('template/foot');
            }
        }
    }

    public function tambahSoap()
    {
        // CEK JENIS KELAMIN SDH DI ISI / BLM
        if ($this->input->post('jenis_kelamin') == '') {
            $this->session->set_flashdata('jenisKelaminKosong', '<div class="form-group row"><label class="col-sm-12 control-label" style="color: red;">Mohon pilih jenis kelamin terlebih dahulu!</label></div>');
            redirect('Soap/formUmum/' . $this->input->post('id_pemeriksaan'));
        } else {
            $no_rm = $this->input->post('no_rm');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $tgllahir = $this->input->post('tgllahir');
            $alamat = $this->input->post('alamat');
            $tgl_jam_pengkajian = $this->input->post('tgl_jam_pengkajian');
            $tgljam = $this->input->post('tgl_jam');
            $anamnesa_dan_pemeriksaan = $this->input->post('anamnesa_dan_pemeriksaan');
            $diagnosa_therapy_paraf_dokter = $this->input->post('diagnosa_therapy_dan_paraf_dokter');
            $icd10 = $this->input->post('icd10');

            // TAMPUNG KE DLM ARRAY UTK DI SIMPAN KE DB
            $data = array();
            $index = 0;
            foreach ($anamnesa_dan_pemeriksaan as $data_anamnesa_dan_pemeriksaan) {
                array_push($data, array(
                    'poli_kode' => 'PL003',
                    'no_rm' => $no_rm,
                    'nama_lengkap' => $nama_lengkap,
                    'jenis_kelamin' => $jenis_kelamin,
                    'tanggal_lahir' => $tgllahir,
                    'alamat' => $alamat,
                    'tgl_jam_periksa' => $tgl_jam_pengkajian,
                    'tgl_jam' => $tgljam,
                    'anamnesa_pemeriksaan' => $data_anamnesa_dan_pemeriksaan,
                    'diagnosa_therapy_paraf' => $diagnosa_therapy_paraf_dokter[$index],
                    'id_icd' => $icd10
                ));
                $index++;
            }

            // SIMPAN DATA SOAP & UPDATE FIELD SOAP DR 0 KE 1 DI TABLE ASESSEMEN UMUM
            $simpanSoap = $this->mSoap->save_batch($data);
            if ($simpanSoap) {

                // PROSES UPDATE FIELD SOAP DI ASESSMEN
                $whereFieldSoap = array('no_rm' => $no_rm);
                $dataFieldSoap = array('soap' => '1');
                $this->mSoap->updateData($whereFieldSoap, $dataFieldSoap, 'asessmen_umum');

                // NOTIF BERHASIL SIMPAN & UPDATE
                $this->session->set_flashdata('tambahData', 'berhasil');
                redirect('HasilPemeriksaan/pemeriksaanUmum');
            } else {
                redirect('Kesalahan');
            }
        }
    }

    public function KiaKb()
    {
        $data['soap'] = $this->mSoap->view();
        $data['title'] = "SOAP";
        $data['menu'] = "Soap Kia Kb";
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('soap/umum/index', $data);
        $this->load->view('template/foot');
    }

    public function Umum()
    {
        $data['soap'] = $this->mSoap->view();
        $data['title'] = "SOAP";
        $data['menu'] = "Soap Umum";
        $this->load->view('template/head');
        $this->load->view('template/menu');
        // $this->load->view('soap/index', $data);
        $this->load->view('soap/jquery_append.php', $data);
        $this->load->view('template/foot');
    }

    public function storePost()
    {
        if (!empty($this->input->post('addmore'))) {
            foreach ($this->input->post('addmore') as $key => $value) {
                $this->db->insert('soap', $value);
            }
        }
        print_r('Record Added Successfully.');
    }

    public function jquery_append()
    {
        // $this->load->view('template/head');
        // $this->load->view('template/menu');
        $this->load->view('soap/jquery_append');
        // $this->load->view('template/foot');
    }

    public function formGigiMulut($id_asessmen_gigi_mulut)
    {
        $data['poli'] = 'gigimulut';
        $data['title'] = 'SOAP';
        $data['judul'] = 'Formulit Pemeriksaan Odontogram';
        $data['date_now'] = date('Y-m-d');
        $data['time_now'] = date('H:i:s');

        // LOAD DATA ASESSMEN WHERE ID & SOAP 0
        $where = array(
            'id_asessmen_gigi_mulut' => $id_asessmen_gigi_mulut,
            'soap' => 0
        );
        $data['soap'] = $this->mAsessmenGigiMulut->getWhere($where, 'asessmen_gigi_mulut')->result();

        // DATA ICD
        $data['icd10'] = $this->mSoap->getIcd10();

        // HITUNG DATA ASESSMEN & KONDISI
        $datasoap = $this->mAsessmenGigiMulut->getWhere($where, 'asessmen_gigi_mulut')->num_rows();
        if ($datasoap == '1') {
            $this->load->view('template/head');
            $this->load->view('template/menu');
            $this->load->view('soap/index', $data);
            $this->load->view('template/foot');
        } else {
            redirect('Kesalahan');
        }
    }

    public function formUmum($id_pemeriksaan)
    {
        $data['poli'] = 'umum';
        $data['title'] = 'SOAP';
        $data['judul'] = 'Lembar Soap Kebidanan';
        $data['date_now'] = date('Y-m-d');
        $data['time_now'] = date("H:i:s");

        // LOAD DATA ICD
        $data['icd10'] = $this->mSoap->getIcd10();

        // DATA ASESSMEN WHERE ID & SOAP SDH / BLM
        $where = array(
            'id_pemeriksaan' => $id_pemeriksaan,
            'soap' => 0
        );
        $data['soap'] = $this->mAsessmenUmum->getWhere($where, 'asessmen_umum')->result();

        // HITUNG DATA ASESSMEN & KONDISI
        $datasoap = $this->mAsessmenUmum->getWhere($where, 'asessmen_umum')->num_rows();
        if ($datasoap == '1') {
            $this->load->view('template/head');
            $this->load->view('template/menu');
            $this->load->view('soap/index', $data);
            $this->load->view('template/foot');
        } else {
            redirect('Kesalahan');
        }
    }

    public function formKiaKb($id_pemeriksaan)
    {
        $where = array(
            'id_pemeriksaan' => $id_pemeriksaan
        );
        $data['soap'] = $this->mAsessmenKiaKb->getWhere($where, 'asessmen_kia_kb')->result();
        $data['poli'] = 'kiakb';
        $data['title'] = 'SOAP';
        $data['judul'] = 'Formulir Pemeriksaan Odontogram';
        $data['date_now'] = date('Y-m-d');
        $data['time_now'] = date("H:i:s");
        $data['icd10'] = $this->mSoap->getIcd10();
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('soap/index', $data);
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
        // SET TITLE
        $data['title'] = 'Soap';

        // TAMPILKAN DATA SOAP
        $data['soap'] = $this->mSoap->selectDistinct()->result();

        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('soap/tabel_soap', $data);
        $this->load->view('template/foot');
    }
}
        
    /* End of file  Soap.php */
