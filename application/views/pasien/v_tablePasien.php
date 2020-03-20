<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth/') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Pasien</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <?php echo $title; ?>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr style="font-size: 90%;">
                                    <th style="width: 1%;">No</th>
                                    <th>No. RM</th>
                                    <th>NIP/PANGKAT/NRP</th>
                                    <th>NAMA LENGKAP</th>
                                    <!-- <th>ALAMAT</th> -->
                                    <th>TEMPAT, TGL LAHIR</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if (!empty($pasien)) {
                                    foreach ($pasien as $data) {
                                ?>
                                        <tr style="font-size: 90%;">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data->no_rm; ?></td>
                                            <td><?php echo $data->nik_pangkat_nrp; ?></td>
                                            <td><?php echo $data->nama_lengkap; ?></td>
                                            <!-- <td><?php echo $data->alamat; ?></td> -->
                                            <td><?php echo $data->tempat; ?>, <?php echo $data->tgl_lahir; ?></td>
                                            <td>
                                                <a href="">Ubah</a>
                                                <a href="">Hapus</a>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                            <tfoot>
                                <tr style="font-size: 90%;">
                                    <th>No</th>
                                    <th>No. RM</th>
                                    <th>NIP/PANGKAT/NRP</th>
                                    <th>NAMA LENGKAP</th>
                                    <!-- <th>ALAMAT</th> -->
                                    <th>TEMPAT, TGL LAHIR</th>
                                    <th>AKSI</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->