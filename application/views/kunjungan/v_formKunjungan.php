<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Kunjungan') ?>">Kunjungan</a></li>
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
                            <h3 class="card-title"><?php echo $title; ?></h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Kunjungan/tambahKunjungan') ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">No. RM</label>
                                    <div class="col-sm-3">
                                        <input type="hidden" name="waktu" value="<?php echo date('Y-m-d G:i:s'); ?>">
                                        <select name="ktb" id="" class="form-control select2">
                                            <option value="">--PILIH--</option>
                                            <?php
                                            if (!empty($pegawai)) {
                                                foreach ($pegawai as $data) {
                                            ?>
                                                    <option value="<?php echo $data->no_rm; ?>">
                                                        <?php echo $data->no_rm . ' - ' . $data->nama_lengkap; ?>
                                                    </option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Poli</label>
                                    <div class="col-sm-3">
                                        <select class="form-control select2" name="poli">
                                            <option>--PILIH--</option>
                                            <?php
                                            if (!empty($poliklinik)) {
                                                foreach ($poliklinik as $data) {
                                            ?>
                                                    <option value="<?php echo $data->poli_kode; ?>"><?php echo $data->poli; ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Keluhan</label>
                                    <div class="col-sm-8">
                                        <textarea name="keluhan" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-primary" value="Simpan">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>