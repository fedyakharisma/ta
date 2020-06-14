<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Auth/') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Pemeriksaan/pemeriksaanGigiMulut') ?>"> Pemeriksaan Gigi dan Mulut</a></li>
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
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Asessmen/tambahAsessmenGigimulut') ?>">
                            <div class="card-body">
                                <?php
                                $no = 1;
                                if (!empty($asessmenGigiMulut)) {
                                    foreach ($asessmenGigiMulut as $data) {
                                ?>
                                        <div class="row">
                                            <div class="col-md-7">
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <label class="control-label col-xs-3">No. RM</label>
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <input type="hidden" class="form-control" name="tgl_pengkajian" class="col-sm-12" value="<?php echo $date_now; ?>" readonly>
                                                            <input type="hidden" class="form-control" name="alamat_pasien" class="col-sm-12" value="<?php echo $data->alamat; ?>" readonly>
                                                            <input type="hidden" class="form-control" name="jm_pengkajian" class="col-sm-12" value="<?php echo $time_now; ?>" readonly>
                                                            <input type="hidden" value="<?php echo substr($date_now, 0, 4) - substr($data->tanggal_lahir, 0, 4); ?>" name="usia">
                                                            <input type="hidden" value="<?php echo $data->tanggal_lahir; ?>" name="tgl_lahir">
                                                            <input class="form-control" type="" value="<?php echo $data->no_rm; ?>" readonly name="no_rm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <label class="control-label col-xs-3">Nama</label>
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <input class="form-control" type="" value="<?php echo $data->nama; ?>" readonly name="nama_pasien">
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="col-xs-3">
                                                        <label class="control-label ">
                                                            <input type="radio" name="kunjungan" value="Baru" required> Kunjungan Baru
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <label class="control-label ">
                                                            <input type="radio" name="kunjungan" value="Lama"> Kunjungan Lama
                                                        </label>
                                                    </div>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label class="control-label col-xs-3">Keterbatasan komunikasi</label>
                                                </div>
                                                <div class="col-xs-8">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keterbatasan" value="Bahasa" required>
                                                            <label class="form-check-label">Bahasa</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keterbatasan" value="Suara">
                                                            <label class="form-check-label">Suara</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keterbatasan" value="Pengetahuan">
                                                            <label class="form-check-label">Pengetahuan</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keterbatasan" value="Kondisi Fisik">
                                                            <label class="form-check-label">Kondisi fisik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keterbatasan" value="Tidak ada">
                                                            <label class="form-check-label">Tidak ada</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <div class="col-md-12">
                                                    <input class="form-check-input" type="checkbox" name="alergi" value="Tidak ada">
                                                    <label class="form-check-label">Tidak ada</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Alergi obat, sebutkan :</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="sebutkan_alergi_obat" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Reaksi</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="reaksi_obat" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Alergi makanan, sebutkan</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="sebutkan_alergi_makanan" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Reaksi</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="reaksi_makanan" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Alergi lainnya, sebutkan</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="sebutkan_alergi_lainnya" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Reaksi</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="reaksi_lainnya" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Ada, Nama Obat, sebutkan</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="sebutkan_nama_obat" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">ESO</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="eso" autocomplete="off" required>
                                            </div>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Keluhan utama</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="keluhan_utama" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Riwayat saat ini</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="riwayat_saat_ini" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Riwayat Penyakit dahulu</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="riwayat_penyakit_dahulu" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Operasi, sebutkan</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="operasi_sebutkan" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">kapan</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="kapan_operasi" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Tindakan lain, sebutkan</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="tindakan_lain" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">kapan</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="kapan_tindakan_lain" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Riwayat penyakit keluarga</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="riwayat_penyakit_keluarga" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Riwayat obat yang di minum</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="riwayat_obat_yang_diminum" autocomplete="off" required>
                                            </div>
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
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Hubungan pasien dengan anggota keluarga</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="hubungan_pasien_dg_anggota_keluarga" value="Baik" required>
                                                    <label class="form-check-label">Baik &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="hubungan_pasien_dg_anggota_keluarga" value="Tidak baik">
                                                    <label class="form-check-label">Tidak Baik &nbsp;</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Status Psikologis</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status_psikologis" value="Tenang" required>
                                                    <label class="form-check-label">Tenang &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status_psikologis" value="Lemas">
                                                    <label class="form-check-label">Lemas &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status_psikologis" value="Takut">
                                                    <label class="form-check-label">Takut &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status_psikologis" value="Marah">
                                                    <label class="form-check-label">Marah &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status_psikologis" value="Sedih">
                                                    <label class="form-check-label">Sedih &nbsp;</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Pekerjaan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="pekerjaan" autocomplete="off" required>
                                            </div>
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
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">TD</label> (mmHg)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="td" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Alat Bantu</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="alat_bantu" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Suhu</label> (&ordm;C)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="suhu" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Protesa</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="protesa" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Nadi</label> (x/menit)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="nadi" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Cacat Tubuh</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="cacat_tubuh" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">RR</label> (x/menit)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="rr" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">ADL (Activity of Daily Living)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="adl" value="Mandiri">
                                                    <label class="form-check-label">Mandiri &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="adl" value="Dibantu">
                                                    <label class="form-check-label">Dibantu &nbsp;</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Keadaan Umum</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="keadaan_umum" value="Baik" required>
                                                    <label class="form-check-label">Baik &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="keadaan_umum" value="Sedang">
                                                    <label class="form-check-label">Sedang &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="keadaan_umum" value="Lemah">
                                                    <label class="form-check-label">Lemah &nbsp;</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Kesadaran</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="kesadaran" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Berat Badan</label> (<i>*Kg</i>)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="bb" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Golongan Darah</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="goldar" value="A" required>
                                                    <label class="form-check-label">A &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="goldar" value="B">
                                                    <label class="form-check-label">B &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="goldar" value="O">
                                                    <label class="form-check-label">O &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="goldar" value="AB">
                                                    <label class="form-check-label">AB &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="goldar" value="-">
                                                    <label class="form-check-label">Tidak tau</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Tinggi Badan</label> (<i>*cm</i>)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="tb" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Keadaan Gizi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="keadaan_gizi" value="Baik" required>
                                                    <label class="form-check-label">Baik &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="keadaan_gizi" value="Sedang">
                                                    <label class="form-check-label">Sedang &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="keadaan_gizi" value="Buruk">
                                                    <label class="form-check-label">Buruk &nbsp;</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <label for="" class="col-sm-4"></label>
                                        <label for="" class="col-sm-3">
                                            Pemeriksaan Ektra Oral
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Muka</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="muka" value="Simetris" required>
                                                <label class="form-check-label">Simetris &nbsp;</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="muka" value="Asimetris">
                                                <label class="form-check-label">Asimetris &nbsp;</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Bengkak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bengkak" value="Kiri" required>
                                                <label class="form-check-label">Kiri &nbsp;</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bengkak" value="Kanan">
                                                <label class="form-check-label">Kanan &nbsp;</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bengkak" value="-">
                                                <label class="form-check-label">Tidak ada &nbsp;</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Pemeriksaan dalam mulut sesuai keluhan pasien</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <table class="table table-bordered table-responsive">
                                                    <thead style="background-color: #b3b3b3;">
                                                        <tr style="font-size: 80%;" align="center">
                                                            <th>Inspeksi gigi&mulut</th>
                                                            <th>Sondasi</th>
                                                            <th>Chloor Aetgly</th>
                                                            <th>Perkusi</th>
                                                            <th>Druk</th>
                                                            <th>Mobilitas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size: 80%;">
                                                            <td><input type="checkbox" class="form-control" value="Inspeksi gigi & mulut" name="pemeriksaan_dalam_mulut"></td>
                                                            <td><input type="checkbox" class="form-control" value="Sondasi" name="pemeriksaan_dalam_mulut"></td>
                                                            <td><input type="checkbox" class="form-control" value="Chloor aetgly" name="pemeriksaan_dalam_mulut"></td>
                                                            <td><input type="checkbox" class="form-control" value="Perkusi" name="pemeriksaan_dalam_mulut"></td>
                                                            <td><input type="checkbox" class="form-control" value="Druk" name="pemeriksaan_dalam_mulut"></td>
                                                            <td><input type="checkbox" class="form-control" value="Mobilitas" name="pemeriksaan_dalam_mulut"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Decay (D)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="decay" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Failling (F)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="failling" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Missing (M)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="missing" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Calculus (C)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="calculus" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Jaringan Lunak Mulut :</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Bibir</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        normal/ada kelainan
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="bibir" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div><i style="font-size: 90%;">*isi dengan - bila normal</i>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Lidah</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        normal/ada kelainan
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="lidah" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div><i style="font-size: 90%;">*isi dengan - bila normal</i>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Mukosa Mulut</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        normal/ada kelainan
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="mukosa_mulut" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div><i style="font-size: 90%;">*isi dengan - bila normal</i>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Gingiva</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        normal/ada kelainan
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="gingiva" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div><i style="font-size: 90%;">*isi dengan - bila normal</i>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Status kesehatan Gigi :</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                Gigi susu (def -t)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <td><input name="gigi_susu_rahang_atas" value="55" type="radio" required></td>
                                                <td><input name="gigi_susu_rahang_atas" value="54" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_atas" value="53" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_atas" value="52" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_atas" value="51" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_atas" value="61" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_atas" value="62" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_atas" value="63" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_atas" value="64" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_atas" value="65" type="radio"></td>
                                            </tr>
                                            <tr align="center">
                                                <td>55</td>
                                                <td>54</td>
                                                <td>53</td>
                                                <td>52</td>
                                                <td>51</td>
                                                <td>61</td>
                                                <td>62</td>
                                                <td>63</td>
                                                <td>64</td>
                                                <td>65</td>
                                            </tr>
                                            <tr align="center">
                                                <td>V</td>
                                                <td>IV</td>
                                                <td>III</td>
                                                <td>II</td>
                                                <td>I</td>
                                                <td>I</td>
                                                <td>II</td>
                                                <td>III</td>
                                                <td>IV</td>
                                                <td>V</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                Gigi tetap (DMF -T)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <td><input name="rahang_atas" value="18" type="radio" required></td>
                                                <td><input name="rahang_atas" value="17" type="radio"></td>
                                                <td><input name="rahang_atas" value="16" type="radio"></td>
                                                <td><input name="rahang_atas" value="15" type="radio"></td>
                                                <td><input name="rahang_atas" value="14" type="radio"></td>
                                                <td><input name="rahang_atas" value="13" type="radio"></td>
                                                <td><input name="rahang_atas" value="12" type="radio"></td>
                                                <td><input name="rahang_atas" value="11" type="radio"></td>
                                                <td><input name="rahang_atas" value="21" type="radio"></td>
                                                <td><input name="rahang_atas" value="22" type="radio"></td>
                                                <td><input name="rahang_atas" value="23" type="radio"></td>
                                                <td><input name="rahang_atas" value="24" type="radio"></td>
                                                <td><input name="rahang_atas" value="25" type="radio"></td>
                                                <td><input name="rahang_atas" value="26" type="radio"></td>
                                                <td><input name="rahang_atas" value="27" type="radio"></td>
                                                <td><input name="rahang_atas" value="28" type="radio"></td>
                                            </tr>
                                            <tr align="center">
                                                <td>18</td>
                                                <td>17</td>
                                                <td>16</td>
                                                <td>15</td>
                                                <td>14</td>
                                                <td>13</td>
                                                <td>12</td>
                                                <td>11</td>
                                                <td>21</td>
                                                <td>22</td>
                                                <td>23</td>
                                                <td>24</td>
                                                <td>25</td>
                                                <td>26</td>
                                                <td>27</td>
                                                <td>28</td>
                                            </tr>
                                            <tr align="center">
                                                <td>48</td>
                                                <td>47</td>
                                                <td>46</td>
                                                <td>45</td>
                                                <td>44</td>
                                                <td>43</td>
                                                <td>42</td>
                                                <td>41</td>
                                                <td>31</td>
                                                <td>32</td>
                                                <td>33</td>
                                                <td>34</td>
                                                <td>35</td>
                                                <td>36</td>
                                                <td>37</td>
                                                <td>38</td>
                                            </tr>
                                            <tr>
                                                <td><input name="rahang_bawah" value="48" type="radio" required></td>
                                                <td><input name="rahang_bawah" value="47" type="radio"></td>
                                                <td><input name="rahang_bawah" value="46" type="radio"></td>
                                                <td><input name="rahang_bawah" value="45" type="radio"></td>
                                                <td><input name="rahang_bawah" value="44" type="radio"></td>
                                                <td><input name="rahang_bawah" value="43" type="radio"></td>
                                                <td><input name="rahang_bawah" value="42" type="radio"></td>
                                                <td><input name="rahang_bawah" value="41" type="radio"></td>
                                                <td><input name="rahang_bawah" value="31" type="radio"></td>
                                                <td><input name="rahang_bawah" value="32" type="radio"></td>
                                                <td><input name="rahang_bawah" value="33" type="radio"></td>
                                                <td><input name="rahang_bawah" value="34" type="radio"></td>
                                                <td><input name="rahang_bawah" value="35" type="radio"></td>
                                                <td><input name="rahang_bawah" value="36" type="radio"></td>
                                                <td><input name="rahang_bawah" value="37" type="radio"></td>
                                                <td><input name="rahang_bawah" value="38" type="radio"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                Gigi susu (def -t)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <td>V</td>
                                                <td>IV</td>
                                                <td>III</td>
                                                <td>II</td>
                                                <td>I</td>
                                                <td>I</td>
                                                <td>II</td>
                                                <td>III</td>
                                                <td>IV</td>
                                                <td>V</td>
                                            </tr>
                                            <tr align="center">
                                                <td>85</td>
                                                <td>84</td>
                                                <td>83</td>
                                                <td>82</td>
                                                <td>81</td>
                                                <td>71</td>
                                                <td>72</td>
                                                <td>73</td>
                                                <td>74</td>
                                                <td>75</td>
                                            </tr>
                                            <tr align="center">
                                                <td><input name="gigi_susu_rahang_bawah" value="85" type="radio" required></td>
                                                <td><input name="gigi_susu_rahang_bawah" value="84" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_bawah" value="83" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_bawah" value="82" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_bawah" value="81" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_bawah" value="71" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_bawah" value="72" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_bawah" value="73" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_bawah" value="74" type="radio"></td>
                                                <td><input name="gigi_susu_rahang_bawah" value="75" type="radio"></td>
                                            </tr>
                                        </table>
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
                                    <div class="col-md-4"></div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="skor_nyeri" value="Tidak ada nyeri" required>
                                                        <label class="form-check-label">Tidak ada nyeri &nbsp;</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="skor_nyeri" value="Nyeri Kronis">
                                                        <label class="form-check-label">Nyeri Kronis &nbsp;</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="skor_nyeri" value="Nyeri Akut">
                                                        <label class="form-check-label">Nyeri Akut &nbsp;</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Skala Nyeri</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="skala_nyeri" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Lokasi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="lokasi" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Durasi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="durasi" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Frekuensi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="frekuensi" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Nyeri hilang bila</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="nyeri_hilang_bila" value="Minum obat">
                                                        <label class="form-check-label">Minum Obat &nbsp;</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="nyeri_hilang_bila" value="Istirahat">
                                                        <label class="form-check-label">Istirahat &nbsp;</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="nyeri_hilang_bila" value="Mendengarkan musik">
                                                        <label class="form-check-label">Mendengarkan musik &nbsp;</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="nyeri_hilang_bila" value="Berubah posisi tidur">
                                                        <label class="form-check-label">Berubah Posisi Tidur &nbsp;</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">a. Perhatikan cara berjalan pasien saat duduk di kursi. Apakah pasien tampak tidak seimbang (sempoyongan/limbung) ?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="soal_a" value="y" required>
                                                        <label class="form-check-label">Ya &nbsp;</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="soal_a" value="n">
                                                        <label class="form-check-label">Tidak &nbsp;</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">b. Apakah pasien memegang pinggiran kursi atau meja atau benda lain sebagai penopang saat duduk ?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="soal_b" value="y" required>
                                                        <label class="form-check-label">Ya &nbsp;</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="soal_b" value="n">
                                                        <label class="form-check-label">Tidak &nbsp;</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Hasil</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="hasil" value="Tidak beresiko">
                                                        <label class="form-check-label">Tidak beresiko (tidak ditemukan a dan b)</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="hasil" value="Resiko rendah">
                                                        <label class="form-check-label">Resiko rendah (ditemukan a atau b)</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="hasil" value="Resiko tinggi">
                                                        <label class="form-check-label">Resiko tinggi (ditemukan a dan b)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Diberitahu ke dokter</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="diberitahu_ke_dokter" value="<?php echo date('H:i:s') ?>">
                                                        <label class="form-check-label">Ya</label>
                                                    </div>
                                                    &nbsp;
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="diberitahu_ke_dokter" value="Tidak">
                                                        <label class="form-check-label">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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