<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Auth/') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Pemeriksaan/pemeriksaanKiaKb') ?>"> Pemeriksaan KIA dan KB</a></li>
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
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                <?php echo $title; ?>
                            </h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Asessmen/tambahAsessmenKiaKb') ?>">
                            <div class="card-body">
                                <?php
                                $no = 1;
                                if (!empty($asessmenKiaKb)) {
                                    foreach ($asessmenKiaKb as $data) {
                                ?>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label col-xs-3">No. RM</label>
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <input type="hidden" value="<?php echo substr($date_now, 0, 4) - substr($data->tanggal_lahir, 0, 4); ?>" name="usia">
                                                            <input type="hidden" value="<?php echo $data->tanggal_lahir; ?>" name="tgl_lahir">
                                                            <input class="form-control" type="" value="<?php echo $data->no_rm; ?>" readonly name="no_rm">
                                                            <input type="hidden" value="<?php echo $data->poli_kode; ?>" name="poli">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label col-xs-3">Nama</label>
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <input type="hidden" class="form-control" name="tgl_pengkajian" class="col-sm-12" value="<?php echo $date_now; ?>">
                                                            <input type="hidden" name="alamat_pasien" value="<?php echo $data->alamat; ?>">
                                                            <input type="hidden" class="form-control" name="jm_pengkajian" class="col-sm-12" value="<?php echo $time_now; ?>">
                                                            <input class="form-control" type="" value="<?php echo $data->nama; ?>" readonly name="nama_pasien">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="control-label col-xs-3">Kunjungan</label>
                                                </div>
                                                <div class="col-xs-8">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kunjungan" value="Baru" required>
                                                            <label class="form-check-label">Baru</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kunjungan" value="Lama">
                                                            <label class="form-check-label">Lama</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="row col-md-6">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <div class="col-md-12">
                                                <input class="form-check-input" type="checkbox" name="alergi" value="Tidak diketahui">
                                                <label class="form-check-label">Tidak diketahui</label>
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
                                                    <input class="form-check-input" type="radio" name="adl" value="Mandiri" required>
                                                    <label class="form-check-label">Mandiri &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Dibantu" name="adl">
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
                                                    <label class="form-check-label">-</label>
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
                                        <label for="" class="col-sm-4">
                                            Riwayat Kehamilan, Persalinan Dan Nifas
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-0">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label">G</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="g" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-0">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">P</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="p" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-0">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">A</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="a" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-0">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Hidup</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="hidup" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-responsive">
                                            <thead style="background-color: #b3b3b3;">
                                                <tr style="font-size: 80%;" align="center">
                                                    <th>No</th>
                                                    <th>Tgl/Bln/Th partus</th>
                                                    <th>Tempat</th>
                                                    <th>Uk(Mgg)</th>
                                                    <th>Jenis Persal</th>
                                                    <th>Penolong persal</th>
                                                    <th>Penyakit</th>
                                                    <th>BBL JK/BB</th>
                                                    <th>Keadaan anak skr,</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                ?>
                                                <tr style="font-size: 80%;">
                                                    <td class="text-center"><?php echo $no++; ?></td>
                                                    <td><input type="date" class="form-control" name="tgl_partus" required autocomplete="off"></td>
                                                    <td><input type="text" class="form-control" name="tempat_partus" required autocomplete="off"></td>
                                                    <td><input type="text" class="form-control" name="uk" required autocomplete="off"></td>
                                                    <td><input type="text" class="form-control" name="jenis_persal" required autocomplete="off"></td>
                                                    <td><input type="text" class="form-control" name="penolong_persal" required autocomplete="off"></td>
                                                    <td><input type="text" class="form-control" name="penyakit" required autocomplete="off"></td>
                                                    <td><input type="text" class="form-control" name="bbl_jk_bb" required autocomplete="off"></td>
                                                    <td><input type="text" class="form-control" name="keadaan_anak_sekarang" required autocomplete="off"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <label for="" class="col-sm-5"></label>
                                        <label for="" class="col-sm-3">
                                            Riwayat KB
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Metode yang pernah di pakai</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <textarea name="metode_yang_pernah_dipakai" cols="3" class="form-control" required autocomplete="off" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Lama</label> *<i>bulan/tahun</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="lama_metode" required autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Komplikasi KB</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="komplikasi_kb" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <label for="" class="col-sm-5"></label>
                                        <label for="" class="col-sm-3">
                                            Riwayat Ginekologi
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="riwayat_ginekologi" value="Infertilitas">
                                                        <label class="form-check-label">Infertilitas</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="riwayat_ginekologi" value="Infeksi virus">
                                                        <label class="form-check-label">Infeksi virus</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="riwayat_ginekologi" value="Endrometriosis">
                                                        <label class="form-check-label">Endrometriosis</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="riwayat_ginekologi" value="Polip serviks">
                                                        <label class="form-check-label">Polip serviks</label>
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
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="riwayat_ginekologi" value="DUB">
                                                        <label class="form-check-label">DUB</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="riwayat_ginekologi" value="Kanker kandungan">
                                                        <label class="form-check-label">Kanker kandungan</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="riwayat_ginekologi" value="Operasi kandungan">
                                                        <label class="form-check-label">Operasi kandungan</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="riwayat_ginekologi" value="Perkosaan">
                                                        <label class="form-check-label">Perkosaan</label>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <input type="text" class="form-control" name="skala_nyeri" required autocomplete="off">
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
                                                <input type="text" class="form-control" name="lokasi" required autocomplete="off">
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
                                                <input type="text" class="form-control" name="durasi" required autocomplete="off">
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
                                                <input type="text" class="form-control" name="frekuensi" required autocomplete="off">
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
                                                        <input class="form-check-input" type="radio" name="hasil" value="Tidak beresiko" required>
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
                                                    <input class="form-check-input" type="radio" name="diberitahu_ke_dokter" value="<?php echo date('H:i:s') ?>">
                                                    <label class="form-check-label">Ya </label>
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
                                                <td><?php echo $this->session->userdata("nama"); ?></td>
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