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
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <label class="control-label col-xs-3">No. RM</label>
                                                        </div>
                                                        <div class="col-xs-8">
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
                                                            <input type="checkbox" name="kunjungan" value="Baru"> Kunjungan Baru
                                                        </label>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <label class="control-label ">
                                                            <input type="checkbox" name="kunjungan" value="Lama"> Kunjungan Lama
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label col-xs-3">Tgl. Pengkajian</label>
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <input type="text" class="form-control" name="tgl_pengkajian" class="col-sm-12" value="<?php echo $date_now; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label col-xs-3">Alamat</label>
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <textarea name="alamat_pasien" class="form-control" rows="2" cols="30"><?php echo $data->alamat; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label col-xs-3">Jam. Pengkajian</label>
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <input type="text" class="form-control" name="jm_pengkajian" class="col-sm-12" value="<?php echo $time_now; ?>">
                                                        </div>
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
                                                            <input class="form-check-input" type="checkbox" name="keterbatasan" value="Bahasa">
                                                            <label class="form-check-label">Bahasa</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="keterbatasan" value="Suara">
                                                            <label class="form-check-label">Suara</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="keterbatasan" value="Pengetahuan">
                                                            <label class="form-check-label">Pengetahuan</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="keterbatasan" value="Kondisi Fisik">
                                                            <label class="form-check-label">Kondisi fisik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="keterbatasan" value="Tidak ada">
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
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Alergi obat, sebutkan :</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="sebutkan_alergi_obat">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Reaksi</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="reaksi_obat">
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
                                                <input type="text" class="form-control" name="sebutkan_alergi_makanan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Reaksi</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="reaksi_makanan">
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
                                                <input type="text" class="form-control" name="sebutkan_alergi_lainnya">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">Reaksi</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="reaksi_lainnya">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <div class="col-md-12">
                                                <input class="form-check-input" type="checkbox" name="alergi" value="Tidak diketahui">
                                            </div>
                                            <label class="form-check-label">Tidak diketahui</label>
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
                                                <input type="text" class="form-control" name="sebutkan_nama_obat">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">ESO</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="eso">
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
                                                <input type="text" class="form-control" name="keluhan_utama">
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
                                                <input type="text" class="form-control" name="riwayat_saat_ini">
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
                                                <input type="text" class="form-control" name="riwayat_penyakit_dahulu">
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
                                                <input type="text" class="form-control" name="operasi_sebutkan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">kapan</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="kapan_operasi">
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
                                                <input type="text" class="form-control" name="tindakan_lain">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-xs-3">kapan</label>
                                            </div>
                                            <div class="col-md-11">
                                                <input type="text" class="form-control" name="kapan_tindakan_lain">
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
                                                <input type="text" class="form-control" name="riwayat_penyakit_keluarga">
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
                                                <input type="text" class="form-control" name="riwayat_obat_yang_diminum">
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
                                                    <input class="form-check-input" type="radio" name="hubungan_pasien_dg_anggota_keluarga" value="Baik">
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
                                                    <input class="form-check-input" type="radio" name="status_psikologis" value="Tenang">
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
                                                <input type="text" class="form-control" name="pekerjaan">
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
                                                <input type="text" class="form-control" name="td">
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
                                                <input type="text" class="form-control" name="alat_bantu">
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
                                                <input type="text" class="form-control" name="suhu">
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
                                                <input type="text" class="form-control" name="protesa">
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
                                                <input type="text" class="form-control" name="nadi">
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
                                                <input type="text" class="form-control" name="cacat_tubuh">
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
                                                <input type="text" class="form-control" name="rr">
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
                                                    <input class="form-check-input" type="checkbox" name="keadaan_umum" value="Baik">
                                                    <label class="form-check-label">Baik &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="keadaan_umum" value="Sedang">
                                                    <label class="form-check-label">Sedang &nbsp;</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="keadaan_umum" value="Lemah">
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
                                                <input type="text" class="form-control" name="kesadaran">
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
                                                <input type="text" class="form-control" name="bb">
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
                                                    <input class="form-check-input" type="radio" name="goldar" value="A">
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
                                                <input type="text" class="form-control" name="tb">
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
                                                    <input class="form-check-input" type="radio" name="keadaan_gizi" value="Baik">
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
                                                        <input class="form-check-input" type="radio" name="skor_nyeri" value="Tidak ada nyeri">
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
                                                <input type="text" class="form-control" name="skala_nyeri">
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
                                                <input type="text" class="form-control" name="lokasi">
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
                                                <input type="text" class="form-control" name="durasi">
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
                                                <input type="text" class="form-control" name="frekuensi">
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
                                                        <input class="form-check-input" type="radio" name="soal_a" value="y">
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
                                                        <input class="form-check-input" type="radio" name="soal_b" value="y">
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
                                                        <label class="form-check-label">Resiko rendah (ditemukan a dan b)</label>
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
                                                    <label class="form-check-label">Ya, pukul&nbsp;</label>
                                                    <input type="time" name="diberitahu_ke_dokter" class="form-control col-md-2">
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