<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Antrian extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("Login/"));
        }
        $this->load->model('mAntrian');
        $this->load->model('mKunjungan');
        $this->load->model('mPasien');
        $this->load->model('mPoliklinik');
    }

    function cetak_struk($data,$b) {
        // me-load library escpos
        $this->load->library('escpos');
 
        // membuat connector printer ke shared printer bernama "printer_a" (yang telah disetting sebelumnya)
        $connector = new Escpos\PrintConnectors\WindowsPrintConnector("printer_a");
 
        // membuat objek $printer agar dapat di lakukan fungsinya
        $printer = new Escpos\Printer($connector);
 
 
        /* ---------------------------------------------------------
         * Teks biasa | text()
         */
        if ($b == "PL003" ) {
            $u = "POLI UMUM";
        }elseif ($b == "PL004") {
            $u = "POLI GIGI&MULUT";
        }elseif ($b == "PL005"){
            $u = "POLI KIA";
        }
        $u;
        $i=$data['no_antrian'];
        $printer->initialize();
        $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
        $printer->setTextSize(1, 1);
        $printer->text("DKT KABUPATEN LUMAJANG\n");
        $printer->setTextSize(2, 2);
        $printer->text("$u\n");
        $printer->setTextSize(7, 7);
        $printer->text("$i\n");
        $printer->text("\n");
 
        // /* ---------------------------------------------------------
        //  * Select print mode | selectPrintMode()
        //  */
        // // Printer::MODE_FONT_A
        // $printer->initialize();
        // $printer->selectPrintMode(Escpos\Printer::MODE_FONT_A);
        // $printer->text("teks dengan MODE_FONT_A \n");
        // $printer->text("\n");
 
        // // Printer::MODE_FONT_B
        // $printer->initialize();
        // $printer->selectPrintMode(Escpos\Printer::MODE_FONT_B);
        // $printer->text("teks dengan MODE_FONT_B \n");
        // $printer->text("\n");
 
        // // Printer::MODE_EMPHASIZED
        // $printer->initialize();
        // $printer->selectPrintMode(Escpos\Printer::MODE_EMPHASIZED);
        // $printer->text("teks dengan MODE_EMPHASIZED \n");
        // $printer->text("\n");
 
        // // Printer::MODE_DOUBLE_HEIGHT
        // $printer->initialize();
        // $printer->selectPrintMode(Escpos\Printer::MODE_DOUBLE_HEIGHT);
        // $printer->text("teks dengan MODE_DOUBLE_HEIGHT \n");
        // $printer->text("\n");
 
        // // Printer::MODE_DOUBLE_WIDTH
        // $printer->initialize();
        // $printer->selectPrintMode(Escpos\Printer::MODE_DOUBLE_WIDTH);
        // $printer->text("teks dengan MODE_DOUBLE_WIDTH \n");
        // $printer->text("\n");
 
        // // Printer::MODE_UNDERLINE
        // $printer->initialize();
        // $printer->selectPrintMode(Escpos\Printer::MODE_UNDERLINE);
        // $printer->text("teks dengan MODE_UNDERLINE \n");
        // $printer->text("\n");
 
 
        // /* ---------------------------------------------------------
        //  * Teks dengan garis bawah  | setUnderline()
        //  */
        // $printer->initialize();
        // $printer->setUnderline(Escpos\Printer::UNDERLINE_DOUBLE);
        // $printer->text("Ini teks dengan garis bawah \n");
        // $printer->text("\n");
 
        // /* ---------------------------------------------------------
        //  * Rata kiri, tengah, dan kanan (JUSTIFICATION) | setJustification()
        //  */
        // // Teks rata kiri JUSTIFY_LEFT
        // $printer->initialize();
        // $printer->setJustification(Escpos\Printer::JUSTIFY_LEFT);
        // $printer->text("Ini teks rata kiri \n");
        // $printer->text("\n");
 
        // // Teks rata tengah JUSTIFY_CENTER
        // $printer->initialize();
        // $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
        // $printer->text("Ini teks rata tengah \n");
        // $printer->text("\n");
 
        // // Teks rata kanan JUSTIFY_RIGHT
        // $printer->initialize();
        // $printer->setJustification(Escpos\Printer::JUSTIFY_RIGHT);
        // $printer->text("Ini teks rata kanan \n");
        // $printer->text("\n");
 
 
        // /* ---------------------------------------------------------
        //  * Font A, B dan C | setFont()
        //  */
        // // Teks dengan font A
        // $printer->initialize();
        // $printer->setFont(Escpos\Printer::FONT_A);
        // $printer->text("Ini teks dengan font A \n");
        // $printer->text("\n");
 
        // // Teks dengan font B
        // $printer->initialize();
        // $printer->setFont(Escpos\Printer::FONT_B);
        // $printer->text("Ini teks dengan font B \n");
        // $printer->text("\n");
 
        // // Teks dengan font C
        // $printer->initialize();
        // $printer->setFont(Escpos\Printer::FONT_C);
        // $printer->text("Ini teks dengan font C \n");
        // $printer->text("\n");
 
        // /* ---------------------------------------------------------
        //  * Jarak perbaris 40 (linespace) | setLineSpacing()
        //  */
        // $printer->initialize();
        // $printer->setLineSpacing(40);
        // $printer->text("Ini paragraf dengan \nline spacing sebesar 40 \ndi printer dotmatrix \n");
        // $printer->text("\n");
 
        // /* ---------------------------------------------------------
        //  * Jarak dari kiri (Margin Left) | setPrintLeftMargin()
        //  */
        // $printer->initialize();
        // $printer->setPrintLeftMargin(10);
        // $printer->text("Ini teks berjarak 10 dari kiri (Margin left) \n");
        // $printer->text("\n");
 
        // /* ---------------------------------------------------------
        //  * membalik warna teks (background menjadi hitam) | setReverseColors()
        //  */
        // $printer->initialize();
        // $printer->setReverseColors(TRUE);
        // $printer->text("Warna Teks ini terbalik \n");
        // $printer->text("\n");
 
 
        /* ---------------------------------------------------------
         * Menyelesaikan printer
         */
        $printer->feed(4); // mencetak 2 baris kosong, agar kertas terangkat ke atas
        $printer->close();
    }

    public function tambahAntrian()
    {
        $no_rm = $this->input->post('ktb');
        $this->mKunjungan->updateStatusKunjunganA($no_rm);
        $b = $this->input->post('poli');
        $u= $this->mKunjungan->hitungJumlahAssetU();
        $g = $this->mKunjungan->hitungJumlahAssetG();
        $k = $this->mKunjungan->hitungJumlahAssetK();
         

        if ($b == "PL003") {
            $data = array(
            'no_rm' => $this->input->post('ktb'),
            'id_kunjungan' => $this->input->post('idkunjungan'),
            'no_antrian' => $this->input->post('noantrian')+$u,
        );
        $this->mAntrian->input_dataPoliUmum($data, 'antrian');
        $this->cetak_struk($data,$b);
        }else if ($b=="PL004") {
            $data = array(
            'no_rm' => $this->input->post('ktb'),
            'id_kunjungan' => $this->input->post('idkunjungan'),
            'no_antrian' => $this->input->post('noantrian')+$g,
        );
        $this->mAntrian->input_dataPoliGigi($data, 'antrian');
        $this->cetak_struk($data,$b);
        }else if($b=="PL005"){
            $data = array(
            'no_rm' => $this->input->post('ktb'),
            'id_kunjungan' => $this->input->post('idkunjungan'),
            'no_antrian' => $this->input->post('noantrian')+$k,
        );
        $this->mAntrian->input_dataPoliKia($data, 'antrian');
        $this->cetak_struk($data,$b);
        }
       
        // require_once(APPATH.'views/vendor/autoload.php');
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
        redirect('Antrian/');
    }

    public function index()
    {
        //POLI UMUM
        $data['noantriumumm'] = $this->mAntrian->viewnoantriumumm();
        $data['noantriumums'] = $this->mAntrian->viewnoantriumums();
        $data['noantriumumd'] = $this->mAntrian->viewnoantriumumd();
        $data['antrianUMUM'] = $this->mAntrian->viewPUMUM();
        //POLI UMUM

        //POLI GIGI
        $data['noantrigigim'] = $this->mAntrian->viewnoantrigigim();
        $data['noantrigigis'] = $this->mAntrian->viewnoantrigigis();
        $data['noantrigigid'] = $this->mAntrian->viewnoantrigigid();
        $data['antrianGIGI'] = $this->mAntrian->viewPGIGI();
        //POLI GIGI

        //POLI KIA
        $data['noantrikiam'] = $this->mAntrian->viewnoantrikiam();
        $data['noantrikias'] = $this->mAntrian->viewnoantrikias();
        $data['noantrikiad'] = $this->mAntrian->viewnoantrikiad();
        $data['antrianKIA'] = $this->mAntrian->viewPKIA();
        //POLI KIA

        $data['pasien'] = $this->mAntrian->viewpasien();
        $data['poliklinik'] = $this->mPoliklinik->view();
        $data['title'] = 'Data Antrian';
        $this->load->view('template/head');
        $this->load->view('template/menu');
        $this->load->view('antrian/v_antrian', $data);
        $this->load->view('template/foot');
    }

    public function next(){
        
        if($this->input->post('btnNext')){
            $id_kunjungan = $this->input->post('idkunjunganumums');
            $this->mKunjungan->updateStatusKunjungannext($id_kunjungan);
        }elseif($this->input->post('btnBack')){
            $id_kunjungan = $this->input->post('idkunjunganumumd');
            $this->mKunjungan->updateStatusKunjunganback($id_kunjungan);
        }

        // require_once(APPATH.'views/vendor/autoload.php');
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
        redirect('Antrian/');
    }


    // public function back(){
        
    //     if($this->input->post('btnBack')){
    //         $idkunjungan = $this->input->post('id_kunjungan');
            
    //     }
        
    //     $this->mKunjungan->updateStatusKunjunganback($idkunjungan);
        
    //     redirect('Antrian/');
    // }
    

    
    public function hapusKunjungan($no_rm)
    {
        $this->mKunjungan->delete($no_rm);
        redirect('Kunjungan/');
    }
}
        
    /* End of file  Kunjungan.php */
