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
                                            <th width="25%">Tempat/Tanggal Lahir</th>
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
                                                <tr style="font-size: 82%;">
                                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                                    <td><?php echo $data->nama_lengkap ?></td>
                                                    <td><?php echo $data->tempat_lahir . ' / ' . date('d F Y', strtotime($data->tanggal_lahir)); ?></td>
                                                    <td><?php echo $data->role; ?></td>
                                                    <td class="text-center">
                                                        <a href="" data-toggle="modal" data-target="#modalDetail<?php echo $data->id_data_pegawai; ?>" class="">
                                                            <u>Detail</u>
                                                        </a>
                                                        <a href="" data-toggle="modal" data-target="#modalEdit<?php echo $data->id_data_pegawai; ?>" class="">
                                                            <u>Ubah</u>
                                                        </a>
                                                        <a href="<?php echo base_url('Pegawai/hapusPegawai/' . $data->id_data_pegawai); ?>" data-toggle="" data-target="" class="" onclick="return confirm('Hapus <?php echo $data->nama_lengkap ?>?')">
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
?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalDetail<?php echo $data->id_data_pegawai; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">NIP</label>
                                    <div class="col-xs-8">
                                        <input type="" class="form-control" value="<?php echo $data->nip; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Nama Lengkap</label>
                                    <div class="col-xs-8">
                                        <input class="form-control" type="" value="<?php echo $data->nama_lengkap; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">No. Hp/Telp</label>
                                    <div class="col-xs-8">
                                        <input class="form-control" readonly value="<?php echo $data->no_telp; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Jenis Kelamin</label>
                                    <div class="col-xs-8">
                                        <input readonly value="<?php if ($data->jenis_kelamin == 'l') {
                                                                    echo "Laki-laki";
                                                                } else {
                                                                    echo "Perempuan";
                                                                } ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Tempat Lahir</label>
                                    <div class="col-xs-8">
                                        <input class="form-control" readonly value="<?php echo $data->tempat_lahir; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Tanggal Lahir</label>
                                    <div class="col-xs-4">
                                        <input class="form-control" readonly value="<?php echo $data->tanggal_lahir; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Alamat</label>
                            <div class="col-xs-8">
                                <textarea readonly class="form-control"><?php echo $data->alamat; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Jabatan</label>
                            <div class="col-xs-8">
                                <input readonly value="<?php echo $data->role; ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php
}
foreach ($pegawai as $dataEdit) { ?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalEdit<?php echo $dataEdit->id_data_pegawai; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" method="POST" action="<?php echo site_url('Pegawai/editPegawai') ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">NIP</label>
                                    <div class="col-xs-8">
                                        <input type="hidden" name="idEdit" value="<?php echo $dataEdit->id_data_pegawai; ?>">
                                        <input type="text" name="nipEdit" class="form-control" value="<?php echo $dataEdit->nip; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Nama Lengkap</label>
                                    <div class="col-xs-8">
                                        <input class="form-control" type="text" name="nama_lengkapEdit" value="<?php echo $dataEdit->nama_lengkap; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">No. Hp/Telp</label>
                                    <div class="col-xs-8">
                                        <input class="form-control" value="<?php echo $dataEdit->no_telp; ?>" name="no_telpEdit" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Jenis Kelamin</label>
                                    <div class="col-xs-8">
                                        <select name="jenis_kelaminEdit" id="" class="form-control">
                                            <option value="">--Pilih--</option>
                                            <option value="l" <?php if ($dataEdit->jenis_kelamin == 'l') {
                                                                    echo "Selected";
                                                                } ?>>Laki-laki</option>
                                            <option value="p" <?php if ($dataEdit->jenis_kelamin == 'p') {
                                                                    echo "Selected";
                                                                } ?>>Perempuan</option>
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
                                        <input class="form-control" value="<?php echo $dataEdit->tempat_lahir; ?>" name="tempat_lahirEdit" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Tanggal Lahir</label>
                                    <div class="col-xs-4">
                                        <input class="form-control" value="<?php echo $dataEdit->tanggal_lahir; ?>" name="tanggal_lahirEdit" type="date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Alamat</label>
                            <div class="col-xs-8">
                                <textarea name="alamatEdit" class="form-control"><?php echo $dataEdit->alamat; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Jabatan</label>
                            <div class="col-xs-8">
                                <select name="jabatanEdit" id="" class="form-control">
                                    <option value="<?php echo $dataEdit->id_role; ?>"><?php echo $dataEdit->role; ?></option>
                                    <option value="">--Ubah--</option>
                                    <?php
                                    foreach ($role as $dataRole) {
                                    ?>
                                        <option value="<?php echo $dataRole->id_role; ?>"><?php echo $dataRole->role; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Ubah</button>
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
                    <div class="form-group">
                        <label class="control-label col-xs-3">Username</label>
                        <div class="col-xs-8">
                            <input type="text" name="username" class="form-control" placeholder="Cth. Username">
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