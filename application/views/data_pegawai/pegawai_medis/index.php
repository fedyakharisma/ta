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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo $title ?></h3>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url('Poliklinik/aksi_tambahPoli') ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <a href="<?php echo base_url('Pegawai/formTambahPegawai') ?>" class="btn btn-default"><i class="fas fa-plus-circle"></i> Tambah Data</a>
                                    </div>
                                </div>
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead style="background-color: #b3b3b3;">
                                        <tr style="font-size: 90%;">
                                            <th width="6%" class="text-center">
                                                No.
                                            </th>
                                            <th class="">Nama Lengkap</th>
                                            <th>Usia</th>
                                            <th width="14%">Akses Login</th>
                                            <th>Jabatan</th>
                                            <th width="13%" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if (!empty($pegawai)) {
                                            foreach ($pegawai as $data) {
                                        ?>
                                                <tr style="font-size: 90%;">
                                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                                    <td><?php echo $data->nama_lengkap ?></td>
                                                    <td><?php echo $data->umur; ?> thn</td>
                                                    <td>
                                                        <?php
                                                        if ($data->username == '') {
                                                        ?>
                                                            <a href="" class="" data-toggle="modal" data-target="#modal_akses<?php echo $data->id_pegawai; ?>">(+) tambah</a>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <a href="" data-toggle="modal" data-target="#modal_akses<?php echo $data->id_pegawai; ?>">Cek</a>
                                                        <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $data->role; ?></td>
                                                    <td class="text-center">
                                                        <a href="<?php echo site_url('Pegawai/formEditPegawai/' . $data->id_pegawai) ?>" class="">
                                                            <u>Ubah</u>
                                                        </a>
                                                        <a href="<?php echo base_url('Pegawai/hapusPegawai/' . $data->id_pegawai) ?>" onclick="return confirm('Hapus <?php echo $data->nama_lengkap ?>?')" class="">
                                                            <u>Hapus</u>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot style="background-color: #b3b3b3;">
                                        <tr style="font-size: 90%;">
                                            <th width="6%" class="text-center">
                                                No.
                                            </th>
                                            <th class="">Nama Lengkap</th>
                                            <th>Usia</th>
                                            <th width="14%">Akses Login</th>
                                            <th>Jabatan</th>
                                            <th width="13%" class="text-center">Aksi</th>
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
<?php
foreach ($pegawai as $data) {
    $nama_lengkap = $data->nama_lengkap;
    $username = $data->username;
    $password = $data->password;
    $id_pegawai = $data->id_pegawai;
?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_akses<?php echo $data->id_pegawai; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Akses Login <?php echo $nama_lengkap ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" action="<?php echo base_url('Pegawai/editAksesPegawai') ?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3">Username</label>
                            <div class="col-xs-8">
                                <input type="hidden" name="pgw_nip" value="<?php echo $id_pegawai; ?>">
                                <input name="username" class="form-control" type="text" value="<?php echo $username; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">Password</label>
                            <div class="col-xs-8">
                                <input type="text" name="password" class="form-control" value="<?php echo $password ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php
                        if ($username == '') {
                        ?>
                            <button type="submit" class="btn btn-default">Simpan</button>
                        <?php
                        } else {
                        ?>
                            <button type="submit" class="btn btn-default">Ubah</button>
                        <?php
                        }
                        ?>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php } ?>