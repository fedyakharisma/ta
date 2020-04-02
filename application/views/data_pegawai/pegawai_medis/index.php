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
                            <a href="" data-toggle="modal" data-target="#modal_Add" class="btn btn-default"><i class="fas fa-plus-circle"></i> Tambah <?php echo $title; ?></a>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url('Poliklinik/aksi_tambahPoli') ?>">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover table-responsive">
                                    <thead style="background-color: #b3b3b3;">
                                        <tr style="font-size: 90%;">
                                            <th width="6%" class="text-center">
                                                No.
                                            </th>
                                            <th class="">Nama Lengkap</th>
                                            <th>Usia</th>
                                            <th width="20%">Tempat/Tanggal Lahir</th>
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
                                                    <td><?php echo substr(date('Y-m-d'), 0, 4) - substr($data->tanggal_lahir, 0, 4); ?> thn</td>
                                                    <td><?php echo $data->tempat_lahir . ' / ' . $data->tanggal_lahir; ?></td>
                                                    <td><?php echo $data->role; ?></td>
                                                    <td class="text-center">
                                                        <a href="<?php echo site_url('Pegawai/formEditPegawai/' . $data->nip) ?>" class="">
                                                            <u>Ubah</u>
                                                        </a>
                                                        <a href="<?php echo base_url('Pegawai/hapusPegawai/' . $data->nip) ?>" onclick="return confirm('Hapus <?php echo $data->nama_lengkap ?>?')" class="">
                                                            <u>Hapus</u>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
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
    $nip = $data->nip;
?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_akses<?php echo $data->nip; ?>" class="modal fade">
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
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_Add" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('Pegawai/tambahPegawai') ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3">NIP</label>
                                <div class="col-xs-8">
                                    <input type="text" name="nip" class="form-control" required placeholder="Cth. 19xxxxxxxxxxxxxxx">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama Lengkap</label>
                                <div class="col-xs-8">
                                    <input name="nama_lengkap" class="form-control" type="text" placeholder="Cth. Nama lengkap" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3">No. Hp/Telp</label>
                                <div class="col-xs-8">
                                    <input name="notelp" class="form-control" type="number" placeholder="Cth. 08xxxxxxxxxx" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3">Jenis Kelamin</label>
                                <div class="col-xs-8">
                                    <select name="jenis_kelamin" class="form-control" required>
                                        <option value="">-PILIH-</option>
                                        <option value="l">Laki-laki</option>
                                        <option value="p">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3">Tempat Lahir</label>
                                <div class="col-xs-8">
                                    <input name="tempat_lahir" class="form-control" type="text" placeholder="Cth. Surabaya" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3">Tanggal Lahir</label>
                                <div class="col-xs-4">
                                    <input name="tanggal_lahir" class="form-control" type="date" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Alamat</label>
                        <div class="col-xs-8">
                            <textarea name="alamat" class="form-control" placeholder="Cth. Jl.Sudirxxxxx...." required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Jabatan</label>
                        <div class="col-xs-8">
                            <select name="role" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <?php
                                foreach ($role as $data) {
                                ?>
                                    <option value="<?php echo $data->id_role; ?>"><?php echo $data->role; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>