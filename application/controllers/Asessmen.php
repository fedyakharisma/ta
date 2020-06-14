<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Asessmen extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }
        $this->load->model('mAsessmenUmum');
        $this->load->model('mPasien');
        $this->load->model('mAsessmenUmum');
        $this->load->model('mKunjungan');
    }

    public function asessmenUmum($no_rm)
    {
        $where = array('no_rm' => $no_rm);
        $data['asessmenUmum'] = $this->mKunjungan->getByid($where, 'v_pemeriksaan')->result();
        $data['date_now'] = date('Y-m-d');
        $data['time_now'] = date("H:i:s");
        date_default_timezone_set('Asia/Jakarta');
        $data['title'] = 'ASESSMEN AWAL RUANG PEMERIKSAAN UMUM';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('asessmen/umum/index', $data);
        $this->load->view('template/foot');
    }


    // PUSHER UPDATE STATUS
    public function updatePusher()
    {
        // TAMPUNG DATA DAN UPDATE
        $where = array(
            'no_rm' => $this->input->post('no_rm'),
            'poli_kode' => 'PL003'
        );
        $data = array(
            'status' => 'Selesai diperiksa'
        );
        $this->mKunjungan->updateData($where, $data, 'kunjungan');

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );

        // PUSHER
        $pusher = new Pusher\Pusher(
            '8cf463b119a9af6cadec', //ganti dengan App_key pusher Anda
            'de8d6e2a7c66c4ea4699', //ganti dengan App_secret pusher Anda
            '992164', //ganti dengan App_key pusher Anda
            $options
        );

        $data['message'] = 'success';
        $pusher->trigger('my-channel', 'my-event', $data);
        // echo 'pusher berhasil';
    }

    public function tambahAsessmenUmum()
    {
        // EDIT STATUS MENJADI SELESAI DI PERIKSA
        $no_rm = $this->input->post('no_rm');
        $poli = 'PL003';
        $this->mKunjungan->updateStatusKunjungan($no_rm, $poli);

        $tglpengkajian = $this->input->post('tgl_pengkajian');
        $jmpengkajian = $this->input->post('jm_pengkajian');
        $tgljampengkajian = $tglpengkajian . ' ' . $jmpengkajian;

        // TAMPUNG DT DI DLM ARRAY DN SIMPAN
        $data = array(
            // 'no_rm' => $this->input->post('no_rm'),
            // 'nama_lengkap' => $this->input->post('nama_pasien'),
            // 'kunjungan' => $this->input->post('kunjungan'),
            // 'alamat' => $this->input->post('alamat_pasien'),
            // 'orangtua_suami' => $this->input->post('orang_tua_suami'),
            // 'tgl_jam_pengkajian' => $tgljampengkajian,
            // 'tgllahir' => $this->input->post('tgl_lahir'),
            // 'usia' => $this->input->post('usia'),
            // 'keterbatasan_komunikasi' => $this->input->post('keterbatasan'),
            // // ALERGI
            // 'alergi' => $this->input->post('alergi'),
            // 'alergi_obat' => $this->input->post('sebutkan_alergi_obat'),
            // 'reaksi_alergi_obat' => $this->input->post('reaksi_obat'),
            // 'alergi_makanan' => $this->input->post('sebutkan_alergi_makanan'),
            // 'reaksi_alergi_makanan' => $this->input->post('reaksi_makanan'),
            // 'alergi_lainnya' => $this->input->post('sebutkan_alergi_lainnya'),
            // 'reaksi_alergi_lainnya' => $this->input->post('reaksi_lainnya'),
            // 'sebutkan_eso' => $this->input->post('sebutkan_nama_obat'),
            // 'eso' => $this->input->post('eso'),
            // 'keluhan_utama' => $this->input->post('keluhan_utama'),
            // 'riwayat_saat_ini' => $this->input->post('riwayat_saat_ini'),
            // 'riwayat_penyakit_dahulu' => $this->input->post('riwayat_penyakit_dahulu'),
            // 'operasi_sebutkan' => $this->input->post('operasi_sebutkan'),
            // 'tindakan_lain_sebutkan' => $this->input->post('tindakan_lain'),
            // 'riwayat_penyakit_keluarga' => $this->input->post('riwayat_penyakit_keluarga'),
            // 'riwayat_obat_yang_diminum' => $this->input->post('riwayat_obat_yang_diminum'),
            // 'kapan_operasi' => $this->input->post('kapan_operasi'),
            // 'kapan_tindakan_lain' => $this->input->post('kapan_tindakan_lain'),
            // 'hubungan_pasien_dg_keluarga' => $this->input->post('hubungan_pasien_dg_anggota_keluarga'),
            // 'status_psikologis' => $this->input->post('status_psikologis'),
            // 'pekerjaan' => $this->input->post('pekerjaan'),
            // 'td' => $this->input->post('td'),
            // 'suhu' => $this->input->post('suhu'),
            // 'nadi' => $this->input->post('nadi'),
            // 'rr' => $this->input->post('rr'),
            // 'alat_bantu' => $this->input->post('alat_bantu'),
            // 'protesa' => $this->input->post('protesa'),
            // 'cacat_tubuh' => $this->input->post('cacat_tubuh'),
            // 'adl' => $this->input->post('adl'),
            // 'keadaan_umum' => $this->input->post('keadaan_umum'),
            // 'kesadaran' => $this->input->post('kesadaran'),
            // 'bb' => $this->input->post('bb'),
            // 'tb' => $this->input->post('tb'),
            // 'gol_darah' => $this->input->post('goldar'),
            // 'keadaan_gizi' => $this->input->post('keadaan_gizi'),
            // 'skor_nyeri' => $this->input->post('skor_nyeri'),
            // 'skala_nyeri' => $this->input->post('skala_nyeri'),
            // 'lokasi_nyeri' => $this->input->post('lokasi'),
            // 'durasi_nyeri' => $this->input->post('durasi'),
            // 'frekuensi_nyeri' => $this->input->post('frekuensi'),
            // 'nyeri_hilang_bila' => $this->input->post('nyeri_hilang_bila'),
            // 'pasien_tidak_seimbang' => $this->input->post('soal_a'),
            // 'pasien_memegang_benda_lain' => $this->input->post('soal_b')
            'alergi' => $this->input->post('alergi'),
            'alergi_obat' => $this->input->post('sebutkan_alergi_obat'),
            'reaksi_alergi_obat' => $this->input->post('reaksi_obat'),
            'alergi_makanan' => $this->input->post('sebutkan_alergi_makanan'),
            'reaksi_alergi_makanan' => $this->input->post('reaksi_makanan'),
            'alergi_lainnya' => $this->input->post('sebutkan_alergi_lainnya'),
            'reaksi_alergi_lainnya' => $this->input->post('reaksi_lainnya'),
            'sebutkan_eso' => $this->input->post('sebutkan_nama_obat'),
            'eso' => $this->input->post('eso'),
            'keluhan_utama' => $this->input->post('keluhan_utama'),
            'riwayat_saat_ini' => $this->input->post('riwayat_saat_ini'),
            'riwayat_penyakit_dahulu' => $this->input->post('riwayat_penyakit_dahulu'),
            'operasi_sebutkan' => $this->input->post('operasi_sebutkan'),
            'tindakan_lain_sebutkan' => $this->input->post('tindakan_lain'),
            'riwayat_penyakit_keluarga' => $this->input->post('riwayat_penyakit_keluarga'),
            'riwayat_obat_yang_diminum' => $this->input->post('riwayat_obat_yang_diminum'),
            'kapan_operasi' => $this->input->post('kapan_operasi'),
            'kapan_tindakan_lain' => $this->input->post('kapan_tindakan_lain'),
            'hubungan_pasien_dg_keluarga' => $this->input->post('hubungan_pasien_dg_anggota_keluarga'),
            'status_psikologis' => $this->input->post('status_psikologis'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'td' => $this->input->post('td'),
            'suhu' => $this->input->post('suhu'),
            'nadi' => $this->input->post('nadi'),
            'rr' => $this->input->post('rr'),
            'alat_bantu' => $this->input->post('alat_bantu'),
            'protesa' => $this->input->post('protesa'),
            'cacat_tubuh' => $this->input->post('cacat_tubuh'),
            'adl' => $this->input->post('adl'),
            'keadaan_umum' => $this->input->post('keadaan_umum'),
            'kesadaran' => $this->input->post('kesadaran'),
            'bb' => $this->input->post('bb'),
            'tb' => $this->input->post('tb'),
            'gol_darah' => $this->input->post('goldar'),
            'keadaan_gizi' => $this->input->post('keadaan_gizi'),
            'skor_nyeri' => $this->input->post('skor_nyeri'),
            'skala_nyeri' => $this->input->post('skala_nyeri'),
            'lokasi_nyeri' => $this->input->post('lokasi'),
            'durasi_nyeri' => $this->input->post('durasi'),
            'frekuensi_nyeri' => $this->input->post('frekuensi'),
            'nyeri_hilang_bila' => $this->input->post('nyeri_hilang_bila'),
            'pasien_tidak_seimbang' => $this->input->post('soal_a'),
            'pasien_memegang_benda_lain' => $this->input->post('soal_b'),
            'hasil' => $this->input->post('hasil'),
            'lapor_dokter' => $this->input->post('diberitahu_ke_dokter'),
            'id_pegawai' => $this->session->userdata('id')
        );
        $this->mAsessmenUmum->input_data($data, 'asessmen_umum');
        redirect('Asessmen/asessmenUmum');
    }

    public function asessmenKiakb()
    {
        $data['date_now'] = date('d F Y');
        $data['title'] = 'ASSESMEN AWAL RUANG PEMERIKSAAN KIA/KB';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('asessmen/kia_kb/index', $data);
        $this->load->view('template/foot');
    }

    public function tambahAsessmenKiaKb()
    {
        $no_rm = $this->input->post('no_rm');
        $poli = $this->input->post('poli');
        $tglpengkajian = $this->input->post('tgl_pengkajian');
        $jmpengkajian = $this->input->post('jm_pengkajian');
        $tgljampengkajian = $tglpengkajian . ' ' . $jmpengkajian;

        // TAMPUNG DATA INPUTAN KE DLM ARRAY
        $data = array(
            'no_rm' => $this->input->post('no_rm'),
            'nama_lengkap' => $this->input->post('nama_pasien'),
            'kunjungan' => $this->input->post('kunjungan'),
            'alamat' => $this->input->post('alamat_pasien'),
            // 'orangtua_suami' => $this->input->post('orang_tua_suami'), MASIH BLM ADA FIELD
            'tgl_jam_pengkajian' => $tgljampengkajian,
            'tgllahir' => $this->input->post('tgl_lahir'),
            'usia' => $this->input->post('usia'),
            'keterbatasan_komunikasi' => $this->input->post('keterbatasan'),
            // // ALERGI
            'alergi' => $this->input->post('alergi'),
            'alergi_obat' => $this->input->post('sebutkan_alergi_obat'),
            'reaksi_alergi_obat' => $this->input->post('reaksi_obat'),
            'alergi_makanan' => $this->input->post('sebutkan_alergi_makanan'),
            'reaksi_alergi_makanan' => $this->input->post('reaksi_makanan'),
            'alergi_lainnya' => $this->input->post('sebutkan_alergi_lainnya'),
            'reaksi_alergi_lainnya' => $this->input->post('reaksi_lainnya'),
            'sebutkan_eso' => $this->input->post('sebutkan_nama_obat'),
            'eso' => $this->input->post('eso'),
            'keluhan_utama' => $this->input->post('keluhan_utama'),
            'riwayat_saat_ini' => $this->input->post('riwayat_saat_ini'),
            'riwayat_penyakit_dahulu' => $this->input->post('riwayat_penyakit_dahulu'),
            'operasi_sebutkan' => $this->input->post('operasi_sebutkan'),
            'tindakan_lain_sebutkan' => $this->input->post('tindakan_lain'),
            'riwayat_penyakit_keluarga' => $this->input->post('riwayat_penyakit_keluarga'),
            'riwayat_obat_yang_diminum' => $this->input->post('riwayat_obat_yang_diminum'),
            'kapan_operasi' => $this->input->post('kapan_operasi'),
            'kapan_tindakan_lain' => $this->input->post('kapan_tindakan_lain'),
            'hubungan_pasien_dg_keluarga' => $this->input->post('hubungan_pasien_dg_anggota_keluarga'),
            'status_psikologis' => $this->input->post('status_psikologis'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'td' => $this->input->post('td'),
            'suhu' => $this->input->post('suhu'),
            'nadi' => $this->input->post('nadi'),
            'rr' => $this->input->post('rr'),
            'alat_bantu' => $this->input->post('alat_bantu'),
            'protesa' => $this->input->post('protesa'),
            'cacat_tubuh' => $this->input->post('cacat_tubuh'),
            'adl' => $this->input->post('adl'),
            'keadaan_umum' => $this->input->post('keadaan_umum'),
            'kesadaran' => $this->input->post('kesadaran'),
            'bb' => $this->input->post('bb'),
            'tb' => $this->input->post('tb'),
            'gol_darah' => $this->input->post('goldar'),
            'keadaan_gizi' => $this->input->post('keadaan_gizi'),
            'G' => $this->input->post('g'),
            'P' => $this->input->post('p'),
            'A' => $this->input->post('a'),
            'hidup' => $this->input->post('hidup'),
            'tanggal_partus' => $this->input->post('tgl_partus'),
            'tempat' => $this->input->post('tempat_partus'),
            'uk' => $this->input->post('uk'),
            'jenis_persal' => $this->input->post('jenis_persal'),
            'penolong_persal' => $this->input->post('penolong_persal'),
            'penyakit' => $this->input->post('penyakit'),
            'bbl_jk_bb' => $this->input->post('bbl_jk_bb'),
            'keadaan_anak_sekarang' => $this->input->post('keadaan_anak_sekarang'),
            'metode_yg_pernah_dipakai' => $this->input->post('metode_yang_pernah_dipakai'),
            'lama' => $this->input->post('lama_metode'),
            'komplikasi_kb' => $this->input->post('komplikasi_kb'),
            'riwayat_ginekologi' => $this->input->post('riwayat_ginekologi'),
            'skor_nyeri' => $this->input->post('skor_nyeri'),
            'skala_nyeri' => $this->input->post('skala_nyeri'),
            'lokasi_nyeri' => $this->input->post('lokasi'),
            'durasi_nyeri' => $this->input->post('durasi'),
            'frekuensi_nyeri' => $this->input->post('frekuensi'),
            'nyeri_hilang_bila' => $this->input->post('nyeri_hilang_bila'),
            'pasien_tidak_seimbang' => $this->input->post('soal_a'),
            'pasien_memegang_benda_lain' => $this->input->post('soal_b'),
            'hasil' => $this->input->post('hasil'),
            'lapor_dokter' => $this->input->post('diberitahu_ke_dokter'),
            'id_pegawai' => $this->session->userdata('id'),
            'soap' => '0'
        );

        // SIMPAN DATA ASESSMEN
        $this->mAsessmenKiaKb->input_data($data, 'asessmen_kia_kb');

        // EDIT STATUS "SLS DIPERIKSA" DI TABLE KUNJUNGAN
        $this->mKunjungan->updateStatusKunjungan($no_rm, $poli);
        redirect('Pemeriksaan/pemeriksaanKiaKb');
    }

    public function asessmenGigimulut()
    {
        $data['date_now'] = date('d F Y');
        $data['title'] = 'ASESSMEN AWAL RUANG KESEHATAN GIGI DAN MULUT';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('asessmen/gigi_mulut/index', $data);
        $this->load->view('template/foot');
    }

    public function tambahAsessmenGigimulut()
    {
        // EDIT STATUS MENJADI SELESAI DI PERIKSA
        $no_rm = $this->input->post('no_rm');
        $poli = 'PL004';
        $this->mKunjungan->updateStatusKunjungan($no_rm, $poli);

        // TAMPUNG DATA DR VIEW KE DALAM $
        $tglpengkajian = $this->input->post('tgl_pengkajian');
        $jmpengkajian = $this->input->post('jm_pengkajian');
        $tgljampengkajian = $tglpengkajian . ' ' . $jmpengkajian;

        // TAMPUNG $ KE DLM ARRAY UTK DI SMPN
        $data = array(
            'no_rm' => $this->input->post('no_rm'),
            'nama_lengkap' => $this->input->post('nama_pasien'),
            'kunjungan' => $this->input->post('kunjungan'),
            'alamat' => $this->input->post('alamat_pasien'),
            // 'orangtua_suami' => $this->input->post('orang_tua_suami'), MASIH BLM ADA FIELD
            'tgl_jam_pengkajian' => $tgljampengkajian,
            'tgllahir' => $this->input->post('tgl_lahir'),
            'usia' => $this->input->post('usia'),
            'keterbatasan_komunikasi' => $this->input->post('keterbatasan'),
            // // ALERGI
            // 'alergi' => $this->input->post('alergi'),
            'alergi_obat' => $this->input->post('sebutkan_alergi_obat'),
            'reaksi_alergi_obat' => $this->input->post('reaksi_obat'),
            'alergi_makanan' => $this->input->post('sebutkan_alergi_makanan'),
            'reaksi_alergi_makanan' => $this->input->post('reaksi_makanan'),
            'alergi_lainnya' => $this->input->post('sebutkan_alergi_lainnya'),
            'reaksi_alergi_lainnya' => $this->input->post('reaksi_lainnya'),
            'sebutkan_eso' => $this->input->post('sebutkan_nama_obat'),
            'eso' => $this->input->post('eso'),
            'keluhan_utama' => $this->input->post('keluhan_utama'),
            'riwayat_saat_ini' => $this->input->post('riwayat_saat_ini'),
            'riwayat_penyakit_dahulu' => $this->input->post('riwayat_penyakit_dahulu'),
            'operasi_sebutkan' => $this->input->post('operasi_sebutkan'),
            'tindakan_lain_sebutkan' => $this->input->post('tindakan_lain'),
            'riwayat_penyakit_keluarga' => $this->input->post('riwayat_penyakit_keluarga'),
            'riwayat_obat_yang_diminum' => $this->input->post('riwayat_obat_yang_diminum'),
            'kapan_operasi' => $this->input->post('kapan_operasi'),
            'kapan_tindakan_lain' => $this->input->post('kapan_tindakan_lain'),
            'hubungan_pasien_dg_keluarga' => $this->input->post('hubungan_pasien_dg_anggota_keluarga'),
            'status_psikologis' => $this->input->post('status_psikologis'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'td' => $this->input->post('td'),
            'suhu' => $this->input->post('suhu'),
            'nadi' => $this->input->post('nadi'),
            'rr' => $this->input->post('rr'),
            'alat_bantu' => $this->input->post('alat_bantu'),
            'protesa' => $this->input->post('protesa'),
            'cacat_tubuh' => $this->input->post('cacat_tubuh'),
            'adl' => $this->input->post('adl'),
            'keadaan_umum' => $this->input->post('keadaan_umum'),
            'kesadaran' => $this->input->post('kesadaran'),
            'bb' => $this->input->post('bb'),
            'tb' => $this->input->post('tb'),
            'gol_darah' => $this->input->post('goldar'),
            'keadaan_gizi' => $this->input->post('keadaan_gizi'),
            // GIGI MULUT
            'muka' => $this->input->post('muka'),
            'bengkak' => $this->input->post('bengkak'),
            'pemeriksaan_dalam_mulut' => $this->input->post('pemeriksaan_dalam_mulut'),
            'decay' => $this->input->post('decay'),
            'filling' => $this->input->post('failling'),
            'missing' => $this->input->post('missing'),
            'calculus' => $this->input->post('calculus'),
            'bibir' => $this->input->post('bibir'),
            'lidah' => $this->input->post('lidah'),
            'mukosa_mulut' => $this->input->post('mukosa_mulut'),
            'gingiva' => $this->input->post('gingiva'),
            'gigi_susu_rahang_atas' => $this->input->post('gigi_susu_rahang_atas'),
            'rahang_atas' => $this->input->post('rahang_atas'),
            'rahang_bawah' => $this->input->post('rahang_bawah'),
            'gigi_susu_rahang_bawah' => $this->input->post('gigi_susu_rahang_bawah'),
            'skor_nyeri' => $this->input->post('skor_nyeri'),
            'skala_nyeri' => $this->input->post('skala_nyeri'),
            'lokasi_nyeri' => $this->input->post('lokasi'),
            'durasi_nyeri' => $this->input->post('durasi'),
            'frekuensi_nyeri' => $this->input->post('frekuensi'),
            'nyeri_hilang_bila' => $this->input->post('nyeri_hilang_bila'),
            'pasien_tidak_seimbang' => $this->input->post('soal_a'),
            'pasien_memegang_benda_lain' => $this->input->post('soal_b'),
            'hasil' => $this->input->post('hasil'),
            'lapor_dokter' => $this->input->post('diberitahu_ke_dokter'),
            'id_pegawai' => $this->session->userdata('id')
        );
        $this->mAsessmenGigiMulut->input_data($data, 'asessmen_gigi_mulut');
        redirect('Pemeriksaan/pemeriksaanGigiMulut');
    }
}
        
    /* End of file  Asessemen.php */
