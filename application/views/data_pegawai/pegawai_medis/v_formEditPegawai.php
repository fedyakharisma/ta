<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Pegawai') ?>">Data pegawai</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo $title; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php
                        foreach ($pegawai as $data) {
                        ?>
                            <form class="form-horizontal" method="post" action="<?php echo site_url('Pegawai/tambahPegawai') ?>">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">NIP</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="nip" value="<?php echo $data->pgw_nip;?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Nama Lengkap</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="nama_lengkap">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Alamat</label>
                                        <div class="col-sm-4">
                                            <textarea name="alamat" cols="" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">No. Telp</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="notelp">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-2">
                                            <input type="date" class="form-control" name="tgllhr">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-2">
                                            <select name="jenis_kelamin" class="form-control">
                                                <option value="">--Pilih--</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Role</label>
                                        <div class="col-sm-2">
                                            <select name="role" class="form-control">
                                                <option value="">--Pilih--</option>
                                                <?php
                                                if (!empty($role)) {
                                                    foreach ($role as $data) {
                                                ?>
                                                        <option value="<?php echo $data->role; ?>"><?php echo $data->role; ?></option>
                                                <?php
                                                    }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
                                    </div>
                                    <!-- /.card-footer -->
                            </form>
                        <?php } ?>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->