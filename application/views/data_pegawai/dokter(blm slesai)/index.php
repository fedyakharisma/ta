<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $title ?></li>
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
                            <h3 class="card-title"><?php echo $title ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="post" action="<?php echo base_url('Poliklinik/aksi_tambahPoli') ?>">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead style="background-color: #b3b3b3;">
                                        <tr>
                                            <th width="6%" class="text-center">
                                                No.
                                            </th>
                                            <th width="15%">NIP</th>
                                            <th class="">Nama Dokter</th>
                                            <th>Akses Login</th>
                                            <th width="10%" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if (!empty($dokter)) {
                                            foreach ($dokter as $data) {
                                        ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                                    <td></td>
                                                    <td><?php echo $data->dok_nama; ?></td>
                                                    <td><a href="">(+) tambah</a></td>
                                                    <td class="text-center">
                                                        <a href="" class="" data-toggle="modal" data-target="#modal_edit">
                                                            <i class="nav-icon fas btn fa-edit"></i>
                                                        </a>
                                                        <a href="<?php echo base_url('poliklinik/hapusPoliklinik/') ?>" onclick="return confirm('Hapus?')" class="">
                                                            <i class="nav-icon fas btn fa-trash-alt"> </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot style="background-color: #b3b3b3;">
                                        <tr>
                                            <th width="6%" class="text-center">
                                                No.
                                            </th>
                                            <th width="15%">NIP</th>
                                            <th class="">Nama Dokter</th>
                                            <th>Akses Login</th>
                                            <th width="10%" class="text-center">Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>