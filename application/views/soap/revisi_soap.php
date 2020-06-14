<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb" style="font-size: 15px;">
                        <li class="breadcrumb-item"><a href=""> Cek Pemeriksaan Umum</a></li>
                        <li class="breadcrumb-item"><a href=""> Hasil Asessmen Awal Ruang Pemeriksaan Umum</a></li>
                        <li class="breadcrumb-item active">Form data <?php echo $title; ?></li>
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
                        <div class="card-header" style="background-color: gray">
                            <div class="row">
                                <h3 class="card-title" style="color: black">
                                    POLI UMUM
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <h3 class="card-title" style="color: black">Nomor Rekam Medik :</h3>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (!empty($data_asessmen)) {
                        foreach ($data_asessmen as $data) {
                    ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">SUBJECTIVE (S)</label>
                                            <div class="col-sm-9">
                                                <ul>
                                                    <li>Riwayat saat ini : <?php echo $data->riwayat_saat_ini; ?></li>
                                                    <li>Riwayat penyakit terdahulu : <?php echo $data->riwayat_penyakit_dahulu; ?></li>
                                                    <li>Riwayat penyakit keluarga : <?php echo $data->riwayat_penyakit_keluarga; ?></li>
                                                    <li>Riwayat obat yang diminum : <?php echo $data->riwayat_obat_yang_diminum; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">OBJEKTIVE (O)</label>
                                            <div class="col-sm-9">
                                                <ul>
                                                    <li>TD : <?php echo $data->td; ?></li>
                                                    <li>Suhu : <?php echo $data->suhu; ?></li>
                                                    <li>Nadi : <?php echo $data->nadi; ?></li>
                                                    <li>RR : <?php echo $data->rr; ?></li>
                                                    <li>Alat Bantu : <?php echo $data->alat_bantu; ?></li>
                                                    <li>Protesa : <?php echo $data->protesa; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">ASSESSMENT (S)</label>
                                            <div class="col-sm-9">
                                                <textarea name="alamat" value="" rows="3" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">PLAN (P)</label>
                                            <div class="col-sm-9">
                                                <textarea name="alamat" value="" rows="3" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                        }
                    }
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">ICD 10</label>
                                    <div class="col-sm-9">
                                        <select name="" class="form-control select2 col-12" id="">
                                            <option value="">--PILIH--</option>
                                            <?php if (!empty($icd10)) {
                                                foreach ($icd10 as $data) { ?>
                                                    <option value=""><?php echo $data->diagnosa; ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="card-footer">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-3 control-label">
                                    <input type="submit" class="btn btn-primary col-md-12" value="Selesai" name="submit">
                                </div>
                            </div>
                        </div>
                            </div>
                </div>
            </div>
        </div>

    </section>
</div>