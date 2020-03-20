<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Auth') ?>"><i class="nav-icon fas fa-home"></i> Home</a></li>
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
                            <a href="<?php echo base_url('Kunjungan/formKunjungan') ?>" class="btn btn-default"><i class="fas fa-plus-circle"></i> Tambah <?php echo $title; ?></a>
                        </div>
                        <form class="form-horizontal" method="post" action="<?php echo base_url('Kunjungan/aksi_tambahKunjungan') ?>">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover table-responsive">
                                    <thead style="background-color: #b3b3b3;">
                                        <tr>
                                            <th width="6%" class="text-center">
                                                No.
                                            </th>
                                            <th>No RM / Nama Lengkap</th>
                                            <th>Jenis Poli</th>
                                            <th>Status</th>
                                            <th width="16%" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if (!empty($kunjungan)) {
                                            foreach ($kunjungan as $data) {
                                        ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                                    <td><?php echo $data->no_rm . ' / ' . $data->nama_lengkap; ?></td>
                                                    <td><?php echo $data->poli ?></td>
                                                    <td align="center">
                                                        <?php
                                                        if ($data->status == 'Diperiksa') {
                                                        ?>
                                                            <span class="badge bg-warning"><?php echo $data->status; ?></span>
                                                        <?php
                                                        } elseif ($data->status == 'Selesai diperiksa') {
                                                        ?>
                                                            <span class="badge bg-success"><?php echo $data->status; ?></span>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <span class="badge bg-danger"><?php echo $data->status; ?></span>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="" class="" data-toggle="modal" data-target="#modal_cek<?php echo $data->id_kunjungan; ?>">
                                                            <i class="nav-icon fas btn fa-eye"></i>
                                                        </a>
                                                        <a href="" class="" data-toggle="modal" data-target="#modal_edit<?php echo $data->id_kunjungan; ?>">
                                                            <i class="nav-icon fas btn fa-edit"></i>
                                                        </a>
                                                        <a href="<?php echo base_url('poliklinik/hapusPoliklinik/' . $data->poli_kode) ?>" onclick="return confirm('Hapus <?php echo $data->poli ?>?')" class="">
                                                            <i class="nav-icon fas btn fa-trash-alt"> </i>
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
<!-- /.content-wrapper -->

<!-- start modal upload -->
<?php
foreach ($kunjungan as $data) {
    $id_kunjungan = $data->id_kunjungan;
    $no_rm = $data->no_rm;
    $nik_pangkat_nrp = $data->nik_pangkat_nrp;
    $nama_lengkap = $data->nama_lengkap;
    $alamat = $data->alamat;
    $tempat = $data->tempat;
    $tgl_lahir = $data->tgl_lahir;
    $poli_kode = $data->poli_kode;
    $poli = $data->poli;
?>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_cek<?php echo $id_kunjungan; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cek data <?php echo $no_rm; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" method="" enctype="" role="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3">Nomor RM</label>
                            <div class="col-xs-8">
                                <input name="poli_kode" class="form-control" type="text" disabled value="<?php echo $no_rm; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">Nama Lengkap</label>
                            <div class="col-xs-8">
                                <input type="text" name="poli_nama" class="form-control" disabled value="<?php echo $nama_lengkap; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">NIP/NRP/Pangkat</label>
                            <div class="col-xs-8">
                                <input type="text" name="poli_nama" class="form-control" disabled value="<?php echo $nik_pangkat_nrp; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">Alamat</label>
                            <div class="col-xs-8">
                                <textarea name="" class="form-control" id="" cols="3" disabled rows=""><?php echo $alamat; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">Tempat, tanggal lahir</label>
                            <div class="col-xs-8">
                                <input type="text" name="poli_nama" class="form-control" disabled value="<?php echo $tempat . '-' . $tgl_lahir; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">Jenis Poli</label>
                            <div class="col-xs-8">
                                <input type="text" name="poli_nama" class="form-control" disabled value="<?php echo $poli; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Selesai</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- START EDIT -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_edit<?php echo $id_kunjungan; ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit data <?php echo $no_rm; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" method="" enctype="" role="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3">Nomor RM</label>
                            <div class="col-xs-8">
                                <input name="poli_kode" class="form-control" type="text" value="<?php echo $no_rm; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">Nama Lengkap</label>
                            <div class="col-xs-8">
                                <input type="text" name="poli_nama" class="form-control" value="<?php echo $nama_lengkap; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">NIP/NRP/Pangkat</label>
                            <div class="col-xs-8">
                                <input type="text" name="poli_nama" class="form-control" value="<?php echo $nik_pangkat_nrp; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">Alamat</label>
                            <div class="col-xs-8">
                                <textarea name="" class="form-control" id="" cols="3" rows=""><?php echo $alamat; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">Tempat, tanggal lahir</label>
                            <div class="col-xs-8">
                                <input type="text" name="poli_nama" class="form-control" value="<?php echo $tempat . '-' . $tgl_lahir; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">Jenis Poli</label>
                            <div class="col-xs-8">
                                <input type="text" name="poli_nama" class="form-control" value="<?php echo $poli; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Selesai</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php } ?>