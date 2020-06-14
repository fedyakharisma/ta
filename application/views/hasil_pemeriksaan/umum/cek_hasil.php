<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Auth/') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo site_url('HasilPemeriksaan/pemeriksaanUmum') ?>"> Cek Pemeriksaan Umum</a></li>
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
                        <!-- <div class="card-header">
                            <h3 class="card-title">
                            </h3>
                        </div> -->
                        <form class="form-horizontal" method="" action="">
                            <div class="card-body">
                                <?php
                                $no = 1;
                                if (!empty($asessmenUmum)) {
                                    foreach ($asessmenUmum as $data) {
                                ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-sm-5"></label>
                                                    <label for="" class="col-sm-6 control-label">DATA PASIEN</label>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label col-xs-3">No RM</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="" value="<?php echo $data->no_rm; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label col-xs-3">Nama Pasien</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="" value="<?php echo $data->nama_lengkap; ?>" readonly name="nama_pasien">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label col-xs-3">Kunjungan</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="" value="<?php echo $data->kunjungan; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label col-xs-3">Usia</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="" value="<?php echo $data->usia; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label col-xs-3">Tanggal Lahir</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="" value="<?php echo date('d F Y', strtotime($data->tgl_jam_pengkajian)) ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label col-xs-3">Alamat</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <textarea class="form-control" rows="2" readonly><?php echo $data->alamat; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <hr>
                                                <div class="form-group">
                                                    <label class="col-sm-3"></label>
                                                    <label for="" class="col-sm-6 control-label"><?php echo $title; ?></label>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="control-label col-xs-3">Jam. Pengkajian</label>
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <input type="text" class="form-control" name="jm_pengkajian" class="col-sm-12" value="<?php echo substr($data->tgl_jam_pengkajian, 11, 5); ?>" readonly>
                                                        </div>
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
                                                            <input type="text" class="form-control" value="<?php echo date('d F Y', strtotime(substr($data->tgl_jam_pengkajian, 11, 5))) ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        </div>
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
                                                                    <input class="form-check-input" type="checkbox" <?php if ($data->keterbatasan_komunikasi == 'Bahasa') {
                                                                                                                        echo 'Checked';
                                                                                                                    } ?> Disabled>
                                                                    <label class="form-check-label">Bahasa</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" <?php if ($data->keterbatasan_komunikasi == 'Suara') {
                                                                                                                        echo 'Checked ';
                                                                                                                    } ?> Disabled>
                                                                    <label class="form-check-label">Suara</label>
                                                                </div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" <?php if ($data->keterbatasan_komunikasi == 'Pengetahuan') {
                                                                                                                                            echo 'Checked ';
                                                                                                                                        } ?> Disabled>
                                                                    <label class="form-check-label">Pengetahuan</label>
                                                                </div>
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" <?php if ($data->keterbatasan_komunikasi == 'Kondisi fisik') {
                                                                                                                                            echo 'Checked ';
                                                                                                                                        } ?> Disabled>
                                                                    <label class="form-check-label">Kondisi fisik</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" <?php if ($data->keterbatasan_komunikasi == 'Tidak ada') {
                                                                                                                        echo 'Checked ';
                                                                                                                    } ?> Disabled>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->alergi_obat; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="control-label col-xs-3">Reaksi</label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" class="form-control" value="<?php echo $data->reaksi_alergi_obat; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->alergi_makanan; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="control-label col-xs-3">Reaksi</label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" class="form-control" value="<?php echo $data->reaksi_alergi_makanan; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->alergi_lainnya; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="control-label col-xs-3">Reaksi</label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" class="form-control" value="<?php echo $data->reaksi_alergi_lainnya; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <div class="col-md-12">
                                                        <input class="form-check-input" type="checkbox" name="alergi" value="Tidak diketahui" disabled>
                                                    </div>&nbsp;
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
                                                        <input type="text" class="form-control" value="<?php echo $data->sebutkan_eso; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="control-label col-xs-3">ESO</label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" class="form-control" value="<?php echo $data->eso; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->keluhan_utama; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->riwayat_saat_ini; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->riwayat_penyakit_dahulu; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->operasi_sebutkan; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="control-label col-xs-3">kapan</label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" class="form-control" value="<?php echo $data->kapan_operasi; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->tindakan_lain_sebutkan; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="control-label col-xs-3">kapan</label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" class="form-control" value="<?php echo $data->kapan_tindakan_lain; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->riwayat_penyakit_keluarga; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->riwayat_obat_yang_diminum; ?>" readonly>
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
                                                            <input class="form-check-input" type="checkbox" <?php if ($data->hubungan_pasien_dg_keluarga == 'Baik') {
                                                                                                                echo 'Checked';
                                                                                                            } ?> Disabled>
                                                            <label class="form-check-label">Baik &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" <?php if ($data->hubungan_pasien_dg_keluarga == 'Tidak baik') {
                                                                                                                echo 'Checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">Tidak baik &nbsp;</label>
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
                                                            <input class="form-check-input" type="checkbox" <?php if ($data->status_psikologis == 'Tenang') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">Tenang &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" <?php if ($data->status_psikologis == 'Lemas') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">Lemas &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" <?php if ($data->status_psikologis == 'Takut') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">Takut &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" <?php if ($data->status_psikologis == 'Marah') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">Marah &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" <?php if ($data->status_psikologis == 'Sedih') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->pekerjaan; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->td; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->alat_bantu; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->suhu; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->protesa; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->nadi; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->cacat_tubuh; ?>" readonly>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->rr; ?>" readonly>
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
                                                            <input class="form-check-input" type="radio" <?php if ($data->adl == 'Mandiri') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">Mandiri &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" <?php if ($data->adl == 'Dibantu') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
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
                                                            <input class="form-check-input" type="checkbox" <?php if ($data->keadaan_umum == 'Baik') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">Baik &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" <?php if ($data->keadaan_umum == 'Sedang') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">Sedang &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" <?php if ($data->keadaan_umum == 'Lemah') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->kesadaran; ?>" disabled>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->bb; ?>" disabled>
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
                                                            <input class="form-check-input" type="radio" <?php if ($data->gol_darah == 'A') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">A &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" <?php if ($data->gol_darah == 'B') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">B &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" <?php if ($data->gol_darah == 'O') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">O &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" <?php if ($data->gol_darah == 'AB') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->tb; ?>" readonly>
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
                                                            <input class="form-check-input" type="radio" <?php if ($data->keadaan_gizi == 'Baik') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">Baik &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" <?php if ($data->keadaan_gizi == 'Sedang') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
                                                            <label class="form-check-label">Sedang &nbsp;</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" <?php if ($data->keadaan_gizi == 'Buruk') {
                                                                                                                echo 'checked';
                                                                                                            } ?> disabled>
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
                                                                <input class="form-check-input" type="radio" <?php if ($data->skor_nyeri == 'Tidak ada nyeri') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
                                                                <label class="form-check-label">Tidak ada nyeri &nbsp;</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" <?php if ($data->skor_nyeri == 'Nyeri Kronis') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
                                                                <label class="form-check-label">Nyeri Kronis &nbsp;</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" <?php if ($data->skor_nyeri == 'Nyeri Akut') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->skala_nyeri; ?>" disabled>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->lokasi_nyeri; ?>" disabled>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->durasi_nyeri; ?>" disabled>
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
                                                        <input type="text" class="form-control" value="<?php echo $data->frekuensi_nyeri; ?>" disabled>
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
                                                                <input class="form-check-input" type="radio" <?php if ($data->nyeri_hilang_bila == 'Minum obat') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
                                                                <label class="form-check-label">Minum Obat &nbsp;</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" <?php if ($data->nyeri_hilang_bila == 'Istirahat') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
                                                                <label class="form-check-label">Istirahat &nbsp;</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" <?php if ($data->nyeri_hilang_bila == 'Mendengarkan musik') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
                                                                <label class="form-check-label">Mendengarkan musik &nbsp;</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" <?php if ($data->nyeri_hilang_bila == 'Berubah posisi tidur') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
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
                                                                <input class="form-check-input" type="radio" <?php if ($data->pasien_tidak_seimbang == 'y') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
                                                                <label class="form-check-label">Ya &nbsp;</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" <?php if ($data->pasien_tidak_seimbang == 'n') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
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
                                                                <input class="form-check-input" type="radio" <?php if ($data->pasien_memegang_benda_lain == 'y') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
                                                                <label class="form-check-label">Ya &nbsp;</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" <?php if ($data->pasien_memegang_benda_lain == 'n') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
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
                                                                <input class="form-check-input" type="radio" <?php if ($data->hasil == 'Tidak beresiko') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
                                                                <label class="form-check-label">Tidak beresiko (tidak ditemukan a dan b)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" <?php if ($data->hasil == 'Resiko rendah') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
                                                                <label class="form-check-label">Resiko rendah (ditemukan a dan b)</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" <?php if ($data->hasil == 'Resiko tinggi') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
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
                                                            <input type="text" class="form-control col-md-2" <?php if ($data->lapor_dokter == 'Tidak') {
                                                                                                                    echo '';
                                                                                                                } else {
                                                                                                                    echo "value=" . substr($data->lapor_dokter, 0, 5);
                                                                                                                } ?> disabled>
                                                            &nbsp;
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" <?php if ($data->lapor_dokter == 'Tidak') {
                                                                                                                    echo 'checked';
                                                                                                                } ?> disabled>
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
                                                        <td><a href="<?php echo site_url('Soap/formUmum/' . $data->id_pemeriksaan); ?>" target="_blank" class="btn btn-primary col-sm-12">Lanjut Pemeriksaan <i class="nav-icon fas fa-arrow-right"></i></a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
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