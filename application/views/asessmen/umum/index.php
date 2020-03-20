<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Auth/') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Pemeriksaan/pemeriksaanUmum') ?>"> Pemeriksaan Umum</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">
                                ASESSMEN UMUM
                            </h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Asessmen/tambahAsessmenUmum') ?>">
                            <div class="card-body">
                                <?php
                                $no = 1;
                                if (!empty($asessmenUmum)) {
                                    foreach ($asessmenUmum as $data) {
                                ?>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label"> </label>
                                                    <div class="col-sm-3">
                                                        <input type="hidden" class="form-control" id="inputEmail3" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <table>
                                                    <tr>
                                                        <td>No. RM</td>
                                                        <td>:</td>
                                                        <td><input type="number" class="" name="no_rm" value="<?php echo $data->no_rm; ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="" name="nama_pasien" value="<?php echo $data->nama_lengkap; ?>"></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-sm-3"></label>
                                                    <label for="" class="col-sm-6 control-label"><?php echo $title; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <table>
                                                        <tr>
                                                            <td>Kunjungan</td>
                                                            <td>:</td>
                                                            <td></td>
                                                            <td>Baru <input type="checkbox" name="kunjungan" value="Baru"> Lama <input type="checkbox" name="kunjungan" value="Lama"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alamat</td>
                                                            <td>:</td>
                                                            <td></td>
                                                            <td><textarea name="alamat_pasien" rows="2" cols="30"><?php echo $data->alamat; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Orang Tua/Suami</td>
                                                            <td>:</td>
                                                            <td></td>
                                                            <td><input type="text" name="orang_tua_suami" value="<?php echo $data->orangtua_suami; ?>"></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <table>
                                                        <tr>
                                                            <td>Tgl. Pengkajian</td>
                                                            <td>:</td>
                                                            <td></td>
                                                            <td><input type="text" name="tgl_pengkajian" class="col-sm-12" value="<?php echo $date_now; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jam Pengkajian</td>
                                                            <td>:</td>
                                                            <td></td>
                                                            <td><input type="text" name="jm_pengkajian" class="col-sm-12" value="<?php echo $time_now; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tgl. Lahir/Usia</td>
                                                            <td>:</td>
                                                            <td></td>
                                                            <input type="hidden" value="<?php echo $data->tgl_lahir; ?>" name="tgl_lahir">
                                                            <td><input type="tgl_lahir_usia" name="usia" value="<?php echo substr($date_now, 0, 4) - substr($data->tgl_lahir, 0, 4); ?>"></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td>Keterbatasan komunikasi</td>
                                                    <td>:</td>
                                                    <td><input type="radio" name="keterbatasan" value="Bahasa"> Bahasa</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="radio" name="keterbatasan" value="Suara"> Suara</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="radio" name="keterbatasan" value="Pengetahuan"> Pengetahuan</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="radio" name="keterbatasan" value="Kondisi Fisik"> Kondisi fisik</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="radio" name="keterbatasan" value="Tidak ada"> Tidak ada</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="" class="col-sm-4"></label>
                                        <label for="" class="col-sm-6">
                                            Alergi, ESO, dan Reaksi
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td><input type="checkbox" name="alergi" value="Tidak ada alergi"> Tidak ada alergi</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Alergi obat, sebutkan</td>
                                                    <td>:</td>
                                                    <td><input type="text" class="col-sm-12" name="sebutkan_alergi_obat"></td>
                                                </tr>
                                                <tr>
                                                    <td>Alergi makanan, sebutkan</td>
                                                    <td>:</td>
                                                    <td><input type="text" class="col-sm-12" name="sebutkan_alergi_makanan"></td>
                                                </tr>
                                                <tr>
                                                    <td>Alergi lainnya, sebutkan</td>
                                                    <td>:</td>
                                                    <td><input type="text" class="col-sm-12" name="sebutkan_alergi_lainnya"></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" name="alergi" value="Tidak diketahui"> Tidak diketahui</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" name="eso" value="tidak ada"> Tidak ada ESO</td>
                                                </tr>
                                                <tr>
                                                    <td>Ada, Nama Obat, sebutkan</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="sebutkan_nama_obat"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <table>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Reaksi</td>
                                                    <td>:</td>
                                                    <td></td>
                                                    <td><input type="text" name="reaksi_obat" class="col-sm-12"></td>
                                                </tr>
                                                <tr>
                                                    <td>Reaksi</td>
                                                    <td>:</td>
                                                    <td></td>
                                                    <td><input type="text" name="reaksi_makanan" class="col-sm-12"></td>
                                                </tr>
                                                <tr>
                                                    <td>Reaksi</td>
                                                    <td>:</td>
                                                    <td></td>
                                                    <td><input type="text" name="reaksi_lainnya" class="col-sm-12"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>ESO</td>
                                                    <td>:</td>
                                                    <td></td>
                                                    <td><input type="text" name="eso" class="col-sm-12"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <label for="" class="col-sm-4"></label>
                                        <label for="" class="col-sm-6">
                                            Riwayat Sakit dan Kesehatan
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td>Keluhan utama</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="keluhan_utama"></td>
                                                </tr>
                                                <tr>
                                                    <td>Riwayat saat ini</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="riwayat_saat_ini"></td>
                                                </tr>
                                                <tr>
                                                    <td>Riwayat Penyakit dahulu</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="riwayat_penyakit_dahulu"></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"> Operasi, sebutkan</td>
                                                    <td>:</td>
                                                    <td><input type="text" class="col-sm-11" name="operasi_sebutkan"></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"> Tindakan lain, sebutkan</td>
                                                    <td>:</td>
                                                    <td><input type="text" class="col-sm-11" name="tindakan_lain"></td>
                                                </tr>
                                                <tr>
                                                    <td>Riwayat penyakit keluarga</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="riwayat_penyakit_keluarga"></td>
                                                </tr>
                                                <tr>
                                                    <td>Riwayat obat yang di minum</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="riwayat_obat_yang_diminum"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <table>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>kapan</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="kapan_operasi"></td>
                                                </tr>
                                                <tr>
                                                    <td>kapan</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="kapan_tindakan_lain"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <label for="" class="col-sm-4"></label>
                                        <label for="" class="col-sm-6">
                                            Riwayat Psikososial dan Ekonomi
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td>Hubungan pasien dengan anggota keluarga</td>
                                                    <td>&nbsp;&nbsp;</td>
                                                    <td>:</td>
                                                    <td><input type="radio" name="hubungan_pasien_dg_anggota_keluarga" value="baik"> Baik <input type="radio" name="hubungan_pasien_dg_anggota_keluarga" value="tidak baik"> Tidak Baik</td>
                                                </tr>
                                                <tr>
                                                    <td>Status Psikologis</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td><input type="radio" name="status_psikologis" value="tenang"> Tenang <input type="radio" name="status_psikologis" value="lemas"> Lemas <input type="radio" name="status_psikologis" value="takut"> Takut <input type="radio" name="status_psikologis" value="marah"> Marah <input type="radio" name="status_psikologis" value="sedih"> Sedih</td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td><input type="text" class="col-sm-12" name="pekerjaan"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <label for="" class="col-sm-2"></label>
                                        <label for="" class="col-sm-3">
                                            Tanda vital
                                        </label>
                                        <label for="" class="col-sm-2">|</label>
                                        <label for="" class="col-sm-4">
                                            Fungsional
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td>TD</td>
                                                    <td>:</td>
                                                    <td><input type="number" class="form-control-sm" name="td"></td>
                                                    <td>mmHg</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu</td>
                                                    <td>:</td>
                                                    <td><input type="number" class="form-control-sm" name="suhu"></td>
                                                    <td>&ordm;C</td>
                                                </tr>
                                                <tr>
                                                    <td>Nadi</td>
                                                    <td>:</td>
                                                    <td><input type="number" class="form-control-sm" name="nadi"></td>
                                                    <td>x/menit</td>
                                                </tr>
                                                <tr>
                                                    <td>RR</td>
                                                    <td>:</td>
                                                    <td><input type="number" class="form-control-sm" name="rr"></td>
                                                    <td>x/menit</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group row">
                                            <table>
                                                <tr>
                                                    <td>Alat Bantu</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="alat_bantu"></td>
                                                </tr>
                                                <tr>
                                                    <td>Protesa</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="protesa"></td>
                                                </tr>
                                                <tr>
                                                    <td>Cacat Tubuh</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="cacat_tubuh"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">ADL (Advity of Daily Living) <input type="radio" name="adl" value="mandiri"> Mandiri <input type="radio" value="dibantu" name="adl" onclick="return confirm('Ya?')"> Dibantu</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td>Keadaan umum</td>
                                                    <td>:</td>
                                                    <td><input type="radio" name="keadaan_umum" value="baik"> Baik <input type="radio" name="keadaan_umum" value="sedang"> Sedang <input type="radio" name="keadaan_umum" value="lemah"> Lemah </td>
                                                </tr>
                                                <tr>
                                                    <td>BB</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="bb"></td>
                                                    <td>Kg</td>
                                                </tr>
                                                <tr>
                                                    <td>Keadaan Gizi</td>
                                                    <td>:</td>
                                                    <td><input type="radio" name="keadaan_gizi" value="baik"> Baik <input type="radio" name="keadaan_gizi" value="sedang"> Sedang <input type="radio" name="keadaan_gizi" value="buruk"> Buruk </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group row">
                                            <table>
                                                <tr>
                                                    <td>Kesadaran</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="kesadaran"></td>
                                                </tr>
                                                <tr>
                                                    <td>TB</td>
                                                    <td>:</td>
                                                    <td><input type="text" name="tb"></td>
                                                </tr>
                                                <tr>
                                                    <td>Golongan Darah</td>
                                                    <td>:</td>
                                                    <td><input type="radio" name="goldar" value="A"> A <input type="radio" name="goldar" value="B"> B <input type="radio" name="keadaan" value="O"> O <input type="radio" name="goldar" value="AB"> AB </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <label for="" class="col-sm-5"></label>
                                        <label for="" class="col-sm-3">
                                            Skor Nyeri
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <table border="">
                                                <tr>
                                                    <?php
                                                    for ($i = 0; $i < 11; $i++) {
                                                    ?>
                                                        <td style="width: 2%; text-align: center;"><?php echo $i; ?></td>
                                                    <?php } ?>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-6">
                                        <table>
                                            <tr>
                                                <td><input type="radio" name="skor_nyeri" value="Tidak ada nyeri"> Tidak ada nyeri <input type="radio" name="skor_nyeri" value="nyeri kronis"> Nyeri Kronis <input type="radio" name="skor_nyeri" value="nyeri_akut"> Nyeri Akut</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table>
                                            <tr>
                                                <td>Skala nyeri</td>
                                                <td>:</td>
                                                <td><input type="text" name="skala_nyeri"></td>
                                                <td> Lokasi</td>
                                                <td>:</td>
                                                <td><input type="text" name="lokasi"></td>
                                                <td> Durasi</td>
                                                <td>:</td>
                                                <td><input type="text" name="durasi"></td>
                                                <td> Frekuensi</td>
                                                <td>:</td>
                                                <td><input type="text" name="frekuensi"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table>
                                            <tr>
                                                <td>Nyeri hilang bila</td>
                                                <td>:</td>
                                                <td><input type="radio" name="nyeri_hilang_bila" value="Minum obat"> Minum Obat</td>
                                                <td><input type="radio" name="nyeri_hilang_bila" value="Istirahat"> Istirahat</td>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><input type="radio" name="nyeri_hilang_bila" value="Mendengarkan musik"> Mendengarkan musik</td>
                                                <td><input type="radio" name="nyeri_hilang_bila" value="Berubah posisi tidur"> Berubah Posisi Tidur</td>
                                            </tr>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <label for="" class="col-sm-4"></label>
                                        <label for="" class="col-sm-6">
                                            Skrining Resiko Cedera/Jatuh
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table>
                                            <tr>
                                                <td>a.</td>
                                                <td colspan="2">Perhatikan cara berjalan pasien saat duduk di kursi. Apakah pasien tampak tidak seimbang (sempoyongan/limbung) ? <input type="radio" name="soal_a" value="y"> Ya <input type="radio" name="soal_a" value="n"> Tidak</td>
                                            </tr>
                                            <tr>
                                                <td>b.</td>
                                                <td colspan="2">Apakah pasien memegang pinggiran kursi atau meja atau benda lain sebagai penopang saat duduk ? <input type="radio" name="soal_b" value="y"> Ya <input type="radio" name="soal_b" value="n"> Tidak</td>
                                            </tr>
                                            <tr>
                                                <td>Hasil</td>
                                                <td>:</td>
                                                <td><input type="radio" name="hasil" value="Tidak beresiko"> Tidak beresiko (tidak ditemukan a dan b)</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><input type="radio" name="hasil" value="Resiko rendah"> Resiko rendah (ditemukan a dan b)</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><input type="radio" name="hasil" value="Resiko tinggi"> Resiko tinggi (ditemukan a dan b)</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">Diberitahu ke dokter : <input type="radio" name="diberitahu_ke_dokter"> Ya, pukul <input type="text" name="diberitahu_ke_dokter"> <input type="radio" name="diberitahu_ke_dokter" value="Tidak"> Tidak</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-8"></div>
                                    <div class="col-md-4">
                                        <table>
                                            <tr>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Perawat yang melakukan pengkajian</td>
                                            </tr>
                                            <tr>
                                                <td>*<i>Nama lengkap beserta gelar</i></td>
                                            </tr>
                                            <tr>
                                                <td><input type="submit" class="btn btn-default col-sm-12" value="Lembar SOAP" name="submit"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->